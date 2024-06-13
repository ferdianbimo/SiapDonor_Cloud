<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodtype extends Model
{
    use HasFactory;

    public function donors()
    {
        return $this->hasMany(Donor::class);
    }


}
