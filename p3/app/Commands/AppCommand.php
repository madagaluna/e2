<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'char(3)',
            'play' => 'tinyint(1)',
            'timestamp' => 'timestamp',
        ]);
        dump('migrations complete');
    }

    public function seed()
    {
        $faker = Factory::create();

        for($i = 10; $i > 0; $i--) {
            $this->app->db()->insert('rounds', [
                'choice' => ['1pm','2pm','3pm'][rand(0, 2)],
                'play' => rand(0, 1),
                'timestamp' => $faker->dateTimeBetween('-' . $i . ' days', '-' . $i . ' days')->format('Y-m-d H:i:s') #Datetime string
             ]);
        }
        dump('seeds complete');
    }
}