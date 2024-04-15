<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filieres')->insert([
             [
            
          'titre'=> "DEVOWFS",
             'description'=> "Développement digital- option web full stack",
             'created_at'=>now(),
             'updated_at'=>now(),
             ],
             [
            
                'titre'=> "AM",
                   'description'=> "application mobile",
                   'created_at'=>now(),
                   'updated_at'=>now(),
                   ],
             [
            
                    'titre'=> "Rv",
                       'description'=> "realité vertuel",
                       'created_at'=>now(),
                       'updated_at'=>now(),
              ],
            ]);

    }
}
