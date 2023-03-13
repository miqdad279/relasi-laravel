<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Wali;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D015015072'
        ));

        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D015015088'
        ));

        $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D015015078'
        ));

        $this->command->info('Mahasiswa telah diisi!');

        Wali::create(array(
            'nama' => 'Henny A',
            'id_mahasiswa' => $ani->id,
        ));
        Wali::create(array(
            'nama' => 'Andi S',
            'id_mahasiswa' => $budi->id,
        ));
        Wali::create(array(
            'nama' => 'Viki D',
            'id_mahasiswa' => $nia->id,
        ));

        $this->command->info('Data mahasiswa dan wali telah diisi!');
    }
}
