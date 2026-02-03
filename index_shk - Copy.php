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

      <form enctype="multipart/form-data"  method="post" action="save.php">
<table width="281" height="601" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="281" height="40" ><div class="content">
      
      <h2><a href="birds.htm" align="center"><img src="images/inpt/set/3.png" alt="" width="351" height="57"background=""></a></h2>
    </div></td>
  </tr>
  <tr>
    <td height="57" ><label>*تحديد نوع عرض الشقة</label>
<div class="container">

  
     <select  name="type_eger_pay" required  style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit; " >
      <option>---اختار نوع عرض الشقة---</option>
      <option value="شقة للبيع" >شقة للبيع</option>
      <option value="شقة للإيجار">شقة للإيجار</option>
    
     </select>
  
</div></td>
  </tr>
  
  </td>
  </tr>
  <tr>
    <td height="57" ><label>*نوع الشقة</label>
<div class="container">

  
     <select  name="type_shk" required style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;" >
      <option>----- اختار نوع الشقة  -----</option>
      <option value="شقق البنتهاوس" >شقق البنتهاوس</option>
      <option value="شقق الدوبلكس">شقق الدوبلكس</option>
    <option value="شقق الاستوديو" >شقق الاستوديو</option>
      <option value="شقق التربلكس">شقق التربلكس</option>
     </select>
  
</div></td>
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
      <label>*النص الإعلاني للشقة</label>
</td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    
    
    <textarea name="name_shk"  type="text" cols="25" rows="3" class="boox" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)" aria-label="Transcription" style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;"></textarea>
    
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
    <input type="text" name="gps_shk" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)" style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;">
    
    
    
</div></td>
  </tr>
  <tr>
   <td height="18" ><label>*نظام الدفع </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <select  name="Payment_shk" required style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;">
      <option>-أختار نظام الدفع كاش أو تقسيط-</option>
      <option value="كاش" >كاش</option>
      <option value="تقسيط">تقسيط</option>
   
     </select>
    
   
    </div></td>
  </tr>
  <tr>
    <td height="18" ><label>*السعر </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
   <style>
 
  .result {
    margin-top: 1px;
    font-size: 16px;
    color: #008000;
    font-weight: bold;
  }
</style>
    <input type="text" id="number" name="sal_shk" placeholder="ادخل المبلغ">
     </div>
<div class="result" id="result">
   <script>
// دالة تحويل الرقم لكلمات بالعربي
function numberToArabicText(num) {
    const ones = ["", "واحد", "اثنان", "ثلاثة", "أربعة", "خمسة", "ستة", "سبعة", "ثمانية", "تسعة"];
    const tens = ["", "عشرة", "عشرون", "ثلاثون", "أربعون", "خمسون", "ستون", "سبعون", "ثمانون", "تسعون"];
    const teens = ["عشرة", "أحد عشر", "اثنا عشر", "ثلاثة عشر", "أربعة عشر", "خمسة عشر", "ستة عشر", "سبعة عشر", "ثمانية عشر", "تسعة عشر"];
    const hundreds = ["", "مئة", "مئتان", "ثلاثمئة", "أربعمئة", "خمسمئة", "ستمئة", "سبعمئة", "ثمانمئة", "تسعمئة"];
    const scales = ["", "ألف", "مليون", "مليار", "تريليون"];

    if (num === 0) return "صفر";

    let words = [];
    let scale = 0;

    while (num > 0) {
        let chunk = num % 1000;
        let chunkWords = [];

        let h = Math.floor(chunk / 100);
        let t = Math.floor((chunk % 100) / 10);
        let o = chunk % 10;

        if (h) chunkWords.push(hundreds[h]);

        if (t > 1) {
            if (o) chunkWords.push(ones[o] + " و");
            chunkWords.push(tens[t]);
        } else if (t === 1) {
            chunkWords.push(teens[o]);
        } else {
            if (o) chunkWords.push(ones[o]);
        }

        if (chunk > 0 && scale > 0) {
            // تصحيح الجمع للمئات والألوف
            if (chunk === 2 && scale === 1) chunkWords = ["ألفان"];
            else if (chunk === 2 && scale === 2) chunkWords = ["مليونان"];
            else if (chunk === 2 && scale === 3) chunkWords = ["ملياران"];
            else chunkWords.push(scales[scale]);
        }

        if (chunkWords.length > 0) words.unshift(chunkWords.join(" و "));

        num = Math.floor(num / 1000);
        scale++;
    }

    return words.join(" و ");
}

// تنسيق الرقم مع الفاصلة
function formatNumber(value) {
    let parts = value.split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}

