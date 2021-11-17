<?php

namespace Database\Seeders;

use App\Models\Dog;

use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dog = new Dog();

        $dog->raza = "Pastor alemán";
        $dog->tamaño = "Mediano";
        $dog->color = "Negro";

        $dog->save();

        $dog2 = new Dog();
        
        $dog2->raza = "Labrador retriever";
        $dog2->tamaño = "Mediano";
        $dog2->color = "Marron";

        $dog2->save();

        $dog3 = new Dog();
        
        $dog3->raza = "Husky siberiano";
        $dog3->tamaño = "Pequeño";
        $dog3->color = "Blanco";

        $dog3->save();
    }
}
