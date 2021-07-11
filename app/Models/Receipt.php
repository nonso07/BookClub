<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'Department',
        'Reg_no',
        'phoneNum',
        'trans_id',
        'amount',
        'fees',
        'Receipt_plan',
        'enabled',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/receipts/'.$this->getKey());
    }
}
