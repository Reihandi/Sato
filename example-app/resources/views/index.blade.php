@extends('layout')

@section('content')

    <p>Akun Yang Login Adalah {{ Auth::user()->name }}</p>
    <p>Klik <a href="logout">Logout</a> Untuk Keluar</p>

@endsection