<?php

namespace Tests\Feature;

use App\Nine;
use App\Http\Controllers\NineController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NineTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_nine_controller()
    {
      $response = $this->get('/');
      $response->assertStatus(200);

      /*
      Auth::loginUsingId(1);
      $response = $this->get('/');
      $response->assertStatus(200);
      */
    }
}
