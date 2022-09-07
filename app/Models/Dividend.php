<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dividend extends Model
{
    use HasFactory;
    public function typestock(){
      return $this->belongsTo(Type_savings::class,'type_savings_id');
    }

}
