<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['branch_id','name','price','description'];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }

    
}
