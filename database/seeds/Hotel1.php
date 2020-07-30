<?php

use Illuminate\Database\Seeder;

class Hotel1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $batas = 5;
        for ($i=0; $i < $batas ; $i++) { 
            DB::table('hotels')->insert([
                'nama_pengunjung' => Str::random(10),
                'alamat' => Str::random(20),
                'jenis_kelamin' => Str::random(15),
                'no_tlp' => Str::random(8),
            ]);
        }
    }
}