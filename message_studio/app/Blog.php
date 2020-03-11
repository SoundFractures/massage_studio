<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'body','file','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
