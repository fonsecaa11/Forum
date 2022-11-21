<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';

    public function getName()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
