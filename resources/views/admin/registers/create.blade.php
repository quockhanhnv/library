@extends('layouts.metronictheme')

@section('content')
<form id="register-form" class="register-form" action="{{route('register.save')}}" method="POST" p novalidate>
	@include('admin.registers.form')
</form>
@endsection
