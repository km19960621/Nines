@extends('layout')
@section('tilte', 'オーダーの新規作成')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>order/create</h2>
        <form action="{{ action('OrderController@create') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <table border="1">
            <figcaption>
              <input type="text" name="title">
            </figcaption>
            <input type="hidden" name="nine_id" value="{{ $nine->id }}">
            <tr>
              <th>打順</th>
              <th>選手名</th>
            </tr>
            <?php $batting_order = ['first_batter', 'second_batter', 'third_batter', 'fourth_batter', 'fifth_batter', 'sixth_batter', 'seventh_batter', 'eighth_batter', 'ninth_batter'] ?>
            <?php $position_en = ['pitcher', 'catcher', 'first_baseman', 'second_baseman', 'third_baseman', 'shortstop', 'left_fielder', 'center_fielder', 'right_fielder', 'designated_hitter'] ?>
            @for($i = 1; $i <= 9; $i++)
              <?php $p_en = $position_en[$i - 1]; ?>
              <tr>
                <td>
                  {{ $i }}
                </td>
                <td>
                  <select name="{{ $batting_order[$i - 1] }}">
                    <option value=""></option>
                    <option value="pitcher">{{ $nine->pitcher }}</option>
                    <option value="catcher">{{ $nine->catcher }}</option>
                    <option value="first_baseman">{{ $nine->first_baseman }}</option>
                    <option value="second_baseman">{{ $nine->second_baseman }}</option>
                    <option value="third_baseman">{{ $nine->third_baseman }}</option>
                    <option value="shortstop">{{ $nine->shortstop }}</option>
                    <option value="left_fielder">{{ $nine->left_fielder }}</option>
                    <option value="center_fielder">{{ $nine->center_fielder }}</option>
                    <option value="right_fielder">{{ $nine->right_fielder }}</option>
                    <option value="designated_hitter">{{ $nine->designated_hitter }}</option>
                  </select>
                </td>
              </tr>
            @endfor
          </table>
          {{ csrf_field() }}
          <div class="center">
            <input type="submit" class="btn btn-primary" value="決定">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
