@extends('layouts.default')
@section('content')
<app-main></app-main>
@endsection
@section('vue-app')
<script src="{{ mix('js/friendForm.js') }}"></script>
@endsection