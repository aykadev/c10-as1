<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class userTest extends TestCase
{
    /**@test */
    public function get_all_users(): void
    {
        $users = User::factory()->times(10)->create();

        $this->assertCount(10, User::all());
    }

    public function get_a_single_user(): void
    {
        $user = User::factory()->create();

        $this->assertInstanceOf(User::class, User::find($user->id));
    }

    public function delete_a_user(): void
    {
        $user = User::factory()->create();
        $this->assertDatabaseHas('users',['id'=>$user->id]);
        $user->delete();
        $this->assertDatabaseMissing('users', ['id'=>$user->id]);
    }
}
