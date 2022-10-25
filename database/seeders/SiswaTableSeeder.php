<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('siswa')->delete();
        
        \DB::table('siswa')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nisn' => '365454',
                'nama' => 'Myoui Mina',
                'jk' => 'Perempuan',
                'alamat' => 'gatau di mana',
                'email' => 'mina@gmail.com',
                'foto' => 'mina.jpg',
                'about' => 'profilnya mina',
                'created_at' => '2022-08-10 00:51:39',
                'updated_at' => '2022-08-10 00:54:06',
            ),
            1 => 
            array (
                'id' => 4,
                'nisn' => '559565',
                'nama' => 'Choi Tzuyu',
                'jk' => 'Perempuan',
                'alamat' => 'Jalan yang benar',
                'email' => 'tzuyu@gmail.com',
                'foto' => 'tzuyu.jpg',
                'about' => 'profil tzuyu punya',
                'created_at' => '2022-08-08 10:56:37',
                'updated_at' => '2022-08-09 00:00:00',
            ),
            2 => 
            array (
                'id' => 7,
                'nisn' => '001122334466',
                'nama' => 'Aulia',
                'jk' => 'Perempuan',
                'alamat' => 'in the hood',
                'email' => 'hdrrr21@gmail.com',
            'foto' => '1662223479_Screenshot (70).png',
                'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum praesentium voluptatum et eligendi dolorem animi, inventore ratione corporis ullam veniam, fugit molestias perferendis commodi vero optio doloribus, alias eveniet minus. Doloremque nobis, quasi, ea vel aspernatur exercitationem ratione sed aperiam vero tempore repellendus, recusandae expedita perspiciatis doloribus odit veritatis.',
                'created_at' => '2022-09-03 16:44:39',
                'updated_at' => '2022-09-03 16:44:39',
            ),
        ));
        
        
    }
}