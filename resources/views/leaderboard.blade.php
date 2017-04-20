@extends('master.master')
@push('head')
  <link rel="stylesheet" href= "/css/home.css">
@endpush

@section('content')
<div class="header">
  Leaderboard
  <div class="sub-header">
    <div class="alert alert-success" id='sub-head-alert'>
      ranking determined by xp
    </div>
    <br />
  </div>
</div>
<div class="panel panel-info" id="leaderboard">
  <div class="panel-heading">
    Top Scorers
  </div>
  <table class="table table-hover table-striped">
    <thead class="thead-default">
      <tr>
        <th>#</th>
        <th>name</th>
        <th>xp</th>
        <th># solved</th>
        <th>member since</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $index=>$user)
        <tr>
          <td>{{$index+1}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->xp}}</td>
          <td>{{$user->solved}}</td>
          <td>{{$user->created_at}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection