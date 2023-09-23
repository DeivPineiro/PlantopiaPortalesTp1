<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('news')->insert([


            [
                'titulo' => 'Arrancamos!, se viene la nueva tecnologia para el agro',
                'subTitulo' => 'Primeros pasos',
                'parrafo' => '¡Próximamente en Argentina! Estamos a punto de recibir una innovadora herramienta para los amantes del campo: la aplicación móvil "Plantopia". Este emocionante lanzamiento promete transformar la forma en la que cuidamos nuestros campos. "Plantopia" ofrecerá una amplia base de datos con información detallada sobre diversas plantas autóctonas, además de brindar consejos expertos sobre cómo cuidarlas y mantenerlas en diferentes tipos de terrenos argentinos. Una función única de identificación de plagas también estará disponible para ayudar a los usuarios a diagnosticar y abordar problemas comunes que puedan afectar a sus plantas.¡No te pierdas este próximo lanzamiento que llevará la magia del conocimiento a tus manos!',
                'fecha_creacion' => '2023-09-23',
                'editor'=> 'David Piñeiro',
                'created_at' => now(), 
                'updated_at' => now(),

            ]



        ]);
    }
}
