<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionMail extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'email',
        'subject',
        'message',
    ];
}
