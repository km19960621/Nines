@extends('layout')
@section('title', 'ユーザーの詳細')

@section('content')
  <div class="container">
    <p>
      ユーザー名：{{ $user->name }}
    </p>
    <p>
      メールアドレス：{{ $user->email }}
    </p>
    <p>
      <a class="btn btn-primary" href="{{ action('UserController@edit', ['id' => $user->id]) }}">編集</a>
    </p>
  </div>
@endsection
