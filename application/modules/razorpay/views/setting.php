<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Razorpay Key ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->key_id)?$setting->key_id:''; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Key Secret</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" value="<?php echo !empty($setting->key_secret)?$setting->key_secret:''; ?>" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
