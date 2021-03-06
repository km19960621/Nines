@extends('layout')
@section('title', 'ナインの編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <form action="{{ action('NineController@update') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <input type="hidden" name="user_id" value="{{ $user_id }}">
          <table border="1">
            <figcaption>
              <input type="text" name="title" value="{{ $nine_form->title }}">
            </figcaption>
            <tr>
              <th>守備位置</th>
              <th>選手名</th>
            </tr>
            <?php $position_jp = ['投手', '捕手', '一塁手', '二塁手', '三塁手', '遊撃手', '左翼手', '中堅手 ', '右翼手', '指名打者'] ?>
            <?php $position_en = ['pitcher', 'catcher', 'first_baseman', 'second_baseman', 'third_baseman', 'shortstop', 'left_fielder', 'center_fielder', 'right_fielder', 'designated_hitter'] ?>
            @for($i = 1; $i <= 10; $i++)
              <?php $p_jp = $position_jp[$i - 1]; ?>
              <?php $p_en = $position_en[$i - 1]; ?>
              <tr>
                <td>
                  {{ $p_jp }}
                </td>
                <td>
                  <input type="text" name="{{ $p_en }}" value="{{ $nine_form->$p_en }}">
                </td>
              </tr>
            @endfor
          </table>
          <input type="hidden" name="id" value="{{ $nine_form->id }}">
          {{ csrf_field() }}
          <div class="center">
            <input type="submit" class="btn btn-primary" value="決定">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
