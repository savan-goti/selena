
<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-body">

                <form action="" id="userform" method="POST" class="form-horizontal p-t-20" enctype="multipart/form-data" >
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <!-- <div class="form-group row">
                                <label for="header" class="col-sm-3 control-label">Header*</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= isset($rowData['header']) ? $rowData['header']:'' ?>" name="header" id="header" placeholder="header" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="footer" class="col-sm-3 control-label">Footer*</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= isset($rowData['footer']) ? $rowData['footer']:'' ?>" name="footer"  id="sponserposition" placeholder="Footer">
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label for="site_name" class="col-sm-3 control-label">Site Name</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="site_name" id="site_name" value="<?= isset($rowData['site_name']) ? $rowData['site_name']:'' ?>" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ff" class="col-sm-3 control-label">Logo</label>
                                <div class="col-sm-9 mb-3">
                                    <input type="file" id="site_logo" name="site_logo" class="form-control dropify" data-default-file="" />
                                    <img src="<?= !empty($rowData['site_logo']) ? base_url(UPLOAD . $rowData['site_logo']):''; ?>" width="200" />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="ff" class="col-sm-3 control-label">Favicon</label>
                                <div class="col-sm-9 mb-3">
                                    <input type="file" id="favicon" name="favicon" class="form-control dropify" data-default-file="" />
                                    <img src="<?= !empty($rowData['favicon']) ? base_url(UPLOAD . $rowData['favicon']):''; ?>" width="35" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" id="email" value="<?= isset($rowData['email']) ? $rowData['email']:'' ?>" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="wa_number" class="col-sm-3 control-label">Contact Number</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= isset($rowData['wa_number']) ? $rowData['wa_number']:'' ?>" name="wa_number" id="wa_number" placeholder="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="instagram_link" class="col-sm-3 control-label">Instagram</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="instagram_link" id="instagram_link" value="<?= isset($rowData['instagram_link']) ? $rowData['instagram_link']:'' ?>" placeholder="Enter link">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="fb_link" class="col-sm-3 control-label">Facebook</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fb_link" id="fb_link" value="<?= isset($rowData['fb_link']) ? $rowData['fb_link']:'' ?>" placeholder="Enter link">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="youtube_link" class="col-sm-3 control-label">Youtube</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="youtube_link" id="youtube_link" value="<?= isset($rowData['youtube_link']) ? $rowData['youtube_link']:'' ?>" placeholder="Enter link">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="twitter_link" class="col-sm-3 control-label">Twitter</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="twitter_link" id="twitter_link" value="<?= isset($rowData['twitter_link']) ? $rowData['twitter_link']:'' ?>" placeholder="Enter link">
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label for="calendar_embed_url" class="col-sm-3 control-label">Calendar embed Link </label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="calendar_embed_url" id="calendar_embed_url" value="<?= isset($rowData['calendar_embed_url']) ? $rowData['calendar_embed_url']:'' ?>" placeholder="Enter link">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="geocode_apikey" class="col-sm-3 control-label">Geo API KEY</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= isset($rowData['geocode_apikey']) ? $rowData['geocode_apikey']:'' ?>" name="geocode_apikey" id="geocode_apikey" placeholder="" />
                                    </div>
                                </div>
                            </div> -->

                            <?php /*
                            <div class="form-group row">
                                <label for="sms_server_url" class="col-sm-3 control-label">SMS Server URL</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= isset($rowData['sms_server_url']) ? $rowData['sms_server_url']:'' ?>" name="sms_server_url" id="sms_server_url" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sms_api_key" class="col-sm-3 control-label">SMS API KEY</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= isset($rowData['sms_api_key']) ? $rowData['sms_api_key']:'' ?>" name="sms_api_key" id="sms_api_key" placeholder="" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pushsafer_key" class="col-sm-3 control-label">Pushsafer Key</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="pushsafer_key" id="pushsafer_key" value="<?= isset($rowData['pushsafer_key']) ? $rowData['pushsafer_key']:'' ?>" placeholder="Enter Key" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="admin_device_id" class="col-sm-3 control-label">Pushsafer Device ID</label>
                                <div class="col-sm-9 mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="admin_device_id" id="admin_device_id" value="<?= isset($admin_device_id) ? $admin_device_id:'' ?>" placeholder="Enter Device ID" />
                                    </div>
                                </div>
                            </div>
                            */ ?>
                        </div>

                        <div class="col-lg-12 text-right">
                            <div class="form-group row m-b-0">
                                <div class=" col-sm-9">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-dark waves-effect waves-light">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
