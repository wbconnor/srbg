<?php

use Illuminate\Database\Seeder;

class HardMountOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brands')->delete();

      $brands = array(
        array(
            'name' => 'Available',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'name' => 'Not Available',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'name' => 'Required',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('brands')->insert($brands);
    }
}
