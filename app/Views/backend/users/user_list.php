<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body pb-0">
                <h4 class="header-title">
                    <div class="">
                        <a class="btn btn-info" href="<?php echo base_url('backend/users/add'); ?>" ><i class="fa fa-plus"></i> Add</a>
                    </div>
                </h4>
            </div>
            <div class="card-body pt-0">
                <div class="card-datatable table-responsive">
                    <?php
                    $table_data = array(
                        '#',
                        'User',
                        'Role',
                        'Mobile',
                        'Last Login Date',
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





