<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
             ->click('Users Module')
             ->see('Welcome to users module')
             ->seePageIs('admin/users');

        $this->visit('admin/users')
            ->click('Back To Homepage')
            ->seePageIs('/');


    }

    /**@test*/
    public function testToFetchAllUsers ()
    {
        //Given //When //Then
        factory(User::class ,5)->create();
        $user = User::latest();
        $this->assertCount(4,$user);

    }

}
