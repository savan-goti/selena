<?php
$cur_tab = $this->uri->segment(2) == '' ? '' : $this->uri->segment(2);

$curr_action = $this->uri->segment(3) == '' ? '' : $this->uri->segment(3);
$curr_id = $this->uri->segment(4) == '' ? '' : $this->uri->segment(4);
$site_logo = (isset($this->setting_data['site_logo']) && !empty($this->setting_data['site_logo'])) ?  base_url() . UPLOAD . $this->setting_data['site_logo'] : ADMIN_ASSETS_PATH . "img/logo.png";
$dashboardUrl = base_url('backend');

$loginUserdata = $this->login_user_data;

$profile_logo = (!empty($loginUserdata['picture'])) ? base_url(PICTURE . '/' . $loginUserdata['picture']) : $site_logo;


$getUserPermission ='';
$today = date('Y-m-d');
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand pt-3">
    <a href="<?= $dashboardUrl; ?>" class="app-brand-link">
      <span class="app-brand-logo">
        <img class="round" src="<?php echo $site_logo ?>" alt="<?= SITE_TITLE ?> Logo" />
      </span>
    </a>
  </div>

  <ul class="menu-inner py-1">
    <li class="menu-header small text-uppercase"><span class="menu-header-text">MENU</span></li>

    <li class="<?php echo ($cur_tab == 'my-workspaces') ? 'active' : '' ?> menu-item <?= (check_permission('my-workspaces', 'can_view', $getUserPermission)) ? '' : 'd-none' ?>"> <a href="<?= base_url('backend/my-workspaces'); ?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-collection"></i> <span class="menu-title">Workspaces</span> </a></li>
    <li class="<?php echo ($cur_tab == 'dashboard') ? 'active' : '' ?> menu-item <?= (check_permission('dashboard', 'can_view', $getUserPermission)) ? '' : 'd-none' ?> "> <a href="<?= base_url('backend/dashboard'); ?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <span class="menu-title">Dashboard</span> </a></li>
    
    <li class="<?php echo ($cur_tab == 'users') ? 'active' : '' ?> menu-item <?= (check_permission('users', 'can_view', $getUserPermission)) ? '' : 'd-none' ?> "> 
      <a href="<?= base_url('backend/users'); ?>" class="menu-link"> <i class="menu-icon tf-icons fa fa-users"></i> <span class="menu-title">Users</span> </a>
    </li>
     
 
    <?php
    if (check_permission('employee_work', 'can_view', $getUserPermission)) { ?>
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Employee</span></li>
      <li class="<?php echo ($cur_tab == 'employee_work' && $curr_action == '') ? 'active' : '' ?> menu-item "> <a href="<?= base_url('backend/employee_work'); ?>" class="menu-link"> <i class="menu-icon fa-solid fa-clock"></i><span class="menu-title">Hours</span> </a></li>
    <?php } ?>

  

    <?php
    if (check_permission('timeline', 'can_view', $getUserPermission)) { ?>
      <li class="menu-header small text-uppercase"><span class="menu-header-text">TIMELINE</span></li>
      <li class="<?php echo ($cur_tab == 'timeline' && $curr_action == '') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/timeline'); ?>" class="menu-link"> <i class="menu-icon fa-solid fa-newspaper"></i><span class="menu-title">Timeline</span> </a></li>
    <?php } ?>
    
    <li class="menu-header small text-uppercase"><span class="menu-header-text">SETTING</span></li>
    <!-- <li class="<?php echo ($cur_tab == 'changelog' && $curr_action == 'view') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/changelog/view'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-code-merge"></i><span class="menu-title">Changelog</span></a></li> -->
    <?php
    if (check_permission('workspaces', 'can_view', $getUserPermission)) { ?>
      <li class="<?php echo ($cur_tab == 'workspaces') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/workspaces'); ?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-table"></i> <span class="menu-title">Workspace List</span> </a></li>
    <?php } ?>
   

    <?php
    if ($loginUserdata['user_role'] == 1) { ?>
      <!-- <li class="<?php echo ($cur_tab == 'import') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/import'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-database"></i><span class="menu-title">Import</span></a></li> -->
      <li class="<?php echo ($cur_tab == 'system-setting') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/system-setting'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-gear"></i><span class="menu-title">Settings</span></a></li>
      <!-- <li class="<?php echo ($cur_tab == 'changelog' && $curr_action != 'view') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/changelog'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-code-merge"></i><span class="menu-title">Changelog Setting</span></a></li> -->
      <?php /*<!-- <li class="<?php echo ($cur_tab == 'languages') ? 'active' : '' ?> menu-item"><a href="<?php echo base_url('backend/languages'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-language"></i><span class="menu-title">Languages</span></a></li> --> */ ?>
    <?php } ?>
    <li class="menu-item"><a href="<?= base_url('backend/logout'); ?>" class="menu-link"><i class="menu-icon bx bxs-log-out"></i><span class="menu-title">Logout</span></a></li>
  </ul>
</aside>