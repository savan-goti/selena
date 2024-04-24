<?php
$languages = $this->language_list;
$meta_tags = $this->meta_tags;
?>
<div class="row ">
    <div class="col-lg-8 pb-3">
        <div class="card ">
            <div class="card-body bg-dark mb-0">
                <h5 class="text-white card-title mb-0">Page Form</h5>
            </div>
            <div class="card-body">
                <span id="msg"></span>
                <form id="formPages" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            $row_title = (isset($rowData['title']))? json_decode($rowData['title'], true):array();
                            if (!empty($languages)) {
                                foreach ($languages as $lang) {
                                    $lang_key = $lang['key']; ?>
                                    <div class="form-group mb-2">
                                        <label for="name" class="control-label">Title (<?= $lang_key ?>)*</label>
                                        <div class="input-group">
                                            <input type="text" name="title[<?= $lang_key ?>]" class="form-control " id="title[<?= $lang_key ?>]" placeholder="Enter Title" value="<?= isset($row_title[$lang_key]) ? $row_title[$lang_key] : ''; ?>" required>
                                            <div class="invalid-feedback"> Please enter title. </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>

                        <?php
                        $row_slug = (isset($rowData['slug']))? json_decode($rowData['slug'], true):array();
                        if (!empty($languages) && !empty($row_slug)) { ?>
                            <div class="col-lg-6">
                                <?php
                                foreach ($languages as $lang) {
                                    $lang_key = $lang['key']; ?>
                                    <div class="form-group mb-2">
                                        <label class="control-label">Url (<?= $lang_key ?>)*</label>
                                        <div class="input-group">
                                            <input type="text" name="slug[<?= $lang_key ?>]" class="form-control " id="slug[<?= $lang_key ?>]" placeholder="Enter Url" value="<?= isset($row_slug[$lang_key]) ? $row_slug[$lang_key] : ''; ?>" required>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label for="picture" class="control-label">Picture</label>
                                <div class="">
                                    <input type="file" id="picture" class="form-control" name="picture" class="dropify" data-default-file="" />
                                    <img class="mt-2" src="<?= !empty($rowData['picture']) ? base_url(PAGES . $rowData['picture']) : ''; ?>" width="100" />
                                </div>
                            </div>
                        </div>

                        <?php
                        $row_content = (isset($rowData['content']))? json_decode($rowData['content'], true):array();
                        if (!empty($languages)) {
                            foreach ($languages as $lang) {
                                $lang_key = $lang['key'];
                                ?>
                                <div class="col-lg-12">
                                    <div class="form-group mb-2">
                                        <label for="name" class="control-label">Content (<?= $lang_key ?>) *</label>
                                        <textarea id="content_<?= $lang_key ?>" class="custom_text_editors form-control content_<?= $lang_key ?>" name="content[<?= $lang_key ?>]"><?= isset($row_content[$lang_key]) ? $row_content[$lang_key] : ''; ?></textarea>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>

                    <div class="row p-3">
                        <div class="col-lg-12">
                            <h5 class="card-header card-header p-0">SEO</h5><hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            $seo_data = (isset($rowData['seo']))? json_decode($rowData['seo'], true):array();
                            if(!empty($meta_tags)){
                                foreach ($meta_tags as $tag){ ?>
                                    <div class="row">
                                    <?php
                                    if (!empty($languages)) {
                                        foreach ($languages as $lang) {
                                            $lang_key = $lang['key'];
                                            ?>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-2">
                                                    <label class="control-label"><?= ucfirst($tag['meta']) ?> (<?= $lang_key ?>)</label>
                                                    <input type="text" class="form-control" name="seo[<?= $lang_key ?>][<?= $tag['meta'] ?>]" value="<?php echo isset($seo_data[$lang_key][$tag['meta']]) ? $seo_data[$lang_key][$tag['meta']] : ''; ?>" />
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="d-flex">
                                    <button type="submit" name="submit" value="Submit" id="btnFormSubmit" class="btn btn-dark waves-effect waves-light">Submit</button>
                                    <div class=" col-sm-3">&nbsp;
                                        <a href="<?php echo base_url('backend/pages'); ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(!empty($rowData)){
    $page_id = (isset($rowData['id']))? $rowData['id']:"";
    ?>
    <div class="col-lg-4">
        <div class="card ">
            <div class="card-body bg-dark mb-0">
                <h5 class="text-white card-title mb-0">Page Section</h5>
            </div>
            <div class="card-body">
                <div class="text-end">
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('backend/pages/add_section/'.$page_id); ?>" ><i class="fa fa-plus"></i> Add</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php
                        if(!empty($pageSections)){
                            foreach($pageSections as $section){
                                $section_id = $section['section_id'];
                                ?>
                                <tr>
                                    <td><strong><?= trim($section['title_en'], '"') ?></strong></td>
                                    <td class="text-end">
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('backend/pages/edit_section/'.$page_id.'/'.$section_id) ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item delete_page_section" data-id="<?= $section_id ?>" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>
</div>