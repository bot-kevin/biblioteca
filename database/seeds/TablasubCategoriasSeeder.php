<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablasubCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        ['Baloncesto','Tenis de mesa','Futbol', 'Futbol de salon','Voleibol','Gimnasio', 'Parque recreacional', 'Natación', 'Ajedrez', 'Atletismo'],
                    ['Música','Teatro','Danza','Artes plásticas'],
                    ['Monitorias','Jóvenes en acción','Casa estudiantil',
                    'Bono estudiantil','Apoyo res 050','Cafetría','Generación E','Revición DDHH'],
                    ['Comunidades étnias','Género'];
        */
        $subcategorias = [
           ['1','Música'],
           ['1','Teatro'] ,
           ['1','Danza'] ,
           ['1','Artes plásticas'] ,
           ['2','Baloncesto'] ,
           ['2','Tenis de mesa'] ,
           ['2','Futbol'] ,
           ['2','Futbol de salon'] ,
           ['2','Voleibol'] ,
           ['2','Gimnasio'] ,
           ['2','Parque recreacional'] ,
           ['2','Natación'] ,
           ['2','Ajedrez'] ,
           ['2','Atletismo'],
           ['3','Monitorias'] ,
           ['3','Jóvenes en acción'] ,
           ['3','Casa estudiantil'] ,
           ['3','Bono estudiantil'] ,
           ['3','Apoyo res 050'] ,
           ['3','Cafetría'] ,
           ['3','Generación E'] ,
           ['3','Revición DDHH']      ,      
           ['4','Comunidades étnias'], 
           ['4','Género']      

        ];

        foreach ($subcategorias as $key => $value) {
            DB::table('subcategorias')->insert([
                'nombre' => $value[1],
                'id_categorias' => $value[0],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
