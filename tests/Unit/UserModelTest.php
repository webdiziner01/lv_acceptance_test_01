<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends TestCase
{
    /**
     * @test
     */
    public function test_user_full_name_is_returned()
    {
        $user = new \App\User;
        $user->first_name = 'Alex';
        $user->last_name = 'Garret';

        $this->assertEquals($user->name(),'Alex Garret');
    }


    /*
     * @test
     * */

    public function test_user_first_name_returned_if_no_last_name(){
        $user = new \App\User;
        $user->first_name = 'Alex';

        $this->assertEquals($user->name(),'Alex');
    }






}
