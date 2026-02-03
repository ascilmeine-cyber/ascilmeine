<?php

error_reporting( 0);
include ("Contact.php" );

mysql_query("SET NAMES utf8;");
//////////////////////////////////////////
//////////////// الحذف
//id_shk



$type_shk=$_POST['type_shk'];

$gps_shk=$_GET['gps_shk'];

$map_nampr_toal=$_POST['map_nampr_toal'];

$map_nampr_with=$_POST['map_nampr_with'];


$name_shk=$_POST['name_shk'];

$sal_shk=$_POST['sal_shk'];

$rom_shk=$_POST['rom_shk'];
$yer_skh=$_POST['yer_skh'];
$refeh_shk=$_POST['refeh_shk'];
$img_shk=$_POST['img_shk'];
$discrp_shk=$_POST['discrp_shk'];
//id_shk
// type_shk
 //gps_shk
 //map_nampr_toal
//map_nampr_with
//name_shk
//sal_shk
//rom_shk
//size_shk
//yer_skh
//refeh_shk
//star_shk
//img_shk
//discrp_shk







//////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////


$active_code =rand(10000,99999);


 $targetfolder = "upload2/".$active_code;

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";
$file_reslut=1;
 }

  
  
  
  $sub_com=$_POST['sub_com'];
	if(isset($_POST['sub_com']))
{
			if ($edit=="ok"){
				
			$id=$_GET['id'];
				
				
				
				if ($file_reslut==1){
					
					$query1=mysql_query("UPDATE  computer_namdeg SET name='$name', type='$type' WHERE id='".$id."'");
		//comp_mang_student_add.php
		$tt="تم إدخال البيانات الى قاعدة البيانات";
		header( "refresh:0;Computer_namdeg_edit.php?ruslt=ok&&id=$id" );
					
					}else{
				
				$query1=mysql_query("UPDATE  computer_namdeg SET name='$name', type='$type', pdf='$targetfolder' WHERE id='".$id."'");
		//comp_mang_student_add.php
		$tt="تم إدخال البيانات الى قاعدة البيانات";
		header( "refresh:0;Computer_namdeg_edit.php?ruslt=ok&&id=$id" );
				}
				
				
				
				}else{
					
				
		if( $name=="" ||$type==""||$targetfolder==""){
		header( "refresh:0;Computer_namdeg_add.php?ruslt=no" );
	}else{
	
		$query1=mysql_query("INSERT INTO  computer_namdeg VALUES('','$name','$type','$targetfolder')");
		//comp_mang_student_add.php
		$tt="تم إدخال البيانات الى قاعدة البيانات";
		header( "refresh:0;Computer_namdeg_add.php?ruslt=ok" );
		
	}
}
	}
		
		
?>