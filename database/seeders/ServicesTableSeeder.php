<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icon' => 'fas fa-heartbeat',
                'images' => 'dummy.jpg',
                'title' => 'Nesciunt Mete',
                'description' => 'Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.',
                'link' => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
