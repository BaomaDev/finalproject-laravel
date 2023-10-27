<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('flights')->insert([
            'airline' => 'Garuda Indonesia',
            'date' => '2023/12/01',
            'departure' => 'Jakarta',
            'arrival' => 'Tokyo'
        ]);
        DB::table('flights')->insert([
            'airline' => 'Scoot',
            'date' => '2023/09/019',
            'departure' => 'Surabaya',
            'arrival' => 'Kuala Lumpur'
        ]);
        DB::table('flights')->insert([
            'airline' => 'Thai Airways',
            'date' => '2022/04/30',
            'departure' => 'Jakarta',
            'arrival' => 'Bangkok'
        ]);
        DB::table('flights')->insert([
            'airline' => 'Singapore Airlines',
            'date' => '2021/02/25',
            'departure' => 'Jakarta',
            'arrival' => 'Singapore'
        ]);
        DB::table('flights')->insert([
            'airline' => 'Etihad',
            'date' => '2022/11/14',
            'departure' => 'Surabaya',
            'arrival' => 'Dubai'
        ]);
        
        DB::table('tours')->insert([
            'name' => 'Malaysia + Genting Highland',
            'description' => 'Hari ini Anda berkumpul di bandara Soekarno – Hatta untuk memulai perjalanan tour menuju ke Kuala Lumpur. Setibanya Anda akan diantar menuju Putrajaya yang merupakan pusat administrasi (pemerintahan federal) yang menggantikan Kuala Lumpur, dimana Anda bisa melihat Putra Mosque, Putra Square, Putra Bridge dan lainnya. Lalu Anda akan diajak untuk city tour Kuala Lumpur dengan melewati / photo stop di Istana Negara, Merdeka Square, Petronas Twin Tower yang merupakan gedung iconic negara Malaysia, dilanjutkan ke Chocolate Factory, Bukit Bintang dan Chinatown.',
            'price' => '15000000',
            'duration' => '4D3N',
            'date' => '2023/12/01',
            'area' => 'Asia',
            
            'flight_id' => '2'
        ]);

        DB::table('tours')->insert([
            'name' => 'Sydney & New Zealand',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique molestiae sapiente omnis magnam necessitatibus debitis saepe dignissimos, voluptates asperiores ex, maiores nisi amet rem mollitia excepturi. Laborum voluptate rerum voluptatum?',
            'price' => '18500000',
            'duration' => '3D2N',
            'date' => '2024/02/11',
            'area' => 'Australia & New Zealand',
            
            'flight_id' => '3'
        ]);

        DB::table('tours')->insert([
            'name' => 'Turkiye + Bosphorus Cruise & Mount Erciyes',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique molestiae sapiente omnis magnam necessitatibus debitis saepe dignissimos, voluptates asperiores ex, maiores nisi amet rem mollitia excepturi. Laborum voluptate rerum voluptatum?',
            'price' => '23750000',
            'duration' => '6D5N',
            'date' => '2024/01/11',
            'area' => 'Europe',
            'flight_id' => '5'
        ]);

    }
}
