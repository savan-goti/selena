<!-- controller ADMIN che... -->
<div class="col-lg-12 col-12">
    <div class="row">
       
        <div class="col-12 col-md-3 mt-2">
            <a href="<?= base_url('backend/order'); ?>">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-package fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap" style="color: #677788;">Total Order</span>
                        <h2 class="mb-0"><?= (isset($order_count))?$order_count:0 ?></h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <a href="<?= base_url('backend/category'); ?>">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-sun fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap" style="color: #677788;">Category</span>
                        <h2 class="mb-0"><?= (isset($category_count))?$category_count:0 ?></h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <a href="<?= base_url('backend/product'); ?>">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-layer fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap" style="color: #677788;">Product</span>
                        <h2 class="mb-0"><?= (isset($product_count))?$product_count:0 ?></h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md-3 mt-2">
            <a href="<?= base_url('backend/brand');?>">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-shape-circle fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap" style="color: #677788;">Brand</span>
                        <h2 class="mb-0"><?= (isset($brand_count))?$brand_count:0 ?></h2>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-12 col-md-3 mt-2">
            <div class="card h-100">
            <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-user fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Hospitals</span>
                <h2 class="mb-0"><?//= (isset($hospitals))?$hospitals:0 ?></h2>
            </div>
            </div>
        </div> -->
        <!-- <div class="col-12 col-md-3 mt-2">
            <div class="card h-100">
            <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-user fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">clinics</span>
                <h2 class="mb-0"><?//= (isset($clinics))?$clinics:0 ?></h2>
            </div>
            </div>
        </div> -->
        <!-- <div class="col-12 col-md-3 mt-2">
            <div class="card h-100">
            <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-user fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Ambulance</span>
                <h2 class="mb-0"><?//= (isset($ambulance))?$ambulance:0 ?></h2>
            </div>
            </div>
        </div> -->
        <!-- <div class="col-12 col-md-3 mt-2">
            <div class="card h-100">
            <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-user fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Hearsay Van</span>
                <h2 class="mb-0"><?//= (isset($hearsay_van))?$hearsay_van:0 ?></h2>
            </div>
            </div>
        </div> -->
        <!-- <div class="col-12 col-md-3 mt-2">
            <div class="card h-100">
            <div class="card-body text-center">
                <div class="avatar mx-auto mb-2">
                    <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-user fs-4"></i></span>
                </div>
                <span class="d-block text-nowrap">Beneficiary Users</span>
                <h2 class="mb-0"><?//= (isset($beneficiaryCount))?$beneficiaryCount:0 ?></h2>
            </div>
            </div>
        </div> -->
    </div>
</div>