<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert districts for Aceh
        $acehId = DB::table('provinsi')->where('nama_provinsi', 'Aceh')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Barat'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Barat Daya'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Besar'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Jaya'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Selatan'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Singkil'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Tamiang'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Tengah'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Tenggara'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Timur'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Aceh Utara'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Bener Meriah'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Bireuen'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Gayo Lues'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Nagan Raya'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Pidie'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Pidie Jaya'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kabupaten Simeulue'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kota Banda Aceh'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kota Langsa'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kota Lhokseumawe'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kota Sabang'],
            ['provinsi_id' => $acehId, 'nama_kabupaten' => 'Kota Subulussalam'],

        ]);

        // Insert districts for Sumatera Utara
        $sumutId = DB::table('provinsi')->where('nama_provinsi', 'Sumatera Utara')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Asahan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Batubara'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Dairi'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Deli Serdang'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Humbang Hasundutan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Karo'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Labuhan Batu'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Labuhan Batu Selatan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Labuhan Batu Utara'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Langkat'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Mandailing Natal'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Nias'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Nias Barat'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Nias Selatan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Nias Utara'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Padang Lawas'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Padang Lawas Utara'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Pakpak Bharat'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Samosir'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Serdang Bedagai'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Simalungun'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Tapanuli Selatan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Tapanuli Tengah'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Tapanuli Utara'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kabupaten Toba Samosir'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Binjai'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Gunungsitoli'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Medan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Padangsidempuan'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Pematangsiantar'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Sibolga'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Tanjungbalai'],
            ['provinsi_id' => $sumutId, 'nama_kabupaten' => 'Kota Tebing Tinggi'],
        ]);

        $sumbarId = DB::table('provinsi')->where('nama_provinsi', 'Sumatera Barat')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Agam'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Dharmasraya'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Kepulauan Mentawai'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Lima Puluh Kota'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Padang Pariaman'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Pasaman'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Pasaman Barat'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Pesisir Selatan'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Sijunjung'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Solok'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Solok Selatan'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kabupaten Tanah Datar'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Bukittinggi'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Padang'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Padangpanjang'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Pariaman'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Payakumbuh'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Sawahlunto'],
            ['provinsi_id' => $sumbarId, 'nama_kabupaten' => 'Kota Solok'],
        ]);

        $sumselId = DB::table('provinsi')->where('nama_provinsi', 'Sumatera Selatan')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Banyuasin'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Empat Lawang'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Lahat'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Muara Enim'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Musi Banyuasin'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Musi Rawas'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Musi Rawas Utara'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Ogan Ilir'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Ogan Komering Ilir'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Ogan Komering Ulu'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Ogan Komering Ulu Selatan'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Ogan Komering Ulu Timur'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kabupaten Penukal Abab Lematang Ilir'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kota Lubuklinggau'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kota Pagar Alam'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kota Palembang'],
            ['provinsi_id' => $sumselId, 'nama_kabupaten' => 'Kota Prabumulih'],
        ]);

        $riauId = DB::table('provinsi')->where('nama_provinsi', 'Riau')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Bengkalis'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Indragiri Hilir'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Indragiri Hulu'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Kampar'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Kepulauan Meranti'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Kuantan Singingi'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Pelalawan'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Rokan Hilir'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Rokan Hulu'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kabupaten Siak'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kota Dumai'],
            ['provinsi_id' => $riauId, 'nama_kabupaten' => 'Kota Pekanbaru'],
        ]);

        $kepriId = DB::table('provinsi')->where('nama_provinsi', 'Kepulauan Riau')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kabupaten Bintan'],
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kabupaten Karimun'],
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kabupaten Kepulauan Anambas'],
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kabupaten Lingga'],
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kabupaten Natuna'],
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kota Batam'],
            ['provinsi_id' => $kepriId, 'nama_kabupaten' => 'Kota Tanjung Pinang'],
        ]);

        $jambiId = DB::table('provinsi')->where('nama_provinsi', 'Jambi')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Batanghari'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Bungo'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Kerinci'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Merangin'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Muaro Jambi'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Sarolangun'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Tanjung Jabung Barat'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Tanjung Jabung Timur'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kabupaten Tebo'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kota Jambi'],
            ['provinsi_id' => $jambiId, 'nama_kabupaten' => 'Kota Sungai Penuh'],
        ]);

        $bengkuluId = DB::table('provinsi')->where('nama_provinsi', 'Bengkulu')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Bengkulu Selatan'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Bengkulu Tengah'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Bengkulu Utara'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Kaur'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Kepahiang'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Lebong'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Mukomuko'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Rejang Lebong'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kabupaten Seluma'],
            ['provinsi_id' => $bengkuluId, 'nama_kabupaten' => 'Kota Bengkulu'],
        ]);

        $babelId = DB::table('provinsi')->where('nama_provinsi', 'Bangka Belitung')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kabupaten Bangka'],
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kabupaten Bangka Barat'],
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kabupaten Bangka Selatan'],
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kabupaten Bangka Tengah'],
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kabupaten Belitung'],
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kabupaten Belitung Timur'],
            ['provinsi_id' => $babelId, 'nama_kabupaten' => 'Kota Pangkal Pinang'],
        ]);

        $lampungId = DB::table('provinsi')->where('nama_provinsi', 'Lampung')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Lampung Tengah'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Lampung Utara'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Lampung Selatan'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Lampung Barat'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Lampung Timur'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Mesuji'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Pesawaran'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Pringsewu'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Tanggamus'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Tulang Bawang'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Tulang Bawang Barat'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Way Kanan'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kabupaten Pesisir Barat'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kota Bandar Lampung'],
            ['provinsi_id' => $lampungId, 'nama_kabupaten' => 'Kota Metro'],
        ]);

        $bantenId = DB::table('provinsi')->where('nama_provinsi', 'Banten')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kabupaten Lebak'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kabupaten Pandeglang'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kabupaten Serang'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kabupaten Tangerang'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kota Cilegon'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kota Serang'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kota Tangerang'],
            ['provinsi_id' => $bantenId, 'nama_kabupaten' => 'Kota Tangerang Selatan'],
        ]);

        $jabarId = DB::table('provinsi')->where('nama_provinsi', 'Jawa Barat')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Bandung'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Bandung Barat'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Bekasi'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Bogor'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Ciamis'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Cianjur'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Cirebon'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Garut'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Indramayu'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Karawang'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Kuningan'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Majalengka'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Pangandaran'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Purwakarta'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Subang'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Sukabumi'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Sumedang'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kabupaten Tasikmalaya'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Bandung'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Banjar'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Bekasi'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Bogor'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Cimahi'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Cirebon'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Depok'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Sukabumi'],
            ['provinsi_id' => $jabarId, 'nama_kabupaten' => 'Kota Tasikmalaya'],
        ]);

        $jatengId = DB::table('provinsi')->where('nama_provinsi', 'Jawa Tengah')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Banjanegara'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Banyumas'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Batang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Blora'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Boyolali'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Brebes'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Cilacap'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Demak'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Grobogan'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Jepara'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Karanganyar'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Kebumen'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Kendal'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Klaten'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Kudus'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Magelang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Pati'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Pekalongan'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Pemalang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Purbalingga'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Purworejo'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Rembang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Semarang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Sragen'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Sukoharjo'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Tegal'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Temanggung'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Wonogiri'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kabupaten Wonosobo'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kota Magelang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kota Pekalongan'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kota Salatiga'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kota Semarang'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kota Surakarta'],
            ['provinsi_id' => $jatengId, 'nama_kabupaten' => 'Kota Tegal'],
        ]);

        $jatimId = DB::table('provinsi')->where('nama_provinsi', 'Jawa Timur')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Bangkalan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Banyuwangi'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Blitar'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Bojonegoro'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Bondowoso'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Gresik'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Jember'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Jombang'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Kediri'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Lamongan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Lumajang'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Madiun'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Magetan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Malang'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Mojokerto'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Nganjuk'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Ngawi'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Pacitan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Pamekasan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Pasuruan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Ponorogo'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Probolinggo'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Sampang'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Sidoarjo'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Situbondo'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Sumenep'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Trenggalek'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Tuban'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kabupaten Tulungagung'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Batu'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Blitar'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Kediri'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Madiun'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Malang'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Mojokerto'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Pasuruan'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Probolinggo'],
            ['provinsi_id' => $jatimId, 'nama_kabupaten' => 'Kota Surabaya'],
        ]);

        $dkiId = DB::table('provinsi')->where('nama_provinsi', 'DKI Jakarta')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $dkiId, 'nama_kabupaten' => 'Kota Administrasi Jakarta Barat'],
            ['provinsi_id' => $dkiId, 'nama_kabupaten' => 'Kota Administrasi Jakarta Pusat'],
            ['provinsi_id' => $dkiId, 'nama_kabupaten' => 'Kota Administrasi Jakarta Selatan'],
            ['provinsi_id' => $dkiId, 'nama_kabupaten' => 'Kota Administrasi Jakarta Timur'],
            ['provinsi_id' => $dkiId, 'nama_kabupaten' => 'Kota Administrasi Jakarta Utara'],
            ['provinsi_id' => $dkiId, 'nama_kabupaten' => 'Kabupaten Administrasi Kepulauan Seribu'],
        ]);

        $diyId = DB::table('provinsi')->where('nama_provinsi', 'DI Yogyakarta')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $diyId, 'nama_kabupaten' => 'Kabupten Bantul'],
            ['provinsi_id' => $diyId, 'nama_kabupaten' => 'Kabupten Gunung Kidul'],
            ['provinsi_id' => $diyId, 'nama_kabupaten' => 'Kabupten Kulon Progo'],
            ['provinsi_id' => $diyId, 'nama_kabupaten' => 'Kabupten Sleman'],
            ['provinsi_id' => $diyId, 'nama_kabupaten' => 'Kota Yogyakarta'],
        ]);

        $baliId = DB::table('provinsi')->where('nama_provinsi', 'Bali')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Badung'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Bangli'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Buleleng'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Gianyar'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Jembrana'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Karangasem'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Klungkung'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kabupaten Tabanan'],
            ['provinsi_id' => $baliId, 'nama_kabupaten' => 'Kota Denpasar'],
        ]);

        $ntbId = DB::table('provinsi')->where('nama_provinsi', 'Nusa Tenggara Barat')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Bima'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Dompu'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Lombok Barat'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Lombok Tengah'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Lombok Timur'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Lombok Utara'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Sumbawa'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kabupaten Sumbawa Barat'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kota Bima'],
            ['provinsi_id' => $ntbId, 'nama_kabupaten' => 'Kota Mataram'],
        ]);

        $nttId = DB::table('provinsi')->where('nama_provinsi', 'Nusa Tenggara Timur')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Alor'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Belu'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Ende'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Flores Timur'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Kupang'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Lembata'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Malaka'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Manggarai'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Manggarai Barat'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Manggarai Timur'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Nagekeo'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Ngada'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Rote Ndao'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Sabu Raijua'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Sikka'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Sumba Barat'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Sumba Barat Daya'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Sumba Tengah'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Sumba Timur'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Timor Tengah Selatan'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kabupaten Timor Tengah Utara'],
            ['provinsi_id' => $nttId, 'nama_kabupaten' => 'Kota Kupang'],
        ]);

        $kalbarId = DB::table('provinsi')->where('nama_provinsi', 'Kalimantan Barat')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Bengkayang'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Kapuas Hulu'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Kayong Utara'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Ketapang'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Kubu Raya'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Landak'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Melawi'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Pontianak'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Sambas'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Sanggau'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Sekadau'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kabupaten Sintang'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kota Pontianak'],
            ['provinsi_id' => $kalbarId, 'nama_kabupaten' => 'Kota Singkawang'],
        ]);

        $kalselId = DB::table('provinsi')->where('nama_provinsi', 'Kalimantan Selatan')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Balangan'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Banjar'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Barito Kuala'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Hulu Sungai Selatan'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Hulu Sungai Tengah'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Hulu Sungai Utara'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Kotabaru'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Tabalong'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Tanah Bumbu'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Tanah Laut'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kabupaten Tapin'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kota Banjarbaru'],
            ['provinsi_id' => $kalselId, 'nama_kabupaten' => 'Kota Banjarmasin'],
        ]);

        $kaltengId = DB::table('provinsi')->where('nama_provinsi', 'Kalimantan Tengah')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Barito Selatan'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Barito Timur'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Barito Utara'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Gunung Mas'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Kapuas'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Katingan'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Kotawaringin Barat'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Kotawaringin Timur'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Lamandau'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Murung Raya'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Pulang Pisau'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Sukamara'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kabupaten Seruyan'],
            ['provinsi_id' => $kaltengId, 'nama_kabupaten' => 'Kota Palangka Raya'],
        ]);

        $kaltimId = DB::table('provinsi')->where('nama_provinsi', 'Kalimantan Timur')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Berau'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Kutai Barat'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Kutai Kartanegara'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Kutai Timur'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Mahakam Ulu'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Paser'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kabupaten Penajam Paser Utara'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kota Balikpapan'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kota Bontang'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kota Samarinda'],
            ['provinsi_id' => $kaltimId, 'nama_kabupaten' => 'Kota Tarakan'],
        ]);

        $kaltaraId = DB::table('provinsi')->where('nama_provinsi', 'Kalimantan Utara')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $kaltaraId, 'nama_kabupaten' => 'Kabupaten Bulungan'],
            ['provinsi_id' => $kaltaraId, 'nama_kabupaten' => 'Kabupaten Malinau'],
            ['provinsi_id' => $kaltaraId, 'nama_kabupaten' => 'Kabupaten Nunukan'],
            ['provinsi_id' => $kaltaraId, 'nama_kabupaten' => 'Kabupaten Tana Tidung'],
            ['provinsi_id' => $kaltaraId, 'nama_kabupaten' => 'Kota Tarakan'],
        ]);

        $gorontaloId = DB::table('provinsi')->where('nama_provinsi', 'Gorontalo')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $gorontaloId, 'nama_kabupaten' => 'Kabupaten Boalemo'],
            ['provinsi_id' => $gorontaloId, 'nama_kabupaten' => 'Kabupaten Bone Bolango'],
            ['provinsi_id' => $gorontaloId, 'nama_kabupaten' => 'Kabupaten Gorontalo'],
            ['provinsi_id' => $gorontaloId, 'nama_kabupaten' => 'Kabupaten Gorontalo Utara'],
            ['provinsi_id' => $gorontaloId, 'nama_kabupaten' => 'Kabupaten Pohuwato'],
            ['provinsi_id' => $gorontaloId, 'nama_kabupaten' => 'Kota Gorontalo'],
        ]);

        $sulselId = DB::table('provinsi')->where('nama_provinsi', 'Sulawesi Selatan')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Bantaeng'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Barru'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Bone'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Bulukumba'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Enrekang'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Gowa'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Jeneponto'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Kepulauan Selayar'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Luwu'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Luwu Timur'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Luwu Utara'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Maros'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Pangkajene Kepulauan'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Pinrang'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Sidenreng Rappang'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Sinjai'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Soppeng'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Takalar'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Tana Toraja'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Toraja Utara'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kabupaten Wajo'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kota Makassar'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kota Palopo'],
            ['provinsi_id' => $sulselId, 'nama_kabupaten' => 'Kota Parepare'],
        ]);

        $sultraId = DB::table('provinsi')->where('nama_provinsi', 'Sulawesi Tenggara')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Bombana'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Buton'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Buton Utara'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Kolaka'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Kolaka Utara'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Konawe'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Konawe Selatan'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Konawe Utara'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Muna'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kabupaten Wakatobi'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kota Bau-Bau'],
            ['provinsi_id' => $sultraId, 'nama_kabupaten' => 'Kota Kendari'],
        ]);

        $sultengId = DB::table('provinsi')->where('nama_provinsi', 'Sulawesi Tengah')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Banggai'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Banggai Kepulauan'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Banggai Laut'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Buol'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Donggala'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Morowali'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Morowali Utara'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Parigi Moutong'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Poso'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Sigi'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Tojo Una-Una'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kabupaten Toli-Toli'],
            ['provinsi_id' => $sultengId, 'nama_kabupaten' => 'Kota Palu'],
        ]);

        $sulutId = DB::table('provinsi')->where('nama_provinsi', 'Sulawesi Utara')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Boolang Mongodow'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Bolaang Mongondow Selatan'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Bolaang Mongondow Timur'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Bolaang Mongondow Utara'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Kepulauan Sangihe'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Kepulauan Siau Tagulandang Biaro'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Kepulauan Talaud'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Minahasa'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Minahasa Selatan'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Minahasa Tenggara'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kabupaten Minahasa Utara'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kota Bitung'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kota Kotamobagu'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kota Manado'],
            ['provinsi_id' => $sulutId, 'nama_kabupaten' => 'Kota Tomohon'],
        ]);

        $sulbarId = DB::table('provinsi')->where('nama_provinsi', 'Sulawesi Barat')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $sulbarId, 'nama_kabupaten' => 'Kabupaten Majene'],
            ['provinsi_id' => $sulbarId, 'nama_kabupaten' => 'Kaupaten Mamasa'],
            ['provinsi_id' => $sulbarId, 'nama_kabupaten' => 'Kabupaten Mamuju'],
            ['provinsi_id' => $sulbarId, 'nama_kabupaten' => 'Kabupaten Mamuju Tengah'],
            ['provinsi_id' => $sulbarId, 'nama_kabupaten' => 'Kabupaten Mamuju Utara'],
            ['provinsi_id' => $sulbarId, 'nama_kabupaten' => 'Kabupaten Polewali Mandar'],
        ]);

        $malukuId = DB::table('provinsi')->where('nama_provinsi', 'Maluku')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Buru'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Buru Selatan'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Kepulauan Aru'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Maluku Barat Daya'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Maluku Tengah'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Maluku Tenggara'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Seram Bagian Barat'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kabupaten Seram Bagian Timur'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kota Ambon'],
            ['provinsi_id' => $malukuId, 'nama_kabupaten' => 'Kota Tual'],
        ]);

        $maltaraId = DB::table('provinsi')->where('nama_provinsi', 'Maluku Utara')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Halmahera Barat'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kaupaten Halmahera Tengah'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Halmahera Utara'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Halmahera Selatan'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Kepulauan Sula'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Halmahera Timur'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Pulau Morotai'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kabupaten Pulau Taliabu'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kota Ternate'],
            ['provinsi_id' => $maltaraId, 'nama_kabupaten' => 'Kota Tidore Kepulauan'],
        ]);

        $papuaId = DB::table('provinsi')->where('nama_provinsi', 'Papua')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Asmat'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Biak Numfor'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Boven Digoel'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Deiyai'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Dogiyai'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Intan Jaya'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Jayapura'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Jayawijaya'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Keerom'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Kepulauan Yapen'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Lanny Jaya'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Mamberamo Raya'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Mamberamo Tengah'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Mappi'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Merauke'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Mimika'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Nabire'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Nduga'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Paniai'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Pegunungan Bintang'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Puncak'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Puncak Jaya'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Sarmi'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Supiori'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Tolikara'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Waropen'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Yahukimo'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kabupaten Yalimo'],
            ['provinsi_id' => $papuaId, 'nama_kabupaten' => 'Kota Jayapura'],
        ]);

        $pabarId = DB::table('provinsi')->where('nama_provinsi', 'Papua Barat')->first()->id;
        DB::table('kabupaten')->insert([
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten fakfak'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Kaimana'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Manokwari'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Manokwari Selatan'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Maybrat'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Pegunungan Arfak'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Raja Ampat'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Sorong'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Sorong Selatan'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Tambrauw'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Teluk Bintuni'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kabupaten Teluk Wondama'],
            ['provinsi_id' => $pabarId, 'nama_kabupaten' => 'Kota Sorong'],

        ]);

    }
}
