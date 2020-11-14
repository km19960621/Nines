@extends('layout')
@section('title', 'ナインの詳細')

@section('content')
  <div class="nine-wrapper">
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
  </div>
  @if ($user_id == $nine->user_id)
    <div class="center">
      <a class="btn btn-primary" href="{{ action('OrderController@add', ['id' => $nine->id]) }}">オーダー作成</a>
      <a class="btn btn-secondary" href="{{ action('NineController@edit', ['id' => $nine->id]) }}">編集</a>
      {{-- ナインに紐づくオーダーが存在する場合はナインを削除できないようにする --}}
      @if(count($orders) === 0)
        <a class="btn btn-danger" href="{{ action('NineController@delete', ['id' => $nine->id]) }}">削除</a>
      @else
        <a class="btn btn-danger disabled" href="{{ action('NineController@delete', ['id' => $nine->id]) }}">削除</a>
      @endif
    </div>
  @endif
  @foreach($orders as $order)
    <div class="order">
      <table border="1">
        <div class="center">
          {{ $order->title }}
        </div>
        <tr>
          <th>打順</th>
          <th>ポジション</th>
          <th>選手名</th>
        </tr>
        <?php $batting_order = ['first_batter', 'second_batter', 'third_batter', 'fourth_batter', 'fifth_batter', 'sixth_batter', 'seventh_batter', 'eighth_batter', 'ninth_batter'] ?>
        <?php $position_en = ['pitcher', 'catcher', 'first_baseman', 'second_baseman', 'third_baseman', 'shortstop', 'left_fielder', 'center_fielder', 'right_fielder', 'designated_hitter'] ?>
        <?php $position_translate = ['pitcher' => '投手', 'catcher' => '捕手', 'first_baseman' => '一塁手', 'second_baseman' => '二塁手', 'third_baseman' => '三塁手', 'shortstop' => '遊撃手', 'left_fielder' => '左翼手', 'center_fielder' => '中堅手', 'right_fielder' => '右翼手', 'designated_hitter' => 'DH'] ?>
        @for($i = 1; $i <= 9; $i++)
          <?php $b = $batting_order[$i - 1]; ?>
          <?php $p_en = $position_en[$i - 1]; ?>
          <tr>
            <td>
              {{ $i }}
            </td>
            <td>
              {{ $position_translate[$order->$b] }}
            </td>
            <td>
              <?php $position =  $order->$b ?>
              {{ $nine->$position }}
            </td>
          </tr>
        @endfor
      </table>
    </div>
    @if ($user_id == $order->user_id)
      <div class="center">
        <a class="btn btn-outline-secondary btn-sm" href="{{ action('OrderController@edit', ['id' => $order->id]) }}">編集</a>
        <a class="btn btn-outline-danger btn-sm" href="{{ action('OrderController@delete', ['id' => $order->id]) }}">削除</a>
      </div>
    @endif
  @endforeach
@endsection
