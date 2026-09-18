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
                        <label class="col-sm-3 col-form-label">Points per Currency Unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->points_per_dollar)?$setting->points_per_dollar:'10'; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Redemption Value per Point</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo !empty($setting->redemption_rate)?$setting->redemption_rate:'0.01'; ?>" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
