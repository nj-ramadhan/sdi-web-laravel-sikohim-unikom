@extends('master')

@section('content') 
 
        <!-- // The content of the page goes here... -->
        <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>
 
@endsection 