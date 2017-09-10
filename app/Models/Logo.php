<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logo';
    protected $fillable = ['image'];

    public function getLogo(){
        $logo = Logo::all();
        return $logo->first();
    }
}
