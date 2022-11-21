<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $table = 'users';

    public function avatar()
    {
        return $this->hasOne(Avatar::class, 'id', 'avatar_id');
    }
}
