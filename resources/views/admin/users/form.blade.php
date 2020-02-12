{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$user->id}}">
</div>
<div class="m-portlet__body">
	<div class="form-group m-form__group row">
		<div class="col-lg-6">
			<label for="email">
				Email
			</label>
			<input type="email" class="form-control m-input" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email', $user->email)}}">
			@if(count($errors) > 0)
				<span class="text-danger">{{$errors->first('email')}}</span>
			@endif
		</div>
		<div class="col-lg-6">
			<label for="name">
				Họ và tên
			</label>
			<input type="text" class="form-control m-input" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{old('name', $user->name)}}">
			@if(count($errors) > 0)
				<span class="text-danger">{{$errors->first('name')}}</span>
			@endif
		</div>
	</div>
	<div class="form-group m-form__group row">
		<div class="col-lg-6">
			<label for="password">
				Password
			</label>
			<input type="password" class="form-control m-input" name="password" id="password" placeholder="Password" value=""> <!-- {{old('password', $user->password)}} -->
			@if(count($errors) > 0)
				<span class="text-danger">{{$errors->first('password')}}</span>
			@endif
		</div>
		<div class="col-lg-6">
			<label for="users_role_id">
				Chọn vai trò
			</label>
				<select class="form-control m-input" id="users_role_id" name="users_role_id">
					<option value="1">
						User
					</option>
					<option value="2">
						Teacher
					</option>
					<option value="3">
						Administrator
					</option>
				</select>
		</div>
	</div>
	<div class="form-group m-form__group row">
		<div class="col-lg-6">
			<label for="confirmpassword">
				Confirm Password
			</label>
			<input type="password" class="form-control m-input" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" value=""><!-- {{old('confirmpassword', $user->password)}} -->
			@if(count($errors) > 0)
				<span class="text-danger">{{$errors->first('confirmpassword')}}</span>
			@endif
		</div>
		<div class="col-lg-6">
			<label for="users_birthday">
				Ngày sinh
			</label>
			<input class="form-control m-input" type="date" value="2018-10-20" name="users_birthday" id="users_birthday" value="{{old('users_birthday', $user->users_birthday)}}">
		</div>
	</div>
	<div class="form-group m-form__group row">
		<div class="col-lg-6">
			<label for="users_phone">
				SDT
			</label>
			<input type="text" class="form-control m-input" name="users_phone" id="users_phone" aria-describedby="emailHelp" placeholder="Enter phone" value="{{old('users_phone', $user->users_phone)}}">
		</div>
		<div class="col-lg-6" style="padding-top: 25px;">
			<div class="row">
				<label class="col-4 col-form-label">
					Hoạt động
				</label>
				<div class="col-8">
					<span class="m-switch m-switch--icon m-switch--success">
						<label>
							<input type="checkbox" checked="checked" name="users_active">
							<span></span>
						</label>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group m-form__group row">
		<div class="col-lg-6">
			
			<label for="users_address">
				Địa chỉ
			</label>
			<textarea class="form-control m-input" name="users_address" id="users_address" rows="5">{{old('users_address', $user->users_address)}}</textarea>
			<br>
			
			
		</div>
		<div class="col-lg-6">
			<label for="exampleInputPassword1">
				Avatar
			</label>
			<div class="m-dropzone dropzone m-dropzone--default dz-clickable" action="http://localhost:8000/admin/upload" id="m-dropzone-logo">
				<div class="m-dropzone__msg dz-message needsclick">
					<h3 class="m-dropzone__msg-title">
						Kéo thả file ảnh hoặc click để tải lên
					</h3>
					<span class="m-dropzone__msg-desc">
						Hỗ trợ các file ảnh PNG, JPEG, JPG
					</span>
				</div>
				<input name="users_avatar" type="file" class="cover" accept="image/*" value="{{old('users_avatar',$user->users_avatar)}}"/>
			</div>
		</div>
	</div>
	
</div>
<div class="m-portlet__foot m-portlet__foot--fit">
	<div class="m-form__actions">
		<button type="submit" class="btn btn-primary">
			Lưu lại
		</button>
		<button type="reset" class="btn btn-secondary">
			Hủy bỏ
		</button>
	</div>
</div>
<br>
