<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //this is database for touhou project & genshin impact hallucinate generator .. :3
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'chen',
            'fandom_id' => 1,
            'gambar' => 'chen.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'marisa',
            'fandom_id' => 1,
            'gambar' => 'marisa.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'ran',
            'fandom_id' => 1,
            'gambar' => 'ran.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'reimu',
            'fandom_id' => 1,
            'gambar' => 'reimu.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'reisen',
            'fandom_id' => 1,
            'gambar' => 'reisen.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'sakuya',
            'fandom_id' => 1,
            'gambar' => 'sakuya.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'youmu',
            'fandom_id' => 1,
            'gambar' => 'youmu.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'yukari',
            'fandom_id' => 1,
            'gambar' => 'yukari.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'barbara',
            'fandom_id' => 2,
            'gambar' => 'barbara.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'venti',
            'fandom_id' => 2,
            'gambar' => 'venti.png'
        ]);
        DB::table('products')->insert([
            'nama' => 'keqing',
            'fandom_id' => 2,
            'gambar' => 'keqing.png'
        ]);
    }
}
