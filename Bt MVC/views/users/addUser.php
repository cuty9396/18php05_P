
<section class="content">
  <div class="row">
  	<div class="col-md-4">
	<h1>Add User</h1>
	<form name="AddUser" action="#" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Tên: </label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput">Email: </label>
			<input type="text" name="email" class="form-control"></p>
		</div>
		<div class="form-group">
			<label for="exampleFormControlFile1">Avatar: </label>
			<input type="file" name="image" class="form-control-file" aria-describedby="fileHelp">
			<small id="fileHelp" class="form-text text-muted"> Nếu không chọn sẽ dùng ảnh mặc định làm hình đại diện.</small>
		</div>
		<p><input type="submit" name="add_user" value="Add user" class="btn btn-success"></p>
	</form>
	</div>
  </div>
</section>