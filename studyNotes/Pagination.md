# Pagination
related files: 
* PaginationController
* myPosts.blade.php
* MyPosts.php //Model

```
class PaginationController extends Controller
{
    //
    public function index()
    {
        $posts = $this->getAllPosts();
        return view('myPosts', compact('posts'));
    }
    
    private function getAllPosts()
    {
        return MyPosts::paginate(10);
    }
}
```


**for the display issue**
add ```Paginator::useBootstrap();``` to boot() function

```
<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
```