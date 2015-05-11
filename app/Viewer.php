<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Viewer extends User {

    protected $table = "users_viewers";

    public function user()
    {
        return $this->morphOne('User', 'userable');
    }

}
