<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Customer extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'company',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
