@extends('layouts.admin')
@section('title','Gestión de semáforos')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Streaming de semáforos</h3><br><br>
            <video id="player" class="video-js vjs-default-skin " width="800" height="440"  controls preload="none">
                <source src="http://192.168.0.55:8080/livestream/stream.m3u8" type="application/x-mpegURL" />
            </video>
            <script>
                var player = videojs('#player')
            </script>
    </div>            
</div>
@endsection
