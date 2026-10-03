<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = [
            [
                'nomor' => '01',
                'nama' => 'Muhammad Ariq Yusuf',
                'ttl' => '2 Juni 2007',
                'asal' => 'Bogor',
                'sosmed' => '@ariqyysf',
                'quote' => '"Pantang pulang sebelum dimarahin mamah."',
                'foto' => 'images/profiles/01.jpg', 
                'qr_cv' => 'images/qr/01_qr.png'
            ], //[cite: 1]
            [
                'nomor' => '02',
                'nama' => "Abiyyu Daffa' Fadhilah Hamzah",
                'ttl' => '9 Februari 2007',
                'asal' => 'Wonosobo',
                'sosmed' => '@dppadill',
                'quote' => '"Mie ayam."',
                'foto' => 'images/profiles/02.jpg',
                'qr_cv' => 'images/qr/02_qr.png'
            ], //[cite: 1]
            [
                'nomor' => '03',
                'nama' => 'Erlita Dwi Anandhita',
                'ttl' => '12 Desember 2006',
                'asal' => 'Bogor',
                'sosmed' => '@erlitaanandhita',
                'quote' => '"Gak suka naspad."',
                'foto' => 'images/profiles/03.jpg',
                'qr_cv' => 'images/qr/03_qr.png'
            ], //[cite: 1]
            [
                'nomor' => '04',
                'nama' => 'Rista Ayudia',
                'ttl' => '10 April 2007',
                'asal' => 'Sukabumi',
                'sosmed' => '@rstayudiaa',
                'quote' => '"Apapun masalahnya, nge-bakso solusinya."',
                'foto' => 'images/profiles/04.jpg',
                'qr_cv' => 'images/qr/04_qr.png'
            ], //[cite: 1]
            [
                'nomor' => '05',
                'nama' => 'Muhammad Irham Firdana',
                'ttl' => '8 Desember 2006',
                'asal' => 'Jakarta',
                'sosmed' => '@am_irham',
                'quote' => '"Butuh job"',
                'foto' => 'images/profiles/05.jpg',
                'qr_cv' => 'images/qr/05_qr.png'
            ], //[cite: 2]
            [
                'nomor' => '06',
                'nama' => 'Arief Adhi Wicaksono',
                'ttl' => '9 Oktober 2007',
                'asal' => 'Bogor',
                'sosmed' => '@riparief_',
                'quote' => '"Tiada hari tanpa Yupi."',
                'foto' => 'images/profiles/06.jpg',
                'qr_cv' => 'images/qr/06_qr.png'
            ], //[cite: 2]
            [
                'nomor' => '07',
                'nama' => 'Syakila Zahraini Cahyadi',
                'ttl' => '16 Juli 2007',
                'asal' => 'Bogor',
                'sosmed' => '@syakilazhr.ini',
                'quote' => '"Suka bingung kalau ditanya fun fact."',
                'foto' => 'images/profiles/07.jpg',
                'qr_cv' => 'images/qr/07_qr.png'
            ], //[cite: 2]
            [
                'nomor' => '08',
                'nama' => 'Dewi Chondro Kusumo',
                'ttl' => '28 Maret 2007',
                'asal' => 'Kudus',
                'sosmed' => '@d_wichndr',
                'quote' => '"Ga suka durian."',
                'foto' => 'images/profiles/08.jpg',
                'qr_cv' => 'images/qr/08_qr.png'
            ], //[cite: 2]
            [
                'nomor' => '09',
                'nama' => 'Fariz Bintang Fadhilah Nunes',
                'ttl' => '18 Maret 2007',
                'asal' => 'Kalimantan Utara',
                'sosmed' => '@fariz_nunez',
                'quote' => '"Kebanyakan funfact"',
                'foto' => 'images/profiles/09.jpg',
                'qr_cv' => 'images/qr/09_qr.png'
            ], //[cite: 3]
            [
                'nomor' => '10',
                'nama' => 'Dinendra Defastya El Farid',
                'ttl' => '10 Juli 2007',
                'asal' => 'Tangerang Selatan',
                'sosmed' => '@dndra_el_farid',
                'quote' => '"Gampang ketiduran."',
                'foto' => 'images/profiles/10.jpg',
                'qr_cv' => 'images/qr/10_qr.png'
            ], //[cite: 3]
            [
                'nomor' => '11',
                'nama' => 'Syifa Az Zahra',
                'ttl' => '26 Februari 2007',
                'asal' => 'Indramayu',
                'sosmed' => '@szyaihfraa',
                'quote' => '"Suka liat langit malam buat ngecek bintang."',
                'foto' => 'images/profiles/11.jpg',
                'qr_cv' => 'images/qr/11_qr.png'
            ] //[cite: 3]
        ];

        return view('anggota', compact('anggota'));
    }
}