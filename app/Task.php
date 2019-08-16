<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $stable='task';
    protected $fillable=['name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getTask()
    {
        return $this->name;
    }
}
