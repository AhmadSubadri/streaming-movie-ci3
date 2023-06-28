<div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">copyright © <?= date('Y'); ?></p>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url() ?>assets/dashboard/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/sidebarmenu.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/app.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/libs/simplebar/dist/simplebar.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/dashboard.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/ckeditor/ckeditor.js"></script>

<script src="<?php echo base_url() ?>assets/dashboard/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/dashboard/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript">
    $('#teksarea').ckeditor();
</script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    function showImage(element) {
        // buat overlay dan tambahkan ke body
        var overlay = document.createElement("div");
        overlay.className = "overlay";
        document.body.appendChild(overlay);

        // buat gambar baru dalam overlay
        var image = new Image();
        image.src = element.src;
        overlay.appendChild(image);

        // tampilkan overlay dan gambar
        overlay.style.display = "flex";

        // sembunyikan overlay dan hapus gambar saat overlay diklik
        overlay.addEventListener("click", function() {
            overlay.style.display = "none";
            overlay.removeChild(image);
        });
    }
</script>
<style>
    .gambarberkas {
        /* border-radius: 50%; */
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    /* sembunyikan overlay saat tidak digunakan */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 999;
    }

    /* tampilkan gambar yang lebih besar di dalam overlay */
    .overlay img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 70%;
        max-height: 70%;
    }
</style>