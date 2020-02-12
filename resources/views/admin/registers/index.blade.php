@extends('layouts.metronictheme')

@section('subheader')
	Phòng học
@endsection

@section('content')
<div class="form-group m-form__group row align-items-center">
		<div class="col-md-6">
			<form action="" method="GET">
				<div class="input-group">
					<input id="generalSearch" name="keyword" type="text" class="form-control form-control-danger" placeholder="Tìm kiếm..." value="">
					<div class="input-group-append">
						<button class="btn btn-secondary" type="submit">
							Go!
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3">
			
			
			
		</div>
		<div class="col-md-3" style="padding-left: 100px">
			<a href="{{route('register.add')}}" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
					<span>
						<i class="la la-plus"></i>
					<span>
						Đăng Ký	
					</span>
				</span>
			</a>
		</div>
	</div>
	<div class="m-portlet m-portlet--tabs">
			<div class="m-portlet__head" style="background-color: #f4f3f9">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							DS Phòng	
						</h3>
					</div>
				</div>
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line  m-tabs-line--right" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_tabs_7_1" role="tab" aria-selected="true">
								PM01
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_2" role="tab" aria-selected="false">
								PM02
							</a>
						</li>
						
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_3" role="tab" aria-selected="false">
								PM03
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_4" role="tab" aria-selected="false">
								PM04
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_5" role="tab" aria-selected="false">
								PM05
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_6" role="tab" aria-selected="false">
								PM06
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body">
				<div class="tab-content">	
					<div class="tab-pane active show" id="m_tabs_7_1" role="tabpanel">	
						<table class="table table-bordered table-hover">
							<thead>
								<<tr>
									<th>Ca</th><th>Thứ 2</th><th>Thứ 3</th><th>Thứ 4</th><th>Thứ 5</th>
									<th>Thứ 6</th><th>Thứ 7</th><th>Chủ nhật</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">
										Sáng
									</th>
									<td class="datecell">
										@foreach($monday_morning as $mo_m)
										<b>GV:</b> {{$mo_m->name}}<br />
										<b>Môn:</b> {{$mo_m->subjects_name}}<br />
										<b>Lớp:</b> {{$mo_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($tuesday_morning as $tu_m)
										<b>GV:</b> {{$tu_m->name}}<br />
										<b>Môn:</b> {{$tu_m->subjects_name}}<br />
										<b>Lớp:</b> {{$tu_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($wednesday_morning as $we_m)
										<b>GV:</b> {{$we_m->name}}<br />
										<b>Môn:</b> {{$we_m->subjects_name}}<br />
										<b>Lớp:</b> {{$we_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($thursday_morning as $thu_m)
										<b>GV:</b> {{$thu_m->name}}<br />
										<b>Môn:</b> {{$thu_m->subjects_name}}<br />
										<b>Lớp:</b> {{$thu_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($friday_morning as $fri_m)
										<b>GV:</b> {{$fri_m->name}}<br />
										<b>Môn:</b> {{$fri_m->subjects_name}}<br />
										<b>Lớp:</b> {{$fri_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sarturaday_morning as $sat_m)
										<b>GV:</b> {{$sat_m->name}}<br />
										<b>Môn:</b> {{$sat_m->subjects_name}}<br />
										<b>Lớp:</b> {{$sat_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sunday_morning as $sun_m)
										<b>GV:</b> {{$sun_m->name}}<br />
										<b>Môn:</b> {{$sun_m->subjects_name}}<br />
										<b>Lớp:</b> {{$sun_m->classes_name}}<br />
										@endforeach
									</td>
								</tr>
								<tr>
									<th scope="row">
										Chiều
									</th>
									<td class="datecell">
										@foreach($monday_afternoon as $mon_a)
										<b>GV:</b> {{$mon_a->name}}<br />
										<b>Môn:</b> {{$mon_a->subjects_name}}<br />
										<b>Lớp:</b> {{$mon_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($tuesday_afternoon as $tu_a)
										<b>GV:</b> {{$tu_a->name}}<br />
										<b>Môn:</b> {{$tu_a->subjects_name}}<br />
										<b>Lớp:</b> {{$tu_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($wednesday_afternoon as $we_a)
										<b>GV:</b> {{$we_a->name}}<br />
										<b>Môn:</b> {{$we_a->subjects_name}}<br />
										<b>Lớp:</b> {{$we_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($thursday_afternoon as $thu_a)
										<b>GV:</b> {{$thu_a->name}}<br />
										<b>Môn:</b> {{$thu_a->subjects_name}}<br />
										<b>Lớp:</b> {{$thu_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($friday_afternoon as $fri_a)
										<b>GV:</b> {{$fri_a->name}}<br />
										<b>Môn:</b> {{$fri_a->subjects_name}}<br />
										<b>Lớp:</b> {{$fri_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($saturaday_afternoon as $sat_a)
										<b>GV:</b> {{$sat_a->name}}<br />
										<b>Môn:</b> {{$sat_a->subjects_name}}<br />
										<b>Lớp:</b> {{$sat_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sunday_afternoon as $sun_a)
										<b>GV:</b> {{$sun_a->name}}<br />
										<b>Môn:</b> {{$sun_a->subjects_name}}<br />
										<b>Lớp:</b> {{$sun_a->classes_name}}<br />
										@endforeach
									</td>
								</tr>
								<tr>
									<th scope="row">
										Tối
									</th>
									<td class="datecell">
										@foreach($monday_evening as $mon_e)
										<b>GV:</b> {{$mon_e->name}}<br />
										<b>Môn:</b> {{$mon_e->subjects_name}}<br />
										<b>Lớp:</b> {{$mon_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($tuesday_evening as $tue_e)
										<b>GV:</b> {{$tue_e->name}}<br />
										<b>Môn:</b> {{$tue_e->subjects_name}}<br />
										<b>Lớp:</b> {{$tue_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($wednesday_evening as $we_e)
										<b>GV:</b> {{$we_e->name}}<br />
										<b>Môn:</b> {{$we_e->subjects_name}}<br />
										<b>Lớp:</b> {{$we_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($thursday_evening as $thur_e)
										<b>GV:</b> {{$thur_e->name}}<br />
										<b>Môn:</b> {{$thur_e->subjects_name}}<br />
										<b>Lớp:</b> {{$thur_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($friday_evening as $fri_e)
										<b>GV:</b> {{$fri_e->name}}<br />
										<b>Môn:</b> {{$fri_e->subjects_name}}<br />
										<b>Lớp:</b> {{$fri_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($saturaday_evening as $sat_e)
										<b>GV:</b> {{$sat_e->name}}<br />
										<b>Môn:</b> {{$sat_e->subjects_name}}<br />
										<b>Lớp:</b> {{$sat_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sunday_evening as $sun_e)
										<b>GV:</b> {{$sun_e->name}}<br />
										<b>Môn:</b> {{$sun_e->subjects_name}}<br />
										<b>Lớp:</b> {{$sun_e->classes_name}}<br />
										@endforeach
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="m_tabs_7_2" role="tabpanel">
						<table class="table table-bordered table-hover">
							<thead>
								<<tr>
									<th>Ca</th><th>Thứ 2</th><th>Thứ 3</th><th>Thứ 4</th><th>Thứ 5</th>
									<th>Thứ 6</th><th>Thứ 7</th><th>Chủ nhật</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">
										Sáng
									</th>
									<td class="datecell">
										@foreach($monday_morning_pm02 as $mo_m)
										<b>GV:</b> {{$mo_m->name}}<br />
										<b>Môn:</b> {{$mo_m->subjects_name}}<br />
										<b>Lớp:</b> {{$mo_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($tuesday_morning_pm02 as $tu_m)
										<b>GV:</b> {{$tu_m->name}}<br />
										<b>Môn:</b> {{$tu_m->subjects_name}}<br />
										<b>Lớp:</b> {{$tu_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($wednesday_morning_pm02 as $we_m)
										<b>GV:</b> {{$we_m->name}}<br />
										<b>Môn:</b> {{$we_m->subjects_name}}<br />
										<b>Lớp:</b> {{$we_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($thursday_morning_pm02 as $thu_m)
										<b>GV:</b> {{$thu_m->name}}<br />
										<b>Môn:</b> {{$thu_m->subjects_name}}<br />
										<b>Lớp:</b> {{$thu_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($friday_morning_pm02 as $fri_m)
										<b>GV:</b> {{$fri_m->name}}<br />
										<b>Môn:</b> {{$fri_m->subjects_name}}<br />
										<b>Lớp:</b> {{$fri_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sarturaday_morning_pm02 as $sat_m)
										<b>GV:</b> {{$sat_m->name}}<br />
										<b>Môn:</b> {{$sat_m->subjects_name}}<br />
										<b>Lớp:</b> {{$sat_m->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sunday_morning_pm02 as $sun_m)
										<b>GV:</b> {{$sun_m->name}}<br />
										<b>Môn:</b> {{$sun_m->subjects_name}}<br />
										<b>Lớp:</b> {{$sun_m->classes_name}}<br />
										@endforeach
									</td>
								</tr>
								<tr>
									<th scope="row">
										Chiều
									</th>
									<td class="datecell">
										@foreach($monday_afternoon_pm02 as $mon_a)
										<b>GV:</b> {{$mon_a->name}}<br />
										<b>Môn:</b> {{$mon_a->subjects_name}}<br />
										<b>Lớp:</b> {{$mon_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($tuesday_afternoon_pm02 as $tu_a)
										<b>GV:</b> {{$tu_a->name}}<br />
										<b>Môn:</b> {{$tu_a->subjects_name}}<br />
										<b>Lớp:</b> {{$tu_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($wednesday_afternoon_pm02 as $we_a)
										<b>GV:</b> {{$we_a->name}}<br />
										<b>Môn:</b> {{$we_a->subjects_name}}<br />
										<b>Lớp:</b> {{$we_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($thursday_afternoon_pm02 as $thu_a)
										<b>GV:</b> {{$thu_a->name}}<br />
										<b>Môn:</b> {{$thu_a->subjects_name}}<br />
										<b>Lớp:</b> {{$thu_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($friday_afternoon_pm02 as $fri_a)
										<b>GV:</b> {{$fri_a->name}}<br />
										<b>Môn:</b> {{$fri_a->subjects_name}}<br />
										<b>Lớp:</b> {{$fri_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($saturaday_afternoon_pm02 as $sat_a)
										<b>GV:</b> {{$sat_a->name}}<br />
										<b>Môn:</b> {{$sat_a->subjects_name}}<br />
										<b>Lớp:</b> {{$sat_a->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sunday_afternoon_pm02 as $sun_a)
										<b>GV:</b> {{$sun_a->name}}<br />
										<b>Môn:</b> {{$sun_a->subjects_name}}<br />
										<b>Lớp:</b> {{$sun_a->classes_name}}<br />
										@endforeach
									</td>
								</tr>
								<tr>
									<th scope="row">
										Tối
									</th>
									<td class="datecell">
										@foreach($monday_evening_pm02 as $mon_e)
										<b>GV:</b> {{$mon_e->name}}<br />
										<b>Môn:</b> {{$mon_e->subjects_name}}<br />
										<b>Lớp:</b> {{$mon_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($tuesday_evening_pm02 as $tue_e)
										<b>GV:</b> {{$tue_e->name}}<br />
										<b>Môn:</b> {{$tue_e->subjects_name}}<br />
										<b>Lớp:</b> {{$tue_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($wednesday_evening_pm02 as $we_e)
										<b>GV:</b> {{$we_e->name}}<br />
										<b>Môn:</b> {{$we_e->subjects_name}}<br />
										<b>Lớp:</b> {{$we_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($thursday_evening_pm02 as $thur_e)
										<b>GV:</b> {{$thur_e->name}}<br />
										<b>Môn:</b> {{$thur_e->subjects_name}}<br />
										<b>Lớp:</b> {{$thur_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($friday_evening_pm02 as $fri_e)
										<b>GV:</b> {{$fri_e->name}}<br />
										<b>Môn:</b> {{$fri_e->subjects_name}}<br />
										<b>Lớp:</b> {{$fri_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($saturaday_evening_pm02 as $sat_e)
										<b>GV:</b> {{$sat_e->name}}<br />
										<b>Môn:</b> {{$sat_e->subjects_name}}<br />
										<b>Lớp:</b> {{$sat_e->classes_name}}<br />
										@endforeach
									</td>
									<td class="datecell">
										@foreach($sunday_evening_pm02 as $sun_e)
										<b>GV:</b> {{$sun_e->name}}<br />
										<b>Môn:</b> {{$sun_e->subjects_name}}<br />
										<b>Lớp:</b> {{$sun_e->classes_name}}<br />
										@endforeach
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane" id="m_tabs_7_3" role="tabpanel">			
						Content PM4 come here
					</div>
					<div class="tab-pane" id="m_tabs_7_4" role="tabpanel">
						Content PM4 come here 
					</div>
					<div class="tab-pane" id="m_tabs_7_5" role="tabpanel">
						Content PM5 come here 
					</div>
					<div class="tab-pane" id="m_tabs_7_6" role="tabpanel">
						Content PM6 come here 
					</div>

				</div>
			</div>
		</div>

<!-- MODEL -->
<form action="{{route('register.add')}}">
<div class="modal fade" id="m_modal_s2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								Đăng ký lịch thực hành
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									×
								</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<span>Chọn môn học</span>
								<select class="form-control m-input m-input--solid" id="exampleSelect1" name="register_subject_id">
									<option>
										Kỹ thuật lập trình
									</option>
									<option>
										Lập trình hướng đối tượng
									</option>
									<option>
										Phát triền phần mềm hướng dịch vụ
									</option>
									<option>
										Điện toán đám mây
									</option>
								</select>
							</p>
							<p>
								<span>Chọn lớp học</span>
								<select class="form-control m-input m-input--solid" id="exampleSelect1" name="register_class_id">
									<option>
										KTPM6-K10
									</option>
									<option>
										CNTT1-K10
									</option>
									<option>
										HTTT1-K9
									</option>
									<option>
										HTTT2-K11
									</option>
								</select>
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								Hủy bỏ
							</button>
							<button type="submit" class="btn btn-primary">
								Lưu lại
							</button>
						</div>
					</div>
				</div>
			</div>
</form>
<!-- END MODEL -->
@endsection