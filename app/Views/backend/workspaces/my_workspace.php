<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-body pb-0">
                <h4 class="header-title"> Workspaces </h4>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <?php
                    if (!empty($resultList)) {
                        foreach ($resultList as $row) { ?>
                            <div class="col-sm-3 p-2">
                                <a href="<?= $row['link'] ?>" class="btn ctm_workbtn w-100" style="background-color: <?= (!empty($row['bg_color'])) ? $row['bg_color'] : '#495563' ?>"><?= $row['title'] ?></a>
                            </div>
                        <?php }
                    }else{ ?>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (check_timeline_permission('can_show')) { ?>
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/IconPicker/dist/fontawesome-5.11.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/IconPicker/dist/iconpicker-1.5.0.css">
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/IconPicker/dist/iconpicker-1.5.0.js"></script>

    <div class="row pt-3">
        <?php
        if (check_timeline_permission('can_create')) { ?>
            <div class="col-12">
                <div class="d-flex pt-3">
                    <a href="javascript:void(0)" class="btn btn-dark me-3 btnToggleTimelineForm"> Add Post </a>
                </div>
            </div>

            <div class="col-12 pt-3 divTimelineForm d-none">
                <div class="card">
                    <div class="card-body">
                        <form id="timelinePostForm" method="POST" class="fv-plugins-bootstrap5 fv-plugins-framework needs-validation" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="form-group mb-2">
                                        <label for="show_roles" class="form-label"> User Role </label>
                                        <div class="form-group">
                                            <select class="form-control select2" id="show_roles" name="show_roles[]" multiple data-placeholder="Select User Role">
                                                <?php
                                                if (!empty($user_role_list)) {
                                                    $selected_roles = (!empty($rowData['show_roles'])) ? explode(',', $rowData['show_roles']) : array();
                                                    foreach ($user_role_list as $row) { ?>
                                                        <option value="<?= $row['id'] ?>" <?= (!empty($selected_roles) && in_array($row['id'], $selected_roles)) ? 'selected' : ''; ?>><?= $row['name'] ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-2">
                                        <label for="show_users" class="form-label"> Users </label>
                                        <div class="form-group">
                                            <select class="form-control select2" id="show_users" name="show_users[]" multiple data-placeholder="Select Users">
                                                <?php
                                                if (!empty($user_list)) {
                                                    $selected_users = (!empty($rowData['show_users'])) ? explode(',', $rowData['show_users']) : array();
                                                    foreach ($user_list as $row) { ?>
                                                        <option value="<?= $row['user_id'] ?>" <?= (!empty($selected_users) && in_array($row['user_id'], $selected_users)) ? 'selected' : ''; ?>><?= $row['fullname'] ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <?php /*
                                    <div class="form-group row mb-2">
                                        <label for="show_contractors" class="form-label"> Contractor </label>
                                        <div class="form-group">
                                            <select class="form-control select2" id="show_contractors" name="show_contractors[]" multiple data-placeholder="Select Users">
                                                <?php
                                                if (!empty($contractor_list)) {
                                                    $selected_users = (!empty($rowData['show_contractors'])) ? explode(',', $rowData['show_contractors']) : array();
                                                    foreach ($contractor_list as $row) { ?>
                                                        <option value="<?= $row['user_id'] ?>" <?= (!empty($selected_users) && in_array($row['user_id'], $selected_users)) ? 'selected' : ''; ?>><?= $row['fullname'] ?></option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    */ ?>

                                    <div class="form-group mb-2">
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?= isset($rowData['title']) ? $rowData['title'] : ''; ?>" required>
                                    </div>

                                    <div class="form-group mb-2">
                                        <textarea name="content" class="form-control" id="content" placeholder="Content"><?= isset($rowData['title']) ? $rowData['title'] : ''; ?></textarea>
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?= isset($rowData['address']) ? $rowData['address'] : ''; ?>" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-2">
                                        <label for="GetIconPicker" class="form-label"> Icon </label>
                                        <div class="">
                                            <button type="button" class="btn btn-warning btn-sm" id="GetIconPicker" data-iconpicker-input="input#IconInput" data-iconpicker-preview="i#IconPreview">Select Icon</button>
                                            &nbsp;&nbsp;<label><i id="showIconElement" class="<?= (!empty($rowData['icon'])) ? $rowData['icon'] : '' ?>"></i></label>
                                            <input type="hidden" id="IconInput" name="icon" autocomplete="off" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="picture" class="form-label">Image </label>
                                        <input type="file" name="picture" class="form-control" id="picture" />
                                        <img class="p-2" src="<?= !empty($rowData['picture']) ? base_url(TIMELINE . $rowData['picture']) : ''; ?>" width="150" />
                                    </div>

                                    <div class="form-group mb-2">
                                        <input type="url" name="video" class="form-control" id="video" placeholder="Video Link" value="<?= isset($rowData['video']) ? $rowData['video'] : ''; ?>" />
                                    </div>

                                    <div class="form-group mb-2">
                                        <input type="url" name="link" class="form-control" id="title" placeholder="Link" value="<?= isset($rowData['link']) ? $rowData['link'] : ''; ?>" />
                                    </div>

                                    <div class="form-group mb-2">
                                        <input type="text" name="tags" class="form-control myTagInput" id="tags" placeholder="Enter tags" value="<?= isset($rowData['tags']) ? $rowData['tags'] : ''; ?>" />
                                    </div>

                                    <div class="form-group mb-2">
                                        <a class="btn btn-primary btn-sm me-1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">POLL</a>
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="col-12 col-md-12 mt-2">
                                                <div class="p-3 border">
                                                    <div class="form-group d-flex mb-2">
                                                        <div class="col-lg-12">
                                                            <input type="text" name="poll_title" class="form-control" placeholder="Enter Title" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group d-flex mb-2">
                                                        <input type="text" name="poll_options[]" class="form-control" placeholder="Enter Options" />
                                                        <button type="button" id="addoption" class="btn btn-sm btn-warning text-center"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                    <div id="add_more_option"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="d-flex">
                                            <button type="submit" name="submit" value="Submit" class="btn btn-dark waves-effect waves-light"> Post </button> &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="col-12">
            <?php
            $color_arr = array('success', 'info', 'warning', 'danger', 'primary');
            if (!empty($timelineList)) { ?>
                <ul class="timeline timeline-center mt-5">
                    <?php
                    foreach ($timelineList as $timeline) {
                        // pr($timeline);
                        $post_date = date('dS M, Y', strtotime($timeline['created_time'])); ?>
                        
                        <li class="timeline-item mb-md-4 mb-5">
                            <span class="timeline-indicator timeline-indicator-danger" data-aos="zoom-in" data-aos-delay="200">
                                <i class="<?= (!empty($timeline['icon'])) ? $timeline['icon'] : 'bx bx-paint' ?>"></i>
                            </span>
                            <div class="timeline-event card p-0" data-aos="fade-right">
                                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="card-title mb-0"><?= $timeline['title'] ?></h6>
                                    <?php
                                    if (!empty($timeline['tags'])) { ?>
                                        <div class="meta">
                                            <?php
                                            $tag_arr = explode(',', $timeline['tags']);
                                            if (!empty($tag_arr)) {
                                                foreach ($tag_arr as $tag) { ?>
                                                    <span class="badge rounded-pill bg-label-<?= $color_arr[array_rand($color_arr)] ?>"><?= $tag ?></span>
                                            <?php }
                                            } ?>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <?php
                                        if (!empty($timeline['content'])) { ?>
                                            <div class="col-sm-12">
                                                <p class="mb-2"> <?= (isset($timeline['content'])) ? $timeline['content'] : "" ?> </p>
                                            </div>
                                        <?php } ?>

                                        <?php
                                        if (!empty($timeline['poll_title'])) {
                                            echo $this->load->view('backend/workspaces/poll_option_review', array('timeline' => $timeline), true);
                                        } ?>

                                        <div class="col-sm-12">
                                            <?php
                                            if (!empty($timeline['link'])) { ?>
                                                <strong><a class="d-flex mx-auto my-2" href="<?= $timeline['link'] ?>" alt="Timeline link"><?= $timeline['link'] ?></a></strong>
                                            <?php }
                                            if (!empty($timeline['timeline_picture'])) { ?>
                                                <div class="mylightgallery">
                                                    <a class="" href="<?= $timeline['timeline_picture'] ?>" alt="Timeline image">
                                                        <img class="img-fluid d-flex mx-auto my-2 timeline_img" src="<?= $timeline['timeline_picture'] ?>" alt="Timeline image" />
                                                    </a>
                                                </div>
                                            <?php }
                                            if (!empty($timeline['video'])) { ?>
                                                <div class="table-responsive pt-2">
                                                    <iframe id="frame_video_view" src="<?= $timeline['video'] ?>#toolbar=0&amp;navpanes=0&amp;embedded=true" frameborder="0" style="overflow:hidden; height:300px; width:100%" height="100%" width="100%"></iframe>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div>
                                            <p class="text-muted mb-2"><?= (isset($timeline['technician_name'])) ? $timeline['technician_name'] : "" ?> </p>
                                            <ul class="list-unstyled users-list d-flex align-items-center avatar-group">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="<?= $timeline['technician_name'] ?>" class="avatar avatar-xs pull-up">
                                                    <img class="rounded-circle" src="<?= $timeline['technician_picture'] ?>" alt="<?= $timeline['technician_name'] ?>" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-event-time"> <?= $post_date ?> </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <div class="pt-5">
                    <figure class="text-center mt-2">
                        <blockquote class="blockquote">
                            <p class="mb-0">No any feed data yet.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            You can add new Post in feed.
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="modal fade" id="modal_show_poll_answer" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content pb-0">
                <div class="modal-body p-0 pb-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h5 class="mb-4"></h5>
                    </div>
                    <div class="show_modal_content"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script>
    $("#addoption").click(function() {
        var html = '<div class="form-group d-flex mb-2">' +
            '<input type="text" name="poll_options[]" class="form-control" placeholder="Enter Options">' +
            '<button class="btn btn-danger btn-sm remove"><i class="fa fa-times" aria-hidden="true"></i></button>' +
            '</div>';
        $('#add_more_option').append(html);

    });
    $(document).on('click', '.remove', function() {
        $(this).closest('.form-group').remove();
    });

    $(document).ready(function() {

        $(document).delegate(".btnToggleTimelineForm", "click", function(event) {
            $('.divTimelineForm').toggleClass('d-none');
        });

        IconPicker.Init({
            jsonUrl: '<?php echo ADMIN_ASSETS_PATH; ?>vendor/libs/IconPicker/dist/iconpicker-1.5.0.json',
            searchPlaceholder: 'Search Icon',
            showAllButton: 'Show All',
            cancelButton: 'Cancel',
            noResultsFound: 'No results found.',
        });
        IconPicker.Run('#GetIconPicker', function() {
            $('#showIconElement').attr('class', $("#IconInput").val());
        });

        $('.mylightgallery a').simpleLightbox({
            // 'animationSpeed' : '500',
            'disableRightClick': true,
            'loop': false,
        });

    });
</script>