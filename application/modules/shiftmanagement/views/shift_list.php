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
                            <th>Shift Name</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($shifts)) { $sl = 1; foreach($shifts as $row) { ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo $row->shift_name; ?></td>
                            <td><?php echo $row->start_time; ?></td>
                            <td><?php echo $row->end_time; ?></td>
                            <td><span class="label label-success">Active</span></td>
                        </tr>
                        <?php } } else { ?>
                        <tr><td colspan="5" class="text-center">No shifts scheduled</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
