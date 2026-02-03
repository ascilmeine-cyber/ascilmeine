<?php
error_reporting( error_reporting() & ~E_NOTICE );
include ("Contact.php" );

mysql_query("SET NAMES utf8;");

$id_shk=$_POST['id_shk'];


$type_shk=$_POST['type_shk'];
$name=$_POST['name'];
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
?>



<?php
error_reporting(0);
$ruslt=$_GET['ruslt'];

if ($ruslt=="ok"){
	$tt="تم إدخال البيانات الى قاعدة البيانات";
	
	}

if ($ruslt=="no"){
		$tt="ادخلي كل البيانات المطلوبة";
	
	}
	
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

     
      <form enctype="multipart/form-data"  method="post" action="save_index_gps.php">
<table width="281" height="619" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="281" height="40" ><div class="content">
      
      <h2><a href="birds.htm" align="center"><img src="images/inpt/set/gps.png" alt="" width="370" height="57"background=""></a></h2>
    </div></td>
  </tr>
  <tr>
    <td height="57" ><label>*اختار المدينة</label>
<div class="container">

  <p>
     <select  name="citee" required style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit; ">
      <option>--------------------</option>
      <option value="دبي" >دبي</option>
      <option value="أبوظبي">أبوظبي</option>
      <option value="الشارقة">الشارقة</option>
      <option value="العين">العين</option>
      <option value="عجمان">عجمان</option>
      <option value="رأس الخيمة">رأس الخيمة</option>
      <option value="الفجيرة">الفجيرة</option>
      <option value="ام القيوين">ام القيوين</option>
      <option value="دبا الفجيرة">دبا الفجيرة</option>
      <option value="خورفكان">خورفكان</option>
      <option value="كلباء">كلباء</option>
      <option value="جبل علي">جبل علي</option>
      <option value="الرويس">الرويس</option>
      <option value="ليوا">ليوا</option>
      <option value="الذيد">الذيد</option>
      <option value="غياثي">غياثي</option>
      <option value="الرمس">الرمس</option>
      <option value="دبا الحصن">دبا الحصن</option>
      <option value="حتا">حتا</option>
       <option value="المدام">المدام</option>
      
     </select>
  </p>
</div></td>
  </tr>
  
  </td>
  <td height="2"></tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><style>
    body {
       
    }

    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        width: 85%;
        max-width: 400px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
		font-size:36px;
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
</style> 
    <label>*عنوان العقار</label>  
</td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
      <textarea name="adress"  type="text" cols="25" rows="3" class="boox" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)" aria-label="Transcription" style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;"></textarea>
    </div>

<script>
    function saveText() {
        const text = document.getElementById("textInput").value;
        alert("تم الحفظ: " + text);
    }
</script></td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><label>*عنوان العقار على الخريطة</label>
   </td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="file" name="file" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
   
    
    
</div>
</td>
  </tr>
  <tr>
    <td height="18" ><div class="container"></div></td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><div class="container"></div></td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><div class="container"></div></td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><div class="container"></div></td>
  </tr> <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><div class="container"></div></td>
  </tr>
  <tr>
    <td height="18" ></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
   
    
</div>
  <h4>&nbsp;</h4></td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" >&nbsp;</td>
  </tr>
  <tr>
    <td height="18" ><button onclick="salam();" name="aaa" type="submit" style="font-size:24px">حفظ</button>&nbsp;&nbsp;&nbsp;&nbsp; 
        <button name="button1" onclick="exitt()"style="font-size:24px"  >إلغاء</button> 
      
        </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>