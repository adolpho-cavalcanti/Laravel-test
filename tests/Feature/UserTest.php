<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Visitante;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUserTest()
    {
        $user = User::create([
            "name" => "Rubera",
            "email" => "rubera@rubera.com",
            "password" => "1234567",
        ]);

        $this->assertDatabaseHas("users", ["email" => $user->email]);
    }

    public function testCreateVisitanteTest()
    {
        $visitante = Visitante::create([
            "nome" => "Adolpho000",
            "telefone" => "54511",
            "data_hora" => "2020-12-27",
        ]);

        $this->assertDatabaseHas("visitante", ["nome" => $visitante->nome]);
    }
}
