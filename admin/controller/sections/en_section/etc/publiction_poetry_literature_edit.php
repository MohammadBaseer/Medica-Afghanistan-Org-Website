<?php

 if (isset($_POST['update']))
 {
$poetry_literature_id = $_POST ['poetry_literature_id'];
$poetry_literature_title   = $_POST ['poetry_literature_title'];
$poetry_literature_files = $_FILES ['poetry_literature_files']['name'];
$mfile = $_POST['attachment'];

$target_file = time().'_'.basename($_FILES["poetry_literature_files"]["name"]);
$fileupload ="data_files/poetry_literature_files/".$target_file;
// ======================


if (!empty($_FILES["poetry_literature_files"]['name'])) {

if (file_exists("data_files/poetry_literature_files/".$mfile)) {
    @unlink("data_files/poetry_literature_files/".$mfile);



mysqli_query($conn, "UPDATE en_pub_poetry_literature SET 
  poetry_literature_title = '$poetry_literature_title',
  poetry_literature_files   = '$target_file'
   WHERE poetry_literature_id = '$poetry_literature_id' ");

move_uploaded_file($_FILES["poetry_literature_files"]["tmp_name"], $fileupload);

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



if (mysqli_query($conn, "UPDATE en_pub_poetry_literature SET 
  poetry_literature_title = '$poetry_literature_title',
  poetry_literature_files   = '$file'
   WHERE poetry_literature_id = '$poetry_literature_id' ")) {


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

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['poetry_literature_id']; ?>">
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
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="poetry_literature_id" value="<?php echo $row1['poetry_literature_id']; ?>">

                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['poetry_literature_files']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" required name="poetry_literature_title" value="<?php echo $row1['poetry_literature_title']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="poetry_literature_files">
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