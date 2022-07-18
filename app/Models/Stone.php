<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stone extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mineral() {
        return $this->belongsTo(Mineral::class);
    }
    public function form() {
        return $this->belongsTo(Form::class);
    }
}
