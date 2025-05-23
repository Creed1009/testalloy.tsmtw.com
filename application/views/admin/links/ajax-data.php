<?php // echo $this->ajax_pagination_admin->create_links(); ?>
<?php $attributes = array('class' => 'link', 'id' => 'link'); ?>
<?php echo form_open('admin/links/multiple_action' , $attributes); ?>
<div class="form-group hide">
  <div class="form-inline">
    <label><input type="checkbox" id="checkAll"> 全選</label>
    <select name="action" id="action" class="form-control">
      <option value="0">--動作--</option>
      <option value="delete">刪除</option>
    </select>
    <button type="submit" class="btn btn-primary">操作</button>
  </div>
</div>

<table class="table table-striped table-bordered table-hover" id="data-table">
  <thead>
    <tr class="info">
      <!-- <th></th> -->
      <th>分類</th>
      <th>標題</th>
      <th>連結</th>
      <th>操作</th>
    </tr>
  </thead>
  <?php if(!empty($links)): foreach ($links as $data): ?>
    <tr>
      <!-- <td class="text-center"><input type="checkbox" name="link_id[]" value="<?php echo $data['link_id'] ?>"></td> -->
      <td><?php echo get_link_category_name($data['link_category']) ?></td>
      <td><?php echo $data['link_title'] ?></td>
      <td><?php echo $data['link_href'] ?></td>
      <td>
        <a href="/admin/links/edit/<?php echo $data['link_id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
        <a href="/admin/links/delete/<?php echo $data['link_id'] ?>" class="btn btn-danger btn-sm" onClick="return confirm('您確定要刪除嗎?')"><i class="fa fa-trash-o"></i></a>
      </td>
    </tr>
  <?php endforeach ?>
  <?php else: ?>
    <!-- <tr>
      <td colspan="15"><center>對不起, 沒有資料 !</center></td>
    </tr> -->
  <?php endif; ?>
</table>
<?php echo form_close() ?>

<script>
$(document).ready(function() {
  $("#checkAll").click(function(){
    $('#data-table input:checkbox').not(this).prop('checked', this.checked);
  });
});
</script>

<script>
$(document).ready(function() {
  $('#data-table').DataTable( {
    // "order": [[ 0, "desc" ]],
    stateSave: true,
    ordering: false,
    bFilter: false,
    // bLengthChange: false,
    "dom": '<"top"iflp<"clear">>',
    "language": {
      "processing":   "處理中...",
      "loadingRecords": "載入中...",
      "lengthMenu":   "顯示 _MENU_ 項結果",
      "zeroRecords":  "沒有符合的結果",
      "emptyTable":   "沒有資料",
      "info":         "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
      "infoEmpty":    "顯示第 0 至 0 項結果，共 0 項",
      "infoFiltered": "(從 _MAX_ 項結果中過濾)",
      "infoPostFix":  "",
      "search":       "搜尋:",
      "paginate": {
          "first":    "第一頁",
          "previous": "上一頁",
          "next":     "下一頁",
          "last":     "最後一頁"
      },
      "aria": {
          "sortAscending":  ": 升冪排列",
          "sortDescending": ": 降冪排列"
      }
    }
  });
});
</script>