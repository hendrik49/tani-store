    <!-- Jquery Core Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/node-waves/waves.js') }}"></script>

    <!-- Select Plugin Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Custom Js -->
    <script type="text/javascript" src="{{ URL::to('assets/js/admin.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/script.js') }}"></script>

    <!-- Chart Plugins Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/pages/widgets/infobox/infobox-5.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/demo.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::to('assets/js/SimpleStarRating.js') }}"></script>
    <script type="text/javascript">
            var ratings = document.getElementsByClassName('rating');

            for (var i = 0; i < ratings.length; i++) {
                var r = new SimpleStarRating(ratings[i]);

                ratings[i].addEventListener('rate', function(e) {
                    console.log('Rating: ' + e.detail);
                });
            }
            
        </script>
</body>

</html>