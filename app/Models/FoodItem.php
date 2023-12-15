<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'expiry_date', 'quantity', 'donor_id', 'recipient_id'];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }

    public function recipient()
    {
        return $this->belongsTo(Recipient::class);
    }
}
