<?php

use Illuminate\Database\Seeder;
use App\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = new State();
        $state->name = 'Jalisco';
        $state->country_id = 1;

        $state1 = new State();
        $state1->name = 'Monterrey';
        $state1->country_id = 1;

        $state2 = new State();
        $state2->name = 'Nuevo Leon';
        $state2->country_id = 1;

        $state3 = new State();
        $state3->name = 'Sonora';
        $state3->country_id = 1;

        $state->save();
        $state1->save();
        $state2->save();
        $state3->save();
    }
}
