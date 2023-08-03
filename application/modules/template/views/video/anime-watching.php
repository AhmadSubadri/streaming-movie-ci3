<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="<?= site_url('') ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="">Video</a>
                    <span><?= $this->uri->segment(2) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div class="anime__video__player">
                    <iframe frameborder="0" width="100%" height="500" src="https://www.dailymotion.com/embed/video/<?= $videos->url_video; ?>?autoplay=0" allowfullscreen allow="autoplay"></iframe>
                </div> -->
                <div class="anime__video__player">
                    <?php
                    // Ubah URL video untuk menambahkan parameter ui-logo=false
                    $video_url = "https://www.dailymotion.com/embed/video/" . $videos->url_video . "?autoplay=0&ui-logo=0";
                    ?>
                    <iframe frameborder="0" width="100%" height="500" src="<?= $video_url; ?>" allowfullscreen allow="autoplay"></iframe>
                </div>

                <div class="anime__details__episodes">
                    <div class="anime__like__dislike">
                        <button id="likeButton" class="btn btn-sm btn-primary"><i class="fa fa-thumbs-up"></i>
                            <span id="likeCount"><?= $like ?></span>
                        </button>
                        <button id="dislikeButton" class="btn btn-sm btn-primary"><i class="fa fa-thumbs-down"></i>
                            <span id="dislikeCount"><?= $dislike ?></span>
                        </button>
                    </div>
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>List Name</h5>
                    </div>
                    <?php foreach ($episode as $episode) : ?>
                        <a href="#"><?= $episode->episode ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>Description</h5>
                    </div>
                    <div class="text-white p-2 rounded" style="background-color:#3C3D55;">
                        <?= $videos->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form id="commentForm">
                        <input type="hidden" value="<?= $videos->id; ?>" class="form-control" id="idvideo" name="idvideo" placeholder="Your Name" />
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name" /><br>
                        <textarea id="komentar" name="komentar" placeholder="Your Comment"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Five Recent Comment's</h5>
                    </div>
                    <div id="commentSection">
                        <?php foreach ($comentar as $review) : ?>
                            <div class="anime__review__item" data-new-comment="true">
                                <div class="anime__review__item__text">
                                    <h6><?= $review->nama ?> - <span><?= $review->timestamp ?></span></h6>
                                    <p><?= $review->isi ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function getLastCommentId() {
        const commentElements = document.querySelectorAll('.anime__review__item'); // Mengambil semua elemen yang mengandung komentar
        if (commentElements.length > 0) {
            const lastCommentElement = commentElements[commentElements.length - 1];
            const lastCommentId = lastCommentElement.getAttribute('data-comment-id'); // Ubah 'data-comment-id' dengan atribut yang sesuai
            return lastCommentId;
        } else {
            return 0;
        }
    }

    function displayComment(commentData) {
        const commentHtml = `
            <div class="anime__review__item" data-new-comment="true">
                <div class="anime__review__item__text">
                    <h6>${commentData.nama} - <span>${commentData.waktu}</span></h6>
                    <p>${commentData.komentar}</p>
                </div>
            </div>
        `;
        const commentSection = document.getElementById('commentSection');
        commentSection.insertAdjacentHTML('afterbegin', commentHtml);
        const allComments = commentSection.querySelectorAll('.anime__review__item');
        if (allComments.length > 5) {
            for (let i = 5; i < allComments.length; i++) {
                allComments[i].remove();
            }
        }
    }
    let lastCommentId = 0;

    function getNewComments() {
        const videoId = <?= $videos->id ?>;
        $.ajax({
            url: '<?= site_url('coment/read'); ?>',
            method: 'POST',
            data: {
                video_id: videoId,
                last_comment_id: lastCommentId // Kirim ID komentar terakhir di halaman ke server
            },
            dataType: 'json',
            success: function(data) {
                if (data.length > 0) {
                    data.forEach(commentData => {
                        if (commentData.id > lastCommentId && commentData['data-new-comment'] === 'true') {
                            displayComment(commentData);
                            lastCommentId = commentData.id;
                        }
                    });
                }
            },
            complete: function() {
                setTimeout(getNewComments, 5000); // Mengulangi pemanggilan AJAX setiap 5 detik (5000 ms)
            }
        });
    }

    function sendComment() {
        const videoId = <?= $videos->id ?>; // Ganti dengan ID video terkait
        const name = document.getElementById('nama').value;
        const comment = document.getElementById('komentar').value;
        $.ajax({
            url: '<?= site_url('coment/save'); ?>',
            method: 'POST',
            data: {
                video_id: videoId,
                nama: name,
                komentar: comment
            },
            success: function(data) {
                const commentData = {
                    id: data,
                    nama: name,
                    komentar: comment,
                    waktu: 'Just now' // Tampilkan "Just now" untuk komentar terbaru
                };
                displayComment(commentData);
            }
        });
    }

    document.getElementById('commentForm').addEventListener('submit', (event) => {
        event.preventDefault();
        sendComment();
        document.getElementById('nama').value = '';
        document.getElementById('komentar').value = '';
    });

    getNewComments();

    $(document).ready(function() {
        let likeCount = <?= $like ?>;
        let dislikeCount = <?= $dislike ?>;

        function updateLikeDislikeFavoritCount() {
            $("#likeCount").text(likeCount);
            $("#dislikeCount").text(dislikeCount);
        }

        $("#likeButton").click(function() {
            $.ajax({
                url: "<?= site_url('coment/like'); ?>",
                method: "POST",
                data: {
                    video_id: <?= $videos->id ?>
                },
                cache: false,
                success: function(data) {
                    likeCount = likeCount + 1;
                    updateLikeDislikeFavoritCount();
                }
            });
        });

        // Fungsi untuk menambahkan Dislike
        $("#dislikeButton").click(function() {
            $.ajax({
                url: "<?= site_url('coment/dislike'); ?>",
                method: "POST",
                data: {
                    video_id: <?= $videos->id ?>
                },
                cache: false,
                success: function(data) {
                    dislikeCount = dislikeCount + 1;
                    updateLikeDislikeFavoritCount();
                }
            });
        });
    });
</script>