</div>

<footer class="content-footer footer bg-footer-theme">
  <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <?= DATE('Y') ?>
    </div>
    <div>
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


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

<!--   
  <div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/popper/popper.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/js/bootstrap.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/hammer/hammer.js"></script>


<!-- start form validation -->
<script src="<?php echo ADMIN_ASSETS_PATH; ?>js/form-validation.js"></script>
<!-- end form validation -->

<!-- responsive datatable -->
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables/jquery.dataTables.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-responsive/datatables.responsive.js"></script>

<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-responsive/datatables.responsive.js"></script>

<script src="<?php echo ADMIN_ASSETS_PATH; ?>js/tables-datatables-advanced.js"></script>
<!--end  responsive datatable -->

<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/i18n/i18n.js"></script>      
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Main JS -->
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/quill/katex.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/quill/quill.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>js/main.js"></script>

<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/select2/select2.js"></script>

<script src="<?php echo ADMIN_ASSETS_PATH; ?>script/datatable.js?v=<?= date("YmdH"); ?>"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>script/general.js?v=<?= date("YmdH"); ?>"></script>
<!-- <script src="<?php echo ADMIN_ASSETS_PATH; ?>script/product.js?v=<?= date("YmdH"); ?>"></script> -->
<!-- <script src="<?php ADMIN_ASSETS_PATH; ?>js/magnific-popup.js"></script> -->


<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/html5-editor/bootstrap-wysihtml5.js"></script>

<script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();
        // $(function() {
        //   $( '#colorpickerId').colorpicker({
        //       showNoneButton: true,
        //     showCloseButton: true,
        //     showCancelButton: true,
        //   });
        // });

    });
</script>


</body>
</html>