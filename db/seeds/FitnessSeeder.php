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
    public function getDependencies()
    {
        return [
            'FitnessCategorySeeder'
            'FitnessLocationSeeder',
            'FitnessSeeder'
        ];
    }


    public function run()
    {
        $data = [
            [
                'body'    => 'foo',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'body'    => 'bar',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'body'    => 'bar',
                'created' => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('posts');
        $table->insert($data)
              ->save();
    }
}
