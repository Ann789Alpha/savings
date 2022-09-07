
@extends('navbar.nav')
@section('body')

<form action="/addtype" method="post" enctype="multipart/form-data" style="margin-bottom:200px;">
@csrf
@include('navbar.sidemenu')
<br><br>
<div class="col-sm-10">
     <center>
     <strong style="color:#88b388;" >เพิ่มรายการรายกองทุนรวมหรือหุ้น</strong><br><br>
     <div class="input-group mb-3 input-group-sm">
       <div class="input-group-prepend">
         <span class="input-group-text">ชื่อกองทุน/หุ้น</span>
       </div>
       <input type="text" name="name" class="form-control">
     </div>

     <div class="input-group mb-3 input-group-sm">
          <div class="input-group-prepend">
          <span class="input-group-text">ประเภท :</span>
       </div>

   <select name="type" class="custom-select">
        <option disabled>เลือกเมนู</option>
      <option value="stock">หุ้น</option>
      <option value="fund">กองทุน</option>

   </select>
      </div>
      <br>
      <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-secondary">ยกเลิก</button>
      <br><hr><br>
      @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      @if(count($data1)==0)

      <h3>ยังไม่มีข้อมูล</h3>
      @else



<div class="table-responsive">
<table class="table table-bordered table-hover table-sm">
<thead style="background-color:#ffc14d;">
<tr style="text-align:center;">
  <th>รายการ</th>
  <th>ประเภท</th>
  <th>แก้ไข</th>
  <th>ลบ</th>
</tr>
</thead>
<tbody style="text-align:center;">

  @foreach ($data1 as $d)

  <tr>
    <td>{{$d->name}}</td>
    @if($d->type == 'stock')
    <td>  หุ้น</td>
    @else
    <td>  กองทุน</td>
    @endif
    <td><a href="/edit/{{$d->id}}"><i class='bx bx-edit bx-sm'></i></a></td>
    <td><a href="/del/{{$d->id}}" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่' )"> <i class='bx bx-trash bx-sm' style="color:red"></i></a></td>
  </tr>
@endforeach



</tbody>
</table>
</div><!--close tag table responsive -->


@endif





</center>

</div>

</form>
@endsection
