<?php
namespace App;

use App\Models\Post;
use Closure;

class Route
{
    private string $method;
    private string $path;
    private Closure $callback;

    public function __construct(string $method, string $path, array $callback)
    {
        $this->method   = $method;
        $this->path     = $path;
        $this->callback = $this->prepareCallback($callback);
    }

    private function prepareCallback(array $callback): Closure
    {
        return function (...$params) use ($callback) {
            list($class, $method) = $callback;
            return (new $class)->$method(...$params);
        };
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function match(string $uri, string $method): bool
    {
        if (preg_match('/^' . str_replace(['*', '/'], ['\w+', '\/'],
           $this->getPath()) . '$/', $uri)  && $this->method === $method) {
            return true;
        } else {
            return false;
        }
    }

    public function run(string $uri)
    {
        if (!empty($uri)) {
            $array = explode('/', $uri);
            if (preg_match('/post/', $uri,$matches)) {
                if (preg_match('([0-9]+)', $uri, $match)) {
                    $id = $match[0];
                    Post::where('id', $id);
                } else {
                    Post::all();
                }
            }
            return call_user_func_array($this->callback, $array);
        } else {
            return call_user_func_array($this->callback, []);
        }
    }
}
