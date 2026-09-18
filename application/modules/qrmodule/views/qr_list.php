<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Table Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($tables)) { $sl = 1; foreach($tables as $row) { ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo $row->table_name; ?></td>
                            <td><span class="label label-success">Active</span></td>
                        </tr>
                        <?php } } else { ?>
                        <tr><td colspan="3" class="text-center">No QR tables configured</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
