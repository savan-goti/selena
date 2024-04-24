<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body pb-0">
                <h5 class="header-title">
                    <div class="">
                        <a class="btn btn-dark" href="<?php echo base_url('backend/pages/add'); ?>" ><i class="fa fa-plus"></i> Add</a>
                    </div>
                </h5>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive ">
                    <?php
                    $table_data = array(
                        '#',
                        'Title',
                        'Slug',
                        'Date',
                        'Status',
                        'Action',
                    );
                    render_datatable($table_data, 'pages');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>





