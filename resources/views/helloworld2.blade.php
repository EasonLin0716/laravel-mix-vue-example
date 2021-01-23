@extends('layouts.default')
@section('content')
<h1>Hello This page use default.blade.php</h1>
<div id="app"></div>
@endsection
@section('vue-app')
<script src="{{ mix('js/app.js') }}"></script>
@endsection