<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalizePath($path);
        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }

    private function  normalizePath(string $path): string
    {
        //如果 $path 是 '//example///'，那么 trim($path, '/') 的结果将是 'example'。 (去除所有協槓)
        $path = trim($path, '/');

        // example 前後加上協槓 =>  /example/
        $path = "/{$path}/";

        //使用正则表达式，将路径中连续两个或更多的斜杠替换为一个斜杠。
        $path = preg_replace('#[/]{2,}#', '/', $path);

        return $path;
    }
}
