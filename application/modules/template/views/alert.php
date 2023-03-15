<?php
if($msg = $this->session->flashdata('msg')){
  $msg_class = $this->session->flashdata('msg_class');
  ?>
<div class="card-block col-sm-12">
    <div
        class="alert <?php echo $msg_class; ?>"
        id="msg"
        data-from="top"
        data-align="text-center">
        <strong><?php echo $msg; ?></strong>
    </div>
</div>
<?php } ?>

<script type="text/javascript">
    setTimeout(function() {
        document.addEventListener('DOMContentLoaded', function() {  
            document.getElementById('msg').style.display = 'none';
        });
    }, 4000);
</script>