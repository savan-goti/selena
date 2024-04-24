<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body pb-0">
            <?php if(check_permission('workspaces', 'can_create', $this->user_permission)){ ?>
                <h4 class="header-title">
                    <div class="">
                        <a class="btn btn-dark" href="<?php echo base_url('backend/workspaces/add'); ?>" ><i class="fa fa-plus"></i> Add</a>
                    </div>
                </h4>
            <?php } ?>
                
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive ">
                    <?php
                    $table_data = array(
                        '#',
                        'Title',
                        'Roles',
                        'Link',
                        'Status',
                        'Action',
                    );
                    render_datatable($table_data, 'workspaces');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
