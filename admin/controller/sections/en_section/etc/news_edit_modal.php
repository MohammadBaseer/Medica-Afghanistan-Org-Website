 

<?php
 if (isset($_POST['update']))
 {

$date = date('d M yy');
$news_id = $_POST ['news_id'];
$news_title   = $_POST ['news_title']; 
$news_des = $_POST ['news_des'];
$news_pic = $_FILES ['news_pic']['name'];
$lang = $_POST ['lang'];



$news_pic = time().'_'.basename($_FILES["news_pic"]["name"]);
$news_pic = $news_pic;
$image_url="data_pic/".$news_pic;
move_uploaded_file($_FILES['news_pic']['tmp_name'],$image_url);


if (!empty($_FILES["news_pic"]["name"])) {

if (mysqli_query($conn, "UPDATE en_home_page_news SET 
  news_title = '$news_title',
  news_dec   = '$news_des',
  news_image = '$news_pic'
   WHERE en_webhome_id = '$news_id' ")){
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
// $news_pic = time().'_'.basename($_FILES["news_pic"]["name"]);
// $news_pic = $news_pic;
// $image_url="data_pic/".$news_pic;
// move_uploaded_file($_FILES['news_pic']['tmp_name'],$image_url);
if (mysqli_query($conn, "UPDATE en_home_page_news SET 
  news_title = '$news_title',
  news_dec   = '$news_des',
  web_sec ='$lang'
   WHERE en_webhome_id = '$news_id' ")){
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
        <div class="modal fade" id="modal-edit<?php echo $row1['en_webhome_id']; ?>" style="text-align: left;">
        <div class="modal-dialog modal-lg">
          <!-- moded for edid -->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Record <?php echo $row1['news_image'] ; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data">

<div class="modal-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="hidden" class="form-control" id="exampleInputEmail1"  name="news_id" value="<?php echo $row1['en_webhome_id']; ?>">

                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="news_title" value="<?php echo $row1['news_title']; ?>">
                  </div>
                 <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor2" class="form-control" rows="4" placeholder="Enter description ..." name="news_des" ><?php echo $row1['news_dec']; ?></textarea>
                      </div>



<div class="row">

                      <div class="col-sm-3"><img id="img_thumb" src="<?php echo "data_pic/".$row1['news_image']; ?>" class="img img-fluid"></div>
                  <div class="form-group col-sm-8">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="news_pic">
                      </div>
                    </div>
                  </div>
</div>
<label>Select Website Section</label>
<div class="form-check">
  <input class="form-check-input" type="radio" value="English" name="lang" id="flexRadioDefault1" <?php if ($row1['web_sec'] == 'English'){ echo "checked";}?> >
    
 
  <label class="form-check-label" for="flexRadioDefault1">
  English/انگلیسی
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="Dari" name="lang" id="flexRadioDefault2" <?php if ($row1['web_sec'] == 'Dari'){ echo "checked";}?>>
  <label class="form-check-label" for="flexRadioDefault2">
  Dari/دری
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="Pashto" name="lang" id="flexRadioDefault2" <?php if ($row1['web_sec'] == 'Pashto'){ echo "checked";}?>>
  <label class="form-check-label" for="flexRadioDefault2">
    Pashto/پشتوto
  </label>
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
    
<!-- ========================edit modal end ============================================== -->