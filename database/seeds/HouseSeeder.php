<?php

use App\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = config('db.houses');

        foreach ($houses as $house) {
            $new_house= new House();
            $new_house->address = $house['address'];
            $new_house->city = $house['city'];
            $new_house->zip_code = $house['post_code'];
            $new_house->rooms = $house['rooms'];
            $new_house->square_meters = $house['square_meters'];
            $table->type = $house['type'];
            $new_house->price = $house['price'];
            $new_house->image = $house['image'];
            $new_house->description = $house['description'];
            $new_house->save();
        }
    }
}