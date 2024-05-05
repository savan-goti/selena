<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body pb-0">
                <h4 class="header-title">
                    <div class="">
                        <a class="btn btn-info" href="<?php echo base_url('backend/banner/add'); ?>" ><i class="fa fa-plus"></i> Add</a>
                    </div>
                </h4>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive ">
                    <?php
                    $table_data = array(
                        '#',
                        'Picture',
                        'TITLE',
                        'LINK',
                        'banner type',
                        'Status',
                        'Action',
                       
                    );
                    render_datatable($table_data, 'banner'); //class nu name
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

