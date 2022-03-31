<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Person;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testHello()
    {
        // ダミーで利用する
        User::factory()->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);
        User::factory(10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);

        //　ダミーで利用するデータ
        User::factory()->create([
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.COM',
            'age' => 123,
        ]);
        User::factory(10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.COM',
            'age' => 123,
        ]);
    }
}
