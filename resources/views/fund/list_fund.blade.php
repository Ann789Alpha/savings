
@extends('navbar.nav')
@section('body')

<form action="/addfund" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br>
<br>

<div class="float-left col-sm-10">
  <center>
<strong style="color:#88b388;" >สรุปการซื้อขายกองทุนรวม</strong><br><br>
<strong>สรุปการซื้อกองทุน</strong>
<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">
    <th>วันที่ทำรายการ</th>
  <th>ชื่อกองทุน</th>
<th>คำสั่งซื้อ/ขาย</th>
<th>จำนวนหน่วย</th>
<th>ราคาต่อหน่วย</th>
<th>จำนวนเงิน(บาท)</th>
</tr>
</thead>
<tbody style="text-align:center;">


@foreach($buy as $dd)
  <tr>
<td>  {{$dd->created_at}}</td>
    <td>  {{$dd->name_fund}}</td>

<td>  ซื้อ</td>



<td>  {{$dd->amount_unit}}</td>
<td>  {{$dd->price_per_unit}}</td>
<td>  {{$dd->amount_bath}}</td>

  </tr>

@endforeach

<tr ><td colspan="3"> <strong>รวม</strong> </td>

<td><strong> {{$buy->sum('amount_unit')}}&nbsp;หน่วย</strong></td>
<td> <strong> </strong></td><td><strong> {{$buy->sum('amount_bath')}}&nbsp;บาท </strong></td></tr>


</tbody>
</table>
</div><!--close tag table responsive -->




<strong>สรุปการขายกองทุน</strong>
<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">
    <th>วันที่ทำรายการ</th>
  <th>ชื่อกองทุน</th>
<th>คำสั่งซื้อ/ขาย</th>
<th>จำนวนหน่วย</th>
<th>ราคาต่อหน่วย</th>
<th>จำนวนเงิน(บาท)</th>
</tr>
</thead>
<tbody style="text-align:center;">


@foreach($sell as $d)
  <tr>
<td>  {{$d->created_at}}</td>
    <td>  {{$d->name_fund}}</td>

<td>  ขาย</td>



<td>  {{$d->amount_unit}}</td>
<td>  {{$d->price_per_unit}}</td>
<td>  {{$d->amount_bath}}</td>

  </tr>

@endforeach

<tr ><td colspan="3"> <strong>รวม</strong> </td>

<td><strong> {{$sell->sum('amount_unit')}}&nbsp;หน่วย</strong></td>
<td> <strong> </strong></td><td><strong> {{$sell->sum('amount_bath')}}&nbsp;บาท </strong></td></tr>


</tbody>
</table>
</div><!--close tag table responsive -->

</div>



</form>

@endsection
