<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title><?=(isset($title)) ? $title . ' | ' . SITE_TITLE : SITE_TITLE;?></title>
    <!-- Canonical SEO -->
    <link rel="canonical" href="<?=base_url()?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo ADMIN_ASSETS_PATH; ?>img/favicon.ico" />

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
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>css/demo.css" />

    <!-- responsive datatable -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <!--end  responsive datatable -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/typeahead-js/typeahead.css" />

    
    <!-- Print page -->
    <a href="http://stackoverflow.com/questions/468881/print-div-id-printarea-div-only"></a>


    <!-- <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>css/plugins/forms/validation/form-validation.css"> -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/js/helpers.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>js/config.js"></script>
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/quill/editor.css" />
        
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS_PATH; ?>css/custom.css?v=<?= date("YmdH"); ?>">
    
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/html5-editor/bootstrap-wysihtml5.css" />


    <link rel="stylesheet" type="text/css" href="<?php echo  ADMIN_ASSETS_PATH; ?>css/magnific-popup.css">
    
    

    
</head>

<body>
<input type="hidden" id="base" value="<?=base_url()?>" />
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
<div class="layout-container">

    
