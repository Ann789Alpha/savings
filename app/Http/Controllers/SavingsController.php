<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Type_savings;
use App\Models\Add_Fund;
use App\Models\Add_Stock;
use App\Models\Dividend;
class SavingsController extends Controller
{
  public function form_add(){
    $data1 = Type_savings::all();

    return view('fund.f_fund')->with('data1',$data1);

  }

  public function add(Request $res){
 $res->validate([
   'name'=>'required|unique:type_savings',
],
['name.unique'=>'ชื่อกองทุน/หุ้นซ้ำค่ะ',
'name.required'=>'กรุณากรอกชื่อกองทุน/หุ้น' ]);

$data = new Type_savings;
$data->name=$res->name;
$data->type=$res->type;
$data->save();
$data1 = Type_savings::all();
return view('fund.f_fund')->with('data1',$data1);

  }

public function edit($id){

  $edit= Type_savings::find($id);

  return view('type.edit_type')->with('data',$edit);
}



public function update(Request $res,$id){

  $update=Type_savings::find($id);
$update->name=$res->name;
$update->type=$res->type;
$update->save();
  return redirect('/addtype');
}
public function del($id){
  $del = Type_savings::destroy($id);
  $data1 = Type_savings::all();
  return view('fund.f_fund')->with('data1',$data1);

}

public function formfund(){
    $data1 = DB::table('type_savings')
            ->select('id','name', 'type')->where('type','=','fund')
            ->get();


  return view('fund.formfund',compact('data1'));
}





public function addfund(Request $res){
  $add_fund = new Add_Fund;
  $amount=count($res->order);

for($i=0; $i<$amount; $i++){

DB::table('add__funds')->insert([
  'order'=>$res->order[$i],
  'name_fund'=>$res->name_fund[$i],
'amount_unit'=>$res->amount_unit[$i],
'price_per_unit'=>$res->price_per_unit[$i],
'amount_bath'=>$res->amount_bath[$i],
]);
}
$data = Add_Fund::all();

  return redirect('/list_fund')->with( 'data',$data);

}


public function list_fund(){
  $data = Add_Fund::all();

  $sell = DB::table('add__funds')
                ->where('order', '=', 'sell')
                ->get();
  $buy = DB::table('add__funds')
        ->where('order', '=', 'buy')
         ->get();

if($data->count()==0){
  Session()->flash('message','เพิ่มข้อมูลชื่อกองทุนอย่างน้อย 1 กองทุน');
  return redirect('/addfund');
}


    return view('fund.list_fund',compact('data','sell','buy'));


}

public function formstock(){
  $data1 = DB::table('type_savings')
          ->select('id','name', 'type')->where('type','=','stock')
          ->get();

return view('stock.f_stock',compact('data1'));
}

public function addstock(Request $res){
  $add_fund = new Add_Stock;
  $amount=count($res->order);

for($i=0; $i<$amount; $i++){

DB::table('add__stocks')->insert([
  'order'=>$res->order[$i],
  'name_stock'=>$res->name_stock[$i],
'amount_unit'=>$res->amount_unit[$i],
'price_per_unit'=>$res->price_per_unit[$i],
'commission'=>$res->commission[$i],

'trading'=>$res->trading[$i],
'clearingfee'=>$res->clearingfee[$i],
'vat'=>$res->vat[$i],

'netamount'=>$res->netamount[$i],

]);
}
$data = Add_Stock::all();


return redirect('/list_buysell_stock')->with('data');
}

public function list_stock(){
  $data = Add_Stock::all();
  $sell = DB::table('add__stocks')
                ->where('order', '=', 'sell')
                ->get();
  $buy = DB::table('add__stocks')
        ->where('order', '=', 'buy')
         ->get();

  return view('stock.list_buysell_stock')->with('data',$data)->with('buy',$buy)->with('sell',$sell);;
}
public function form_dividend(){
  $data1 = DB::table('type_savings')
          ->select('id','name', 'type')->where('type','=','stock')
          ->get();

  return view('stock.add_dividend',compact('data1'));
}
public function add_dividend(Request $res){
$name_stock= $res->name_stock;
$payperunit =$res->payperunit;
$total = $res->total;
$tax =$res->tax;
$net = $res->net;
$data = new Dividend;
$data->type_savings_id=$name_stock;
$data->ppu=$payperunit;
$data->total=$total;
$data->tax=$tax;
$data->net_b= $net;
$data->save();
  $data = Dividend::all();

  $sum[] = DB::table('dividends')->select('type_savings_id')->distinct()->get();
//  dd($sum);
  $count = count($sum);
//dd($count);
for($i=0;$i<$count;$i++){
  $result[] =DB::table('dividends')->select('type_savings_id','net_b')->where('type_savings_id','=',$b->type_savings_id)->get();
dd($result);
}

  return view('stock.dividend_total')->with('data',$data)->with('bb',$result);
}
public function dividend_report(){

}
}
