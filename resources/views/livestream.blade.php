@extends('layouts.admin')
@section('title','Seguridad Ciudadana')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<html>
  <head>
    <title>Streaming </title>
  </head>
  <body>
    <h1>Streaming </h1>
    <img src="http://192.168.0.11:5000/video_feed">
  </body>
</html>
@endsection