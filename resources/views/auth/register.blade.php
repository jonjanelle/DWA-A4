@extends('master.master')
@section('title')
  Create User - Math Team Trainer
@endsection
@push('head')
  <link rel="stylesheet" href= "css/login.css">
@endpush

@section('content')
  <div class="header">Math Team Trainer</div>
  <div class="row fade-in">
      @include('forms.newuserform')
  </div>
@endsection

@push('body')
  <script type="text/javascript" src="/js/login.js"></script>
@endpush
