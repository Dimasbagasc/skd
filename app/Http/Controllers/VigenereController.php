<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histori;

class VigenereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil_vigenere = Histori::all()->where('jenis','Vigenere Cipher');
        return view('vigenere',['tampil_vigenere'=>$tampil_vigenere]);
    }

    public function enkripsi()
    {
        include "lib.php";

        $kunci = str_replace(" ", "", $_POST['key']);
        $plain = str_replace(" ", "", $_POST['kata']);
        $panjang_plain = strlen($plain);
        $panjang_kunci = strlen($kunci);
        $index_x = 0;
        $index_y = 0;
        $hasil_ciper = array();
        $hasil_akhir = "";
        while ($index_x < $panjang_plain) {
            $x = substr($plain, $index_x, 1);
            $y = substr($kunci, $index_y, 1);
            $hasil_ciper[$index_x] =
            $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
            $index_x++;
            $index_y++;
            if ($index_y == $panjang_kunci) {
                $index_y = 0;
        }
        }
        $i = 0;
        while ($i < $index_x) {
        $hasil_akhir .= $hasil_ciper[$i];
        $i++;
        }
        echo $hasil_akhir;

        $jenis = "Vigenere Cipher";
        $met = "Enkripsi";

        $histori = new Histori;
        $histori->plain = $plain;
        $histori->cipher = $hasil_akhir;
        $histori->key = $kunci;
        $histori->jenis = $jenis;
        $histori->Metode = $met;
        
        $histori->save();

    }

    public function dekripsi()
    {
        include "lib.php";
        $hasil_ciper = str_replace(" ", "", $_POST['kata']);
        $kunci = str_replace(" ", "", $_POST['key']);
        $panjang_kunci = strlen($kunci);
        $panjang_ciper = strlen($hasil_ciper);
        $index_x = 0;
        $index_y = 0;
        $hasil_konversi = array();
        $hasil_akhir = "";
        while ($index_x < $panjang_ciper) {
            $x = substr($hasil_ciper, $index_x, 1);
            $y = substr($kunci, $index_y, 1);
            $konversi_x = huruf_ke_angka($x);
            $konversi_y = huruf_ke_angka($y);
            if ($konversi_x >= $konversi_y) {
                $hasil = $konversi_x - $konversi_y;
            } else {
                $hasil = $konversi_x + (26 - $konversi_y);
            }
            $hasil_konversi[$index_x] = angka_ke_huruf($hasil);
            $index_x++;
            $index_y++;
            if ($index_y == $panjang_kunci) {
                $index_y = 0;
            }
        }
        $i = 0;
        $hasil_akhir = "";
        while ($i < $index_x) {
            $hasil_akhir .= $hasil_konversi[$i];
            $i++;
        }

        echo $hasil_akhir;

        $jenis = "Vigenere Cipher";
        $met = "Deskripsi";

        $histori = new Histori;
        $histori->plain = $hasil_akhir;
        $histori->cipher = $hasil_ciper;
        $histori->key = $kunci;
        $histori->jenis = $jenis;
        $histori->Metode = $met;
        
        $histori->save();
    }
 

}
