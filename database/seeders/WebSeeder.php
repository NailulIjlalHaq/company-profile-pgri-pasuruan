<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\pages;
use App\Models\posts;
use App\Models\configs;
use App\Models\categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        print("Proses input data awal, silahkan di tunggu... \n");

        print("Proses pembuatan user administrator \n");
        User::create([
            'name' => 'Administrator Web',
            'email' => 'administrator@admin.com',
            'username' => 'administrator',
            'password' => bcrypt('administrator'),
            'is_admin' => true,
        ]);
        print("User berhasil dibuat");

        print("Proses input data kategori \n");

        $kategori = categories::create([
            'name' => 'Teknologi'
        ]);
        print("Data kategori berhasil dibuat \n");

        print("Proses input 5 data berita \n");
        for ($i = 0; $i < 5; $i++) {
            $berita = posts::create([
                'title' => 'Berita ke ' . $i,
                'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
                <html><body><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px;"><div id="div-gpt-ad-1474537762122-3" data-google-query-id="CMH7lpWnovoCFTiCrAIdzYwGBA" style="margin: 0px; padding: 0px;"><br class="Apple-interchange-newline"><div id="google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__" style="margin: 0px; padding: 0px; border: 0pt none; width: 160px; height: 600px;"></div></div></div><div id="Panes" style="margin: 15px 0px 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px; text-align: center;"><div style="margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;"><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></body></html>
                ',
                'id_categories' => 1,
                'tag' => 'coba',
                'type' => 'berita',
                'cover_img' => 'post_cover/gambar_berita.jpg',
                'is_focus' => true,
                'id_user' => 1
            ]);
        }
        print("Data berita berhasil dibuat \n");

        print("Proses input 5 data artikel \n");
        for ($i = 0; $i < 5; $i++) {
            $artikel = posts::create([
                'title' => 'Artikel ke ' . $i,
                'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
                <html><body><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px;"><div id="div-gpt-ad-1474537762122-3" data-google-query-id="CMH7lpWnovoCFTiCrAIdzYwGBA" style="margin: 0px; padding: 0px;"><br class="Apple-interchange-newline"><div id="google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__" style="margin: 0px; padding: 0px; border: 0pt none; width: 160px; height: 600px;"></div></div></div><div id="Panes" style="margin: 15px 0px 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px; text-align: center;"><div style="margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;"><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></body></html>
                ',
                'tag' => 'coba',
                'type' => 'artikel',
                'cover_img' => 'post_cover/gambar_artikel.jpg',
                'is_focus' => false,
                'id_user' => 1
            ]);
        }
        print("Data artikel berhasil dibuat \n");

        print("Proses input 5 data pengumuman \n");
        for ($i = 0; $i < 5; $i++) {
            $artikel = posts::create([
                'title' => 'Pengumuman ke ' . $i,
                'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
                <html><body><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px;"><div id="div-gpt-ad-1474537762122-3" data-google-query-id="CMH7lpWnovoCFTiCrAIdzYwGBA" style="margin: 0px; padding: 0px;"><br class="Apple-interchange-newline"><div id="google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__" style="margin: 0px; padding: 0px; border: 0pt none; width: 160px; height: 600px;"></div></div></div><div id="Panes" style="margin: 15px 0px 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px; text-align: center;"><div style="margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;"><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></body></html>
                ',
                'tag' => 'coba',
                'type' => 'pengumuman',
                'cover_img' => 'post_cover/gambar_pengumuman.jpg',
                'is_focus' => false,
                'id_user' => 1
            ]);
        }
        print("Data pengumuman berhasil dibuat \n");

        print("Proses input data halaman standart");
        pages::create([
            'title' => 'Sambutan Ketua PGRI Kabupaten Pasuruan',
            'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html><body><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px;"><div id="div-gpt-ad-1474537762122-3" data-google-query-id="CMH7lpWnovoCFTiCrAIdzYwGBA" style="margin: 0px; padding: 0px;"><br class="Apple-interchange-newline"><div id="google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__" style="margin: 0px; padding: 0px; border: 0pt none; width: 160px; height: 600px;"></div></div></div><div id="Panes" style="margin: 15px 0px 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px; text-align: center;"><div style="margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;"><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></body></html>
            '
        ]);
        pages::create([
            'title' => 'Visi dan Misi PGRI',
            'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html><body><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px;"><div id="div-gpt-ad-1474537762122-3" data-google-query-id="CMH7lpWnovoCFTiCrAIdzYwGBA" style="margin: 0px; padding: 0px;"><br class="Apple-interchange-newline"><div id="google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__" style="margin: 0px; padding: 0px; border: 0pt none; width: 160px; height: 600px;"></div></div></div><div id="Panes" style="margin: 15px 0px 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px; text-align: center;"><div style="margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;"><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></body></html>
            '
        ]);
        pages::create([
            'title' => 'Struktur Organisasi',
            'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
            <html><body><div id="bannerR" style="margin: 0px -160px 0px 0px; padding: 0px; position: sticky; top: 20px; width: 160px; height: 10px; float: right; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px;"><div id="div-gpt-ad-1474537762122-3" data-google-query-id="CMH7lpWnovoCFTiCrAIdzYwGBA" style="margin: 0px; padding: 0px;"><br class="Apple-interchange-newline"><div id="google_ads_iframe_/15188745,22440292294/Lipsum-Unit4_0__container__" style="margin: 0px; padding: 0px; border: 0pt none; width: 160px; height: 600px;"></div></div></div><div id="Panes" style="margin: 15px 0px 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Open Sans, Arial, sans-serif; font-size: 14px; text-align: center;"><div style="margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left;"><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></body></html>
            '
        ]);
        print("Data halaman standart berhasil dibuat");

        print("Proses pembuatan data pengaturan  web \n");
        configs::create([
            'title' => 'facebook',
            'data' => 'www.facebook.com'
        ]);
        configs::create([
            'title' => 'instagram',
            'data' => 'www.instagram.com'
        ]);
        configs::create([
            'title' => 'whatsapp',
            'data' => 'www.whatsapp.com'
        ]);
        configs::create([
            'title' => 'alamat',
            'data' => 'asdfasdfasdf'
        ]);
        configs::create([
            'title' => 'kontak',
            'data' => 'asdfasdf'
        ]);
        print("Data pengaturan berhasil dibuat");
    }
}
