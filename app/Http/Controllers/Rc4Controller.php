<?php

namespace App\Http\Controllers;
use App\Histori;
use Illuminate\Http\Request;

class Rc4Controller extends Controller
{
    var $s= array();
        var $i= 0;
        var $j= 0;
        var $_key;
    // public function enkripsi(){
        function key() {
            $key = $_POST['key'];
            $len= strlen($key);
            for (
                $this->i = 0; $this->i < 256; $this->i++) {
                $this->s[$this->i] = $this->i;
            }
            $this->j = 0;
            for ($this->i = 0; $this->i < 256; $this->i++) {
                $this->j = ($this->j + $this->s[$this->i] + ord($key[$this->i % $len])) % 256;
                $t = $this->s[$this->i];
                $this->s[$this->i] = $this->s[$this->j];
                $this->s[$this->j] = $t;
            }
            $this->i = $this->j = 0;
        }
        //enkripsi
        function crypt() {
            $kata = $_POST['kata'];
            $this->key($this->_key);
            $len= strlen($kata);
            for ($c= 0; $c < $len; $c++) {
                $this->i = ($this->i + 1) % 256;
                $this->j = ($this->j + $this->s[$this->i]) % 256;
                $t = $this->s[$this->i];
                $this->s[$this->i] = $this->s[$this->j];
                $this->s[$this->j] = $t;
                $t = ($this->s[$this->i] + $this->s[$this->j]) % 256;
                $kata[$c] = chr(ord($kata[$c]) ^ $this->s[$t]);
            }
            echo $kata;
        }
        //dekripsi
        function decrypt() {
            $kata = $_POST['kata'];
            $this->key($this->_key);
            $len= strlen($kata);
            // $key ='';
            for ($c= 0; $c < $len; $c++) {
                $this->i = ($this->i + 1) % 256;
                $this->j = ($this->j + $this->s[$this->i]) % 256;
                $t = $this->s[$this->i];
                $this->s[$this->i] = $this->s[$this->j];
                $this->s[$this->j] = $t;
                $t = ($this->s[$this->i] + $this->s[$this->j]) % 256;
                $kata[$c] = chr(ord($kata[$c]) ^ $this->s[$t]);
            }
            echo $kata;

            // $jenis = "Vigenere Cipher";
            // $met = "Enkripsi";
            // $histori = new Histori;
            // $histori->plain = $kata;
            // $histori->cipher = $hsl;
            // $histori->key = $key;
            // $histori->jenis = $jenis;
            // $histori->Metode = $met;
            
            // $histori->save();
            }

    }
        