<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ordine;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Prodotto::factory()->count(10)->create();
        \App\Models\Recensione::factory(30)->create();
        \App\Models\User::factory(20)->create();
        \App\Models\User::factory(1)->create(['role'=>'admin']);

        $users = json_decode(User::all());
        for($i = 0; $i < count($users); $i++) {
            Ordine::factory()->count(10)->create(['user_id' => $users[$i]->id]);
        }

    }
}
