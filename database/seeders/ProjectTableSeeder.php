<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project')->delete();
        
        \DB::table('project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_siswa' => 1,
                'nama_prjt' => 'project 1',
                'desc_prjt' => 'ya project 1',
                'foto_prjt' => 'project1.jpg',
                'tgl' => '2022-07-17',
                'created_at' => '2022-08-10 01:14:37',
                'updated_at' => '2022-08-10 01:14:37',
            ),
            1 => 
            array (
                'id' => 4,
                'id_siswa' => 4,
                'nama_prjt' => 'project 2',
                'desc_prjt' => 'test for input output baru',
                'foto_prjt' => '1662116311_output_js.png',
                'tgl' => '2022-09-02',
                'created_at' => '2022-09-02 10:58:31',
                'updated_at' => '2022-09-02 10:58:31',
            ),
        ));
        
        
    }
}