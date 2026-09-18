<?php 
$flash_message = $this->session->flashdata('message');
if ($flash_message) { 
    $this->session->unset_userdata('message');
?>
<script>
 setTimeout(function () {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
                   
        };
        toastr.success('<?php echo $flash_message ?>', 'Success');

    }, 1300);
</script>

<?php } ?>
<?php 
$flash_exception = $this->session->flashdata('exception');
if ($flash_exception) { 
    $this->session->unset_userdata('exception');
?>
<script>
 setTimeout(function () {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
                  
        };
        toastr.error('<?php echo $flash_exception ?>', 'Something Wrong');

    }, 1300);
</script>

<?php } ?>
<?php if (validation_errors()) { ?>

<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo validation_errors() ?>
</div>
<?php } ?>