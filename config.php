<?php
@ini_set('memory_limit', '-1');
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@ignore_user_abort(1);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
header("Content-Type: text/plain");

$oxgn=array(
	'ig' => array(
		/*
			EDIT BAGIAN DIBAWAH INI USERNAME DAN PASSWORD
		*/
		'$$$$$$$$$$$', // USERNAME instagram lu
		'$$$$$$$$$$$', // PASSWORD instagram lu
		/* Sessionnya.. !!! */
		'https://i.instagram.com/api/v1/', 'Instagram 9.0.1 Android (18/4.3; 320dpi; 720x1280; Xiaomi; HM 1SW; armani; qcom; en_US)', '96724bcbd4fb3e608074e185f2d4f119156fcca061692a4a1db1c7bf142d3e22'
	),
	'config' => array(
		true,	// Like Beranda Aktif

		'data/',
		'data/igerror.log'
	)
);

if(!file_exists( $oxgn['config'][5] )) {
	mkdir($oxgn['config'][5].'/' , 0777);
}