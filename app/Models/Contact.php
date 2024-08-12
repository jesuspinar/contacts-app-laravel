<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'name',
        'user_id',
        'profile_picture'
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
