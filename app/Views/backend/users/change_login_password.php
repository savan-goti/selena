<div class="row ">
  <div class="col-lg-12">
    <div class="card ">
      <div class="card-body bg-dark mb-0">
        <h4 class="text-white card-title mb-0"> Change Password </h4>
      </div>
      <div class="card-body">
        <?php if(!empty($validation)){ ?>
          <div class="alert alert-danger alert-dismissible">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
              <?= $validation->listErrors(); ?>
              <?= isset($msg) ? $msg : '';?>
            </div>
        <?php } ?>
        <?php if (isset($msg)): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                <?=isset($msg) ? $msg : '';?>
            </div>
        <?php endif;?>
        <?php echo form_open('', 'id="changePasswordForm" class="needs-validation" novalidate');  ?>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="newPassword">New Password</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="password" id="password" name="password" value="<?= set_value('password'); ?>" placeholder="············" required>
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="mb-3 form-password-toggle fv-plugins-icon-container">
              <label class="form-label" for="confirmPassword">Confirm New Password</label>
              <div class="input-group input-group-merge has-validation">
                <input class="form-control" type="password" name="confirm_pwd" id="confirm_pwd" value="<?= set_value('confirm_pwd'); ?>" placeholder="············" required>
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="form-group row">
              <div class="d-flex">
                <button type="submit" name="submit" value="Change Password" class="btn btn-dark waves-effect waves-light">Change Password </button>&nbsp;
                <div class=" col-sm-3">
                  <a href="<?php echo base_url('backend/change_login_password'); ?>"><button type="button" class="btn btn-danger waves-effect waves-light"> Cancel</button></a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>