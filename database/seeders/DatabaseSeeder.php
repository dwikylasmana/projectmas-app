<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\News;
use App\Models\pendaftaran;
use App\Models\User;
use App\Models\galleri;
use App\Models\Jadwal;
use App\Models\pengajuan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'dwikyl',
            'name'=> 'Dwiky Lasmana Admin',
            'email'=> 'dwikylasmana@gmail.com',
            'role'=> 'Admin',
            'password'=> bcrypt('dwiky')
        ]);

        pendaftaran::create([
            'user_id'=> 1,
            'name'=> 'Dwiky Lasmana',
            'nik' => '1586498756324156',
            'scan_ktp' => 'ktp.png',
            'scan_kk'=> 'kk.png',
            'telp'=> '083819192260',
            'negara'=> 'Indonesia',
            'provinsi' => 'Jawa Barat',
            'alamat' => 'Jl. Baladewa D6 No. 10',
            'npwp'=> '154879653284562',
            'scan_npwp'=> 'npwp.png',
            'no_sppkp'=> '561613132154',
            'scan_sppkp'=> 'sppkp.png'
        ]);

        User::create([
            'username' => 'ilhams',
            'name'=> 'Ilham Saputra Admin',
            'role'=> 'Admin',
            'email'=> 'ilhams6688@gmail.com',
            'password'=> bcrypt('ilham')
        ]);

        User::create([
            'username' => 'dummy',
            'name'=> 'Member View',
            'role' => 'Klien',
            'email'=> 'dummy123@gmail.com',
            'password'=> bcrypt('member')
        ]);

        Category::create([
            'name'=>'Pembaharuan',
            'type'=>'Website Maintenance',
            'slug'=>'update'
        ]);
        
        Category::create([
            'name'=>'Legalitas',
            'type'=>'document',
            'slug'=>'legalitas'
        ]);
        
        Category::create([
            'name'=>'Acara',
            'type'=>'Office Event',
            'slug'=>'acara'
        ]);

        News::create([
            'title'=> 'Verifikasi Dokumen Desember 2021',
            'slug'=> 'verifikasi-dokumen-desember-2021',
            'user_id'=> 1,
            'category_id' =>2,
            'intro'=> 'Proses pendaftaran kerjasama pada bulan desember direkap berdasarkan nomor pendaftaran yang ditentukan',
            'content'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis tempore ipsam totam asperiores molestias earum excepturi similique amet soluta voluptate quidem repudiandae, doloremque provident? Eum consequatur eos soluta minima nobis. Quas reiciendis quam necessitatibus nulla praesentium illum quae, facere iste deserunt? Porro mollitia rerum quia voluptates. At eos doloremque tempore error laudantium quidem aliquam. Tenetur dignissimos, ratione fugiat reprehenderit quam molestias at veniam nesciunt sit temporibus cupiditate et, recusandae minus. Deleniti maiores fugit voluptatibus reiciendis aut laborum sunt quae aliquam. Qui iste aspernatur quo modi magnam iure, deserunt beatae sequi dicta, ratione hic velit earum repellat sit. Quae, molestiae vitae.'
        ]);
        
        News::create([
            'title'=> 'Jadwal Meeting Bulan Desember 2021',
            'slug'=> 'jadwal-meeting-bulan-desember-2021',
            'user_id'=> 2,
            'category_id' =>3,
            'intro'=> 'Berikut merupakan jadwal yang telah disebarkan untuk waktu dan tempat meeeting',
            'content'=> 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis tempore ipsam totam asperiores molestias earum excepturi similique amet soluta voluptate quidem repudiandae, doloremque provident? Eum consequatur eos soluta minima nobis. Quas reiciendis quam necessitatibus nulla praesentium illum quae, facere iste deserunt? Porro mollitia rerum quia voluptates. At eos doloremque tempore error laudantium quidem aliquam. Tenetur dignissimos, ratione fugiat reprehenderit quam molestias at veniam nesciunt sit temporibus cupiditate et, recusandae minus. Deleniti maiores fugit voluptatibus reiciendis aut laborum sunt quae aliquam. Qui iste aspernatur quo modi magnam iure, deserunt beatae sequi dicta, ratione hic velit earum repellat sit. Quae, molestiae vitae.'
        ]);
        
        galleri::create([
            'title'=>'Pembaharuan',
            'slug'=>'update',
            'user_id'=>'1',
            'image1'=>'p1-1.png',
            'image2'=>'p1-2.png',
            'image3'=>'p1-3.png',
            'image4'=>'p1-4.png',
            'content'=>'Projek ini dibuat pada lahan tanah kosong'
        ]);
        
        galleri::create([
            'title'=>'Cinengnong',
            'slug'=>'cinengong',
            'user_id'=>'1',
            'image1'=>'p2-1.png',
            'image2'=>'p2-2.png',
            'image3'=>'p2-3.png',
            'image4'=>'p2-4.png',
            'content'=>'Projek ini dibuat pada tanah lahan kosong'
        ]);
        
        galleri::create([
            'title'=>'Cirami',
            'slug'=>'cirami',
            'user_id'=>'1',
            'image1'=>'p3-1.png',
            'content'=>'Projek ini dibuat pada tanah yang tidak kosong'
        ]);
        
        User::factory(20)->create();
        News::factory(25)->create();
        pendaftaran::factory(20)->create();
        Jadwal::factory(20)->create();
        pengajuan::factory(20)->create();
    }
}
