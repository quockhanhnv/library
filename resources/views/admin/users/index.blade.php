@extends('layouts.metronictheme')

@section('css')
<link rel="stylesheet" href="{{asset('css/users/style.css')}}">
@endsection

@section('subheader')
	Người dùng
@endsection

@section('content')
<div class="table-responsive">
	<div class="form-group m-form__group row align-items-center">
		<div class="col-md-6">
			<form action="" method="GET">
				<div class="input-group">
					<input id="generalSearch" name="keyword" type="text" class="form-control form-control-danger" placeholder="Tìm kiếm..." value="{{$keyword}}">
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
			<a href="{{route('user.add')}}" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
					<span>
						<i class="la la-plus"></i>
					<span>
						Thêm
					</span>
				</span>
			</a>
		</div>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>Avatar</th>
				<th>Họ tên</th>
				<th>Email</th>
				<th>Vai trò</th>
				<th>Điện thoại</th>
				<th>Ngày sinh</th>
				<th>Trạng thái</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $element)
			<tr>
				<td>{{$loop->index + 1}}</td>
				<td data-field="logo" class="m-datatable__cell">
					<span>
						<div class="dz-image">
							<img class="avt" style="width: 50px;height: 50px; border-radius: 25px" id="avt" data-dz-thumbnail="" src="{{asset($element->users_avatar)}}">
						</div>
					</span>
				</td>
				<td>{{$element->name}}</td>
				<td>{{$element->email}}</td>
				<td>
					@if($element->users_role_id == 1)
						Admin
					@else
						Others
					@endif
				</td>
				<td>{{$element->users_phone}}</td>
				<td>{{$element->users_birthday}}</td>
				<td>
					@if($element->users_active)
					<i class="la la-check" class="active" style="color: green"></i>
					@else
					<i class="la la-close" class="noneactive" style="color: red"></i>
					@endif
				</td>
				<td data-field="" class="m-datatable__cell">
					<span class="action" style="overflow: visible; position: relative; width: 120px;">							
						<a href="{{route('user.edit', ['id'=> $element->id])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill" title="Cập nhật">								
							<i class="la la-edit"></i>							
						</a>							
						<a href="javascript:;" onclick="comfirmRemove('{{route('user.remove',['id' => $element->id])}}')" data-value="42" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa">								
							<i class="la la-trash"></i>							
						</a>						
					</span>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<!-- Begin: Pagination -->
	<br>
	<div class="form-group m-form__group row align-items-center">
		<div class="col-md-5"></div>
		<div class="col-md-5 text-center">
			{{$users->links()}}
		</div>
		<form action="" method="GET" id="filterForm">
			<div class="col-md-2">
				<select style="width: 60px" class="pageoption form-control m-input form-control-sm" id="pageSize" name="pageSize">
					@forelse(getPageSizeList() as $ps)
					<option @if($pageSize == $ps) selected @endif value="{{$ps}}">{{$ps}}</option>
					@endforeach
				</select>
			</div>
		</form>
	</div>
	<!-- End: Pagination -->
@endsection

@section('js')

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
		$(document).ready(function(){
			$('#pageSize').on('change', function(){
				//console.log($(this).val());
				$('#filterForm').submit();
			});
		});
	</script>
@endsection




