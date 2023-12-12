<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder for Camping Equipment

        // Tempat Tinggal dan Perlindungan
        // Tenda
        DB::table('products')->insert([
            'product_name' => 'Tenda',
            'product_description' => 'Tenda kapasitas 4 orang, waterproof, dilengkapi dengan lapisan anti-UV. Mudah dipasang dan dilipat, ideal untuk keluarga atau grup kecil.',
            'photo' => 'tenda.png',
            'price' => 20000,
            'category1' => 'Tempat Tinggal',
            'category2' => 'Perlindungan',
        ]);

        // Hammock
        DB::table('products')->insert([
            'product_name' => 'Hammock',
            'product_description' => 'Hammock yang nyaman dan kuat, cocok untuk bersantai di alam. Dapat menahan berat hingga 120 kg.',
            'photo' => 'hammock.png',
            'price' => 5000,
            'category1' => 'Tempat Tinggal',
            'category2' => 'Relaksasi',
        ]);

        // Flysheet
        DB::table('products')->insert([
            'product_name' => 'Flysheet',
            'product_description' => 'Flysheet waterproof dan tahan angin, menyediakan perlindungan tambahan untuk tenda Anda.',
            'photo' => 'flysheet.png',
            'price' => 5000,
            'category1' => 'Perlindungan',
            'category2' => 'Tempat Tinggal',
        ]);

        // Alat Masak dan Makan
        // Kompor Portabel
        DB::table('products')->insert([
            'product_name' => 'Kompor Portabel',
            'product_description' => 'Kompor portabel yang ringan dan mudah dibawa, ideal untuk memasak di alam terbuka. Memiliki pengaturan api yang mudah diatur.',
            'photo' => 'kompor_portabel.png',
            'price' => 5000,
            'category1' => 'Alat Masak',
            'category2' => 'Peralatan Esensial',
        ]);

        // Peralatan Memasak
        DB::table('products')->insert([
            'product_name' => 'Peralatan Memasak',
            'product_description' => 'Set peralatan memasak termasuk panci dan wajan, cocok untuk memasak berbagai jenis makanan di alam terbuka.',
            'photo' => 'peralatan_memasak.png',
            'price' => 5000,
            'category1' => 'Alat Masak',
            'category2' => 'Peralatan Esensial',
        ]);

        // Peralatan Makan
        DB::table('products')->insert([
            'product_name' => 'Peralatan Makan',
            'product_description' => 'Set peralatan makan yang lengkap termasuk piring, mangkuk, sendok, dan garpu. Mudah dibersihkan dan tahan lama.',
            'photo' => 'peralatan_makan.png',
            'price' => 5000,
            'category1' => 'Alat Makan',
            'category2' => 'Peralatan Esensial',
        ]);

        // Tidur dan Kenyamanan
        // Sleeping Bag
        DB::table('products')->insert([
            'product_name' => 'Sleeping Bag',
            'product_description' => 'Sleeping bag yang hangat dan nyaman, cocok untuk segala cuaca, dengan isolasi yang efektif untuk menjaga suhu tubuh.',
            'photo' => 'sleeping_bag.png',
            'price' => 5000,
            'category1' => 'Perlengkapan Tidur',
            'category2' => 'Perlindungan',
        ]);

        // Matras
        DB::table('products')->insert([
            'product_name' => 'Matras',
            'product_description' => 'Matras camping yang nyaman, memberikan isolasi dari tanah dan mudah diisi angin.',
            'photo' => 'matras.png',
            'price' => 5000,
            'category1' => 'Perlengkapan Tidur',
            'category2' => 'Kenyamanan',
        ]);

        // Bantal Camping
        DB::table('products')->insert([
            'product_name' => 'Bantal Camping',
            'product_description' => 'Bantal camping yang lembut dan mudah dibawa, memberikan kenyamanan tambahan saat tidur di alam.',
            'photo' => 'bantal_camping.png',
            'price' => 5000,
            'category1' => 'Perlengkapan Tidur',
            'category2' => 'Kenyamanan',
        ]);

        // Peralatan Pencahayaan
        // Lampu Camping
        DB::table('products')->insert([
            'product_name' => 'Lampu Camping',
            'product_description' => 'Lampu camping LED dengan baterai tahan lama, memberikan penerangan yang cukup untuk area perkemahan atau kegiatan di malam hari.',
            'photo' => 'lampu_camping.png',
            'price' => 10000,
            'category1' => 'Pencahayaan',
            'category2' => 'Keselamatan',
        ]);

        // Senter
        DB::table('products')->insert([
            'product_name' => 'Senter',
            'product_description' => 'Senter tahan lama dan waterproof, ideal untuk navigasi atau kebutuhan penerangan mendadak di malam hari.',
            'photo' => 'senter.png',
            'price' => 5000,
            'category1' => 'Pencahayaan',
            'category2' => 'Keselamatan',
        ]);

        // Headlamp
        DB::table('products')->insert([
            'product_name' => 'Headlamp',
            'product_description' => 'Headlamp dengan cahaya LED terang, hands-free, cocok untuk kegiatan mendaki atau bekerja di malam hari.',
            'photo' => 'headlamp.png',
            'price' => 10000,
            'category1' => 'Pencahayaan',
            'category2' => 'Keselamatan',
        ]);

        // Alat Navigasi dan Keselamatan
        // Kompas
        DB::table('products')->insert([
            'product_name' => 'Kompas',
            'product_description' => 'Kompas presisi tinggi, penting untuk navigasi di alam liar. Ringan dan mudah dibawa.',
            'photo' => 'kompas.png',
            'price' => 1000,
            'category1' => 'Navigasi',
            'category2' => 'Keselamatan',
        ]);

        // Peta
        DB::table('products')->insert([
            'product_name' => 'Peta',
            'product_description' => 'Peta topografi detail untuk membantu navigasi di area perkemahan dan sekitarnya.',
            'photo' => 'peta.png',
            'price' => 1000,
            'category1' => 'Navigasi',
            'category2' => 'Peralatan Esensial',
        ]);

        // Alat Komunikasi (walkie-talkie)
        DB::table('products')->insert([
            'product_name' => 'Walkie-Talkie',
            'product_description' => 'Set walkie-talkie dengan jangkauan jauh, memastikan komunikasi tetap terjaga di area tanpa sinyal seluler.',
            'photo' => 'walkie_talkie.png',
            'price' => 5000,
            'category1' => 'Komunikasi',
            'category2' => 'Keselamatan',
        ]);

        // Pakaian dan Perlengkapan Pribadi
        // Jaket Outdoor
        DB::table('products')->insert([
            'product_name' => 'Jaket Outdoor',
            'product_description' => 'Jaket outdoor tahan air dan angin, memberikan kehangatan dan perlindungan di berbagai kondisi cuaca.',
            'photo' => 'jaket_outdoor.png',
            'price' => 5000,
            'category1' => 'Pakaian',
            'category2' => 'Perlindungan',
        ]);

        // Sepatu Hiking
        DB::table('products')->insert([
            'product_name' => 'Sepatu Hiking',
            'product_description' => 'Sepatu hiking yang nyaman dan tahan lama, memberikan dukungan dan perlindungan untuk berbagai medan.',
            'photo' => 'sepatu_hiking.png',
            'price' => 5000,
            'category1' => 'Pakaian',
            'category2' => 'Keselamatan',
        ]);

        // Perlengkapan Tambahan
        // Ransel
        DB::table('products')->insert([
            'product_name' => 'Ransel',
            'product_description' => 'Ransel kapasitas besar dengan banyak kompartemen, ideal untuk menyimpan semua perlengkapan camping.',
            'photo' => 'ransel.png',
            'price' => 10000,
            'category1' => 'Penyimpanan',
            'category2' => 'Peralatan Esensial',
        ]);

        // Cooler/Box Pendingin
        DB::table('products')->insert([
            'product_name' => 'Box Pendingin',
            'product_description' => 'Box pendingin portabel untuk menyimpan makanan dan minuman agar tetap segar selama camping.',
            'photo' => 'box_pendingin.png',
            'price' => 10000,
            'category1' => 'Penyimpanan',
            'category2' => 'Alat Makan',
        ]);

        // Powerbank
        DB::table('products')->insert([
            'product_name' => 'Powerbank',
            'product_description' => 'Powerbank kapasitas tinggi, ideal untuk menjaga perangkat elektronik tetap terisi daya selama di alam terbuka.',
            'photo' => 'powerbank.png',
            'price' => 5000,
            'category1' => 'Penyimpanan Energi',
            'category2' => 'Elektronik',
        ]);
    }
}
