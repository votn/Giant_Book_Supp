<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('publishers')->insert(
            [
                'publisher_name' => 'Gramedia Pustaka Utama',
                'publisher_address' => 'Jl. Palmerah Barat No.29, RT.1/RW.2, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270',
                'publisher_phone' => '0215483008',
                'publisher_email' => 'customercare@gramedia.com',
                'publisher_image' => 'https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/02/02083934/Gramedia-World-Karawang.png'
            ]
        );
        DB::table('publishers')->insert(
            [
                'publisher_name' => 'Falcon',
                'publisher_address' => 'Jl. Duren Tiga No.35, RT.4/RW.1, Duren Tiga, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760, Indonesia',
                'publisher_phone' => '0217974970',
                'publisher_email' => 'contact@falcon.co.id',
                'publisher_image' => 'https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_170,w_170,f_auto,b_white,q_auto:eco,dpr_1/tctcmwjn5cleneaxzsnk'
            ]
        );
        DB::table('publishers')->insert(
            [
                'publisher_name' => 'Deepublish',
                'publisher_address' => 'Jl.Rajawali G. Elang 6 No 3 RT/RW 005/033, Drono, Sardonoharjo, Ngaglik, Sleman, D.I Yogyakarta 55581',
                'publisher_phone' => '02742836082',
                'publisher_email' => 'adminkonsultan@deepublish.co.id',
                'publisher_image' => 'https://penerbitdeepublish.com/wp-content/uploads/2020/08/Logo-Baru-April-768x272.png'
            ]
        );
        DB::table('publishers')->insert(
            [
                'publisher_name' => 'Grasindo',
                'publisher_address' => 'Gedung Kompas Gramedia Blok 1/lantai 3\r\nJl. Palmerah Barat No. 29-37, Jakarta, 10270',
                'publisher_phone' => '02153650110',
                'publisher_email' => 'redaksi@grasindo.id',
                'publisher_image' => 'https://www.grasindo.id/images/uploads/logo/logowebsite.jpg'
            ]
        );

    }
}
