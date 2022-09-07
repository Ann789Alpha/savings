
@extends('navbar.nav')
@section('body')

<form action="/add_dividend" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br><br>
<div class="float-left col-sm-10">
     <center>
     <strong style="color:#88b388;" >เพิ่มรายการเงินปันผลหุ้นรายตัว</strong><br><br>


     <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">ชื่อหุ้น</span>
         </div>

      <select name="name_stock" class="custom-select">

      <option disabled>เลือกรายชื่อหุ้น</option>
  @foreach($data1 as $st)
      <option value="{{$st->id}}">{{$st->name}}</option>
    @endforeach


       </select>
      </div>

      <div class="input-group mb-3 input-group-sm">
        <div class="input-group-prepend">
          <span class="input-group-text">หลักทรัพย์ที่จดทะเบียนในนามของท่าน จำนวน(หน่วย)</span>
        </div>
        <input type="text" name="unit" class="form-control" value="" required>
      </div>

     <div class="input-group mb-3 input-group-sm">
       <div class="input-group-prepend">
         <span class="input-group-text">อัตราหน่วยละ(บาท)/Pay Per Unit (Bath)</span>
       </div>
       <input type="text" name="payperunit" class="form-control" value="" required>
     </div>

     <div class="input-group mb-3 input-group-sm">
       <div class="input-group-prepend">
         <span class="input-group-text ">จำนวนเงินที่จ่าย (บาท)/ Total (Bath)</span>
       </div>
       <input type="text" name="total" class="form-control" value="" required>
     </div>
     <div class="input-group mb-3 input-group-sm">
       <div class="input-group-prepend">
         <span class="input-group-text">ภาษีที่หักและนำส่งไว้(บาท)/ Less income tax(Bath)</span>
       </div>
       <input type="text" name="tax" class="form-control" value="" required>
     </div>
     <div class="input-group mb-3 input-group-sm">
       <div class="input-group-prepend">
         <span class="input-group-text">คงเหลือจ่ายจริง(บาท)/Net Balance(Bath)</span>
       </div>
       <input type="text" name="net" class="form-control" value="" required>
     </div>

     <br>
     <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-secondary">ยกเลิก</button>
     <br><hr><br>
      </div>

</center>

</div>

</form>
@endsection



@section('footer')
<div class="container-fluid clear-fix footer" >
 ddddd
</div>
@endsection
