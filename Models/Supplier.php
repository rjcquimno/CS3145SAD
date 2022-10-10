<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('id','like', '%'. request('search').'%')
            ->orWhere('sup_name','like', '%'. request('search').'%')
            ->orWhere('sup_contactPerson','like', '%'. request('search').'%')
            ->orWhere('sup_address','like', '%'. request('search').'%')
            ->orWhere('sup_phoneNum','like', '%'. request('search').'%')
            ->orWhere('sup_email','like', '%'. request('search').'%');
            
        }
    }
}
