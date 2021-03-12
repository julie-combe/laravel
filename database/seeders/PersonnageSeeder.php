<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnages')->insert([
            [
            'nom' => 'Pokemon',
            'creation' => 1999,
            'affilie' => 'Pokemon go',
            'dessinateur' => 'Ken Sugimori',
            ],
        ]);
    }
}