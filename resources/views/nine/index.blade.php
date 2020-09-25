@extends('layout')
@section('title', 'ナインの一覧')

@section('content')
  <div class="nine-wrapper">
    @foreach($nine as $n)
      <div class="nine-frame">
        <div class="nine">
          <div class="title"><a href="{{ action('NineController@show', ['id' => $n->id]) }}">{{$n->title}}</a></div>
            <div class="nine-content">
              <img class="ground" src="{{ asset('image/nines.png') }}">
              <div class="text pitcher">{{ $n->pitcher }}</div>
              <div class="text catcher">{{ $n->catcher }}</div>
              <div class="text first_baseman">{{ $n->first_baseman }}</div>
              <div class="text second_baseman">{{ $n->second_baseman }}</div>
              <div class="text third_baseman">{{ $n->third_baseman }}</div>
              <div class="text shortstop">{{ $n->shortstop }}</div>
              <div class="text left_fielder">{{ $n->left_fielder }}</div>
              <div class="text center_fielder">{{ $n->center_fielder }}</div>
              <div class="text right_fielder">{{ $n->right_fielder }}</div>
              <div class="text designated_hitter">{{ $n->designated_hitter }}</div>
            </div>
          </div>
      </div>
    @endforeach
  </div>
@endsection
