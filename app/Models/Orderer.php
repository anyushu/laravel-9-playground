<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderer extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'name',
        'telephone_number',
        'email',
    ];

    public $timestamps = false;

    /**
     * 注文
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
