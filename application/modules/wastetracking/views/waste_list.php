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
                            <th>Item Name</th>
                            <th>Quantity Wasted</th>
                            <th>Reason</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($waste_records)) { $sl = 1; foreach($waste_records as $row) { ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo $row->item_name; ?></td>
                            <td><?php echo $row->quantity; ?></td>
                            <td><?php echo $row->waste_reason; ?></td>
                            <td><?php echo $row->waste_date; ?></td>
                        </tr>
                        <?php } } else { ?>
                        <tr><td colspan="5" class="text-center">No waste records logged</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

