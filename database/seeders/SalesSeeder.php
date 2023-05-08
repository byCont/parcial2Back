<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'nameVendedor' => 'Juan',
            'nameCliente' => 'Pedro',
            'nameProducto' => 'Pizza',
            'price' => 100,
            'fechaCompra' => '2023-05-08'

        ]);
    }
}
