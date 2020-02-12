{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$practiceroom->id}}">
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên phòng máy:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="practicerooms_name" placeholder="Tên phòng máy" value="{{old('practicerooms_name', $practiceroom->practicerooms_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('practicerooms_name')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Số lượng máy:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="practicerooms_computer_numbers" placeholder="Số lượng máy" value="{{old('practicerooms_computer_numbers', $practiceroom->practicerooms_computer_numbers)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('practicerooms_computer_numbers')}}</span>
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
						<input type="checkbox" checked="checked" name="practicerooms_active">
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
