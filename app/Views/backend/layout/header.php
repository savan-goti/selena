<?php
$favicon = (isset($this->setting_data['favicon']) && !empty($this->setting_data['favicon']))?  base_url().UPLOAD.$this->setting_data['favicon']:ADMIN_ASSETS_PATH."img/favicon.ico";
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?php echo ADMIN_ASSETS_PATH; ?>" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title><?=(isset($title)) ? $title . ' | ' . SITE_TITLE : SITE_TITLE;?></title>
    <!-- Canonical SEO -->
    <link rel="canonical" href="<?= base_url() ?>">
    <link rel="manifest" href="manifest.json">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
    <link rel="apple-touch-icon" href="<?= base_url('pwa/icons/icon-192x192.png') ?>" />
    <meta name=theme-color content="#d6272b" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/jquery/jquery.js"></script>

    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" type="text/css" >
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>css/demo.css" />

    <!-- responsive datatable -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <!--end  responsive datatable -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" type="text/css" href="<?= ADMIN_ASSETS_PATH ?>vendor/libs/simpleLightbox/simpleLightbox.min.css" />
    
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>css/plugins/forms/validation/form-validation.css"> -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <!-- <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/css/pages/ui-carousel.css" /> -->
    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/js/helpers.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>js/config.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>css/custom-theme.css?v=<?= date("YmdH"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>css/custom.css?v=<?= date("YmdH"); ?>">

    <!-- PushAlert -->
    <!-- <script type="text/javascript">
            (function(d, t) {
                    var g = d.createElement(t),
                    s = d.getElementsByTagName(t)[0];
                    g.src = "https://cdn.pushalert.co/integrate_e916142c5d1eea85e63c7ff5f5b03f17.js";
                    s.parentNode.insertBefore(g, s);
            }(document, "script"));
    </script> -->
    <!-- End PushAlert -->

    <!-- OneSignal Setup -->
    <?php 
    $onesignal_app_id = !empty($this->setting_data['onesignal_app_id'])? $this->setting_data['onesignal_app_id']:"";
    ?>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "<?= $onesignal_app_id ?>",
        });
    });
    </script>
    <script src="<?= base_url(); ?>script.js"></script>
</head>

<body>
<input type="hidden" id="base" value="<?=base_url(); ?>" />
<input type="hidden" id="defaultImagePath" value="<?= ADMIN_ASSETS_PATH.'img/avatars/9.png' ?>" />
<script>
    var defaultImagePath = $('#defaultImagePath').val();
    function imgError(image) {
        image.onerror = "";
        image.src = defaultImagePath;
        return true;
    }
</script>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
<div class="layout-container">
