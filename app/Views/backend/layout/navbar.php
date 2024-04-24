<?php
$site_logo = (isset($this->setting_data['site_logo']) && !empty($this->setting_data['site_logo'])) ?  base_url() . UPLOAD . $this->setting_data['site_logo'] : ADMIN_ASSETS_PATH . "img/logo.png";
$dashboardUrl = base_url('backend');
$loginUsername = $this->session->userdata('name');
if ($this->session->has_userdata('is_user_login')) {
  $dashboardUrl = base_url('dashboard');
  $loginUsername = $this->session->userdata('login_username');
}
$loginUserdata = $this->login_user_data;
 
$getUserPermission ="";
?>
<div class="layout-page">
  <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-fluid">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>

      <div class="navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none <?= (check_permission('my-workspaces', 'can_view', $getUserPermission)) ? '' : 'd-none' ?>">
        <a class="nav-item nav-link px-0 me-xl-4" href="<?= base_url('backend/my-workspaces'); ?>"> <i class="bx bx-grid-alt bx-sm"></i> </a>
      </div>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">

          <!-- Language -->
          <!-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='fi fi-us fis rounded-circle fs-3 me-1'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                  <i class="fi fi-us fis rounded-circle fs-4 me-1"></i>
                  <span class="align-middle">English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                  <i class="fi fi-fr fis rounded-circle fs-4 me-1"></i>
                  <span class="align-middle">French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                  <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                  <span class="align-middle">German</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                  <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                  <span class="align-middle">Portuguese</span>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
            <a class="nav-link dropdown-toggle hide-arrow load_navbar_notification" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="bx bx-bell bx-sm"></i>
              <!-- <span class="badge bg-danger rounded-pill badge-notifications">5</span> -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">Notifications</h5>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container ps">
                <ul class="list-group list-group-flush">
                  
                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                  <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                  <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
              </li>
              <!-- <li class="dropdown-menu-footer border-top">
                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                  View all notifications
                </a>
              </li> -->
            </ul>
          </li>

          <!--/ Language -->
          <!-- <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li> -->
          <li> <strong class="user-name"><?= $loginUsername; ?></strong></li>

          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="<?php echo $site_logo ?>" alt class="rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="<?php echo $site_logo ?>" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block lh-1"><?= $loginUsername; ?></span>
                      <!-- <small>Admin</small> -->
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url('backend/profile'); ?>">
                  <i class="bx bx-user me-2"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url('backend/change-login-password'); ?>">
                  <i class="bx bx-key me-2"></i>
                  <span class="align-middle">Change Password</span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo base_url('backend/logout'); ?>">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->

        </ul>
      </div>

      <!-- Search Small Screens -->
      <!-- <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div> -->
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid flex-grow-1 container-p-y">
      <h5 class="py-3 breadcrumb-wrapper mb-2">
        <span class=" fw-light"> <a href="<?= $dashboardUrl ?>"> Home </a> | </span> <?php echo isset($menu) ? $menu : 'Dashboard'; ?>
      </h5>
      <?php $this->load->view('flash_messages'); ?>

      <?php
      if(!empty($this->user_notifications)){
        $color_arr = array('dark');
        // pr($this->user_notifications);
        foreach ($this->user_notifications as $notification){ ?>
          <div class="alert alert-solid-<?= $color_arr[array_rand($color_arr)] ?> alert-dismissible d-flex align-items-center" role="alert">
            <i class="bx bx-xs bx-bell me-2"></i>
            <?= (isset($notification['notification_string']))? $notification['notification_string']:"-" ?>
            <a href="<?= $notification['redirect_url'] ?>" class="btn-close btn btn-sm btn-default text-white my_alert_button read_notification" data-id="<?= $notification['id'] ?>" aria-label="Show"><i class="bx bx-show"></i> </a>
            <button type="button" class="btn-close read_notification" data-id="<?= $notification['id'] ?>" data-bs-dismiss="alert" aria-label="Close"> </button>
          </div>
        <?php }
      } ?>