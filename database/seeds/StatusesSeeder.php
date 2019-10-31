<?php

use Illuminate\Database\Seeder;
use App\Status;
class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->truncate();    // people
        $arr = ["Active", 
        "Alive",
        "Arrested",
        "Deceased",
        "In Custody",
        "Incarcerated",
       " Retired",
        "Unknown"];

        foreach ($arr as $key => $value) {
            Status::create([
                "status" => $value
                ]);
        };
    }
}
