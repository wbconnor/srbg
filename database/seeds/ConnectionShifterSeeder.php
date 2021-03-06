<?php

use Illuminate\Database\Seeder;

class ConnectionShifterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('connection_shifter')->delete();

      $shifter_connections = array(
        array(
            'connection_id' => 2,
            'shifter_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 3,
            'shifter_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 4,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 5,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 6,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 7,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 8,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 9,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 3,
            'shifter_id' => 9,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 1,
            'shifter_id' => 10,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'connection_id' => 3,
            'shifter_id' => 11,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('connection_shifter')->insert($shifter_connections);
    }
}
