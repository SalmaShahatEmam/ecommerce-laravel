<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class category extends Model
{
    use HasFactory;

protected $fillable=['name','description'];

    public function tag(){

        //return tags of this category
        return  $this->belongsTo(User::class);
    }


}
