<?php

 if (isset($_POST['update']))
 {
$other_legal_doc_id = $_POST ['other_legal_doc_id'];
$other_legal_doc_title   = $_POST ['other_legal_doc_title'];
$other_legal_doc_files = $_FILES ['other_legal_doc_files']['name'];
$mfile = $_POST['attachment'];

$target_file = time().'_'.basename($_FILES["other_legal_doc_files"]["name"]);
$fileupload ="data_files/other_legal_doc_files/".$target_file;
// ======================


if (!empty($_FILES["other_legal_doc_files"]['name'])) {

if (file_exists("data_files/other_legal_doc_files/".$mfile)) {
    @unlink("data_files/other_legal_doc_files/".$mfile);



mysqli_query($conn, "UPDATE en_other_legal_doc SET 
  other_legal_doc_title = '$other_legal_doc_title',
  other_legal_doc_files   = '$target_file'
   WHERE other_legal_doc_id = '$other_legal_doc_id' ");

move_uploaded_file($_FILES["other_legal_doc_files"]["tmp_name"], $fileupload);

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



if (mysqli_query($conn, "UPDATE en_other_legal_doc SET 
  other_legal_doc_title = '$other_legal_doc_title',
  other_legal_doc_files   = '$file'
   WHERE other_legal_doc_id = '$other_legal_doc_id' ")) {


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

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['other_legal_doc_id']; ?>">
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
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="other_legal_doc_id" value="<?php echo $row1['other_legal_doc_id']; ?>">

                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="attachment" value="<?php echo $row1['other_legal_doc_files']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" required name="other_legal_doc_title" value="<?php echo $row1['other_legal_doc_title']; ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputFile">Attachment</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="other_legal_doc_files">
                      </div>

                    </div>
                  </div>

                <!--  <div class="form-group">
                        <label>Case Description</label>
                        <textarea class="form-control" rows="4" placeholder="Enter description ..." name="memo_file" required><?php// echo $row1['other_legal_doc_files']; ?></textarea>
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

<!-- ========================edit modal end ============================================== -->