<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2021 Adminwrap by <a href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/') ?>assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/') ?>assets/node_modules/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/html/') ?>js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/html/') ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/html/') ?>js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/html/') ?>js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="<?= base_url('assets/admin-wrap-lite-master/') ?>assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="<?= base_url('assets/admin-wrap-lite-master/') ?>assets/node_modules/peity/jquery.peity.init.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
    </script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        $(document).ready(function() {
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();

                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                    alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]')))
                    reset()
                }
            });

            function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
    </script>
</body>

</html>