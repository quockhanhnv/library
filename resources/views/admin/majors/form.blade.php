{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$major->majors_id}}">
</div>
<div class="form-group m-form__group row">
		<label class="col-lg-2 col-form-label">
			Tên chuyên ngành:
		</label>
		<div class="col-lg-6">
			<input type="text" class="form-control m-input" name="majors_name" placeholder="Tên chuyên ngành" value="{{old('majors_name', $major->majors_name)}}">
			@if(count($errors) > 0)
				<span class="text-danger">{{$errors->first('majors_name')}}</span>
			@endif
		</div>
	</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Mô tả chi tiết:
	</label>
	<div class="col-lg-8">
		<textarea class="form-control m-input m-input--air" name="majors_detail" id="exampleTextarea" rows="4">{{$major->majors_detail}}</textarea>
		@if(count($errors) > 0)
				<span class="text-danger">{{$errors->first('majors_detail')}}</span>
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
						<input type="checkbox" checked="checked" name="majors_active">
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
