<?php

namespace App\Controllers;

use App\View\View;

/**
 * Class AddCommentController
 * @package App\Controllers
 */
class AddCommentController
{
    public function addComment()
    {
        return new View('blogs',
            [
                'title' => 'Дообавление комментария'
            ]);
    }
}
