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
        // $this->call(UsersTableSeeder::class);

        $data = [
          "nama_kelas" => "XII-RPL3",
          "jurusan" => "Rekayasa Perangkat Lunak"
        ];

        $data2 = [
          "nis" => "1415115710",
          "nama_siswa" => "Alwan Alfian Setiawan",
          "jk" => "L",
          "alamat" => "Jalan Babakan Karet",
          "notelp" => "087823505007",
          "agama" => "Islam"
        ]

        DB::table('t_kelas')->insert($data);
        DB::table('t_siswa')->insert($data2);
    }
}
