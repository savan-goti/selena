<div class="row ">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-body bg-dark mb-0">
                <h5 class="text-white card-title mb-0"><?= isset($menu)?$menu:''; ?></h5>
            </div>
            <div class="card-body">
                <span id="msg"></span>
                <form id="" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group mb-2">
                                <label for="date" class="control-label">Title</label>
                                <div class="input-group">
                                    <input type="text" name="title" class="form-control" id="date" placeholder="Enter Banner name" value="<?=isset($rowData['title']) ? $rowData['title'] : ''; echo set_value('title'); ?>" required />
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="date" class="control-label">Type</label>
                                 <select class="form-control" id="slidrtype" name="type" required>
                                    <option value="">Select Type</option>
                                    <?php if(!empty($type)){
                                        foreach($type as $row){ 
                                            $Selected=(isset($rowData['type']) && $rowData['type']==$row['id']) ? 'selected':''; 
                                            ?>
                                            <option value="<?=isset($row['id']) ?$row['id']:''; ?>" <?= $Selected ?>><?=isset($row['name']) ?$row['name']:''; ?></option>
                                    <?php  } } ?>
                                  </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="date" class="control-label">Link</label>
                                <div class="input-group">
                                    <input type="text" name="url" class="form-control" id="link" placeholder="Enter link" value="<?=isset($rowData['url']) ? $rowData['url'] : ''; echo set_value('url'); ?>" />
                                </div>
                            </div>
                              
                               
                        </div> 
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ff" class="control-label">Picture : <span id="imagesize" class="imagesize"></span></label>
                                <div class="mb-3">
                                    <input type="hidden" value="<?=isset($rowData['type']) ? $rowData['type'] :''; ?>" class="type_id">
                                    <input type="file" id="input-file-now-custom-1" class="form-control" name="image" class="dropify" data-default-file="" />
                                    <img src="<?= !empty($rowData ['image']) ? base_url(BANNER . $rowData['image']):''; ?>" width="200">
                                </div>
                            </div> 
                        </div>
                    </div>
                        
                        
                        
                        <div class="col-lg-12 pt-2">
                            <div class="form-group row">
                                <div class="d-flex">
                                    <button type="submit" name="submit" value="Submit" id="btnEduFormSubmit" class="btn btn-info waves-effect waves-light">Submit</button>
                                    <div class=" col-sm-3">&nbsp;
                                        <a href="<?php echo base_url('backend/banner'); ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
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

<script>
    $(document).ready(function(){
        $('#slidrtype').on('change',function(){
            var slider_id = $(this).val();
            // alert(slider_id);
            if(slider_id==1){
                // Slider
                $('#imagesize').text('(size: 3000 X 1000)'); 
            }
            else if(slider_id==2){
                // Advertisement
                $('#imagesize').text('(size: 1200 X 1000)');
            }
            else if(slider_id==3){
                // offer
                $('#imagesize').text('(size: 1200 X 1000)');
            }
            else if(slider_id==4){
                // Collaborations
                $('#imagesize').text('(size: 750 X 750)');
            }
            else if(slider_id==""){
                $('#imagesize').text('');
            }
        });

        var typeid = $(".type_id").val();
        if(typeid==1){
            // Slider
            $('#imagesize').text('(size: 3000 X 1000)'); 
        }
        else if(typeid==2){
            // Advertisement
            $('#imagesize').text('(size: 1200 X 1000)');
        }
        else if(typeid==3){
            // offer
            $('#imagesize').text('(size: 1200 X 1000)');
        }
        else if(typeid==4){
            // Collaborations
            $('#imagesize').text('(size: 750 X 750)');
        }
        else if(typeid==""){
            $('#imagesize').text('');
        }
        
    })
</script>
