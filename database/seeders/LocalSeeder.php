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
        Local::create(['name' => 'Aldeia']);
        Local::create(['name' => 'Alto Cascavel']);
        Local::create(['name' => 'Alto da XV']);
        Local::create(['name' => 'Batel']);
        Local::create(['name' => 'Boqueirão']);
        Local::create(['name' => 'Bonsucesso']);
        Local::create(['name' => 'Cascavel']);
        Local::create(['name' => 'Centro']);
        Local::create(['name' => 'Conradinho']);
        Local::create(['name' => 'Entre Rios']);
        Local::create(['name' => 'Estados']);
        Local::create(['name' => 'Guairacá']);
        Local::create(['name' => 'Guará']);
        Local::create(['name' => 'Imóvel Morro Alto (2000)']);
        Local::create(['name' => 'Jardim das Américas']);
        Local::create(['name' => 'Jordão']);
        Local::create(['name' => 'Morro Alto']);
        Local::create(['name' => 'Palmeirinha']);
        Local::create(['name' => 'Primavera']);
        Local::create(['name' => 'Santa Cruz']);
        Local::create(['name' => 'Santana']);
        Local::create(['name' => 'São Cristóvão']);
        Local::create(['name' => 'Trianon']);
        Local::create(['name' => 'Vila Bela']);
        Local::create(['name' => 'Vila Carli']);
    }
}
