<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = array('title','content','author_id');

    public $timestamps = true;

    public function Author(){

        return $this->belongsTo('User','author_id');
    }
}
