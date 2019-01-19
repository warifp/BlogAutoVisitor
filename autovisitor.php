<?php
error_reporting(0);
/**
# Copyright (c) 2018 IDSYSTEM404.
# Author      : Wahyu Arif P
# Version     : v1
# Created 	  : 07 Mei 2018 | 18:43:05
# Last Update : 08 Mei 2018 | 07:20:21
# "Hargai Copyright jangan di Ubah!" 
						-Wahyu Arif P
**/
echo "\e[1;35m======================================================================\e[0m\r\n";
echo "                    || \e[1;32mAUTO VISITOR [JingLink]\e[0m\r\n";
echo "       .--------.   || \e[1;34m(c)\e[0m \e[1;33m2018 IDSYSTEM404\e[0m\r\n";
echo "   --- |  \e[0;32mAUTO\e[0m  |   || \r\n";
echo "  ---  |\e[0;32mVISITOR!\e[0m|   || \e[1;32mFacebook\e[0m : \e[1;34mhttps://www.facebook.com/warifp\e[0m\r\n";
echo "   --- '--------'   || \e[1;32mFanspage\e[0m : \e[1;34mhttps://www.facebook.com/idsystem404\e[0m\r\n";
echo "                    || \e[1;32mGithub\e[0m   : \e[1;34mhttps://github.com/idsystem404\e[0m\r\n";
echo "\e[1;35m======================================================================\r\n";
$banner     = "   
\e[1;35m======================================================================
Feature :
- Auto change IP.
- Support Proxy.
- Add delay time.
- 20 UserAgent.
\e[1;31mNB : 
*URL harus di awali dengan 'http:// or https://'
*Proxy : IP:PORT | Misalkan : 127.0.0.1:80 | atau Kosongi aja! \e[0m
\e[1;35m======================================================================\e[0m\n";

print $banner;

echo "Masukkan password untuk melanjutkan  : ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'idsystem404'){
    echo "\e[1;31mMAAF! PASSWORD SALAH!\e[0m\n";
    exit;
}
echo "\e[1;92mPassword benar!\e[0m\n\n";
sleep(1);

$authorceo = 'IDSYSTEM404';

echo "\nURL 		: ";
$url = trim(fgets(STDIN, 1024)); /** MANUAL URL $url = 'URL or Target'; **/
echo "\nJumlah 		: ";
$jumlah = trim(fgets(STDIN, 1024));
echo "\nProxy 		: ";
$proxy       = rtrim( fgets( STDIN));
echo "\n";

echo "\n\e[1;35m+=========================\e[0m[# \e[1;32mPROSES\e[0m #]\e[1;35m=========================+\e[0m\n";
// $url = 'http://'.substr(trim($url), 1);
for ($x=1; $x<=$jumlah; $x++) {

/** USER AGENT : 20 **/
$userAgent = array(
'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5',
'Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11',
'Opera/9.25 (Windows NT 5.1; U; en)',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)',
'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)',
'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.0.12) Gecko/20070731 Ubuntu/dapper-security Firefox/1.5.0.12',
'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:50',
'Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+2011-10-16 20:21:10',
'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.254 Mobile Safari/534.11+',
'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; pt) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.546 Mobile Safari/534.8+',
'Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
'Mozilla/5.0 (Linux; U; Android 2.2.1; en-ca; LG-P505R Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
'iTunes/9.1 (Macintosh; U; PPC Mac OS X 10.2',
'Mozilla/5.0 (Linux; U; Android 2.1; en-us; Nexus One Build/ERD62) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17',
'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11',
'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.65 Safari/535.11',
'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.0',
'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6',
'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36',
'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.7) Gecko/20070914 Firefox/2.0.0.7');

/** FUNCTION CURL **/
$idsystem404 = curl_init();
curl_setopt($idsystem404, CURLOPT_URL, $url);
curl_setopt($idsystem404, CURLOPT_REFERER, "https://www.google.com");
curl_setopt($idsystem404, CURLOPT_HEADER, 0);
curl_setopt($idsystem404, CURLOPT_PROXY, $proxy);
curl_setopt($idsystem404, CURLOPT_HTTPTUNNELPROXY, $proxy);
curl_setopt($idsystem404, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($idsystem404, CURLOPT_RETURNTRANSFER, true);
curl_setopt($idsystem404, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($idsystem404, CURLOPT_TIMEOUT, 10);
curl_setopt($idsystem404, CURLOPT_USERAGENT, $userAgent[array_rand($userAgent)]);
curl_setopt($idsystem404, CURLOPT_ENCODING, "gzip");
$exec = curl_exec($idsystem404);
if(!curl_errno($idsystem404)){
//$info = curl_getinfo($idsystem404, CURLINFO_HTTP_CODE);
$info = curl_getinfo($idsystem404);
$ip = $info['primary_ip'];
$port = $info['primary_port'];
$code = $info['http_code'];
curl_close($idsystem404);
	if ($exec == "primary_ip") {
		$jumlah += 1;
		echo "ERROR";
		flush();
		sleep(0); /** Delay **/		
	} else {
		echo "$x. [\e[1;31m $authorceo \e[0m] | URL : [\e[1;34m $url \e[0m] [\e[1;33m $ip:$port \e[0m] [ \e[1;92mSUCCESS ]\e[0m\n";
		flush();
		sleep(0); /** Delay **/		
	}
}
}
echo "\n\e[1;31mERROR : Silahkan Periksa Koneksi Internet atau Isi Isian diatas dengan Benar!\e[0m\n";
?>