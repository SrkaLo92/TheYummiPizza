<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuEntry extends Model
{

    public $table = 'menuentry';

    public function sizes()
    {
        return $this->hasMany('App\MenuEntrySize', 'menuentry_id');
    }
}
