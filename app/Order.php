<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = array('id');
    //
      public static $rules = array(
      'title' => 'required',
      'nine_id' => 'required',
      'first_batter' => 'required',
      'second_batter' => 'required',
      'third_batter' => 'required',
      'fourth_batter' => 'required',
      'fifth_batter' => 'required',
      'sixth_batter' => 'required',
      'seventh_batter' => 'required',
      'eighth_batter' => 'required',
      'ninth_batter' => 'required',
    );
  }
