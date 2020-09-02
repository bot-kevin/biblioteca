<?php

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
        $this->truncartablas([
            'categorias',
            'subcategorias'
        ]);
         $this->call(TablaCategoriasSeeder::class);
         $this->call(TablasubCategoriasSeeder::class);
    }
    public function truncartablas(array $tablas){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach ($tablas as $key => $value) {
            DB::table($value)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
