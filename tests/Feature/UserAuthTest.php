<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserAuthTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * test
     *
     *
     */

    public function test_user_sees_name_in_navigation_when_signed_in(){

        $user = factory(\App\User::class)->create(['name' => 'Alex Garret']);


        $response = $this->actingAs($user)
            ->get('/home');


        $response->assertSeeText('Alex Garret');





    }

}
