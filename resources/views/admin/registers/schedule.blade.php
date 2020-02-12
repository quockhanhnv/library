@extends('layouts.metronictheme')

@section('subheader')
	Phòng học
@endsection

@section('content')
<div class="table-responsive">						
	<!--begin: Datatable -->
	<table class="table table-striped- table-bordered table-hover table-checkabl" id="m_table_1">
		<thead>
			<tr>
				<th>
					Buổi
				</th>
				<th>
					Thứ 2
				</th>
				<th>
					Thứ 3
				</th>
				<th>
					Thứ 4
				</th>
				<th>
					Thứ 5
				</th>
				<th>
					Thứ 6
				</th>
				<th>
					Thứ 7
				</th>
				<th>
					Chủ Nhật	
				</th>
			
			</tr>
		</thead>
		<tbody>
			<tr> 
				<th scope="row">
					Sáng
				</th>
				<td class="datecell">
					@foreach($monday_morning as $mo_m)
					<b>Môn:</b> {{$mo_m->subjects_name}} <a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $mo_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp &nbsp;:</b> {{$mo_m->classes_name}}<br />
					<b>PM &nbsp;&nbsp;: </b>{{$mo_m->practicerooms_name}}
					@endforeach
				</td>
				<td class="datecell">
					@foreach($tuesday_morning as $tu_m)
					<b>Môn:</b> {{$tu_m->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $tu_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$tu_m->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($wednesday_morning as $we_m)
					<b>Môn:</b> {{$we_m->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $we_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$we_m->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($thursday_morning as $thu_m)
					<b>Môn:</b> {{$thu_m->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $thu_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$thu_m->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($friday_morning as $fri_m)
					<b>Môn:</b> {{$fri_m->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $fri_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$fri_m->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($sarturaday_morning as $sat_m)
					<b>Môn:</b> {{$sat_m->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $sat_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$sat_m->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($sunday_morning as $sun_m)
					<b>Môn:</b> {{$sun_m->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $sun_m->register_id])}}')"><i class="la la-trash-o"></i></a><br />
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
					<b>Môn:</b> {{$mon_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $mon_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$mon_a->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($tuesday_afternoon as $tu_a)
					<b>Môn:</b> {{$tu_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $tu_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$tu_a->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($wednesday_afternoon as $we_a)
					<b>Môn:</b> {{$we_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $we_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$we_a->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($thursday_afternoon as $thu_a)
					<b>Môn:</b> {{$thu_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $thu_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$thu_a->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($friday_afternoon as $fri_a)
					<b>Môn:</b> {{$fri_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $fri_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$fri_a->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($saturaday_afternoon as $sat_a)
					<b>Môn:</b> {{$sat_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $sat_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$sat_a->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($sunday_afternoon as $sun_a)
					<b>Môn:</b> {{$sun_a->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $sun_a->register_id])}}')"><i class="la la-trash-o"></i></a><br />
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
					<b>Môn:</b> {{$mon_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $mon_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$mon_e->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($tuesday_evening as $tue_e)
					<b>Môn:</b> {{$tue_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $tue_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$tue_e->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($wednesday_evening as $we_e)
					<b>Môn:</b> {{$we_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $we_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$we_e->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($thursday_evening as $thur_e)
					<b>Môn:</b> {{$thur_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $thur_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$thur_e->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($friday_evening as $fri_e)
					<b>Môn:</b> {{$fri_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $fri_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$fri_e->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($saturaday_evening as $sat_e)
					<b>Môn:</b> {{$sat_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $sat_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$sat_e->classes_name}}<br />
					@endforeach
				</td>
				<td class="datecell">
					@foreach($sunday_evening as $sun_e)
					<b>Môn:</b> {{$sun_e->subjects_name}}<a href="javascript:;" onclick="comfirmRemove('{{route('register.remove',['id' => $sun_e->register_id])}}')"><i class="la la-trash-o"></i></a><br />
					<b>Lớp:</b> {{$sun_e->classes_name}}<br />
					@endforeach
				</td>
			</tr>
		</tbody>
	</table>
</div>

@endsection

<script type="text/javascript">
	function comfirmRemove(Url)
	{
		bootbox.confirm({
		    message: "Bạn có chắc chắn muốn xóa không ?",
		    buttons: {
		        confirm: {
		            label: 'Xóa',
		            className: 'btn btn-primary'
		        },
		        cancel: {
		            label: 'Hủy',
		            className: 'btn btn-default'
		        }
		    },
		    callback: function (result) {
		        console.log('This was logged in the callback: ' + result);
		        if(result)
		        {
		        	window.location.href = Url;
		        }
		    }
		});
	}
</script>