@extends('layouts.metronictheme')

@section('content')
<form id="practiceroom-form" class="practiceroom-form" action="{{route('practiceroom.save')}}" method="POST" enctype="multipart/form-data" novalidate>
	@include('admin.practicerooms.form')
</form>
@endsection

@section('js')
	<script type="text/javascript" src="{{asset('js/practicerooms/validation.js')}}"></script>
@endsection