<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductsEnabled
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Setting::get('products_page_enabled')) {
            abort(404);
        }

        return $next($request);
    }
}
