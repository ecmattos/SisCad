<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions =
        [
            [
                'code'        => 'ND',
                'description' => '(NAO DEFINIDA)'
            ],
            [
                'code'        => 'BG',
                'description' => 'BENTO GONCALVES'
            ],
            [
                'code'        => 'OS',
                'description' => 'OSORIO'
            ],
            [
                'code'        => 'PF',
                'description' => 'PASSO FUNDO'
            ],
            [
                'code'        => 'PA',
                'description' => 'PORTO ALEGRE'
            ],
            [
                'code'        => 'RG',
                'description' => 'RIO GRANDE'
            ],
            [
                'code'        => 'SC',
                'description' => 'SANTA CRUZ DO SUL'
            ],
            [
                'code'        => 'SM',
                'description' => 'SANTA MARIA'
            ],
            [
                'code'        => 'SA',
                'description' => 'SANTO ANGELO'
            ],
            [
                'code'        => 'UR',
                'description' => 'URUGUAIANA'
            ]
        ];
    
        foreach ($regions as $region)
        {
            \SisCad\Region::create($region);
        }
    }
}

