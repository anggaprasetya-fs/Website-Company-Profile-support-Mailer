<?php
// defined('BASEPATH') or exit('Dilarang keras mengakses script ini !');

/*

	DILARANG KERAS MENGEDIT BAGIAN FUNCTION PRIMARY, VARIABLE, CONSTANT, DAN NAMA INDEX PADA SEMUA ARRAY

*/

// Function Primary

// function visitor()
// {
// 	$ip = '';
// 	if (getenv('HTTP_CLIENT_IP'))
// 		$ip = getenv('HTTP_CLIENT_IP');
// 	else if (getenv('HTTP_X_FORWARDED_FOR'))
// 		$ip = getenv('HTTP_X_FORWARDED_FOR');
// 	else if (getenv('HTTP_X_FORWARDED'))
// 		$ip = getenv('HTTP_X_FORWARDED');
// 	else if (getenv('HTTP_FORWARDED_FOR'))
// 		$ip = getenv('HTTP_FORWARDED_FOR');
// 	else if (getenv('HTTP_FORWARDED'))
// 		$ip = getenv('HTTP_FORWARDED');
// 	else if (getenv('REMOTE_ADDR'))
// 		$ip = getenv('REMOTE_ADDR');
// 	else
// 		$ip = 'Ip visitor tidak ditemukan';
// 	return $ip;
// }

// $file = fopen('logs.txt', 'w');
// fwrite($file, "\n IP : ".visitor()." User Agent : ".$_SERVER['HTTP_USER_AGENT']."\n");
// fclose($file);

// $jumlahv = count(file('logs.txt'));


// Variabel Constant

$path_galeri	= './assets/img/gallery/';
$path_stok 		= './assets/img/stok/';

$url	= array(

  // SETTING ROUTES WEB   
  'home'			=> './' // Default ( Index.php )

);

$config		= array(

  // SETTING TITLE BAR
  'title-utama'		=>	'MinaPolitan Blitar | Budidaya dan Bisnis Ikan Koi',
  'title-1'         =>  'MinaPolitan Blitar',
  'title-2'			=>	'Budidaya dan Bisnis Ikan Koi',

  // SETTING JUDUL NAVBAR
  'judul-bar'       =>  'MinaPolitan.com',

  // SETTING UI HOME
  'judul-utama'     =>  'Pusat Bisnis, budidaya dan edukasi perikanan Blitar',
  'deskripsi-utama' =>  '"Dari kolam alami, menghadirkan koi kualitas tinggi"',
  'tombol-start'    =>  'Hubungi Kami',
  'tentang-kami'    =>  'minapolitan.com adalah Situs yang berisikan tentang informasi seputar Dunia Ikan Koi & serta berbagai kumpulan artikel menarik tentang ikan koi serta memberikan solusi dan bermanfaat bagi kita semua.',

  // SETTING ITEM TENTANG KAMI
  'item-1'          =>  'Budidaya',
  'deskripsi-item-1'=>  'Kami mengambil ikan koi dari para petani yang sudah bekerja sama dengan kami.',
  'item-2'          =>  'Perawatan',
  'deskripsi-item-2'=>  'Kami melakukan perawatan pada ikan secara berkala dan juga diawasi oleh ahlinya.',
  'item-3'			=>	'Karantina',
  'deskripsi-item-3'=>	'Ikan yang kami kirimkan 99% lolos karantina kemanapun tujuan pengirimannya.',
  'item-4'			=>	'Packaging',
  'deskripsi-item-4'=>	'Dalam melakukan packaging, kami selalu memberikan yang terbaik agar kualitas saat sampai ke tangan pembeli tetap terjaga.',
  'item-5'			=>	'Harga',
  'deskripsi-item-5'=>	'Tentunya kami memberikan harga yang terjangkau dengan kualitas terbaik. Harga yang kami tawarkan sudah termasuk biaya ongkir untuk pengiriman Pulau Jawa & Pulau Bali.'

);

$count		= array(

	// OTOMATIS VALUE
	// 'visitor'		=> $jumlahv,
	'jenis'			=> 10,
	'support'		=> 24,
	'pekerja'		=> 20

);		 

$koleksi	= array(

	// SETTING STOK
	'1'				=> 'Ikan Koi',
	'gambar-1'		=> $path_stok.'koi.jpeg',
	'2'				=> 'Ikan Koki',
	'gambar-2'		=> $path_stok.'koki.jpg',
	'3'				=> 'Ikan Cupang',
	'gambar-3'		=> $path_stok.'cupang.jpg',
	'4'				=> 'Ikan Molly',
	'gambar-4'		=> $path_stok.'moli.jpg',

);

$galeri 	= array(

	// SETTING GALERI
	'1'				=> $path_galeri.'1.jpg',
	'2'				=> $path_galeri.'3.jpg',
	'3'				=> $path_galeri.'2.jpg',
	'4'				=> $path_galeri.'4.jpg',
	'5'				=> $path_galeri.'5.jpg',
	'6'				=> $path_galeri.'6.jpg',
	'7'				=> $path_galeri.'7.jpg',
	'8'				=> $path_galeri.'8.jpg'

);

$kontak  	= array(

	// SETTING KONTAK & SOSMED
	'lokasi'		=> 'Jln. Cicadas No.18, Bendo, Kota Blitar, Jawa Timur',
	'whatsapp'		=> 'https://wa.me/6281555633367',
	'email'			=> 'marketingkita01@gmail.com',
	'instagram'		=> 'https://www.instagram.com/sumberkoiblitar/',
	'facebook'		=> 'https://web.facebook.com/SumberKoi_Blitar-104318381632096',
	'gc-fb'			=> 'https://www.facebook.com/groups/966402240398299',
	'youtube'		=> 'https://youtube.com/channel/UCzUUGl6j9ZVtcLD2owkUTuw',
	'nomor'			=> '+62 815 5563 3367',
	'author'		=> 'Tim Prakerin SMKN 1 Blitar'

);

$form		= array(

	// SETTING FORM CONTACT US
	'ph_nama'		=> 'Nama anda',
	'ph_email'		=> 'Email anda',
	'ph_subject'	=> 'Judul',
	'ph_message'	=> 'Pesan',
	'btn'			=> 'Kirim Pesan'

);

?>