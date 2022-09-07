
@extends('navbar.nav')
@section('body')

<form action="/" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br>
<br>

<div class="float-left col-sm-10 ">
  <center>
<strong style="color:#88b388;" >สรุปรายการเงินปันผลหุ้นรายตัว</strong><br><br>

<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">
    <th>วันที่ได้รับปันผล</th>
  <th>ชื่อหลักทรัพย์(หุ้น)</th>


<th>อัตราปันผล(บาท)<br>Pay Per Unit(Bath)</th>
<th>จำนวนเงินที่จ่าย(บาท)<br>Total(Bath)</th>
<th>ภาษีที่หักและนำส่งไว้(บาท)<br>Less income tax(Bath)</th>

<th>คงเหลือจ่ายจริง(บาท)<br>Net Balance(Bath)</th>

</tr>
</thead>
<tbody style="text-align:center;">


  <tr>
    @foreach($data1 as $b)
<td>{{$b->typestock->namestock}} </td>
    <td>  2</td>

<td> 3 </td>

<td> 4 </td>
<td>5  </td>
<td>  6</td>
@endforeach

  </tr>



<tr><td colspan="3"><strong>รวม</strong></td><td> 4 </td><td>  5</td><td>6  </td>
</tr>

</tbody>
</table>
</div><!--close tag table responsive -->





</div>



</form>

@endsection
