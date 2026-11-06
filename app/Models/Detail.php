<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    /** @use HasFactory<\Database\Factories\DetailFactory> */
    use HasFactory;

    protected $fillable = [
        'calories', 'ingridients'
    ];

    /**
     * @return BelongsTo<Product, Detail>
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
