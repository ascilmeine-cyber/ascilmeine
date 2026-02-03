<?php
error_reporting( error_reporting() & ~E_NOTICE );


error_reporting( 0);
include ("db.php" );

mysql_query("SET NAMES utf8;");

$citee=$_POST['citee'];
$adress=$_POST['adress'];

	
	
	 $active_codem =rand(1,999999);

$active_codem =rand(1,999999).$active_codem;


 $targetfolderm = "up_map/".$active_codem;

 $targetfolderm1 = $targetfolderm . basename( $_FILES['map']['name']) ;

if(move_uploaded_file($_FILES['map']['tmp_name'], $targetfolderm1))

 {

 echo "The file ". basename( $_FILES['map']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
	

 
 
 
$text = $targetfolderm1;

if (strpos($text, '.') !== false) {
    echo "النص يحتوي على نقطة";

$mmm= $targetfolderm1;

} else {
    echo "النص لا يحتوي على نقطة";
	$mmm= '';
}
		
?>









<?php
$active_code1 =rand(1,99999999);

$active_code =rand(1,99999999999).$active_code1;


 $targetfolder = "uploads/".$active_code;

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 
 
 $text1 = $targetfolder;

if (strpos($text1, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m1= $targetfolder;

} else {
    echo "النص لا يحتوي على نقطة";
	$m1= '';
}
	
 //////////////////////////////////////////الصورة الثانية////////////////////////////////
 $active_code1 =rand(1,99999999);

$active_codee =rand(1,99999999999).$activee_code1;


 $targetfolderr = "uploads/".$active_codee;

 $targetfolderr = $targetfolderr . basename( $_FILES['file2']['name']) ;

if(move_uploaded_file($_FILES['file2']['tmp_name'], $targetfolderr))

 {

 echo "The file ". basename( $_FILES['file2']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 
  $text11 = $targetfolderr;

if (strpos($text11, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m2= $targetfolderr;

} else {
    echo "النص لا يحتوي على نقطة";
	$m2= '';
}
 
  //////////////////////////////////////////الصورة الثالثة////////////////////////////////
 $active_code3 =rand(1,99999999);

$active_codeee =rand(1,99999999999).$activee_code3;


 $targetfolderrr = "uploads/".$active_codeee;

 $targetfolderrr = $targetfolderrr . basename( $_FILES['file3']['name']) ;

if(move_uploaded_file($_FILES['file3']['tmp_name'], $targetfolderrr))

 {

 echo "The file ". basename( $_FILES['file3']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 
 $text111 = $targetfolderrr;

if (strpos($text111, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m3= $targetfolderrr;

} else {
    echo "النص لا يحتوي على نقطة";
	$m3= '';
}
 
  //////////////////////////////////////////الصورة الرابغه////////////////////////////////
 $active_code4 =rand(1,99999999);

$active_codeeee =rand(1,99999999999).$activee_code4;


 $targetfolderrrr = "uploads/".$active_codeeee;

 $targetfolderrrr = $targetfolderrrr . basename( $_FILES['file4']['name']) ;

if(move_uploaded_file($_FILES['file4']['tmp_name'], $targetfolderrrr))

 {

 echo "The file ". basename( $_FILES['file4']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 $text1111 = $targetfolderrrr;

if (strpos($text1111, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m4= $targetfolderrrr;

} else {
    echo "النص لا يحتوي على نقطة";
	$m4= '';
}
  //////////////////////////////////////////الصورة الخامسة////////////////////////////////
 $active_code5 =rand(1,99999999);

$active_codeeeee =rand(1,99999999999).$active_code5;


 $targetfolderrrrr = "uploads/".$active_codeeeee;

 $targetfolderrrrr = $targetfolderrrrr . basename( $_FILES['file5']['name']) ;

if(move_uploaded_file($_FILES['file5']['tmp_name'], $targetfolderrrrr))

 {

 echo "The file ". basename( $_FILES['file5']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 
  $text11111 = $targetfolderrrrr;

if (strpos($text11111, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m5= $targetfolderrrrr;

} else {
    echo "النص لا يحتوي على نقطة";
	$m5= '';
}
 
   //////////////////////////////////////////الصورة 6////////////////////////////////
 $active_code6 =rand(1,99999999);

$active_code6 =rand(1,99999999999).$active_code6;


 $targetfolder6 = "uploads/".$active_code6;

 $targetfolder6 = $targetfolder6 . basename( $_FILES['file6']['name']) ;

if(move_uploaded_file($_FILES['file6']['tmp_name'], $targetfolder6))

 {

 echo "The file ". basename( $_FILES['file6']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
  $text111111 = $targetfolder6;

if (strpos($text111111, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m6= $targetfolder6;

} else {
    echo "النص لا يحتوي على نقطة";
	$m6= '';
}
  //////////////////////////////////////////الصورة 7////////////////////////////////
 $active_code7 =rand(1,99999999);

$active_code7 =rand(1,99999999999).$active_code7;


 $targetfolder7 = "uploads/".$active_code7;

 $targetfolder7 = $targetfolder6 . basename( $_FILES['file7']['name']) ;

if(move_uploaded_file($_FILES['file7']['tmp_name'], $targetfolder7))

 {

 echo "The file ". basename( $_FILES['file7']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 $text1111111 = $targetfolder7;

if (strpos($text1111111, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m7= $targetfolder7;

} else {
    echo "النص لا يحتوي على نقطة";
	$m7= '';
}
 //////////////////////////////////////////الصورة 8////////////////////////////////
 $active_code8 =rand(1,99999999);

$active_code8 =rand(1,99999999999).$active_code8;


 $targetfolder8 = "uploads/".$active_code8;

 $targetfolder8 = $targetfolder8 . basename( $_FILES['file7']['name']) ;

if(move_uploaded_file($_FILES['file8']['tmp_name'], $targetfolder8))

 {

 echo "The file ". basename( $_FILES['file8']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 
 $text11111111 = $targetfolder8;

if (strpos($text11111111, '.') !== false) {
    echo "النص يحتوي على نقطة";

$m8= $targetfolder8;

} else {
    echo "النص لا يحتوي على نقطة";
	$m8= '';
}




 
 	if(isset($_POST['aaa']))
{
			
		
		$result = $conn->query(
 "SELECT id FROM index_shk ORDER BY id DESC LIMIT 1"
);
$row = $result->fetch_assoc();
$property_id = $row['id']+ 1;


		
		 $stmt = $conn->prepare("INSERT INTO  index_shk_img (img1, id_shk, img2, img3, img4, img5, img6, img7, img8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $targetfolder, $property_id, $targetfolderr, $targetfolderrr, $targetfolderrrr, $targetfolderrrrr, $targetfolder6, $targetfolder7, $targetfolder8);
    if ($stmt->execute()) {
      
	  
	  
	   $last_id= $conn->insert_id;// للمعرفة اخر رقم  index_shk
//echo $last_id;
///////////////////////////////////////////


echo $property_id;
   
   
   
    } else {
      //  echo "❌ خطأ في الحفظ";
    }

    $stmt->close();
}


	



$conn->close();
		

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 
 
 
 

// الاتصال بقاعدة البيانات
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// التأكد من الإرسال
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //  $name  = $_POST['name'];
   // $email = $_POST['email'];

    $id_shk=$_POST['id_shk'];


$type_shk=$_POST['type_shk'];
$mrshda=$_POST['$mrshda'];
$gps_shk=$_GET['gps_shk'];

$map_nampr_toal=$_POST['map_nampr_toal'];

$map_nampr_with=$_POST['map_nampr_with'];


$name_shk=$_POST['name_shk'];


$sal_shk = str_replace( ',', '', $_POST['sal_shk']); // إزالة الفواصل
$sal_shk = (float)$sal_shk;

//$sal_shk=substr_replace(',",$_post['sal_shk']);
//$sal_shk=$_POST['sal_shk'];

//$rom_shk=$_POST['rom_shk'];
$yer_skh=$_POST['yer_skh'];
$refeh_shk=$_POST['refeh_shk'];
$img_shk=$_POST['img_shk'];
$discrp_shk=$_POST['discrp_shk'];
$size_fot_shk=$_POST['feet'];
$size_mter_shk=$_POST['meter'];	//size_mter_shk
$Payment_shk=$_POST['Payment_shk'];	
	$type_eger_pay=$_POST['type_eger_pay'];
	
		$bedrooms_shk=$_POST['bedrooms_shk'];
	 // استقبال المميزات (كمصفوفة)
$star_shk = isset($_POST['star_shk'])
        ? implode(" , ", $_POST['star_shk'])
        : ',';
		
	$frth=$_POST['frth'];
	$discrp_shk=$_POST['discrp_shk'];	
	

	// أمر الحفظ الآمن
   $stmt = $conn->prepare("INSERT INTO  index_shk (type_shk, yer_skh, name_shk, refeh_shk, bedrooms_shk, sal_shk, star_shk, discrp_shk, type_eger_pay, size_fot_shk, size_mter_shk, Payment_shk, img1, img2, img3, img4, img5, img6, img7, img8, citee, adress, map_img, frth) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssdssssssssssssssssss", $type_shk, $yer_skh, $name_shk, $refeh_shk, $bedrooms_shk, $sal_shk, $star_shk, $discrp_shk, $type_eger_pay, $size_fot_shk, $size_mter_shk, $Payment_shk, $m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $citee, $adress, $mmm, $frth);
   
   //img1, img2, img3, img4, img5, img6, img7, img8
    // $stmt = $conn->prepare("INSERT INTO  index_shk (type_shk, yer_skh, name_shk, sal_shk, Payment_shk, bedrooms_shk) VALUES (?, ?, ?, ?, ?, ?)");
   // $stmt->bind_param("ssssss", $type_shk, $yer_skh, $name_shk, $sal_shk, $Payment_shk, $bedrooms_shk);
   
   
   // $targetfolder, $targetfolderr, $targetfolderrr, $targetfolderrrr, $targetfolderrrrr, $targetfolder6, $targetfolder7, $targetfolder8
    if ($stmt->execute()) {
        echo "✅ تم الحفظ بنجاح";
   header("Location: index_shk.php");
    } else {
        echo "❌ خطأ في الحفظ";
    }

    $stmt->close();
}

$conn->close();

	
	//type_shk
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
?>


<style>
body {
    background: #eee;
    font-family: Arial, sans-serif;
}

/* المستطيل */
.slider-container {
    width: 90%;
    max-width: 900px;
    margin: 50px auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    position: relative;
    overflow: hidden;
    padding: 15px;
}

/* الصور */
.slider {
    display: flex;
    transition: 0.5s ease;
}

.slider img {
    width: 20%;
    height: 160px;
    object-fit: cover;
    border-radius: 10px;
    margin: 0 5px;
    cursor: pointer;
    transition: 0.3s;
}

.slider img:hover {
    transform: scale(1.05);
}

/* الأزرار */
.btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.6);
    color: #fff;
    border: none;
    font-size: 22px;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 50%;
}

.btn:hover {
    background: black;
}

.prev { left: 10px; }
.next { right: 10px; }

/* نافذة تكبير الصورة */
.popup {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.8);
    justify-content: center;
    align-items: center;
}

.popup img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 15px;
}

.popup span {
    position: absolute;
    top: 20px;
    right: 30px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
</style>

<meta name='viewport' content='width=device-width, initial-scale=1'/><!DOCTYPE html>
<html lang="ar">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/horizontal.css" rel="stylesheet" type="text/css" />
<link href="css/vertical.css" rel="stylesheet" type="text/css" />
<link href="css/set.css" type="text/css" rel="stylesheet" />
<link href="css/styl.css" type="text/css" rel="stylesheet" />
<link href="css/best.css" type="text/css" rel="stylesheet" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>قائمة موقع عقارات</title>

<style>
body{
    margin:0;
    font-family:Tahoma, Arial;
    direction:rtl;
}

/* ===== شريط التنقل ===== */
.navbar{
    background:#1f3c88;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 15px;
    position:relative;
}

.logo{
    color:#fff;
    font-size:20px;
    font-weight:bold;
}

/* ===== القائمة ===== */
.menu{
    list-style:none;
    display:flex;
    margin:0;
    padding:0;
}

.menu li{
    position:relative;
}

.menu a{
    color:#fff;
    text-decoration:none;
    padding:10px 14px;
    display:block;
}

.menu a:hover{
    background:#162d66;
    border-radius:5px;
}

/* ===== قائمة فرعية ===== */
.submenu{
    display:none;
    position:absolute;
    top:100%;
    right:0;
    background:#162d66;
    list-style:none;
    padding:0;
    min-width:160px;
}

.submenu li a{
    padding:10px;
}

.menu li:hover .submenu{
    display:block;
}

/* ===== زر مميز ===== */
.add-btn{
    background:#f9a826;
    color:#000 !important;
    border-radius:6px;
    font-weight:bold;
}

/* ===== زر الجوال ===== */
.menu-btn{
    display:none;
    font-size:26px;
    color:#fff;
    cursor:pointer;
}

/* ===== الجوال ===== */
@media (max-width:768px){
    .menu{
        display:none;
        flex-direction:column;
        width:100%;
        background:#1f3c88;
        position:absolute;
        top:55px;
        right:0;
    }

    .menu li{
        text-align:center;
    }

    .submenu{
        position:static;
    }

    .menu-btn{
        display:block;
    }

    #menu-toggle:checked + .menu{
        display:flex;
    }
}
</style>





<style>
select {
  width: 250px;
  padding: 10px;
  font-size: 16px;
  border: 2px solid #4CAF50;
  border-radius: 8px;
  background-color: #f9f9f9;
  cursor: pointer;
}

select:focus {
  outline: none;
  border-color: #2e8b57;
  box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
}

label {
  display: block;
  margin-bottom: 6px;
  font-weight: bold;
  color:#009 ;
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Cairo', sans-serif;
    direction: rtl;
    text-align: right;
  }

  h1 {
    font-size: 28px ;
    color: #FFF;
	
  }

  p {
    font-size: 28px;
    color: #FFF;
  }
</style>


</head>

<body>

<nav class="navbar">
    <div class="logo">المعيني للعقارت <img src="images/man_C.png" width="72" height="38" /></div>

    <label for="menu-toggle" class="menu-btn">☰</label>
    <input type="checkbox" id="menu-toggle" hidden>

    <ul class="menu">
        <li><a href="#">الرئيسية</a></li>

        <li>
            <a href="#">العقارات ▾</a>
            <ul class="submenu">
                <li><a href="#">للبيع</a></li>
                <li><a href="#">للإيجار</a></li>
                <li><a href="#">أراضي</a></li>
                <li><a href="#">شقق</a></li>
            </ul>
        </li>

        <li><a href="#">وسطاء</a></li>
        <li><a href="#">من نحن</a></li>
        <li><a href="#">تواصل معنا</a></li>
        <li><a href="#" class="add-btn">أضف عقارك</a></li>
    </ul>
</nav>
<table width="100%" height="35" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100%" background="images/nn.png" align="center"><p>&nbsp;</p>
    <p><img src="images/man.png" width="290" height="121" /></p></td>
  </tr>
</table>
<script type="text/javascript">
            function salam(){
           
		  
		  
		  <?php
	
		  $aaa=$_POST['aaa'];
	if(isset($_POST['aaa']))
{	
		//   $Power  $Notes   $Description
		
		
	//type_shk
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
		
		//if($gps_shk=="" ||$name_shk=="" || $sal_shk=="" || $rom_shk==""){
			if($gps_shk==""){
		
		$tt="ادخلي كل البيانات المطلوبة";
	$query1=mysql_query("INSERT INTO in VALUES('','11')");
		$tt="تم إدخال البيانات الى قاعدة البيانات";
	}else{
	
		//$query1=mysql_query("INSERT INTO index_shk VALUES('$type_shk','$gps_shk','$name_shk','$sal_shk','$rom_shk','$size_shk','$yer_skh','$refeh_shk','$star_shk','$img_shk','$discrp_shk')");
		
		$query1=mysql_query("INSERT INTO in VALUES('','11')");
		$tt="تم إدخال البيانات الى قاعدة البيانات";
	}

}
		
		?>
		  
		
		   ;}
      </script>
      <form action="" method="post">
<table width="281" height="601" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="281" height="40" ><div class="content">
      
      <h2><a href="birds.htm" align="center"><img src="images/inpt/set/3.png" alt="" width="351" height="57"background=""></a></h2>
    </div></td>
  </tr>
  <tr>
    <td height="57" ><label>*نوع الشقة</label>
<div class="container">

<select type="text" name="type_shk" onKeyDown="preventNumberInput(event)">
  <option>السعودية</option>
  <option>مصر</option>
  <option>الإمارات</option>
</select></div></td>
  </tr>
  <tr>
    <td height="18" ><style>
    body {
       
    }

    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        width: 90%;
        max-width: 400px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    input[type="text"] {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
 button1 {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        background-color: #F00;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style><?php
echo $star_shk;

?>
      <label>*النص الإعلاني للشقة</label>
</td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="name_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div>

<script>
    function saveText() {
        const text = document.getElementById("textInput").value;
        alert("تم الحفظ: " + text);
    }
</script></td>
  </tr>
  <tr>
    <td height="18" ><label>*موقع الشقة</label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="gps_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*السعر </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="sal_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*عدد الغرف </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="rom_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*سنة البناء </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="size_shk" placeholder="اكتب النص هنا"onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*حالة العقار </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="refeh_shk" placeholder="اكتب النص هنا"onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr> <tr>
    <td height="18" ><label>*مساحة الشقة </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="size_shk" placeholder="اكتب النص هنا">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*المميزات </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="star_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*وصف كامل للعرض</label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="discrp_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*إرفاق صورة للشقة </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="type_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*إرفاق صورة ثانية</label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="type_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*إرفاق صورة ثالثة  </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="text" name="type_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*إرفاق صورة رابعة </label></td>
  </tr>
  <tr>
    <td height="18" ><input type="text"name="type_shk" placeholder="اكتب النص هنا"onKeyDown="preventNumberInput(event)"></td>
  </tr>
  <tr>
    <td height="18" ><label>*إرفاق صورة خامسة  </label></td>
  </tr>
  <tr>
    <td height="18" ><input type="text" name="type_shk" placeholder="اكتب النص هنا"onKeyDown="preventNumberInput(event)"></td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><button onclick="salam();" name="aaa">حفظ</button>&nbsp;&nbsp;&nbsp;&nbsp; 
        <button name="button1" onclick="exitt()">إلغاء</button> 
        
      
        </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php

$result = $conn->query(
 "SELECT id FROM index_shk ORDER BY id DESC LIMIT 1"
);
$row = $result->fetch_assoc();
$property_id = $row['id'];
echo $property_id;


$active_code =rand(10000,99999);


 $targetfolder = "uploads/".$active_code;

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
 ////////////////////////////////////////////
 



	if(isset($_POST['sub_com']))
{
			
		
		
		
		 $stmt = $conn->prepare("INSERT INTO  index_shk_img (img1, id_shk) VALUES (?, ?)");
    $stmt->bind_param("ss", $targetfolder, $property_id);
    if ($stmt->execute()) {
      
	  
	  
	   $last_id= $conn->insert_id;// للمعرفة اخر رقم  index_shk
//echo $last_id;
///////////////////////////////////////////


   
   
   
    } else {
      //  echo "❌ خطأ في الحفظ";
    }

    $stmt->close();
}


	



$conn->close();
		
?>