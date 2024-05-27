<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Local;
class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Local::create(['name' => 'Centro']);
        Local::create(['name' => 'Vila Carli']);
        Local::create(['name' => 'Trianon']);
        Local::create(['name' => 'Conradinho']);
        Local::create(['name' => 'Vila Bela']);
        Local::create(['name' => 'Vila Concórdia']);
        Local::create(['name' => 'Boqueirão']);
        Local::create(['name' => 'Santa Cruz']);
        Local::create(['name' => 'Santana']);
        Local::create(['name' => 'Morro Alto']);
        Local::create(['name' => 'Industrial']);
        Local::create(['name' => 'Bonsucesso']);
        Local::create(['name' => 'Dos Estados']);
        Local::create(['name' => 'São Cristóvão']);
        Local::create(['name' => 'Batel']);
        Local::create(['name' => 'Primavera']);
        Local::create(['name' => 'Dos Estados']);
        Local::create(['name' => 'Cascavel']);
        Local::create(['name' => 'Conradinho']);
        Local::create(['name' => 'Santana']);
        Local::create(['name' => 'Jardim das Américas']);
        Local::create(['name' => 'Vila Planalto']);

        // Distritos
        Local::create(['name' => 'Guará']);
        Local::create(['name' => 'Entre Rios']);
        Local::create(['name' => 'Palmeirinha']);
        Local::create(['name' => 'Guairacá']);
        Local::create(['name' => 'Guará']);
        Local::create(['name' => 'Guarapuavinha']);
        Local::create(['name' => 'Jordãozinho']);
    }
}
