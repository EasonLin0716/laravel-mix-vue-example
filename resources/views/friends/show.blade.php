@extends('layouts.default')
@section('content')
<h1>Hello This page use default.blade.php</h1>
<h2>Friend ID: {{ $friend->id }}</h2>
<div id="hello-world-detail">
  <hello-world-detail :friend="{{ $friend }}"></hello-world-detail>
</div>

<script src="{{ mix('js/helloWorldDetail.js') }}"></script>
@endsection