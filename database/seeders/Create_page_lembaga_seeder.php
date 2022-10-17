<?php

namespace Database\Seeders;

use App\Models\pages;
use App\Models\categories;
use Illuminate\Database\Seeder;

class Create_page_lembaga_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        print("Proses menambahkan halaman profil anak lembaga PGRI");
        pages::create([
            'title' => 'Profil YPLP Dasmen PGRI',
            'content' => '<p>Profil YPLP</p>',
            'cover_img' => 'post_cover/anak_lembaga_1.jpeg'
        ]);
        pages::create([
            'title' => 'Profil LKBH PGRI',
            'content' => '<p>Profil LKBH</p>',
            'cover_img' => 'post_cover/anak_lembaga_2.jpeg'
        ]);

        pages::create([
            'title' => 'Profil IGTKI PGRI',
            'content' => '<p>Profil IGTKI</p>',
            'cover_img' => 'post_cover/anak_lembaga_3.jpeg'
        ]);
        pages::create([
            'title' => 'Profil SLCC PGRI',
            'content' => '<p>Profil SLCC</p>',
            'cover_img' => 'post_cover/anak_lembaga_4.jpeg'
        ]);
        print("\n Proses penambahan halaman selesai...");
        print("Proses penambahan kategori");
        categories::create([
            'name' => 'YPLP'
        ]);
        categories::create([
            'name' => 'LKBH'
        ]);
        categories::create([
            'name' => 'IGTKI'
        ]);
        categories::create([
            'name' => 'SLCC'
        ]);
        print("\n Proses penambahan kategori selesai...");
        print("\n Semua proses berhasil selesai...");
    }
}
