<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';  // Server SMTP Gmail
$config['smtp_port'] = 587;  // Port SMTP
$config['smtp_user'] = 'gusgazz01@gmail.com';  // Ganti dengan email pengirim
$config['smtp_pass'] = 'vcry dxie vikv oyol';  // Ganti dengan password email pengirim
$config['mailtype'] = 'html';  // Tipe email (bisa juga 'text' jika ingin kirim teks biasa)
$config['charset'] = 'utf-8';  // Set charset menjadi utf-8 untuk mendukung karakter
$config['wordwrap'] = TRUE;  // Membungkus kata agar email lebih rapi

// SMTP Debugging
$config['smtp_crypto'] = 'tls'; // Agar SMTP menggunakan TLS untuk keamanan lebih baik
$config['newline'] = "\r\n";  // Menambahkan newline agar email terbaca dengan baik

// Set timeout jika perlu
$config['timeout'] = 30;
