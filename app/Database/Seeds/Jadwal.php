<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jadwal extends Seeder
{
    public function run()
    {
        $data_jadwal = [
            [
                'id'    => '1',
                'jam' => '07.30 - 09.20',
                'senin' => 'Basis Data (CD)',
                'selasa' => 'Pemrograman Mobile Lanjut (AB)',
                'rabu' => 'Basis Data (B)',
                'kamis' => 'Dasar-Dasar Pemrograman (D)',
                'jumat' => 'Dasar-Dasar Pemrograman (A)',
            ],
            [
                'id'    => '2',
                'jam' => '09.30 - 11.10',
                'senin' => '',
                'selasa' => 'Pemrograman Web (A)',
                'rabu' => 'Pemrograman Berbasis Objek (A)',
                'kamis' => '',
                'jumat' => 'Dasar-Dasar Pemrograman (B)',
            ],
            [
                'id'    => '3',
                'jam' => '11.10 - 12.50',
                'senin' => 'Pemrograman Interpreter (CD)',
                'selasa' => '',
                'rabu' => 'Pemrograman Web (B) & Komunikasi dan Jaringan Komputer (C)',
                'kamis' => 'Dasar-Dasar Pemrograman (C)',
                'jumat' => '',
            ],
            [
                'id'    => '4',
                'jam' => '13.30 - 15.10',
                'senin' => 'Multimedia (AB)',
                'selasa' => 'Komunikasi dan Jaringan Komputer (AB)',
                'rabu' => 'Multimedia (CD)',
                'kamis' => 'Basis Data (A)',
                'jumat' => 'Pemrograman Interpreter (AB)',
            ],
            [
                'id'    => '5',
                'jam' => '15.30 - 17.00',
                'senin' => '',
                'selasa' => '',
                'rabu' => 'Pemrograman Berbasis Objek (CD)',
                'kamis' => '',
                'jumat' => '',
            ],
        ];

        foreach ($data_jadwal as $data){
            $this->db->table('jadwal')->insert($data);
        }
    }
}
