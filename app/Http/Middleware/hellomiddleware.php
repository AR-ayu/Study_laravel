<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class hellomiddleware
{
    public function handle($request, Closure $next)
    {
        //#HelloMiddleware.
    //{
    //     $data =[
    //         ['name'=>'Ayushi rawat','mail'=>'ayushirawat1302@gmail.com'],
    //         ['name'=>'Homenix','mail'=>'hn@homenix.jp'], 
    //         ['name'=>'SSR','mail'=>'ssr.ssr@gmail.com']
    //     ];
    //     $request->merge(['data'=>$data]);
    //     return $next($request);}

//#Middleware Request and Response.
   
$response = $next($request);
$content = $response->content();

$pattern = '/<middleware>(.*)<\/middleware>/i';
$replace = '<a href = "http://$1">$1</a>';
$content = preg_replace($pattern, $replace, $content);
$response->setContent($content);
return $response;
    }
}
