
@extends('navbar.nav')
@section('body')

<form action="/addstock" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br>
<br>

<div class="float-left col-sm-10">
  <center>
<strong style="color:#88b388;" >สรุปการซื้อขายหลักทรัพย์(หุ้น)</strong><br><br>

<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">
    <th>วันที่ทำรายการ</th>
  <th>ชื่อหลักทรัพย์(หุ้น)</th>
<th>คำสั่งซื้อ/ขาย</th>

<th>จำนวนหุ้น</th>
<th>ราคาต่อหุ้น</th>
<th>ค่านายหน้า)</th>

<th>ค่าธรรมเนียมตลาดหลักทรัพย์</th>
<th>ค่าธรรมเนียมการชำระราคาและส่งมอบหลักทรัพย</th>
<th>ภาษีมูลค่าเพิ่ม</th>

<th>จำนวนเงินสุทธ์</th>

</tr>
</thead>
<tbody style="text-align:center;">


@foreach($buy as $d)
  <tr>
<td>  {{$d->created_at}}</td>
    <td>  {{$d->name_stock}}</td>

<td>  ซื้อ</td>

<td>  {{$d->amount_unit}}</td>
<td>  {{ $d->price_per_unit }}</td>
<td>  {{$d->commission}}</td>

<td>  {{$d->trading}}</td>
<td>  {{$d->clearingfee}}</td>
<td>  {{$d->vat}}</td>
<td>  {{$d->netamount}} </td>
  </tr>

@endforeach

<tr><td colspan="3"><strong>รวม</strong></td><td>  {{$buy->sum('amount_unit')}}</td><td>  {{$buy->sum('price_per_unit')}}</td><td>  {{$buy->sum('commission')}}</td>
<td> {{$buy->sum('trading')}}</td>
<td>  {{$buy->sum('clearingfee')}}</td><td> {{$buy->sum('vat')}} </td><td>{{$buy->sum('netamount')}} </td></tr>

</tbody>
</table>
</div><!--close tag table responsive -->

<br><br>

<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">
    <th>วันที่ทำรายการ</th>
  <th>ชื่อหลักทรัพย์(หุ้น)</th>
<th>คำสั่งซื้อ/ขาย</th>

<th>จำนวนหุ้น</th>
<th>ราคาต่อหุ้น</th>
<th>ค่านายหน้า)</th>

<th>ค่าธรรมเนียมตลาดหลักทรัพย์</th>
<th>ค่าธรรมเนียมการชำระราคาและส่งมอบหลักทรัพย</th>
<th>ภาษีมูลค่าเพิ่ม</th>

<th>จำนวนเงินสุทธ์</th>

</tr>
</thead>
<tbody style="text-align:center;">


@foreach($sell as $d)
  <tr>
<td>  {{$d->created_at}}</td>
    <td>  {{$d->name_stock}}</td>

<td>  ขาย</td>

<td>  {{$d->amount_unit}}</td>
<td>  {{ $d->price_per_unit }}</td>
<td>  {{$d->commission}}</td>

<td>  {{$d->trading}}</td>
<td>  {{$d->clearingfee}}</td>
<td>  {{$d->vat}}</td>
<td>  {{$d->netamount}} </td>
  </tr>

@endforeach


<tr><td colspan="3"><strong>รวม</strong></td><td>  {{$sell->sum('amount_unit')}}</td><td>  {{$sell->sum('price_per_unit')}}</td><td>  {{$sell->sum('commission')}}</td>
<td> {{$sell->sum('trading')}}</td>
<td>  {{$sell->sum('clearingfee')}}</td><td> {{$sell->sum('vat')}} </td><td>{{$sell->sum('netamount')}} </td></tr>

</tbody>
</table>
</div><!--close tag table responsive -->



</div>



</form>

@endsection
