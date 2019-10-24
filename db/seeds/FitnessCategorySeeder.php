<?php


use Phinx\Seed\AbstractSeed;

class FitnessCategorySeeder extends AbstractSeed
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
                'FitnessCategoryName' => 'Zumba',
                'FitnessCategoryDescription' => 'Lorem ipsum dolor sit amet'

            ],
            [
                'FitnessCategoryName' => 'Workout',
                'FitnessCategoryDescription' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'FitnessCategoryName' => 'Yoga',
                'FitnessCategoryDescription' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'FitnessCategoryName' => 'Pilates',
                'FitnessCategoryDescription' => 'Lorem ipsum dolor sit amet'
            ],
            [
                'FitnessCategoryName' => 'Boxing',
                'FitnessCategoryDescription' => 'Lorem ipsum dolor sit amet'
            ]
        ];

        $table = $this->table('fitnesscategory');
        $table->insert($data)
              ->save();
    }
}
