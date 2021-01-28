<?php

use Illuminate\Database\Seeder;
//This is Databases For Touhou Projects Waifu Websites ..
class FandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fandoms')->insert([
            'nama' => 'Touhou Project',
            'asal' => 'Zun / Syanghai Alice',
            'gambar' => 'touhou.png'
        ]);
        DB::table('fandoms')->insert([
            'nama' => 'Genshin Impact',
            'asal' => 'Mihoyo',
            'gambar' => 'genshinimpact.png'
        ]);
    }
}
