@extends('layout')
@section('title', 'ユーザーの編集')

@section('content')
  <div class="container">
    <form action="{{ action('UserController@update') }}" method="post" enctype="multipart/form-data">
      <p>
        <label for="name">名前</label>
        <input name="name" value="{{ $user->name }}">
      </p>
      <p>
        <label for="email">メールアドレス </label>
        <input name="email" value="{{ $user->email }}">
      </p>
      {{ csrf_field() }}
      <input type="submit" class="btn btn-primary" value="変更">
    </form>
  </div>
@endsection
