<?php // echo $this->ajax_pagination_admin->create_links(); ?>
<table class="table table-striped table-bordered table-hover" id="data-table">
  <thead>
    <tr class="info">
      <th>帳號</th>
      <th>E-mail</th>
      <th>角色</th>
      <!-- <th>狀態</th> -->
      <th>操作</th>
    </tr>
  </thead>
  <?php if(!empty($users)): foreach($users as $user): ?>
    <tr>
      <td><?php echo $user['username'] ?></td>
      <td><?php echo $user['email'] ?></td>
      <td>
        <?php if(!empty(get_user_group($user['user_id']))){ foreach(get_user_group($user['user_id']) as $group){ ?>
          <?php echo '['.$group['description'].']' ?>
        <?php }} ?>
      </td>
      <!-- <td>
        <?php echo ($user['active']) ? anchor("admin/auth/deactivate/".$user['user_id'], '啟用', 'class="btn btn-success btn-sm"') : anchor("admin/auth/activate/". $user['user_id'], '停用', 'class="btn btn-danger btn-sm"');?>
      </td> -->
      <td>
        <a href="/admin/auth/edit_user/<?php echo $user['user_id'] ?>" class="btn btn-info btn-sm">
          <i class="fa fa-edit"></i> 編輯
        </a>
        <!-- <a href="/admin/auth/change_password/<?php echo $user['user_id'] ?>" class="btn btn-info btn-sm">
          <i class="fa fa-edit"></i> 修改密碼
        </a> -->
      </td>
    </tr>
  <?php endforeach ?>
  <?php else: ?>
    <!-- <tr>
      <td colspan="15"><center>對不起, 沒有資料 !</center></td>
    </tr> -->
  <?php endif; ?>
</table>

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
    // ordering: false,
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