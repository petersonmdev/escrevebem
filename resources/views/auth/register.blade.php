@extends('layouts.app')

@section('content')
    <register-component token_csrf="{{ @csrf_token() }}" link_login="{{ route('login') }}" action_form="{{ route('register') }}" home_url="{{ url('/') }}"></register-component>
@endsection
