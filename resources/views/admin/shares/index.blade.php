@extends('layouts.metronictheme')

@section('subheader')
	Phòng học
@endsection

@section('content')
<form action="" method="POST" class="m-form m-form--fit m-form--label-align-right">
	<div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
		<strong>
			Chào bạn !
		</strong>
		Những thông tin được chia sẻ tại đây sẽ được các thầy giáo/ cô giáo/ cán bộ trong nhà trường giải đáp. Thắc mắc sẽ được trả lời trong vòng 1-5 ngày.
	</div>
	<div class="form-group m-form__group">
		<label for="exampleTextarea">
			Chia sẻ với nhà trường
		</label>
		<textarea class="form-control m-input" id="exampleTextarea" rows="3"></textarea>
	</div>
	<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
		<div class="m-form__actions m-form__actions--solid">
			<button type="button" class="btn btn-success">
				Chia sẻ
			</button>
			<button type="reset" class="btn btn-secondary">
				Hủy
			</button>
		</div>
	</div>
</form>
@endsection