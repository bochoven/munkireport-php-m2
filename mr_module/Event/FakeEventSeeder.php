<?php
namespace MrModule\Event;

use Illuminate\Database\Seeder;

class FakeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class, 50)->create();
    }
}
