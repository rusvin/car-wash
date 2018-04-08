<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CMS_User extends Model
{
    public $table = 'cms_users';

    public function user()
    {
        return $this->hasMany('App\Review');
    }
}
