<?php 

namespace HelloWorld;

class Calculator
{
    public static function bagi($angka, $ope)
    {
    	$hasil = $angka / $ope;
        return $hasil;
    }
    public static function kali($angka, $ope)
    {
    	$hasil = $angka * $ope;
        return $hasil;
    }
    public static function tambah($angka, $ope)
    {
    	$hasil = $angka + $ope;
        return $hasil;
    }
    public static function kurang($angka, $ope)
    {
    	$hasil = $angka - $ope;
        return $hasil;
    }
}