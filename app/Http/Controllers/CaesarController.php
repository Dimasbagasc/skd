<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histori;

class CaesarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil_caesar = Histori::all()->where('jenis','Caesar Cipher');
        return view('caesar',['tampil_caesar'=>$tampil_caesar]);
    }

    public function enkripsi()
    {
        $kalimat = $_POST["kata"];
        $key = $_POST["key"];

        for($i=0;$i<strlen($kalimat);$i++)
        {
        $kode[$i]=ord($kalimat[$i]); //rubah ASCII ke desimal
        $b[$i]=($kode[$i] + $key ) % 256; //proses enkripsi
        $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
        }
        // echo "<br>";
        // echo "hasil enkripsi =";
        $hsl = '';
        for ($i=0;$i<strlen($kalimat);$i++)
        {
        echo $c[$i];
        $hsl = $hsl . $c[$i];
        }
        $jenis = "Caesar Cipher";
        $met = "Enkripsi";

        $histori = new Histori;
        $histori->plain = $kalimat;
        $histori->cipher = $hsl;
        $histori->key = $key;
        $histori->jenis = $jenis;
        $histori->Metode = $met;
        
        
        $histori->save();
    }

    public function dekripsi()
    {
        $key = $_POST["key"];
        $isi = $_POST["kata"];
        
        for($i=0;$i<strlen($isi);$i++)
        {
        $kode[$i]=ord($isi[$i]); // rubah ASII ke desimal
        $b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
        $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
        }
        //echo "kalimat ciphertext : ";
        //for($i=0;$i<strlen($isi);$i++)
        //{
        //echo $isi[$i];
        //}
        //echo "<br>";
        //echo "hasil dekripsi =";
        $hsl='';
        for ($i=0;$i<strlen($isi);$i++)
        {
        echo $c[$i];
        $hsl = $hsl . $c[$i];
        }
        $jenis = "Caesar Cipher";
        $met = "Dekripsi";

        $histori = new Histori;
        $histori->plain = $hsl;
        $histori->cipher = $isi;
        $histori->key = $key;
        $histori->jenis = $jenis;
        $histori->metode = $met;
        
        $histori->save();
        
    }
}
