<div class="row ">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-body bg-dark mb-0">
                <h5 class="text-white card-title mb-0">Page Section Form</h5>
            </div>
            <div class="card-body">
                <span id="msg"></span>
                <form id="formPageSection" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            $languages = $this->language_list;
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
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label for="picture" class="control-label">Picture</label>
                                <div class="">
                                    <input type="file" id="picture" class="form-control" name="picture" class="dropify" data-default-file="" />
                                    <img class="mt-2" src="<?= !empty($rowData['picture']) ? base_url(PAGES . $rowData['picture']) : ''; ?>" width="100" />
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="video_link" class="control-label">Video Link</label>
                                <div class="input-group">
                                    <input type="text" name="video_link" class="form-control" id="video_link" placeholder="Enter Link" value="<?= isset($rowData['video_link']) ? $rowData['video_link'] : ''; ?>" />
                                    <div class="invalid-feedback"> Please enter title. </div>
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

                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="d-flex">
                                    <button type="submit" name="submit" value="Submit" id="btnFormSubmit" class="btn btn-dark waves-effect waves-light">Submit</button>
                                    <div class=" col-sm-3">&nbsp;
                                        <a href="<?php echo base_url('backend/pages/edit/'.$page_id); ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
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