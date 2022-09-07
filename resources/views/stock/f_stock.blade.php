
@extends('navbar.nav')
@section('body')

<form action="/addstock" method="post" enctype="multipart/form-data" >
@csrf
@include('navbar.sidemenu')
<br><br>
  <br><br>
  <div class="col-sm-10">
  <center>
  <strong style="color:#88b388;" >บันทึกการซื้อขายหลักทรัพย์(หุ้น)</strong><br>
  <div id="form3">


        <div id="show3" class="col-sm-10"></div>
        <!--close form1 -->  <br>
          <button type="button"  class="btn btn-warning" style=" border-radius: 20px;"  id="addform3">  <i   class='bx bx-plus-circle' ></i>สร้างรายการ</button>
              <br><br>
          <button type="submit" class="btn btn-success">บันทึก</button> <button type="reset" class="btn btn-secondary">ยกเลิก</button>
</div>
  </center>

</div>



<script >
$(document).ready(function() {



var x=1;
var show3=$('#show3');


var click3 =$('#addform3');
var form3=         '<div class="shadow-sm p-4 mb-4 bg-white"><a href="#" class="remove_field" style="float:right;color:red"><i class="bx bxs-trash bx-sm "></i>ลบ</a>'
+' <div class="input-group mb-3 input-group-sm">'
    +'  <div class="input-group-prepend">'
      +'  <span class="input-group-text">รายการ :</span>'
    +'  </div>'

+' <select name="order[]" class="custom-select">'
  +'  <option disabled>เลือกเมนู</option>'
  +'  <option value="buy">ซื้อหุ้น</option>'
  +'  <option value="sell">ขายหุ้น</option>'

+'  </select>'
  +'  </div>'

+ ' <div class="input-group mb-3 input-group-sm">'
    +'  <div class="input-group-prepend">'
      +'  <span class="input-group-text">ชื่อหุ้น :</span>'
    +'  </div>'

  +' <select name="name_stock[]" class="custom-select">'
  +'  <option disabled>เลือกเมนู</option>'

  +'@foreach($data1 as $d)  <option value="{{$d->name}}" >{{$d->name}}</option> @endforeach'


  +'  </select>'
  +'  </div>'

 +'  <div class="input-group mb-3 input-group-sm">'
   +'  <div class="input-group-prepend">'
  +'     <span class="input-group-text">จำนวนหุ้น</span>'
  +'   </div>'
  +'   <input type="text" class="form-control" placeholder="Unit" id="color_input_text" name="amount_unit[]">'
 +'  </div>'

 +'  <div class="input-group mb-3 input-group-sm">'
  +'   <div class="input-group-prepend">'
    +'   <span class="input-group-text">ราคาต่อหุ้น</span>'
   +'  </div>'
+'     <input type="text" class="form-control" placeholder="Unit Price" id="color_input_text" name="price_per_unit[]">'
 +'  </div>'

 +'  <div class="input-group mb-3 input-group-sm ">'
  +'   <div class="input-group-prepend">'
  +'     <span class="input-group-text">ค่านายหน้า</span>'
  +'   </div>'
+'     <input type="text" class="form-control" placeholder="Commission" id="color_input_text" name="commission[]">'
+'   </div>'

 +'  <div class="input-group mb-3 input-group-sm">'
  +'   <div class="input-group-prepend">'
  +'     <span class="input-group-text">ค่าธรรมเนียมตลาดหลักทรัพย์</span>'
  +'   </div>'
  +'   <input type="text" class="form-control" placeholder="Trading Fee" id="color_input_text" name="trading[]">'
 +'  </div>'
+'   <div class="input-group mb-3 input-group-sm">'
+'     <div class="input-group-prepend">'
+'       <span class="input-group-text">ค่าธรรมเนียมการชำระราคาและส่งมอบหลักทรัพย์</span>'
  +'   </div>'
+'     <input type="text" class="form-control" placeholder="Clearing Fee" id="color_input_text" name="clearingfee[]">'
+'   </div>'
 +'  <div class="input-group mb-3 input-group-sm">'
  +'   <div class="input-group-prepend">'
  +'     <span class="input-group-text">ภาษีมูลค่าเพิ่ม</span>'
  +'   </div>'
+'     <input type="text" class="form-control" placeholder="Vat" id="color_input_text" name="vat[]">'
 +'  </div>'
 +'  <div class="input-group mb-3 input-group-sm">'
+'     <div class="input-group-prepend">'
    +'   <span class="input-group-text">จำนวนเงินสุทธิ</span>'
  +'   </div>'
+'     <input type="text" class="form-control" placeholder="Net Amount" id="color_input_text" name="netamount[]">'
+'   </div>' ;
$(click3).click(function(){
x++;
  $(show3).append(form3);

});


$(show3).on('click','.remove_field',function(e){
$(this).parent('div').remove();
x--;
});
  });
</script>


</form>
@endsection
