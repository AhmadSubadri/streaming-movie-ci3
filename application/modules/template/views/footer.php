<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title">
            Color Setting
            <span>
                <i class="ti-close right-side-toggle"></i>
            </span>
        </div>
        <div class="r-panel-body">
            <ul id="themecolors" class="m-t-20">
                <li>
                    <b>With Light sidebar</b>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="green" class="green-theme">2</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="red" class="red-theme">3</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a>
                </li>
                <li class="d-block m-t-30">
                    <b>With Dark sidebar</b>
                </li>
                <li>
                    <a
                        href="javascript:void(0)"
                        data-theme="default-dark"
                        class="default-dark-theme">7</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer">
©
<script>
    document.write(new Date().getFullYear())
</script>
<a href="https://upy.ac.id">Universitas PGRI Yogyakarta</a>. All Right Reserved. Made with
<svg
    viewbox="0 0 1792 1792"
    preserveaspectratio="xMidYMid meet"
    xmlns="http://www.w3.org/2000/svg"
    style="height: 0.8rem;">
    <path
        d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"
        fill="#e25555"></path>
</svg>
by Tim Umang-Umang.
</footer>
</div>
</div>

<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>

<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= base_url(); ?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= base_url(); ?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script
src="<?= base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script
src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?= base_url(); ?>assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script
src="<?= base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<script
src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/js/datatable.js"></script>
<!--morris JavaScript -->
<script src="<?= base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/morrisjs/morris.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard1.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sweetalert/mysweetalert.js"></script>
<script src="<?= base_url(); ?>assets/plugins/toast-master/js/jquery.toast.js"></script>
<script src="<?= base_url(); ?>assets/js/mytoastr.js"></script>
<script
src="<?= base_url(); ?>assets/plugins/dff/dff.js"
type="text/javascript"></script>
<script
src="<?= base_url(); ?>assets/plugins/select2/dist/js/select2.full.min.js"
type="text/javascript"></script>

<script
src="<?= base_url(); ?>assets/plugins/typeahead.js-master/dist/typeahead.bundle.min.js"></script>
<script
src="<?= base_url(); ?>assets/plugins/typeahead.js-master/dist/my_typeahead.js"></script>

<script>
    var start = 1;
function persebaran_fields(id) {
    start++;
    var objTo = document.getElementById('persebaran_fields' + id)
    var divtest = document.createElement("tr");
    divtest.setAttribute("class", "form-group removeclass" + start);
    var rdiv = 'removeclass' + start;
    divtest.innerHTML = 
    '<td>'+
    '<div class="col-md-12" id="autokommatakuliah"><input type="text" class="typeahead form-control" name="matakuliah" placeholder="type matakuiah" required="required"><input type="text" class="form-control" id="idmk" value="" name="idmk" hidden></div>'+
    '</td>'+
    '<td><input name="is_wajib[]" type="checkbox" id="is_wajib'+ start +'" class="chk-col-red" /><label for="is_wajib'+ start +'"></label></td>'+
    '<td><input name="is_paket[]" type="checkbox" id="is_paket'+ start +'" class="chk-col-red" /><label for="is_paket'+ start +'"></label></td>'+
    '<td><button class="btn btn-danger btn-sm" type="button" onclick="remove_education_fields(' + start + ');"><i class="fa fa-minus"></i></button></td>';

    objTo.appendChild(divtest)
}

function remove_persebaran_fields(rid) {
    $('.removeclass' + rid).remove();
}

// $(document).ready(function() {
//     for(let i = start; i < start+1; i++){
//         $('.select-MK-option'+ i).select2();
//     }
// });
// $("#select_MK_option").select2();
</script>
</body>

</html>