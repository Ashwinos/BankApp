<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = [
        'name',
        'email',
        'balance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
