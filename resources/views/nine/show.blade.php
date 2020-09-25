@extends('layout')
@section('title', 'ナイン')

<div class="nine-wrapper">
  @section('content')
    <div class="nine-frame">
      <div class="nine">
        <div class="title">{{$nine->title}}</div>
          <div class="nine-content">
            <img class="ground" src="{{ asset('image/nines.png') }}">
            <div class="text pitcher">{{ $nine->pitcher }}</div>
            <div class="text catcher">{{ $nine->catcher }}</div>
            <div class="text first_baseman">{{ $nine->first_baseman }}</div>
            <div class="text second_baseman">{{ $nine->second_baseman }}</div>
            <div class="text third_baseman">{{ $nine->third_baseman }}</div>
            <div class="text shortstop">{{ $nine->shortstop }}</div>
            <div class="text left_fielder">{{ $nine->left_fielder }}</div>
            <div class="text center_fielder">{{ $nine->center_fielder }}</div>
            <div class="text right_fielder">{{ $nine->right_fielder }}</div>
            <div class="text designated_hitter">{{ $nine->designated_hitter }}</div>
          </div>
        </div>
    </div>
    <div class="center">
      <a class="btn btn-primary" href="{{ action('NineController@edit', ['id' => $nine->id]) }}">編集</a>
      <a class="btn btn-danger" href="{{ action('NineController@delete', ['id' => $nine->id]) }}">削除</a>
    </div>
  @endsection
</div>
