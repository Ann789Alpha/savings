
@extends('navbar.nav')
@section('body')

<form action="/" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br>
<br>

<div class="float-left col-sm-10 ">
  <center>
<strong style="color:#88b388;" >สรุปรายรับเงินปันผลหุ้นรายตัว</strong><br><br>

<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">

  <th>ชื่อหลักทรัพย์(หุ้น)</th>
<th>ยอดรวมที่ได้รับเงินปันผล</th>
<th>เพิ่มเติม</th>
</tr>
</thead>
<tbody style="text-align:center;">



    @foreach($data as $b)
    <tr>
    <td>  {{$b->typestock->name}}</td>
    <td>  {{$b->sum('net_b')}}</td>
  <td><a href=" /dividen_report/{{$b->id}} ">รายละเอียดเงินปันผลที่ได้รับ</a> </td>
  </tr>
@endforeach


@foreach($bb as $b)
 <b>{{$b->sum('net_b')}}</b>

@endforeach










</tbody>
</table>
</div><!--close tag table responsive -->





</div>



</form>

@endsection
