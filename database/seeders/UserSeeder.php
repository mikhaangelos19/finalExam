<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Kepala BIN',
            'username' => 'kabin',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Wakil Kepala BIN',
            'username'=> 'wakabin',
            'password' => bcrypt('IndonesiaRaya1@')],
            
            ['name' => 'Deputi-I',
            'username'=> 'desatu',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-II',
            'username'=> 'dedua',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-III',
            'username'=> 'detiga',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-IV',
            'username'=> 'deeempat',
            'password' => bcrypt('IndonesiaRaya1@')],
            
            ['name' => 'Deputi-V',
            'username'=> 'delima',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-VI',
            'username'=> 'deenam',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-VII',
            'username'=> 'detujuh',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-VIII',
            'username'=> 'dedelapan',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Deputi-IX',
            'username'=> 'desembilan',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-11',
            'username'=> 'dir11',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-12',
            'username'=> 'dir12',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-13',
            'username'=> 'dir13',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-14',
            'username'=> 'dir14',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-15',
            'username'=> 'dir15',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-21',
            'username'=> 'dir21',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-22',
            'username'=> 'dir22',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-23',
            'username'=> 'dir23',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-24',
            'username'=> 'dir24',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-25',
            'username'=> 'dir25',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-31',
            'username'=> 'dir31',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-32',
            'username'=> 'dir32',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-33',
            'username'=> 'dir33',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-34',
            'username'=> 'dir34',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-35',
            'username'=> 'dir35',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-41',
            'username'=> 'dir41',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-42',
            'username'=> 'dir42',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-43',
            'username'=> 'dir43',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-44',
            'username'=> 'dir44',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-45',
            'username'=> 'dir45',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-51',
            'username'=> 'dir51',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-52',
            'username'=> 'dir52',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-53',
            'username'=> 'dir53',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-54',
            'username'=> 'dir54',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-55',
            'username'=> 'dir55',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-61',
            'username'=> 'dir61',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-62',
            'username'=> 'dir62',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-63',
            'username'=> 'dir63',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-64',
            'username'=> 'dir64',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-65',
            'username'=> 'dir65',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-71',
            'username'=> 'dir71',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-72',
            'username'=> 'dir72',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-73',
            'username'=> 'dir73',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-74',
            'username'=> 'dir74',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-75',
            'username'=> 'dir75',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-81',
            'username'=> 'dir81',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-82',
            'username'=> 'dir82',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-83',
            'username'=> 'dir83',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-84',
            'username'=> 'dir84',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-85',
            'username'=> 'dir85',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-91',
            'username'=> 'dir91',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-92',
            'username'=> 'dir92',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-93',
            'username'=> 'dir93',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-94',
            'username'=> 'dir94',
            'password' => bcrypt('IndonesiaRaya1@')],

            ['name' => 'Direktur-95',
            'username'=> 'dir95',
            'password' => bcrypt('IndonesiaRaya1@')],
        ];

        User::insert($data);
    }
}
