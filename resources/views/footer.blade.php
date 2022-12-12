 <!-- partial:partials/_footer.html -->
 <footer class="footer">
     <div class="d-sm-flex justify-content-center justify-content-sm-between">
         <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
             2020</span>
         <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                 href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from
             Bootstrapdash.com</span>
     </div>
 </footer>
 <!-- partial -->
 </div>
 <!-- main-panel ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->



     <!-- End custom js for this page-->
     <!-- base:js -->
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
     <!-- endinject -->
     <!-- Plugin js for this page-->
     <!-- End plugin js for this page-->
     <!-- inject:js -->
     <script src="{{ url('assets/js/off-canvas.js') }}"></script>
     <script src="{{ url('assets/js/hoverable-collapse.js') }}"></script>
     <script src="{{ url('assets/js/template.js') }}"></script>
     <script src="{{ url('assets/js/hierarchical-checkboxes.js') }}"></script>
     <!-- endinject -->
     <!-- plugin js for this page -->
     <script src="{{ url('assets/vendors/chart.js/Chart.min.js') }}"></script>
     <script src="{{ url('assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
     <!-- End plugin js for this page -->
     <!-- Custom js for this page-->
      <script src="{{ url('assets/js/dashboard.js') }}"></script>
      <script src="{{ url('assets/js/custome.js') }}"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js" defer=""></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js" defer=""></script>

     <script src="{{ url('assets/vendors/base/vendor.bundle.base.js') }}"></script>
     <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script>
         $(document).ready(function() {

             toastr.options.timeOut = 10000;
             @if (Session::has('error'))
                 toastr.error('{{ Session::get('error') }}');
             @elseif (Session::has('success'))
                 toastr.success('{{ Session::get('success') }}', {
                     positionClass: "toast-top-right",
                     timeOut: 5e3,
                     closeButton: !0,
                     debug: !1,
                     newestOnTop: !0,
                     progressBar: !0,
                     preventDuplicates: !0,
                     onclick: null,
                     showDuration: "300",
                     hideDuration: "1000",
                     extendedTimeOut: "1000",
                     showEasing: "swing",
                     hideEasing: "linear",
                     showMethod: "fadeIn",
                     hideMethod: "fadeOut",
                     tapToDismiss: !1
                 });
             @endif
         });
     </script>
<script>
    $(document).ready(function() {
        $('.leads').DataTable({
           columnDefs: [
                        { orderable: false, targets: 0 }
                        ],
            scrollX: true,
            
            // buttons: [
            //     'colvis'
            // ]

        });
    });
</script>
     </body>

     </html>
