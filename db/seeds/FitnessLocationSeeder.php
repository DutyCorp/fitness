<?php


use Phinx\Seed\AbstractSeed;

class FitnessLocationSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'FitnessLocationName' => 'Jakarta'
            ],
            [
                'FitnessLocationName' => 'Bandung'
            ],
            [
                'FitnessLocationName' => 'Surabaya'
            ],
            [
                'FitnessLocationName' => 'Bali'
            ],
            [
                'FitnessLocationName' => 'Medan'
            ]
        ];

        $table = $this->table('fitnesslocation');
        $table->insert($data)
              ->save();
    }
}
