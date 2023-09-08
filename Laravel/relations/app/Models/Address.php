<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'addresses';

    protected $fillable = [
        'address',
    ];

    use HasFactory;

    protected $hidden = [
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
