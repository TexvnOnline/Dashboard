@extends('layouts.admin')
@section('styles')
<link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
@endsection
@section('title','Gestión de semáforos')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
            <h3 class="card-title">Streaming de semáforos</h3><br><br>
            <div class="ml-5">
                <video id="player" class="video-js vjs-default-skin " width="800" height="440"  controls preload="none">
                    <source src="http://192.168.1.55:8080/livestream/stream.m3u8" type="application/x-mpegURL" />
                </video>
            </div>
            <script>
                var player = videojs('#player')
            </script>
    </div>            
</div>
@endsection
@section('scripts')
    <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
@section('scripts')
