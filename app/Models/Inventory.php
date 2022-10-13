<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('id','like', '%'. request('search').'%')
            ->orWhere('item_barcode','like', '%'. request('search').'%')
            ->orWhere('item_name','like', '%'. request('search').'%')
            ->orWhere('item_size','like', '%'. request('search').'%');
            
        }
    }

}
