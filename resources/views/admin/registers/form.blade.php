{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="register_user_id" value="{{$register_user_id}}">
</div>
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$register->id}}">
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên lớp:
	</label>
	<div class="col-lg-6">
		<select class="form-control m-input" id="exampleSelect1" name="register_class_id">
			@foreach($classes as $classElement)
			<option value="{{$classElement->id}}">
				{{$classElement->classes_name}}
			</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên môn:
	</label>
	<div class="col-lg-6">
		<select class="form-control m-input" id="exampleSelect1" name="register_subject_id">
			@foreach($subjects as $subjectElement)
			<option value="{{$subjectElement->id}}">
				{{$subjectElement->subjects_name}}
			</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên phòng máy:
	</label>
	<div class="col-lg-6">
		<select class="form-control m-input" id="exampleSelect1" name="register_practiceroom_id">
			@foreach($practicerooms as $practiceroomElement)
			<option value="{{$practiceroomElement->id}}">
				{{$practiceroomElement->practicerooms_name}}
			</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Ca đăng ký:
	</label>
	<div class="col-lg-6">
		<select class="form-control m-input" id="exampleSelect1" name="register_time_id">
			@foreach($times as $timeElement)
			<option value="{{$timeElement->id}}">
				{{$timeElement->times_name}}
			</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Ngày đăng ký:
	</label>
	<div class="col-lg-6">
		<select class="form-control m-input" id="exampleSelect1" name="register_weekday_id">
			@foreach($weekdays as $weekdayElement)
			<option value="{{$weekdayElement->id}}">
				{{$weekdayElement->weekdays_name}}
			</option>
			@endforeach
		</select>

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
