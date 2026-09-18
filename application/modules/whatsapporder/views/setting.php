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
                        <label class="col-sm-3 col-form-label">WhatsApp Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->whatsapp_number)?$setting->whatsapp_number:''; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Welcome Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" readonly><?php echo !empty($setting->welcome_message)?$setting->welcome_message:''; ?></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
