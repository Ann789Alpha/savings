
@extends('navbar.nav')
@section('body')

<form action="/addfund" method="post" enctype="multipart/form-data">
@csrf
@include('navbar.sidemenu')
<br>
<br>

<div class="float-left col-sm-10">
  <center>
<strong style="color:#88b388;" >บันทึกการซื้อขายกองทุนรวม</strong><br>
  <div id="form1">


        <div id="show" class="col-sm-10"></div>
        <!--close form1 -->  <br>
          <button type="button"  class="btn btn-warning" style=" border-radius: 20px;"  id="addform">  <i   class='bx bx-plus-circle' ></i>สร้างรายการ</button>
              <br><br>
          <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-secondary">ยกเลิก</button>


</div>
</center>
</div>
<script >
$(document).ready(function() {



var x=1;
var show=$('#show');


var click =$('#addform');
var form=       '<div class="shadow-sm p-4 mb-4 bg-white">' ;
var form1='<a href="#" class="remove_field" style="float:right;color:red"><i class="bx bxs-trash bx-sm "></i>ลบ</a>'

+' <div class="input-group mb-3 input-group-sm">'
  +'  <div class="input-group-prepend">'
    +'  <span class="input-group-text">รายการ :</span>'
  +'  </div>'

+' <select name="order[]" class="custom-select">'
+'  <option disabled>เลือกเมนู</option>'
+'  <option value="buy">ซื้อกองทุน</option>'
+'  <option value="sell">ขายกองทุน</option>'

+'  </select>'
+'  </div>';

var form2= ' <div class="input-group mb-3 input-group-sm">'
  +'  <div class="input-group-prepend">'
    +'  <span class="input-group-text">ชื่อกองทุน :</span>'
  +'  </div>'

+' <select name="name_fund[]" class="custom-select">'
+'  <option disabled>เลือกเมนู</option>'

+'@foreach($data1 as $d)  <option value="{{$d->name}}" >{{$d->name}}</option> @endforeach'


+'  </select>'
+'  </div>';



var form3='  <div class="input-group mb-3 input-group-sm">'
  +'  <div class="input-group-prepend">'
  +'    <span class="input-group-text">จำนวนหน่วย</span>'
  +'  </div>'
  +'  <input type="text" class="form-control" placeholder="Unit" id="color_input_text" name="amount_unit[]" required>'
+'  </div>'

+'    <div class="input-group mb-3 input-group-sm ">'
  +'  <div class="input-group-prepend">'
    +'  <span class="input-group-text">ราคาต่อหน่วย</span>'
  +'  </div>'
  +'  <input type="text" class="form-control" placeholder="Unit Price" id="color_input_text" name="price_per_unit[]" required>'
  +'</div>'

  +'    <div class="input-group mb-3 input-group-sm">'
      +'  <div class="input-group-prepend">'
        +'  <span class="input-group-text">จำนวนเงิน</span>'
      +'  </div>'
      +'  <input type="text" class="form-control" placeholder="Amount" id="color_input_text" name="amount_bath[]" required>'
      +'  <div class="input-group-append">'
        +'  <span class="input-group-text">บาท</span>'
      +'  </div>'
      +'</div>'
+' </div></div>' ;





$(click).click(function(){
x++;
//$("#"+Current_box).append("@if ($errors->has('testing'))<span class='help-block'><strong>{{ $errors->first('testing') }}</strong></span>@endif")
var formfund=$(form).append(form1,form2,form3);
$(show).append(formfund);

});


$(show).on('click','.remove_field',function(e){
$(this).parent('div').remove();
x--;
});
});
</script>


</form>

@endsection
