 
 
<div class="col-lg-12 col-12 mb-4">
    <div class="row">
        <!-- Statistics Cards -->
        <div class="col-12 col-md-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="<?= base_url('backend/users') ?>">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-user fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap text-dark">Employee</span>
                        <h2 class="mb-0"><?= (isset($userCount)) ? $userCount : 0 ?></h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="<?= base_url('backend/employee_work') ?>">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-user fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap text-dark">Employee Hours</span>
                        <h2 class="mb-0"><?= (isset($employee_hour_count)) ? $employee_hour_count : 0 ?></h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

 