<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="{{asset('storage/image/money4.png')}}"  type="image/jpg" sizes="16x16">
    <meta charset="utf-8">
    <title>บันทึกการออมของฉัน</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="{{asset('storage/css/mycss.css')}}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@300&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>
  <body >

    <nav class="navbar navbar-expand-md  navbar-dark" style="background-color:#679186">
     <!-- Brand -->
     <a class="navbar-brand" href="#"><img src="{{asset('storage/image/money4.png')}}" style="width:50px;height:50px;"></a>

     <!-- Toggler/collapsibe Button -->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
       <span class="navbar-toggler-icon"></span>
     </button>

     <!-- Navbar links -->
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
       <ul class="navbar-nav ">
         <li class="nav-item ">
           <a class="nav-link " href="/addfund"  >บันทึกการซื้อขายกองทุน/หลักทรัพย์</a>
         </li>
         <li class="nav-item">
           <a class="nav-link m " href="/detail_stock">บันทึกข้อมูลหลักทรัพย์</a>
         </li>
        
       </ul>
     </div>
   </nav>
    <br>




<div class="container-fluid body-form"   >
@yield('body')
<div>
  <div class="container-fluid  footer" >
   ddddd
  </div>
  </body>
</html>
