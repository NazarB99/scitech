<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','category_id','content', 'image'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
