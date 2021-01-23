@extends('layouts.default')
@section('content')
<h1>Hello This page use default.blade.php</h1>
<div id="hello-world-detail">
  <hello-world-detail :article-id="{{ $id }}"></hello-world-detail>
</div>

<script src="{{ mix('js/helloWorldDetail.js') }}"></script>
@endsection

@section('content2')
<h1>id is: {{ $id }}</h1>
@endsection
