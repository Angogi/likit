<?php

namespace App\Http\Middleware;

use Closure;
use App\Products;

class Points
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)

    {
        $product = new Products();
        $product->primaryKey;
        dd($request);

        //Products::where('id', $product->id)->update(['points' => ($product->points)+1]);
        return $next($request);
    }
}
