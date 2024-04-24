<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body pb-0">

                <?php if(check_permission('users', 'can_create', $this->user_permission)){ ?>
                        <h5 class="header-title">
                        <div class="">
                            <a class="btn btn-dark" href="<?php echo base_url('backend/users/add'); ?>" ><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </h5>
                <?php } ?>
            </div>
            <div class="card-body">
                <form method="">
                     <input type="hidden" id="isFormSubmit" value="">
                    <div class="row">
                        <div class="col-lg-3">
                        <select class="form-control select2" name="user_role[]" multiple="multiple" data-placeholder="Select a Role" >
                            <option value="" disabled>Select Role</option>
                            <?php if(!empty($user_role_list)){
                                    foreach($user_role_list as $row){ ?>
                                        <option value="<?= $row['id'] ?>" <?=(isset($postArr['user_role']) && in_array($row['id'], $postArr['user_role'])) ? 'selected' : '';?>><?= $row['name'] ?></option>
                                    <?php }
                                } ?>
                        </select>
                        </div>
                        <div class="col-lg-3">
                        <select class="form-control select2" name="contactor[]" multiple="multiple" data-placeholder="Select a contactor">
                            <option value="" disabled>Select Contactor</option>
                            <?php
                            if(!empty($contactor_list)){
                                foreach($contactor_list as $row){ ?>
                                    <option value="<?= $row['user_id'] ?>" <?=(isset($postArr['contactor']) && in_array($row['user_id'], $postArr['contactor']) ) ? 'selected' : '';?>><?= $row['name'] ?></option>
                                <?php }
                            } ?>
                        </select>
                        </div>
                        <div class="col-lg-3">
                        <select class="form-control select2" name="skill[]" multiple="multiple" data-placeholder="Select a skill">
                            <option value="" disabled>Select Skill</option>
                            <?php
                            if(!empty($skill_name_list)){
                                foreach($skill_name_list as $row){ ?>
                                    <option value="<?= $row['slug'] ?>" <?=(isset($postArr['skill']) && in_array($row['slug'], $postArr['skill'])) ? 'selected' : '';?> ><?= $row['title'] ?></option>
                                <?php }
                            } ?>
                        </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" name="status" >
                                <option value="">Select Status</option>
                                <option value="1" <?=(isset($postArr['status']) && $postArr['status'] == 1) ? 'selected' : '';?> > Active </option>
                                <option value="0" <?=(isset($postArr['status']) && $postArr['status'] != '' && $postArr['status'] == 0) ? 'selected' : '';?> > Inactive </option>
                            </select>
                        </div>
                        <div class="col-lg-3 mt-2">
                            <button type="submit" name="submit" value="submit" class="btn btn-sm btn-primary">Filter</button>
                            <a class="btn btn-danger btn-sm aves-effect waves-light" href="<?php echo base_url('backend/users') ?>">Reset</a>
                        </div>
                        
                        
                    </div>
                </form>
            </div>
            <!-- <div class="card-header border-bottom">
                <h5 class="card-title">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                <div class="col-md-3 user_role"></div>
                <div class="col-md-3 user_contractor"></div>
                <div class="col-md-3 user_skills"></div>
                <div class="col-md-3 user_status"></div>
                </div>
            </div> -->
            <div class="card-body pt-0">
                <div class="card-datatable table-responsive">
                    <?php
                    $table_data = array(
                        // '#',
                        'User',
                        'Role',
                        'Contractor',
                        // 'Address',
                        'allocation',
                        'Mobile',
                        // 'Notification',
                        'license plate',
                        'Last Login Date',
                        // 'Skills',
                        'Status',
                        'Action',
                    );
                    render_datatable($table_data, 'user');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>





