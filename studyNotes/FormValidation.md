# FormValidation
**Controller**
use request->validate to validate input
```
public function login(Request $request)
    {
        $validate = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
        ]);
    }
```

**blade** show validate message, use $message
@error {{$message}} @enderror
```
<form action = "{{url('/login')}}" method="post">
@csrf
<input name ='email' /><br />
@error('email')
{{$message}}<br />
@enderror
<input name = 'password'/><br />
@error('password')
{{$message}}<br />
invalid password<br />
@enderror
<button>Subbmit</button>

</form>
```