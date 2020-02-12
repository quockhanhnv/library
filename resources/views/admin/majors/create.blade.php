@extends('layouts.metronictheme')

@section('content')
<form id="major-form" class="major-form" action="{{route('major.save')}}" method="POST" enctype="multipart/form-data" novalidate>
	@include('admin.majors.form')
</form>
@endsection

@section('js')
	<script type="text/javascript" src="{{asset('js/majors/validation.js')}}"></script>
@endsection