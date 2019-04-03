    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
    <!-- Summernote -->
    <script type="text/javascript" src="../vendor/summernote/dist/summernote.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#caption').summernote({
            placeholder: 'Masukkan Caption',
            height: 100,
            codemirror: { // codemirror options
              theme: 'monokai'
            }
        });
    });
    $(document).ready(function() {
        $('#berita').summernote({
            placeholder: 'Masukkan Berita',
            height: 100,
            codemirror: { // codemirror options
              theme: 'monokai'
            }
        });
    });
    function postForm() {
    $('textarea[name="caption"]').html($('#summernote').code());
    }
    </script>

</body>

</html>
