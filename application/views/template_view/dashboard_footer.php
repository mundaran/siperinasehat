
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Dinas Kesehatan Bojonegoro
                </div>
                <div>
                  
                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>


      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?php echo base_url();?>template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>template/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url();?>template/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <!-- Data Table JS-->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
    <script>
      $(document).ready(function(){
          $('#myTable').DataTable();
      });
    </script>
    <script type="text/javascript">
      $(document).ready( function () {
        $('#TabelRevisiPerpanjangan').DataTable();
    } );
    </script>

    <script src="<?php echo base_url();?>template/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    
    <!-- Vendors JS -->
    <script src="<?php echo base_url();?>template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?php echo base_url();?>template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?php echo base_url();?>template/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
