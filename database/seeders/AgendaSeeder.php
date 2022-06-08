<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'namaguru' => 'jakesim',
            'mapel' => 'math',
            'materipel' => 'kubus',
            'kelas' => 'XI RPL',
            'absen' => '4',
            'jampel' => '10.00-11.30',
            'linkpem' => 'udifshdojsmck',
            'dokumentasi' => 'isdjsid',
            'keterangan' => 'nnnnnnn',
            'jenispem' => 'offline',
        ]);
    }
}
