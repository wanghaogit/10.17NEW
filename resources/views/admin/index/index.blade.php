@extends("admin.base.base")


<!-- 主题内容 -->
 @section('content')
	<h2 style="color:red;">网站管理后台</h2>
		<button onclick="Modal.alert(
		  {
		    msg: '内容',
		    title: '标题',
		    btnok: '确定',
		    btncl:'取消'
		  });">12314
		</button>
		<button onclick="javascript:doUpdate()">实验</button>
	<script type="text/javascript">
		function doUpdate()
		{
			var editForm = document.editForm;
			editForm.action = "user_list/"+id;
			var phoneValue = $("#userPhone"+id).html();
			var emailValue = $("#userEmail"+id).html();
			$("#updatePhone").val(phoneValue);
			$("#updateEmail").val(emailValue);
		}
	</script>
	<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
       		<form action="" method="post" name="editForm">
       			<input type="hidden" name="_token" value="{{ csrf_token() }}">
       			<input type="hidden" name="_method" value="patch">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title" id="myModalLabel">修改用户密码</h4>
	            </div>
	            <div class="modal-body">
					<div class="widget-main">
						<div>
							<label for="form-field-8">手机号</label>
							<input class="form-control" name="phone" id="updatePhone">
						</div>
						
					</div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	                <button type="submit" class="btn btn-primary">提交更改</button>
	            </div>
	        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
@endsection
<!-- 结尾内容 -->
@section('myscript')

	
@endsection