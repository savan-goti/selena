<?php
$uri = new \CodeIgniter\HTTP\URI(site_url(uri_string()));
$cur_tab = $uri->getSegment(5) == '' ? '' : $uri->getSegment(5);
$curr_action = $uri->getSegment(6) == '' ? '' : $uri->getSegment(6);

$company_logo = isset($this->setting_data['company_logo']) ? base_url(UPLOAD . $this->setting_data['company_logo']) : ADMIN_ASSETS_PATH . 'img/logo.png';
?>
<aside id="layout-menu" class="layout-menu menu-vertical sidebar_bg menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="<?=base_url('backend');?>" class="app-brand-link">
      <span class="app-brand-logo demo" style="width: 204%; height: 100%;">
        <img class="round" src="<?= $company_logo;?>" alt="avatar" height="75px" width="100px">
      </span>
    </a>
  </div>
  <ul class="menu-inner py-1">
    <li class="<?php echo ($cur_tab == 'dashboard') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/dashboard');?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <span class="menu-title" data-i18n="Dashboard">Dashboard</span> </a></li>
    <li class="<?php echo ($cur_tab == 'users') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/users');?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <span class="menu-title" data-i18n="Users">Users</span> </a></li>
    <li class="<?php echo ($cur_tab == 'banner') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/banner');?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <span class="menu-title" data-i18n="Banner">Banner</span> </a></li>
    <li class="<?php echo ($cur_tab == 'category') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/category');?>" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <span class="menu-title" data-i18n="Category">Category</span> </a></li>
    
    <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Products</span></li>
    <li class="<?php echo ($cur_tab == 'category') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/category'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-boxes-stacked"></i><span class="menu-title">Category</span></a></li>
    <li class="<?php echo ($cur_tab == 'brand') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/brand');?>" class="menu-link"> <i class="menu-icon fa-solid fa-user"></i><span class="menu-title" >Brand</span> </a></li>
    <li class="<?php echo ($cur_tab == 'product') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/product'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-gem"></i><span class="menu-title" >product</span></a></li> 
    

    <li class="menu-header small text-uppercase"><span class="menu-header-text">Order</span></li>
    <li class="<?php echo ($cur_tab == 'order') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/order'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-gem"></i><span class="menu-title" >order</span></a></li> 
    <li class="<?php echo ($cur_tab == 'inquiry') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/inquiry'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-bell"></i><span class="menu-title" >inquiry</span></a></li> 
    
    <li class="menu-header small text-uppercase"><span class="menu-header-text">SETTING</span></li>
    
    <li class="<?php echo ($cur_tab == 'banner') ? 'active' : '' ?> menu-item"> <a href="<?= base_url('backend/banner');?>" class="menu-link"> <i class="menu-icon fa-solid fa-user"></i><span class="menu-title" >Banner</span> </a></li> -->
    
    <li class="<?php echo ($cur_tab == 'system_setting') ? 'active' : '' ?> menu-item"><a href="<?= base_url('backend/system_setting'); ?>" class="menu-link"><i class="menu-icon fa-solid fa-gear"></i><span class="menu-title">Settings</span></a></li>
    <li class="<?php echo ($cur_tab == 'user') ? 'active' : '' ?> menu-item">
      <a href="javascript:void(0)" class="menu-link menu-toggle"><i class="menu-icon fa-solid fa-gear"></i><span class="menu-title" >Profile Setting</span></a>
      <ul class="menu-sub">
          <li class="menu-item"><a href="<?=base_url('backend/change_login_password');?>" class="menu-link"><span class="menu-item" >Change Password</span></a> </li>
      </ul>
    </li>
  </ul>
</aside>