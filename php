<?php 
// veritabananı bağlanan fonksiyon 
function vt_baglan(){

	// mysql veritabanına bağlanıyoruz
	$baglan = mysql_connect("localhost","root","123456");
	$db 	= mysql_select_db("aslilili");
	
}
?> 
