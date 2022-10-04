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
                'senin' => 'MTK',
                'selasa' => 'MTK',
                'rabu' => 'MTK',
                'kamis' => 'MTK',
                'jumat' => 'MTK',
            ],
            [
                'id'    => '2',
                'jam' => '09.30 - 11.10',
                'senin' => 'MTK',
                'selasa' => 'MTK',
                'rabu' => 'MTK',
                'kamis' => 'MTK',
                'jumat' => 'MTK',
            ],
        ];

        foreach ($data_jadwal as $data){
            $this->db->table('jadwal')->insert($data);
        }
    }
}
