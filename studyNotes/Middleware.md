# MiddleWare
to create middleware, use php artisan `php artisan make:middleware MiddlewareName`

the middleware template like below

```
class MiddlewareName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //code to do anything in the middleware
        echo 'this is a middelw for MiddlewareName';
        return $next($request);
    }
}
```

## global usage
1. Register the middleware
    open file `app\Http\Kernel.php`

2. add the new middleware into property `$middleware`  inside Kernel class
   `\App\Http\Middleware\MiddlewareName::class,`

   e.g.
    ```
    class Kernel extends HttpKernel
        {
            /**
            * The application's global HTTP middleware stack.
            *
            * These middleware are run during every request to your application.
            *
            * @var array
            */
            protected $middleware = [
                \App\Http\Middleware\MiddlewareName::class,
                \App\Http\Middleware\TrustProxies::class,
                \Fruitcake\Cors\HandleCors::class,
                \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
                \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
                \App\Http\Middleware\TrimStrings::class,
                \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
            ];
    ```

3. the middleware will be executed automaticlly and globally

## use inside a route group
middleware Name: ***InsideRouteGroup***
1. as step 1 above
2. regisiter the middleware into property `$middlewareGroups` either in API or Web section

## use inside a route 
middleware Name: routeMiddleware
1. as step 1 above
2. regisiter the middlware into property `$routeMiddleware' property
   ```
   protected $routeMiddleware = [
        'myRouteMiddleware' => RouteMiddleware::class,
    ```
3. use the middleware inside a route
   ```Route::get('/login',[LoginController::class,'index'])->middleware('myRouteMiddleware');```

