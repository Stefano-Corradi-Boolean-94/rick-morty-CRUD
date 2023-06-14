<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters_json = file_get_contents('https://rickandmortyapi.com/api/character');
        $characters = json_decode($characters_json);

        foreach ($characters->results as $char) {
            $new_char = new Character();
            $new_char->name = $char->name;
            $new_char->slug = Character::generateSlug($new_char->name);
            $new_char->species = $char->species;
            $new_char->type = $char->type;
            $new_char->gender = $char->gender;
            $new_char->origin_name = $char->origin->name;
            $new_char->location_name = $char->location->name;
            $new_char->image = $char->image;
            $new_char->save();
        }
    }
}
