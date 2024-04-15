<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('groupes')->insert(
        [
            [
                'libelle'=>'wfs201',
                'filiere_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'libelle'=>'wfs202',
                'filiere_id'=>2,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'libelle'=>'AM204',
                'filiere_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'libelle'=>'Rv204',
                'filiere_id'=>4,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]
        );
    }
}
