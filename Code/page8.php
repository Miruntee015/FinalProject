<?php
if(isset($_POST['submit']))
{
	//print "Form was submitted";
	if($_POST['seed']=="all")
		all();
	if($_POST['seed']=="seed1")
		seed1();
	if($_POST['seed']=="seed2")
		seed2();
  if($_POST['seed']=="seed3")
    seed3();
  if($_POST['seed']=="seed4")
    seed4();
  if($_POST['seed']=="seed5")
    seed5();

}
else
	showForm();
function all()
{
	echo '<a href = "tableall.html">แสดงข้อมูล</a>';
}

function seed1()
{
	echo '<a href = "page8_2.html">แสดงข้อมูล</a>';
}
function seed2()
{
	echo '<a href = "page8_3.html">แสดงข้อมูล</a>';
}
function seed3()
{
  echo '<a href = "page8_4.html">แสดงข้อมูล</a>';
}
function seed4()
{
  echo '<a href = "page8_5.html">แสดงข้อมูล</a>';
}
function seed5()
{
  echo '<a href = "page8_6.html">แสดงข้อมูล</a>';
}
function showForm()
{

print <<< FORM


<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบช่วยเรียนรู้การเกษตรและพืชไร่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 770px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #000;
      color: gray;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <marquee behavior="alternate"><h1><font face="JasmineUPC" color=blue>ระบบช่วยเรียนรู้การเกษตรและพืชไร่</font></h1></marquee>

</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">หน้าแรก</a></li>
        <li><a href="page2.html">การเกษตร</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="page3.html">พืชไร่<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="page3.html">ความหมาย</a></li>
          <li><a href="page3-1.html">การแบ่งประเภทตามพืชที่ปลูก</a></li>
          <li><a href="page3-2.html">การแบ่งตามการใช้ประโยชน์</a></li>
          <li><a href="page3-3.html">การแบ่งตามลักษณะพฤษศาสตร์</a></li>
        </ul>
      </li>
              <li><a href="page10.html">เครื่องมือทางการเกษตร</a></li>
        <li><a href="page11.html">การเลี้ยงสัตว์</a></li>
        <li><a href="page4.html">ตัวอย่างพืชไร่</a></li>
        <li><a href="page5.html">แบบฝึกหัด</a></li>

        <li><a href="page8.php">ข้าว</a></li>
        <li><a href="page9.html">สื่อมัลติมีเดีย</a></li>
        <li><a href="Aboutme/index.html">ติดต่อเรา</a></li>
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-10 text-left"> 

    <br>
    <h1>ค้นหาสายพันธุ์ข้าว</h1>
<form action="" method="POST">

<b>ระยะพักตัวของเมล็ด</b>
<br>
<select name="seed">
  <option value="all">ทั้งหมด</option>
  <option value="seed1">1-2 สัปดาห์</option>
  <option value="seed2">3-4 สัปดาห์</option>
  <option value="seed3">5-6 สัปดาห์</option>
  <option value="seed4">7-8 สัปดาห์</option>
  <option value="seed5">9-10 สัปดาห์</option>
</select><br><br>

<b>ชนิดข้าว</b> 
<br>
<select name="rice">
  <option value="all">ทั้งหมด</option>
  <option value="paddy">ข้าวเจ้า</option>
  <option value="stickyrice">ข้าวเหนียว</option>
</select><br><br>

<b>ความไวต่อแสง</b>
<br>
<select name="light">
  <option value="all2">ทั้งหมด</option>
  <option value="senlight">ไวต่อช่วงแสง</option>
  <option value="softlight">ไวต่อช่วงแสงอย่างอ่อน</option>
  <option value="nolight">ไม่ไวต่อช่วงแสง</option>
</select><br><br>

<b>อายุการเก็บเกี่ยว</b>
<br>
<select name="harvest">
  <option value="all">ทั้งหมด</option>
  <option value="harvest1">ต่ำกว่า 90 วัน</option>
  <option value="harvest2">90-100 วัน</option>
  <option value="harvest3">101-120 วัน</option>
  <option value="harvest4">120 วันขึ้นไป</option>
</select><br><br>

<b>ความสูงของพันธุ์ข้าว</b>
<br>
<select name="high">
  <option value="all">ทั้งหมด</option>
  <option value="high1">80-100 ซม.</option>
  <option value="high2">101-120 ซม.</option>
  <option value="high3">121-140 ซม.</option>
  <option value="high4">141-180 ซม.</option>
</select><br><br>

<b>ปริมาณน้ำ</b> 
<br>
<select name="water">
  <option value="all">ทั้งหมด</option>
  <option value="water1">น้ำน้อย</option>
  <option value="water2">น้ำมาก</option>
</select><br><br>

<b>จำนวนผลผลิตต่อไร่</b>
<br>
<select name="product">
  <option value="all">ทั้งหมด</option>
  <option value="product1">300-400 กิโลกรัม</option>
  <option value="product2">401-500 กิโลกรัม</option>
  <option value="product3">501-600 กิโลกรัม</option>
  <option value="product4">601-700 กิโลกรัม</option>
</select><br><br>


<input type="submit" name="submit" value="Submit">
</form>



    </div>
  </div>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Design by : Miruntee Keawlak</p>
</footer>

</body>
</html>





FORM;
} //end showForm()

?>