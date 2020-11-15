# Localization
## multi-languages

1. create new files: message.php in English: ```\app\resources\lang\en```
   ```
   return [
        "welcome" => "welcome to Laravel 8.123",
        "language" => "English",
    ];
   ```
2. in Hindi: ```\app\resources\lang\hindi```
    ```
    return [
        "welcome" => "8.123 लारवेल में आपका स्वागत है",
        "language" => "हिंदी",
        ];
    ```

3. use the message in the blade file ```<h1>{{ __('message.welcome') }} - {{ __('message.language') }}</h1>```
4. Route the local info
   ```
    Route::get('/local/{locale}',function($locale){
        App::setlocale($locale);
        return view('layouts.index');
    });
    ```
5. view different languages

    * EN-URL:   ```http://laravel.local:8000/local/en```   *default**

    * Hindi- URL:   ```http://laravel.local:8000/local/hindi```
