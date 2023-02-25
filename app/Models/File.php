<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_fr',
        'path',
        'users_id'
    ];

    public function fileHasUser(){
        return $this->hasOne('app\Models\User', 'id', 'users_id');
    }
}
