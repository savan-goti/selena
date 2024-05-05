<?php
$loggedUserId = session()->get('admin_login');
$company_logo = isset($this->setting_data['company_logo']) ? base_url(UPLOAD . $this->setting_data['company_logo']) : ADMIN_ASSETS_PATH . 'img/logo.png';
?>
<div class="layout-page">
   <nav class="layout-navbar navbar bg-dark navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
      <div class="container-fluid">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
          </a>
        </div>
        
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li> 
              <a class="dropdown-item" href="<?php echo base_url('backend/logout'); ?>"> <i class="bx bx-power-off text-white"></i> </a>
            </li>
            <li> 
              <span class="user-name"><?= $loggedUserId['name']; ?></span>
            </li>
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                  <span><img class="round" src="<?= $company_logo; ?>" alt="avatar" height="40" width="40"></span>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="<?php echo base_url('backend/logout'); ?>"> <i class="bx bx-power-off me-2"></i> <span class="align-middle">Log Out</span> </a></li>
                </ul> 
            </li> 
          </ul>
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
          <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search...">
          <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>
      </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-3 breadcrumb-wrapper mb-2">
          <span class=" fw-light"> <a href="<?= base_url('backend') ?>"> Home </a> | </span> <?php echo isset($menu) ? $menu : 'Dashboard'; ?>
        </h5>