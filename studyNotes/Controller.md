# Controller
to make controller use the command line:
```
php artisan make:controller ControllerName
```

## methods inside controller

*Note*: if the params is optional, need a default value

```
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // if $name is optional by router defined, need default value
    public function index($name = null)
    {
        return 'Hi From HomeController ' . $name;
    }
}
```



---
# Questions
