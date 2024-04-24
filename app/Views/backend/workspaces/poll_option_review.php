<?php
$user_id = $this->session->userdata('admin_id');
$timeline_id = $timeline['id'];

$PollRecord = $this->Service->get_all(TBL_POLL_OPTIONS, '*', array('timeline_id' => $timeline_id));
$userAnswersData = $this->Service->get_row(TBL_POLL_ANSWER, '*', array('user_id' => $user_id, 'timeline_id' => $timeline_id));
if (!empty($userAnswersData) || (isset($onlyShowView) && $onlyShowView==1)) { ?>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h5 class="mb-2">
                    <label> <?= (isset($timeline['poll_title'])) ? $timeline['poll_title'] : "" ?> </label>
                    <label class="float-end mb-2">
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-id="<?= $timeline_id ?>" data-bs-target="#modal_show_poll_answer" data-toggle="tooltip" title="View" class="btn btn-sm btn-icon show_poll_answer" data-original-title="View"><i class="bx bx-show"></i></a>
                    </label>
                </h5>
            </div>
        </div>
        
        <ul class="p-0 m-0">
            <?php
            if (!empty($PollRecord)) {
                $total_vote_count = COUNT($this->Service->get_all(TBL_POLL_ANSWER, '*', array('timeline_id' => $timeline_id)));
                foreach ($PollRecord as $key => $row) {
                    $per_vote_count = COUNT($this->Service->get_all(TBL_POLL_ANSWER, 'id', array('timeline_id' => $timeline_id, 'option_id' => $row['id'])));
                    $option_percentage = ($total_vote_count > 0)? (($per_vote_count * 100) / $total_vote_count) : 0;
                    ?>
                    <li class="d-flex mb-4 pb-2">
                        <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between mb-1">
                                <span><?= isset($row['title']) ? $row['title'] : '';  ?></span>
                                <span class="text-muted"> <?= !empty($option_percentage) ? number_format((float)$option_percentage, 1, '.', '') . '%' : '0%'; ?></span>
                            </div>
                            <div class="progress" style="height:6px;">
                                <div class="progress-bar bg-<?= ($option_percentage < 50) ?'primary':'danger' ?>" style="width: <?= $option_percentage ?>%" role="progressbar" aria-valuenow="<?= $option_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
<?php } else { ?>
    <div class="col-md-12">
        <div class="poll_response_div">
            <form class="pollDetailform" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5 class="panel-title text-uppercase">
                            <input type="hidden" name="timeline_id" value="<?= $timeline['id'] ? $timeline['id'] : "" ?>">
                            <p class="mb-2"> <?= (isset($timeline['poll_title'])) ? $timeline['poll_title'] : "" ?> </p>
                        </h5>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php if (!empty($PollRecord)) {
                                foreach ($PollRecord as $key => $row) { ?>
                                    <li class="list-group-item">
                                        <div class="radio">
                                            <label> <input type="radio" name="option_id" value="<?= $row['id'] ?>"> <?= isset($row['title']) ? $row['title'] : ''; ?> </label>
                                        </div>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                    </div>
                    <div class="panel-footer text-center">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-sm mt-2" style="width:50%;font-size:15px;">Vote</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>
