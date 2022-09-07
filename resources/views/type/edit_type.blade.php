
@extends('navbar.nav')
@section('body')

<form action="/update/{{$data->id}}" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br><br>
<div class="float-left col-sm-10">
     <center>
     <strong style="color:#88b388;" >เพิ่มรายการรายกองทุนรวมหรือหุ้น</strong><br><br>
     <div class="input-group mb-3 input-group-sm">
       <div class="input-group-prepend">
         <span class="input-group-text">ชื่อกองทุน/หุ้น</span>
       </div>
       <input type="text" name="name" class="form-control" value="{{$data->name}}" required>
     </div>

     <div class="input-group mb-3 input-group-sm">
          <div class="input-group-prepend">
          <span class="input-group-text">ประเภท :</span>
       </div>

   <select name="type" class="custom-select">
     @if($data->type == 'stock')
        <option disabled>หุ้น</option>
        @else
        <option disabled>กองทุน</option>
        @endif
      <option value="stock">หุ้น</option>
      <option value="fund">กองทุน</option>

   </select>
      </div>
      <br>
      <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-secondary">ยกเลิก</button>
      <br><hr><br>


</center>

</div>

</form>
@endsection



@section('footer')
<div class="container-fluid clear-fix footer" >
 ddddd
</div>
@endsection
