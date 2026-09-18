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
                        <label class="col-sm-3 col-form-label">CGST Rate (%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->cgst)?$setting->cgst:'2.50'; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">SGST Rate (%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->sgst)?$setting->sgst:'2.50'; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">IGST Rate (%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->igst)?$setting->igst:'5.00'; ?>" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
