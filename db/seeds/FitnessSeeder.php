<?php

use Phinx\Seed\AbstractSeed;

class FitnessSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    /*public function getDependencies()
    {
        return [
            'FitnessCategorySeeder',
            'FitnessLocationSeeder',
            'FitnessSeeder'
        ];
    }*/


    public function run()
    {
        $data = [
            [
                'FitnessName' => 'Tiger Boxing',
                'FitnessCategoryID' => '5',
                'FitnessLocationID' => '2',
                'FitnessPrice' => '200000'

            ],
            [
                'FitnessName' => 'Aloha',
                'FitnessCategoryID' => '1',
                'FitnessLocationID' => '3',
                'FitnessPrice' => '400000'
            ],
            [
                'FitnessName' => 'Rockstar Gym',
                'FitnessCategoryID' => '2',
                'FitnessLocationID' => '1',
                'FitnessPrice' => '350000'
            ],
            [
                'FitnessName' => 'Mayweather Boxing Arena',
                'FitnessCategoryID' => '5',
                'FitnessLocationID' => '5',
                'FitnessPrice' => '1000000'
            ],
            [
                'FitnessName' => 'Relaax',
                'FitnessCategoryID' => '3',
                'FitnessLocationID' => '4',
                'FitnessPrice' => '150000'
            ],
            [
                'FitnessName' => 'Pilatology',
                'FitnessCategoryID' => '4',
                'FitnessLocationID' => '1',
                'FitnessPrice' => '250000'
            ],
            [
                'FitnessName' => 'Golds Gym',
                'FitnessCategoryID' => '2',
                'FitnessLocationID' => '5',
                'FitnessPrice' => '200000'
            ],
            [
                'FitnessName' => 'Ooga Chaka Zumba',
                'FitnessCategoryID' => '1',
                'FitnessLocationID' => '2',
                'FitnessPrice' => '450000'
            ]
        ];

        $table = $this->table('fitness');
        $table->insert($data)
              ->save();
    }
}
