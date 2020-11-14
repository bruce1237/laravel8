# Database - CURD

## Create
* single
    ```
    public function addData()
        {
            $data = [
                'name'=>'test1',
                'email'=>random_int(1,9).'test@test.com',
                'email_verified_at'=>date('c'),
                'password'=>'pwd'
            ];
            $res = DB::table('users')->insert($data);
            dd($res);
        }
    ```
* multiple 


## Update
```
    $data = [
        'name'=>'test9',
        'email'=>random_int(10,90).'test@test.com',
        'email_verified_at'=>date('c'),
        'password'=>'pwd'
    ];
    $res = DB::table('users')->updateOrInsert(['id'=>$id],$data);
```
## Read

## Delete
```$res = DB::table('users')->where('name',$name)->delete();```

**Note:** if delete the whole table may lead to 404
---
