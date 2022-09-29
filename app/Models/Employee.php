<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;

    // protected $fillable = ['id', 'emp_fullName', 'emp_phoneNum','emp_address', 'emp_email', 
    // 'emp_gender', 'emp_birthdate', 'emp_role'];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('id','like', '%'. request('search') . '%')
            ->orWhere('emp_fullName','like', '%'. request('search') . '%')
            ->orWhere('emp_phoneNum','like', '%'. request('search') . '%')
            ->orWhere('emp_address','like', '%'. request('search') . '%')
            ->orWhere('emp_email','like', '%'. request('search') . '%')
            ->orWhere('emp_role','like', '%'. request('search') . '%');
            
        }
    }
}