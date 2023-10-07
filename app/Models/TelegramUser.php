<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TelegramUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'first_name',
        'username',
        'auth_date',
        'hash'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
