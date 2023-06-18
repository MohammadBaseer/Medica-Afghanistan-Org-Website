<?php


 if (isset($_POST['update']))
 {
$legal_act_id = $_POST ['legal_act_id'];
$legal_act_title   = $_POST ['legal_act_title'];
$legal_act_files = $_FILES ['legal_act_files']['name'];
$mfile = $_POST['attachment'];
"<br><br>";
$target_file = time().'_'.basename($_FILES["legal_act_files"]["name"]);
$fileupload ="data_files/legal_act_files/".$target_file;
// ======================


if (!empty($_FILES["legal_act_files"]['name'])) {

if (file_exists("data_files/legal_act_files/".$mfile)) {
    @unlink("data_files/legal_act_files/".$mfile);



mysqli_query($conn, "UPDATE en_legal_activities SET 
  legal_act_title = '$legal_act_title',
  legal_act_files   = '$target_file'
   WHERE legal_act_id = '$legal_act_id' ");

move_uploaded_file($_FILES["legal_act_files"]["tmp_name"], $fileupload);

?>

   <script>
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
      Toast.fire({
        type: 'success',
        title: 'Update successfully.'
      })
    });
</script>

<?php
  
}

}
else
{
$file = $mfile;



if (mysqli_query($conn, "UPDATE en_legal_activities SET 
  legal_act_title = '$legal_act_title',
  legal_act_files   = '$file'
   WHERE legal_act_id = '$legal_act_id' ")) {


?>

   <script>
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
      Toast.fire({
        type: 'success',
        title: 'Update successfully.'
      })
    });
</script>

<?php

}
else
{
  $err = "field";
}

}

}

?>



<div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['legal_act_id']; ?>">
<div class="modal-dialog modal-lg">
<!-- moded for edid -->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title"><br>Edit Record</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>



<form method="POST" enctype="multipart/form-data">

<div class="modal-body">
<div class="form-group">
<label>Position Paper Title</label>



<!-- ==================================================== -->
<input type="hidden" class="form-control"  name="legal_act_id" value="<?php echo $row1['legal_act_id']; ?>">
<input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['legal_act_files']; ?>">
<!-- ==================================================== -->
<input type="text" class="form-control" id="exampleInputEmail1" required name="legal_act_title" value="<?php echo $row1['legal_act_title']; ?>">
<!-- ==================================================== -->




</div>

<div class="form-group">
<label for="exampleInputFile">Attachment</label>
<div class="input-group">
<div class="custom-file">
<!-- ==================================================== -->
<input type="file" class="form-control-file"  name="legal_act_files">
<!-- ==================================================== -->
</div>

</div>
</div>




</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!-- ==================================================== -->
<button type="submit" class="btn btn-primary" name="update">Update</button>
<!-- ==================================================== -->
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>