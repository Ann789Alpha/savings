<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Stock extends Model
{
    use HasFactory;
    public function dividends(){
      return $this->hasMany(Dividend::class);
    }
}
