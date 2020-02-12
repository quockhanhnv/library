@extends('layouts.metronictheme')
@section('subheader')
Bộ môn
@endsection
@section('content')
<div class=""> <!-- class="table-responsive" để có thanh kéo -->
	<div class="form-group m-form__group row align-items-center">
		<div class="col-md-6">
			<form action="" method="GET">
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
			</form>
		</div>
		<div class="col-md-3">
			
		</div>
		<div class="col-md-3" style="padding-left: 100px">
			<a href="{{route('major.add')}}" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
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
				<th>ID</th>
				<th>Tên chuyên ngành</th>
				<th>Trạng thái</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			@foreach($majors as $element)
			<tr>
				<td>
					{{$loop->index + 1}}
				</td>
				<td>
					{{$element->majors_name}}
				</td>
				<td>
					@if($element->majors_active)
					<i class="la la-check" style="color: green"></i>
					@else
					<i class="la la-close" style="color: red"></i>
					@endif
				</td>
				<td data-field="" class="m-datatable__cell">
					<span style="overflow: visible; position: relative; width: 120px;">						
						<a href="{{route('major.edit', ['id' => $element->majors_id])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill" title="Cập nhật">								
							<i class="la la-edit"></i>							
						</a>
												
						<a href="javascript:;" onclick="comfirmRemove('{{route('major.remove',['id' => $element->majors_id])}}')" data-value="42" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa">								
							<i class="la la-trash"></i>							
						</a>						
					</span>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div>

	<!-- Begin: Pagination -->
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-7 text-center">
			{{$majors->links()}}
		</div>
		<form action="" method="GET" id="filterForm">
			<div class="col-md-2">
				<select style="width: 60px" class="form-control m-input form-control-sm" id="pageSize" name="pageSize">
					@forelse(getPageSizeList() as $ps)
					<option @if($pageSize == $ps) selected @endif value="{{$ps}}">{{$ps}}</option>
					@endforeach
					
				</select>
			</div>
		</form>
	</div>
	<!-- End: Pagination -->

</div>
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

			// xử lý url mỗi khi select pagesize được thay đổi giá trị
			// redirect trang sang url theo giá trị được thay đổi
			$('#filterForm').submit()

		});
	});

</script>
@endsection
