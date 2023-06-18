<?php

 if (isset($_POST['update']))
 {
$legal_position_id = $_POST ['legal_position_id'];
$legal_position_title   = $_POST ['legal_position_title'];
$position_file = $_FILES ['position_file']['name'];
$mfile = $_POST['attachment'];

$target_file = time().'_'.basename($_FILES["position_file"]["name"]);
$fileupload ="data_files/positions_files/".$target_file;
// ======================


if (!empty($_FILES["position_file"]['name'])) {

if (file_exists("data_files/positions_files/".$mfile)) {
    @unlink("data_files/positions_files/".$mfile);



mysqli_query($conn, "UPDATE en_legal_position SET 
  legal_position_title = '$legal_position_title',
  legal_position_file   = '$target_file'
   WHERE legal_position_id = '$legal_position_id' ");

move_uploaded_file($_FILES["position_file"]["tmp_name"], $fileupload);

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



if (mysqli_query($conn, "UPDATE en_legal_position SET 
  legal_position_title = '$legal_position_title',
  legal_position_file   = '$file'
   WHERE legal_position_id = '$legal_position_id' ")) {


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

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['legal_position_id']; ?>">
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
                    <label for="exampleInputEmail1">Position Paper Title</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="legal_position_id" value="<?php echo $row1['legal_position_id']; ?>">

                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['legal_position_files']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" required name="legal_position_title" value="<?php echo $row1['legal_position_title']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="position_file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>

                    </div>
                  </div>

            


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