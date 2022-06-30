<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user=[
            [
                'name' => 'Beatriz',
                'password' => bcrypt('beatriz123'),
                'phone_number' => '085470448086',
                'city' => 'Jakarta',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'name' => 'Steven',
                'password' => bcrypt('steven123'),
                'phone_number' => '082372418081',
                'city' => 'Malang',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'name' => 'Hana',
                'password' => bcrypt('hana123'),
                'phone_number' => '085470446789',
                'city' => 'Bandung',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'name' => 'Bambang',
                'password' => bcrypt('bambang123'),
                'phone_number' => '085412348086',
                'city' => 'Pekanbaru',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('users')->insert($user);
        $this->call([
            DriverSeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class
        ]);
    }
}
