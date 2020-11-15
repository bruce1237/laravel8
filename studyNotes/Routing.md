# Routing
## API
---
### get with params
```
Route::get('/users/{name?}', function ($name = null) {
    return 'Hi User: '.$name;
});
```
- **?**: optional
- **$name**: has to be same as {name}
- *NOTE*: {name} and $name has to be match
---

### get params with validation
```
Route::get('/users/{name?}', function ($name = null) {
    return 'Hi User: '.$name;
})->where('name','[a-zA-Z]+');
```
*NOTE*: 'name' in where has to match {name}

---

### params with global validation
* **file:** RouteServciceProvider.php
* **function:** boot()
```
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            });

            Route::pattern('name', '[a-zA-Z]+');
            
            Route::pattern('id','[0-9]+');
    }
```
---

### match method

```
Route::match(['get', 'post'], '/match', function (Request $request) {
    return 'Requested method is '. $request->method();
});
```
--

### any method
```
Route::match(['get', 'post'], '/any', function (Request $request) {
    return 'Requested method is '. $request->method();
});
```


## WEB

### Syntax
```
Route::get('URL', [ControllerName::class, 'functionName'])->name('Router.Name);
```
---
### without router name
```
Route::get('URL', [ControllerName::class, 'functionName']);
```
---
### with router name
```
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
```
---

### with params
```
Route::get('/home/{name}',[HomeController::class,'index']);
```
---

### with optional params
**?**: means name is optional
```
Route::get('/home/{name?},[HomeController::calss,'index]);
```

---


## Route Group -> prefix()

for the following, the URL will add the prefix 'blade' to:
* /about, 
* /contact
* ...
  

```
Route::prefix('blade')->group(function(){
    Route::get('', function () {
        return view('layouts.index');
    });
    
    Route::get('/about', function () {
        return view('layouts.about');
    });
    
    Route::get('/contact', function () {
        return view('layouts.contact');
    });

});
```




# Questions
1. usage of the routing name?  ```Route::get()->name('userage??')```
   
   **answer**: use the route name in the blade instead of URL
   ```
   <form aciton ={{route('route.name)}}>
   ....
   </form>
   ```
2. 




