<?php

namespace Database\Seeders;

use App\Models\posts;
use App\Models\galleries;
use Illuminate\Database\Seeder;

class update_posts_galery_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        print("Proses mengupdate struktur database... \n");

        print("Memperbaiki table post... \n");

        $posts = posts::select('id_posts')->get();

        foreach ($posts as $item) {
            posts::where('id_posts', $item->id_posts)->update(['id_user' => 1]);
        }
        print("table posts berhasil diupdate... \n");

        print("Memperbaiki table gallery... \n");

        $galleries = galleries::select('id_galleries')->get();

        foreach ($galleries as $item) {
            galleries::where('id_galleries', $item->id_galleries)->update('id_user', 1);
        }
        print("table galleri berhasil di update \n");

        print("Proses perbaikan struktur database selesai diupdate. \n");
    }
}
