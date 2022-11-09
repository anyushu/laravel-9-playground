<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'total_order_amount',
    ];

    /**
     * 店舗
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * 注文者情報
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function orderer()
    {
        return $this->hasOne(Orderer::class);
    }

    /**
     * 注文商品情報
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderedProducts()
    {
        return $this->hasMany(OrderedProduct::class);
    }
}
