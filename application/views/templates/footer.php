</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy; 2019 <a href="https://instagram/thisismegant">SIAKAD</a>.</strong> All rights
    reserved.
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- jQuery 3 -->
<script src="<?= base_url('asset/vendor'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('asset/vendor'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/vendor'); ?>/bower_components/bootstrap/dist/js/"></script>
<!-- datatables -->
<script src="<?= base_url('asset/vendor'); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/vendor'); ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('asset/vendor'); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?= base_url('asset/vendor'); ?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/vendor'); ?>/bower_components/fastclick/lib/fastclick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="<?= base_url('asset/vendor'); ?>/bower_components/ckeditor/ckeditor.js"></script>

<!-- AdminLTE App -->
<script src="<?= base_url('asset/vendor'); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/vendor'); ?>/dist/js/demo.js"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        })
    })
    $(document).ready(function() {
        $('.sidebar-menu').tree()
    })

    $('#datepicker').datepicker({
        autoclose: true
    })

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },

            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        })
    })
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('#daily_test').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = Math.round(a + b + c) / 3;

        $('#result').val(Math.round(jml));
    });
    $('#mid_test').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = Math.round(a + b + c) / 3;

        $('#result').val(Math.round(jml));
    });
    $('#finaly_test').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = Math.round(a + b + c) / 3;

        $('#result').val(Math.round(jml));
    });

    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>

</body>

</html>