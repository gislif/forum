<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gisl Freyr Pálmarsson',
            'email' => 'gislif88@gmail.com',
            'password' => bcrypt('iLoveFurries123'),
        ]);

        DB::table('threads')->insert([
            ['title' => 'Gisl Da best!', 'body' => 'Gisli er of course númer 1', 'user_id' => 1],
            ['title' => 'Gisl Da best!!', 'body' => 'Gisli er of course númer 2', 'user_id' => 1],
            ['title' => 'Gisl Da best!!!', 'body' => 'Gisli er of course númer 3', 'user_id' => 1],
            ['title' => 'Gisl Da best!!!!', 'body' => 'Gisli er of course númer 4', 'user_id' => 1],
            ['title' => 'Gisl Da best!!!!!', 'body' => 'Gisli er of course númer 5', 'user_id' => 1],
            ['title' => 'Gisl Da best!!!!!!', 'body' => 'Gisli er of course númer 6', 'user_id' => 1],
        ]);

        DB::table('leikstjori')->insert([
            ['nafn' => 'Ragnar P. Ragnarsson', 'thjoderni' => 'Ísland'],
            ['nafn' => 'James Gatz', 'thjoderni' => 'England'],
            ['nafn' => 'Beggi Helga', 'thjoderni' => 'Ísland'],
            ['nafn' => 'W.C. Bartek', 'thjoderni' => 'Kanada'],
            ['nafn' => 'Wibe Lund', 'thjoderni' => 'Danmörk']
        ]);

        DB::table('dvd')->insert([
            ['titill' => 'Vindurinn er blautur', 'adalleikari' => 'Pétur Selland', 'utgafuar' => 1973, 'verd'=> 2500, 'flokkur'=> 'Spenna', 'leikstjori_id'=> 5],
            ['titill' => 'Veiðidellan er frábær', 'adalleikari' => 'Gústaf Gústafsson', 'utgafuar' => 1999, 'verd'=> 3550, 'flokkur'=> 'Sport', 'leikstjori_id'=> 1],
            ['titill' => 'Into the Wild', 'adalleikari' => 'John Johnson', 'utgafuar' => 2003, 'verd'=> 3770, 'flokkur'=> 'Drama', 'leikstjori_id'=> 4],
            ['titill' => 'The Strider', 'adalleikari' => 'Biff Holmes', 'utgafuar' => 1969, 'verd'=> 4520, 'flokkur'=> 'Ævintýri', 'leikstjori_id'=> 2]
        ]);

    }
}
