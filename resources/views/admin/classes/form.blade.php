{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$class->id}}">
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên lớp:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="classes_name" placeholder="Tên lớp" value="{{old('classes_name', $class->classes_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('classes_name')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Sĩ số:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="classes_student_numbers" placeholder="Sĩ số" value="{{old('classes_student_numbers', $class->classes_student_numbers)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('classes_student_numbers')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Khóa:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="classes_course" placeholder="Khóa" value="{{old('classes_course', $class->classes_course)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('classes_course')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<div class="col-lg-6">
		<div class="row">
			<label class="col-4 col-form-label">
				Hoạt động
			</label>
			<div class="col-8">
				<span class="m-switch m-switch--icon m-switch--success">
					<label>
						<input type="checkbox" checked="checked" name="classes_active">
						<span></span>
					</label>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="m-portlet__foot m-portlet__foot--fit">
	<div class="m-form__actions">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-10">
				<button type="submit" class="btn btn-success">
					Lưu lại
				</button>
				<button type="reset" class="btn btn-secondary">
					Hủy bỏ
				</button>
			</div>
		</div>
	</div>
</div>
<br>
