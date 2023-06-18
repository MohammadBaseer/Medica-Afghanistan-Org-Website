<?php

 if (isset($_POST['update']))
 {
$legal_statement_id = $_POST ['legal_statement_id'];
$legal_statement_title   = $_POST ['legal_statement_title'];
$statement_file = $_FILES ['statement_file']['name'];
$mfile = $_POST['attachment'];

$target_file = time().'_'.basename($_FILES["statement_file"]["name"]);
$fileupload ="data_files/statement_files/".$target_file;
// ======================
// $err = "isset";

if (!empty($_FILES["statement_file"]['name'])) {



if (file_exists("data_files/statement_files/".$mfile)) {
    @unlink("data_files/statement_files/".$mfile);

 $err = "if";

mysqli_query($conn, "UPDATE en_legal_page_statement SET 
  legal_statement_title = '$legal_statement_title',
  legal_statement_file   = '$target_file'
   WHERE en_legal_statement_id = '$legal_statement_id' ");

move_uploaded_file($_FILES["statement_file"]["tmp_name"], $fileupload);
$err = "changes";
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

$err = "note changes";


if (mysqli_query($conn, "UPDATE en_legal_page_statement SET 
  legal_statement_title = '$legal_statement_title',
  legal_statement_file   = '$file'
   WHERE en_legal_statement_id = '$legal_statement_id' ")) {

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
  $err = "Error: " . $sql . "<br>" . mysqli_error($conn);
}





}

}

?>

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['en_legal_statement_id']; ?>">
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
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="legal_statement_id" value="<?php echo $row1['en_legal_statement_id']; ?>">

<input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['legal_statement_file']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" required name="legal_statement_title" value="<?php echo $row1['legal_statement_title']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="statement_file">
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