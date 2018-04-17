<?php

use Illuminate\Database\Seeder;

class ShiftersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shifters')->delete();

      $shifters = array(
        array(
            'model' => 'ClubSport Shifter SQ V 1.5',
            'description' => 'Made entirely of metal. Standard mount for automotive knobs.',
            'brand_id' => 3,
            'mount_id' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => '2015 DSD Pro',
            'description' => 'Hand built, lifetime warranty.',
            'brand_id' => 9,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'DSD Short Throw Pro',
            'description' => 'Tight, narrow action. Sturdy construction.',
            'brand_id' => 9,
            'mount_id' => 3,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => '',
            'description' => '',
            'brand_id' => ,
            'mount_id' => ,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
        array(
            'model' => 'G Driving Force',
            'description' => 'The sim racing shifter for G29 and G920 Driving Force Racing Wheels.',
            'brand_id' => 2,
            'mount_id' => 2,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ),
      );
      DB::table('shifters')->insert($shifters);
    }
}
