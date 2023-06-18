<?php

 if (isset($_POST['update']))
 {
$evaw_report_id = $_POST ['evaw_report_id'];
$evaw_reports_title   = $_POST ['evaw_reports_title'];
$press_release_file = $_FILES ['evaw_reports_files']['name'];
$mfile = $_POST['attachment'];

$target_file = time().'_'.basename($_FILES["evaw_reports_files"]["name"]);
$fileupload ="data_files/evaw_reports_files/".$target_file;
// ======================


if (!empty($_FILES["evaw_reports_files"]['name'])) {

if (file_exists("data_files/evaw_reports_files/".$mfile)) {
    @unlink("data_files/evaw_reports_files/".$mfile);



mysqli_query($conn, "UPDATE en_evaw_reports SET 
  evaw_reports_title = '$evaw_reports_title',
  evaw_reports_files   = '$target_file'
   WHERE evaw_report_id = '$evaw_report_id' ");

move_uploaded_file($_FILES["evaw_reports_files"]["tmp_name"], $fileupload);

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



if (mysqli_query($conn, "UPDATE en_evaw_reports SET 
  evaw_reports_title = '$evaw_reports_title',
  evaw_reports_files   = '$file'
   WHERE evaw_report_id = '$evaw_report_id' ")) {


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

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['evaw_report_id']; ?>">
        <div class="modal-dialog modal-lg">
          <!-- moded for edid -->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><br>



              Edit Record</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data">

<div class="modal-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Memo Title</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="evaw_report_id" value="<?php echo $row1['evaw_report_id']; ?>">

                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['evaw_reports_files']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" required name="evaw_reports_title" value="<?php echo $row1['evaw_reports_title']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="evaw_reports_files">
                      </div>

                    </div>
                  </div>

                <!--  <div class="form-group">
                        <label>Case Description</label>
                        <textarea class="form-control" rows="4" placeholder="Enter description ..." name="memo_file" required><?php// echo $row1['evaw_reports_files']; ?></textarea>
                      </div> -->


            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php echo $err; ?>
<!-- ========================edit modal end ============================================== -->