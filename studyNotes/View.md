# View
## extends layout

view can be organized as the layout and extends structure, all the extends will inherited all the elements from layout and replace with defined section

**layout.blade.php**
```
<h1>Title</h1>
<div class="container">
  @yield('content')
</div>
```

**home.blade.php**
```
@extends('layout')  //indicate this is inheriated from the layout.blade.php

@section('content')  
    what ever content you want to show, this will replace the content section in the layout
@stop
```
---
## passing value to blade
---
* string value
passing variable value into blade
**Blade**
use {{$variableName}}
```
@section('container')
This is User: {{$name}}
@stop
```
**Controller**
use compact inside the view function to pass value
```
    $name = 'john';
    return view('user',compact('name'));
```
---
* array value

**Controller**
```
$name = 'john';
$users = [
    'name'=>'John',
    'email'=>'john@mail.com',
    'gender'=>'Male'
];
return view('user', compact('name','users'));
```

**Blade**
```
@section('container')
This is User: {{$name}}
{{$users['name']}}<br /><br />
{{$users['email']}}<br /><br />
{{$users['gender']}}

@stop
```

## blade Components
use command line to create blade components   
```
php artisan make:component componentName
```
this will create the following files:
**localtion**
1. app/Http/'view/Components'/componentName.php
2. resources/View/components/componentName.blade.php

**usage**

in the blade file, just use <x-componentName /> to quote the component
```
<x-componentName />
```
### pass data into component through *componentName.php*
**component Balde**
```
<div>
    <h1>this is Componenttts</h1>
    <h3>hell {{$name}}</h3>
</div>
```

**layout blade**
```
<x-componentName name='string Value'/>
```
*Note:* name='value' should not have any space and /> should have no space as well

**component.php**
```
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
```
### pass data through controller

```
<x-header name='bsun' :component="$component"/>
```
**Controller**

```
$component = [
            'testA',
            'testB',
            'testC',
            'testD'
        ];

return view('user', compact('name','users','component'));
```
**Component.php**
```
 public function __construct($component)
    {
        //
        $this->component = $component;
    }
```

**Component Blade**
```
<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h1>this is Componenttts</h1>
    <h3>hell {{$name}}</h3>
    <h3>Componenttts test</h3>
    <ul>
        @foreach($component as $cmp)
            <li>{{$cmp}}</li>
        @endforeach
    </ul>
</div>
```
*NOTE:* data can be pass through component and/or controller or both

---

## foreach

```
@foreach($array as $ar)
    <h3>{{$ar->key}}</h3>
@endforeach
```

## error msg
```
@error('email')
    {{$message}}<br />
@enderror
```
## if
```
@if(condition)
    do something...
@endif
```

---
# Questions
