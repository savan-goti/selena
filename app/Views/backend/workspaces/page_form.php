<div class="row ">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-body bg-dark mb-0">
                <h4 class="text-white card-title mb-0"> Workspace Form </h4>
            </div>
            <div class="card-body">
                <span id="msg"></span>
                <form id="" method="POST" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Button Title</label>
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="<?= isset($rowData['title']) ? $rowData['title'] : ''; ?>" required>
                                    <div class="invalid-feedback"> Please enter title. </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label for="link" class="control-label">Link</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="link" id="link" placeholder="Enter link" value="<?= isset($rowData['link']) ? $rowData['link'] : ''; ?>" required>
                                    <div class="invalid-feedback"> Please enter link. </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="bg_color" class="control-label">Color</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="bg_color" id="bg_color" placeholder="Enter Color Code" value="<?= isset($rowData['bg_color']) ? $rowData['bg_color'] : ''; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="custom_order" class="control-label">Order</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="custom_order" id="link" placeholder="Enter order" value="<?= isset($rowData['custom_order']) ? $rowData['custom_order'] : ''; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <h5>Roles </h5>
                                <div class="row">
                                    <?php
                                    $user_role_arr = (!empty($rowData['roles'])) ? explode(',', $rowData['roles']) : array();
                                    if (!empty($user_role_list)) {
                                        foreach ($user_role_list as $row) { ?>
                                            <div class="col-sm-4">
                                                <div class="form-group row mb-2">
                                                    <label for="roles_<?= $row['id'] ?>" class="control-label"><?= $row['name'] ?></label>
                                                    <div class="form-group">
                                                        <input type="checkbox" class="" name="roles[]" id="roles_<?= $row['id'] ?>" value="<?= $row['id'] ?>" <?= (!empty($user_role_arr) && in_array($row['id'], $user_role_arr)) ? 'checked' : ''; ?> />
                                                    </div>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="d-flex">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-dark waves-effect waves-light">Submit</button> &nbsp;
                                    <div class="col-sm-3">
                                        <a href="<?php echo base_url('backend/workspaces'); ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>