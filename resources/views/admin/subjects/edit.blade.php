@extends('layouts.metronictheme')

@section('content')
<form id="subject-form" class="subject-form" action="{{route('subject.save')}}" method="POST" enctype="multipart/form-data" novalidate>
	@include('admin.subjects.form')
</form>
@endsection

@section('js')
	<script type="text/javascript" src="{{asset('js/subjects/validation.js')}}"></script>
@endsection