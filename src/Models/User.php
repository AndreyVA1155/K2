<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */

class User extends Model
{
    protected $table = 'users';

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_user');

    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'id', 'id_user');
    }
}
