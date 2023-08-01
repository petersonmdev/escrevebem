@extends('layouts.app')

@section('content')
    <login-component token_csrf="{{ @csrf_token() }}" link_register="{{ route('register') }}" action_form="{{ route('login') }}" home_url="{{ url('/') }}"></login-component>
@endsection
