# Model

## create mode with migration from command line
```php artisan make:model ModelName -m ```

-m: create migration along with the model

```
public function getDataByModel()
    {
        $data = Post::all();
        return $data;
    }
```
