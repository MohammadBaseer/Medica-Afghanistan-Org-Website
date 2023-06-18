<?php


 if (isset($_POST['update']))
 {
$record_id = $_POST ['record_id'];
$title   = $_POST ['title'];
$files = $_FILES ['files']['name'];
$mfile = $_POST['attachment'];
"<br><br>";
$target_file = time().'_'.basename($_FILES["files"]["name"]);
$fileupload ="data_files/files/".$target_file;
// ======================


if (!empty($_FILES["files"]['name'])) {

if (file_exists("data_files/files/".$mfile)) {
    @unlink("data_files/files/".$mfile);



mysqli_query($conn, "UPDATE en_web_records SET 
  title = '$title',
  files   = '$target_file'
   WHERE record_id = '$record_id' ");

move_uploaded_file($_FILES["files"]["tmp_name"], $fileupload);

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



if (mysqli_query($conn, "UPDATE en_web_records SET 
  title = '$title',
  files   = '$file'
   WHERE record_id = '$record_id' ")) {


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



<div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['record_id']; ?>">
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
<input type="hidden" class="form-control"  name="record_id" value="<?php echo $row1['record_id']; ?>">
<input type="hidden" class="form-control"  name="attachment" value="<?php echo $row1['files']; ?>">
<!-- ==================================================== -->
<input type="text" class="form-control" required name="title" value="<?php echo $row1['title']; ?>">
<!-- ==================================================== -->
</div>

<div class="form-group">
<label>Position Paper Title</label>
<select class="form-control" name="page_section">
<option value="">Select Page Section</option>
<optgroup label="Psychosocial Counseling">
<option value="en_pshp_activities">Activities</option>
</optgroup>


<optgroup label="Legal Services">
<option value="en_position_paper">Position Paper</option>
<option value="en_legal_memo">Legal Memo</option>
<option value="en_lap_activities">Activities</option>
</optgroup>

<optgroup label="Advocacy">
<option value="en_press_release">Press Release</option>
<option value="en_evaw_report">EVAW Reports</option>
<option value="en_petitions">Petitions</option>
<option value="en_statment">Statements</option>
<option value="en_other_doc">Other Documents</option>
</optgroup>

<optgroup label="News & Events">
<option value="en_newsletters">Newsletters</option>
</optgroup>

<optgroup label="Capacity Building">
<option value="en_trainings">Trainings</option>
<option value="en_letracy">Letracy Program</option>
</optgroup>

<optgroup label="Publications">
<option value="en_annual_reports">Annual Reports</option>
<option value="en_researches">Researches and Manuals</option>
<option value="en_booklet">Booklet and Magazines</option>
<option value="en_poetry">Poetry and Literature</option>
<option value="en_interviews">Interviews</option>
</optgroup>
  </select>



</div>

<div class="form-group">
<label for="exampleInputFile">Attachment</label>
<div class="input-group">
<div class="custom-file">
<!-- ==================================================== -->
<input type="file" class="form-control-file"  name="files">
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