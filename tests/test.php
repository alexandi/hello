<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\Calculator;
use HelloWorld\SayHello;

// echo SayHello::world();
echo 'Hasilnya :  '.Calculator::tambah(10,10).' jawabannya: '. SayHello::world(10);