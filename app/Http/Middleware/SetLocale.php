<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Получаем значение заголовка App-Locale
        $locale = $request->header('App-Locale');

        // Устанавливаем язык приложения
        if ($locale) {
            app()->setLocale($locale);
        }

        // Продолжаем выполнение запроса
        return $next($request);
    }
}
