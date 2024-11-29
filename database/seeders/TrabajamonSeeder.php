<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Trabajamon;


class TrabajamonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cargar el archivo JSON
        $json = File::get(base_path('Trabajamon.json')); // error: no encuentra el archivo
        $data = json_decode($json, true);

        // Crear los registros utilizando la factory
        foreach ($data as $item) {
            Trabajamon::factory()->create([
                'nombre' => $item['nombre'],
                'edad' => $item['edad'],
                'profesion' => $item['profesion'],
                'vida' => $item['vida'],
                'ataque' => $item['ataque'],
                'defensa' => $item['defensa'],
                'velocidad' => $item['velocidad']
                // Agrega más campos si es necesario
            ]);
        }
    }
}
