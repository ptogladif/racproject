<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'id' => '1',
                'title'=>'ALFA ROMEO',
                'name'=>'AL',
                'icon'=>'alfa.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2',
                'title'=>'AUDI',
                'name'=>'AU',
                'icon'=>'audi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '3',
                'title'=>'BMW',
                'name'=>'BM',
                'icon'=>'bmw.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '4',
                'title'=>'CHEVROLET',
                'name'=>'CV',
                'icon'=>'chevrolet.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5',
                'title'=>'CITROEN',
                'name'=>'CI',
                'icon'=>'citroen.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => '6',
                'title'=>'FIAT',
                'name'=>'FI',
                'icon'=>'fiat.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '7',
                'title'=>'FORD',
                'name'=>'FO',
                'icon'=>'ford.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '8',
                'title'=>'HONDA',
                'name'=>'HO',
                'icon'=>'honda.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '9',
                'title'=>'ISUZU',
                'name'=>'IS',
                'icon'=>'isuzu.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '10',
                'title'=>'KIA',
                'name'=>'KI',
                'icon'=>'kia.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '11',
                'title'=>'LANCIA',
                'name'=>'LA',
                'icon'=>'lancia.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '12',
                'title'=>'LAND ROVER',
                'name'=>'LR',
                'icon'=>'landrover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '13',
                'title'=>'MAZDA',
                'name'=>'MA',
                'icon'=>'mazda.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '14',
                'title'=>'MERCEDES BENZ',
                'name'=>'ME',
                'icon'=>'mercedes.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '15',
                'title'=>'MITSUBISHI',
                'name'=>'MI',
                'icon'=>'mitsubishi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '16',
                'title'=>'OPEL',
                'name'=>'OP',
                'icon'=>'opel.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '17',
                'title'=>'PEUGEOT',
                'name'=>'PE',
                'icon'=>'peugeot.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '18',
                'title'=>'RENAULT',
                'name'=>'RE',
                'icon'=>'renault.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '19',
                'title'=>'ROVER',
                'name'=>'RO',
                'icon'=>'rover.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '20',
                'title'=>'SEAT',
                'name'=>'SE',
                'icon'=>'seat.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '21',
                'title'=>'SKODA',
                'name'=>'SK',
                'icon'=>'skoda.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '22',
                'title'=>'SMART',
                'name'=>'SM',
                'icon'=>'smart.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '23',
                'title'=>'TOYOTA',
                'name'=>'TO',
                'icon'=>'toyota.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '24',
                'title'=>'UMM',
                'name'=>'UM',
                'icon'=>'umm.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '25',
                'title'=>'VW',
                'name'=>'VW',
                'icon'=>'vw.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '26',
                'title'=>'NISSAN',
                'name'=>'NI',
                'icon'=>'nissan.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '27',
                'title'=>'VOLVO',
                'name'=>'VO',
                'icon'=>'volvo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '28',
                'title'=>'HYUNDAI',
                'name'=>'HY',
                'icon'=>'hyundai.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '29',
                'title'=>'SAAB',
                'name'=>'SA',
                'icon'=>'saab.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '30',
                'title'=>'NEW HOLLAND',
                'name'=>'NH',
                'icon'=>'newholland.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '31',
                'title'=>'JAGUAR',
                'name'=>'JA',
                'icon'=>'jaguar.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '32',
                'title'=>'ABARTH',
                'name'=>'AB',
                'icon'=>'abarth.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Brand::insert($brands);
    }
}
