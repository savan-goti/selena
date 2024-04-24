<div class="row mb-3">
    <div class="col-lg-12">
        <h3><?= (isset($timeline['poll_title'])) ? $timeline['poll_title']:"";  ?></h3>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <ul class="p-0 m-0">
            <?php
            if (!empty($poll_options)) {
                $total_vote_count = COUNT($this->Service->get_all(TBL_POLL_ANSWER, '*', array('timeline_id' => $timeline_id)));
                foreach ($poll_options as $key => $row) {
                    $per_vote_count = COUNT($this->Service->get_all(TBL_POLL_ANSWER, 'id', array('timeline_id' => $timeline_id, 'option_id' => $row['id'])));
                    $poll_answers = $this->Service->getPollAnswersData(" AND PA.timeline_id = '".$timeline_id."' AND PA.option_id = '".$row['id']."'");
                    // pr($poll_answers); die();
                    $option_percentage = ($per_vote_count * 100) / $total_vote_count;
                    ?>
                    <li class="mb-4 pb-2">
                        <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between mb-1">
                                <strong><?= isset($row['title']) ? $row['title'] : '';  ?> &nbsp;( Total: <?= $per_vote_count ?> )</strong>
                                <span class="text-muted"> <?= !empty($option_percentage) ? number_format((float)$option_percentage, 1, '.', '') . '%' : '0%'; ?></span>
                            </div>
                            <div class="progress" style="height:6px;">
                                <div class="progress-bar bg-<?= ($option_percentage < 50) ?'primary':'danger' ?>" style="width: <?= $option_percentage ?>%" role="progressbar" aria-valuenow="<?= $option_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <?php
                        if(!empty($poll_answers)){ ?>
                            <div class="row d-flex flex-column w-100">
                                <div class="d-flex col-sm-12">
                                    <ul class="">
                                        <?php
                                        foreach ($poll_answers as $ans){
                                            $user_id = encrypt_String($ans['user_id']);
                                            if(isset($ans['is_contractor']) && $ans['is_contractor']==1){
                                                $user_link = base_url('backend/contractor/view/'.$user_id);
                                            }else{
                                                $user_link = base_url('backend/users/view/'.$user_id);
                                            } ?>
                                            <li class="">
                                                <a class="text-dark" href="<?= $user_link ?>"><strong><?= isset($ans['fullname']) ? $ans['fullname'] : '';  ?></strong></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
</div>