 

<?php


 if (isset($_POST['update']))
 {
$pro_id = $_POST ['pro_id'];
$pro_title   = $_POST ['pro_title'];
$pro_des = $_POST ['pro_des'];
$pro_pic = $_FILES ['pro_pic']['name'];

$pro_pic = time().'_'.basename($_FILES["pro_pic"]["name"]);
$pro_pic = $pro_pic;
$image_url="data_pic/".$pro_pic;
move_uploaded_file($_FILES['pro_pic']['tmp_name'],$image_url);


if (!empty($_FILES["pro_pic"]["name"])) {

if (mysqli_query($conn, "UPDATE en_home_page_pro SET 
  pro_title = '$pro_title',
  pro_dec   = '$pro_des',
  pro_image = '$pro_pic'
   WHERE en_webhome_pr_id = '$pro_id' ")){
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
else{
// $pro_pic = time().'_'.basename($_FILES["pro_pic"]["name"]);
// $pro_pic = $pro_pic;
// $image_url="data_pic/".$pro_pic;
// move_uploaded_file($_FILES['pro_pic']['tmp_name'],$image_url);
if (mysqli_query($conn, "UPDATE en_home_page_pro SET 
  pro_title = '$pro_title',
  pro_dec   = '$pro_des'
   WHERE en_webhome_pr_id = '$pro_id' ")){
}
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
?>

        <div style="text-align: left;" class="modal fade" id="modal-edit<?php echo $row1['en_webhome_pr_id']; ?>">
        <div class="modal-dialog modal-lg">
          <!-- moded for edid -->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><br>

<?php 
// echo "<pre>";
// print_r($row1);
// echo "</pre>";

 ?>

              Edit Record</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data">

<div class="modal-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="pro_id" value="<?php echo $row1['en_webhome_pr_id']; ?>">
                    <input type="text" class="form-control" id="exampleInputEmail1" required name="pro_title" value="<?php echo $row1['pro_title']; ?>">
                  </div>
                 <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor2" class="form-control" rows="4" placeholder="Enter description ..." name="pro_des" required><?php echo $row1['pro_dec']; ?></textarea>
                      </div>



<div class="row">

                      <div class="col-sm-3"><img id="img_thumb" src="<?php echo "data_pic/".$row1['pro_image']; ?>" class="img img-fluid"></div>
                  <div class="form-group col-sm-8">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="pro_pic">
                      </div>
                    </div>
                  </div>
</div>

                  <!-- ================ -->
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
    <?php 



     ?>
<!-- ========================edit modal end ============================================== -->