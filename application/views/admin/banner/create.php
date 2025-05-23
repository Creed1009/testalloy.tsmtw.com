<div class="row">
  <?php $attributes = array('class' => 'banner', 'id' => 'banner'); ?>
  <?php echo form_open('admin/banner/insert' , $attributes); ?>
  <div class="col-md-12">
    <div class="form-group">
      <button type="submit" class="btn btn-primary">建立</button>
      <a href="<?php echo base_url().'admin/'.$this->uri->segment(2) ?>" class="btn btn-info hidden-print"><i class="fa fa-mail-reply"></i> 返回上一頁</a>
      <hr>
    </div>
    <div class="content-box-large">

      <div class="row">
        <div class="col-md-6">
          <div class="form-horizontal">
            <div class="form-group">
              <label for="banner_name" class="col-sm-3 control-label">＊標題：</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="banner_name" id="banner_name" required>
              </div>
            </div>
            <div class="form-group">
              <label for="banner_on_the_shelf" class="col-sm-3 control-label">＊上架時間：</label>
              <div class="col-sm-9">
                <input type="text" class="form-control datepicker" name="banner_on_the_shelf" id="banner_on_the_shelf" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label for="banner_off_the_shelf" class="col-sm-3 control-label">＊下架時間：</label>
              <div class="col-sm-9">
                <input type="text" class="form-control datepicker" name="banner_off_the_shelf" id="banner_off_the_shelf" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <label for="banner_status" class="col-sm-3 control-label">是否啟用：</label>
              <div class="col-sm-9">
                <label class="radio-inline">
                  <input type="radio" name="banner_status" id="banner_status1" value="1" checked> 是
                </label>
                <label class="radio-inline">
                  <input type="radio" name="banner_status" id="banner_status2" value="2"> 否
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="banner_link" class="col-sm-3 control-label">＊連結：</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="banner_link" id="banner_link" value="#" required>
                <small>請填寫完整網址，包含http:// 或是 https:// 如果不要有連結，請輸入#</small>
              </div>
            </div>
            <div class="form-group">
              <label for="banner_sort" class="col-sm-3 control-label">＊順序：</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="banner_sort" id="banner_sort" value="1" required>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="banner_vertical_alignment" class="col-sm-3 control-label">＊垂直對齊比例：</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="banner_vertical_alignment" id="banner_vertical_alignment" value="50" required>
                <span>值為0~100，0為置頂，50為置中，100為置底</span>
              </div>
            </div> -->
            <input type="hidden" name="banner_vertical_alignment" value="0">

            <div class="form-group">
              <label for="banner_content" class="col-sm-3 control-label">＊圖片：</label>
              <div class="col-sm-9">
                <img src="/assets/uploads/no-image.jpg" id="banner_image_preview" class="img-responsive">

                <input type="hidden" id="banner_image" name="banner_image">

                <a href="/assets/admin/filemanager/dialog.php?type=1&field_id=banner_image&relative_url=1&akey=NshstuPrivateKey" class="btn btn-primary fancybox" type="button" style="margin-top: 5px;">選擇圖片</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  <?php echo form_close() ?>
</div>

<script src="/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> -->
<script src="/node_modules/jquery-validation/dist/localization/messages_zh_TW.js"></script>
<script>
$.validator.setDefaults({
    submitHandler: function() {
        document.getElementById("banner").submit();
        //alert("submitted!");
    }
});
$(document).ready(function() {
  $("#banner").validate({});
});
</script>