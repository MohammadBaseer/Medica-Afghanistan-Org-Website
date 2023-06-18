<?php
 if (isset($_POST['update']))
 {
$legal_case_id = $_POST ['legal_case_id'];
$legal_case_title   = $_POST ['legal_case_title'];
$legal_case_dec = $_POST ['legal_case_dec'];

if (mysqli_query($conn, "UPDATE en_legal_case SET 
  legal_case_title = '$legal_case_title',
  legal_case_dec   = '$legal_case_dec'
   WHERE legal_case_id = '$legal_case_id' ")){
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
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['legal_case_id']; ?>">
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
                    <label for="exampleInputEmail1">Case Title</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="legal_case_id" value="<?php echo $row1['legal_case_id']; ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" required name="legal_case_title" value="<?php echo $row1['legal_case_title']; ?>">
                  </div>
                 <div class="form-group">
                        <label>Case Description</label>
                        <textarea class="form-control" rows="4" placeholder="Enter description ..." name="legal_case_dec" required><?php echo $row1['legal_case_dec']; ?></textarea>
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
 
<!-- ========================edit modal end ============================================== -->