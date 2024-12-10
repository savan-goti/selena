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
                                    <input type="text" name="title" class="form-control" placeholder="Enter Banner name" value="<?=isset($rowData['title']) ? $rowData['title'] : ''; echo set_value('title'); ?>" required />
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="controller" class="control-label">Controller</label>
                                <div class="input-group">
                                    <input type="text" name="controller" class="form-control" placeholder="Enter Controller" value="<?=isset($rowData['controller']) ? $rowData['controller'] : ''; echo set_value('controller'); ?>" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="ff" class="control-label">Color : </label>
                                <div class="mb-3">
                                    <input type="color" id="colorpicker" name="bg_color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?=isset($rowData['bg_color']) ? $rowData['bg_color'] : ''; echo set_value('bg_color'); ?>"> 
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label for="ff" class="control-label">Text Color : </label>
                                <div class="mb-3">
                                    <input type="color" id="colorpicker" name="text_color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="<?= isset($rowData['text_color']) ? $rowData['text_color'] : '#ffffff'; echo set_value('text_color'); ?>"> 
                                </div>
                            </div> 
                        </div> 
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ff" class="control-label">Picture : </label>
                                <div class="mb-3">
                                    <input type="file" id="input-file-now-custom-1" class="form-control" name="image" class="dropify" data-default-file="" />
                                    <img src="<?= !empty($rowData ['image']) ? base_url(CATEGORY . $rowData['image']):''; ?>" width="200">
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