document.getElementById("number").addEventListener("input", function() {
    let value = this.value.replace(/,/g, "");
    if (value === "" || isNaN(value)) {
        document.getElementById("result").textContent = "";
        return;
    }

    // عرض الرقم بفاصلة أثناء الكتابة
    this.value = formatNumber(value);

    let parts = value.split(".");
    let riyals = parseInt(parts[0]);
    let hallah = parts[1] ? parseInt(parts[1].padEnd(2, '0').slice(0,2)) : 0;

    let text = "";
    if (riyals > 0) {
        text += numberToArabicText(riyals) + (riyals === 1 ? " درهم إماراتي " : " درهم إماراتي");
    }
    if (hallah > 0) {
        if (text) text += " و ";
        text += numberToArabicText(hallah) + (hallah === 1 ? " هللة" : " هللات");
    }

    document.getElementById("result").textContent = text;
});
</script>

    </div>
    
   



    </td>
  </tr>
  <tr>
    <td height="18" ><label><br>
      *عدد غرف النوم </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    
    
    <select  name="bedrooms_shk" required style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;"  >
      <option>-ادخل عدد غرف النوم-</option>
      <option value="1" >1</option>
      <option value="2">2</option>
    <option value="3" >3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
       <option value="7">7</option>
        <option value="8">8</option>
         <option value="9">9</option>
          <option value="10">10</option>
           <option value="11">11</option>
            <option value="12">12</option>
             <option value="13">13</option>
              <option value="14">14</option>
               <option value="15">15</option>
                <option value="16">16</option>
                 <option value="17">17</option>
                  <option value="18">18</option>
                   <option value="19">19</option>
                    <option value="20">20</option>
                     <option value="21">21</option>
                      <option value="22">22</option>
                       <option value="23">23</option>
     </select>
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*سنة البناء </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
  
    <select name="yer_skh" required style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;">
    <option >--اختر السنة--</option>
    <?php
      $currentYear = date("Y");
      for ($year = $currentYear; $year >= 1950; $year--) {
        echo "<option value='$year'>$year</option>";
      }
    ?>
  </select>

</div></td>
  </tr>
  <tr>
    <td height="18" ><label>*حالة العقار </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
   
    
   
  <select  name="refeh_shk" required style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;">
      <option>--اختار حالة العقار--</option>
       <option value="جاهز">جاهز</option>
      <option value="قيد الإنشاء" >قيد الإنشاء</option>
     
   



     </select>
    
</div></td>
  </tr> <tr>
    <td height="18" ><label>*مساحة الشقة بالقدم المربع </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
   
    <input type="number" step="any" id="feet" name="feet"
           placeholder="فوت" oninput="fromFeet()" style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;">
    </div></td>
  </tr>
  <tr>
    <td height="18" ><label>*مساحة  الشقة  بالمتر المربع </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
      <input type="number" step="any" id="meter" name="meter"
           placeholder="متر" oninput="fromMeter()" style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;">
    </div>


</td>
  </tr>
  <tr>
    <td height="18" ></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
   
    
</div>
  <h4>مميزات الشقة:</h4>

  
   <input type="checkbox" id="checkAll">
  تحديد كل المميزات
</label>

<hr>

<label><input type="checkbox" name="star_shk[]" value="مصعد"> مصعد</label><br>
<label><input type="checkbox" name="star_shk[]" value="موقف سيارات"> موقف سيارات</label><br>
<label><input type="checkbox" name="star_shk[]" value="مكيف"> مكيف</label><br>
<label><input type="checkbox" name="star_shk[]" value="مفروشة"> مفروشة</label><br>
<label><input type="checkbox" name="star_shk[]" value="حراسة"> حراسة</label><br>

<script>
const checkAll = document.getElementById('checkAll');
const checkboxes = document.querySelectorAll('input[name="star_shk[]"]');

// عند الضغط على تحديد الكل
checkAll.addEventListener('change', () => {
  checkboxes.forEach(cb => cb.checked = checkAll.checked);
});

// عند تغيير أي خيار
checkboxes.forEach(cb => {
  cb.addEventListener('change', () => {
    checkAll.checked = [...checkboxes].every(c => c.checked);
  });
});
</script>

</td>
  </tr>
  <tr>
    <td height="18" ><label>*وصف كامل للعرض</label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
      <textarea name="discrp_shk"  type="text" cols="25" rows="3" class="boox" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)" aria-label="Transcription" style="font-size:20px; text-align:center; font-weight:bold;font-style:inherit;"></textarea>    
</div>


</td>
  </tr>
  <tr>
    <td height="18" ><label>*إرفاق صورة للشقة </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="file" name="file" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
   
    
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label></label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
   <input type="file" name="file2" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label>  </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container">
    <input type="file" name="file3" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)">
    
</div></td>
  </tr>
  <tr>
    <td height="18" ><label></label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container"><input type="file" name="file4" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)"></td>
  </tr>
  </div><tr>
    <td height="18" ><label> </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container"><input type="file" name="file5" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)"></td>
  </tr>
  </div>
  <tr>
    <td height="18" ><label>  </label></td>
  
  




  
  </tr>
  <tr>
    <td height="18" ><div class="container"><input type="file" name="file6" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)"></td>
  </tr>
  </div>
  <tr>
    <td height="18" ><label>  </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container"><input type="file" name="file7" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)"></td>
  </tr>
  </div>
  <tr>
    <td height="18" ><label>  </label></td>
  </tr>
  <tr>
    <td height="18" ><div class="container"><input type="file" name="file8" placeholder="اكتب النص هنا" onKeyDown="preventNumberInput(event)"></td>
  </tr>
  </div>
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

<script>
let lock = false;

function fromFeet(){
    if(lock) return;
    lock = true;

    let feet = document.getElementById("feet").value;
    document.getElementById("meter").value =
        feet ? (feet * 0.3048).toFixed(2) : "";

    lock = false;
}

function fromMeter(){
    if(lock) return;
    lock = true;

    let meter = document.getElementById("meter").value;
    document.getElementById("feet").value =
        meter ? (meter / 0.3048).toFixed(2) : "";

    lock = false;
}
</script>

<p>&nbsp;</p>
</body>
</html>