<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function item_type()
    {
        return $this->belongsTo(ItemType::class);
    }

    public function item_unit()
    {
        return $this->belongsTo(ItemUnit::class);
    }
}
