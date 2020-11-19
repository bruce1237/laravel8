# Facade  not working...need relearn
1. create a class: payment in ```app\PaymentGateway```
2. create a class: paymentFacade in ```app\paymentGateway```
3. create a serviceProvider by ```php artisan make:privider PaymentServiceProvider```
4. inside paymentServiceProvider class **regisiter** function, regisiter the payment class
   ```
   public function register()
    {
        //
        $this->app->bind('payment',function(){
            return new Payment();
        });
    }
    ```
5. regisiter the paymentServiceProvider into ```config\app.php```
    1. regisiter paymentServiceProvider into providers
    ```
    'providers' => [
        ...
        PaymentServiceProvider::class,
        ...
    ];
    ```
    2. regisiter paymentServiceProvider into aliases

    ```
    'aliases' => [
        ...
        'Payment'=>PaymentFacade::class,
        ...
    ];
    ```

