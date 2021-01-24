@extends('layouts.default')
@section('content')
<app-main :friend="{{ $friend }}"></app-main>
@endsection
@section('vue-app')
<script src="{{ mix('js/helloWorldDetail.js') }}"></script>
@endsection