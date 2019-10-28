<?php
/**
 * Created by PhpStorm.
 * User: minhngoc
 * Date: 21/10/2019
 * Time: 14:31
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Permission extends Model
{
    public $table = "permissions";

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}