# Http Request and Form
get post data
```
  public function request(Request $request)
    {
        //get post data
        $request->all();
        $request->post();
        $request->input('userName');
    }
```
---

Form
**@csrf** csrf protection
```
<form action = "{{url('/login')}}" method="post">
@csrf
<input name ='userName' />
<input name = 'userPass'/>
<button>Subbmit</button>

</form>
```

