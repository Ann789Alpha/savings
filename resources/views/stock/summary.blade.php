
@extends('navbar.nav')
@section('body')

<form action="/" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br>
<br>

<div class="float-left col-sm-10 ">
  <center>
<strong style="color:#88b388;" >สรุปผลกำไร/ขาดทุนหุ้นรายตัว</strong><br><br>

<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">

  <th>ชื่อหลักทรัพย์(หุ้น)</th>


<th>ยอดรวมเงินลงทุน</th>
<th>กำไร</th>
<th>ขาดทุน</th>

<th>ดูรายละเอียดการลงทุน</th>
</tr>
</thead>
<tbody style="text-align:center;">


  <tr>
<td> 1 </td>
    <td>  2</td>

<td> 3 </td>

<td> 4 </td>
<td> 5 </td>


  </tr>




</tbody>
</table>
</div><!--close tag table responsive -->





</div>



</form>

@endsection
