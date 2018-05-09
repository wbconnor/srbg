<?php

use Illuminate\Database\Seeder;

class ConfigurationShifterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('configuraiton_shifter')->delete();

      $shifter_configuraitons = array(
        array(
            'configuraiton_id' => 2,
            'shifter_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('configuraiton_shifter')->insert($shifter_configuraitons);
    }
}
