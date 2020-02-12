@extends('layouts.metronictheme')

@section('content')
<form id="user-form" class="user-form" action="{{route('user.save')}}" method="POST" enctype="multipart/form-data" novalidate>
	@include('admin.users.form')
</form>
@endsection

@section('js')
	<script type="text/javascript" src="{{asset('js/users/validatation.js')}}"></script>
@endsection