{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$subject->id}}">
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên môn học <span class="text-danger">*</span>
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="subjects_name" placeholder="Tên môn học" value="{{old('subjects_name', $subject->subjects_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('subjects_name')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Số tín chỉ:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="subjects_credits" placeholder="Số tín chỉ" value="{{old('subjects_credits', $subject->subjects_credits)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('subjects_credits')}}</span>
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
						<input type="checkbox" checked="checked" name="subjects_active">
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
