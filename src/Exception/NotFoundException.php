<?php
namespace App\Exception;

use App\View\Renderable;
use App\View\View;

class NotFoundException extends HttpException implements Renderable
{

    public function render()
    {
        http_response_code(404);
        $view = new View(
            'errors\error',
            ['error' => ' Ошибка 404. Страница не найдена', 'title' => 'произошла ошибка']
        );
        $view->render();
        exit;
    }
}
