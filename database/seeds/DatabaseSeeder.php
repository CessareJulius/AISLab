<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\People::class)->create()->each(function (App\People $people) {
        	factory(App\User::class)
                ->times(1)
                ->create([
                    'people_id' => $people->id
                ]);
        });
    }
}
