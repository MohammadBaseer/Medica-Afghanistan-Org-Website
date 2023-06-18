<?php

 if (isset($_POST['update']))
 {
$letracy_pro_id = $_POST ['letracy_pro_id'];
$letracy_pro_titile   = $_POST ['letracy_pro_titile'];
$press_release_file = $_FILES ['letracy_pro_files']['name'];
$mfile = $_POST['attachment'];

$target_file = time().'_'.basename($_FILES["letracy_pro_files"]["name"]);
$fileupload ="data_files/letracy_pro_files/".$target_file;
// ======================


if (!empty($_FILES["letracy_pro_files"]['name'])) {

if (file_exists("data_files/letracy_pro_files/".$mfile)) {
    @unlink("data_files/letracy_pro_files/".$mfile);



mysqli_query($conn, "UPDATE en_capacity_letracy_pro SET 
  letracy_pro_titile = '$letracy_pro_titile',
  letracy_pro_files   = '$target_file'
   WHERE letracy_pro_id = '$letracy_pro_id' ");

move_uploaded_file($_FILES["letracy_pro_files"]["tmp_name"], $fileupload);

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



if (mysqli_query($conn, "UPDATE en_capacity_letracy_pro SET 
  letracy_pro_titile = '$letracy_pro_titile',
  letracy_pro_files   = '$file'
   WHERE letracy_pro_id = '$letracy_pro_id' ")) {


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

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['letracy_pro_id']; ?>">
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
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="letracy_pro_id" value="<?php echo $row1['letracy_pro_id']; ?>">

                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['letracy_pro_files']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" required name="letracy_pro_titile" value="<?php echo $row1['letracy_pro_titile']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="letracy_pro_files">
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