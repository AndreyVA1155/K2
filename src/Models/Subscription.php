<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */

class Subscription extends Model
{
    protected $table = 'subscription';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'id_post');
    }
}
