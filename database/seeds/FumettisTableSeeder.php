<?php

use App\Fumetti;
use Illuminate\Database\Seeder;

class FumettisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_fumetto = config('comics');
        foreach($array_fumetto as $fumetto){
            $new_fumetto = new Fumetti();
            $new_fumetto->title = $fumetto['title'];
            $new_fumetto->description = $fumetto['description'];
            $new_fumetto->image = $fumetto['thumb'];
            $new_fumetto->price = $fumetto['price'];
            $new_fumetto->series = $fumetto['series'];
            $new_fumetto->sale_date = $fumetto['sale_date'];
            $new_fumetto->type = $fumetto['type'];
            $new_fumetto->save();
           

        }

    }
}
