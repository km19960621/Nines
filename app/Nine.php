<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nine extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
      'title' => 'required',
      'pitcher' => 'required',
      'catcher' => 'required',
      'first_baseman' => 'required',
      'second_baseman' => 'required',
      'third_baseman' => 'required',
      'shortstop' => 'required',
      'left_fielder' => 'required',
      'center_fielder' => 'required',
      'right_fielder' => 'required',
    );
}
