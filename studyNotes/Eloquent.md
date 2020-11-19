# Eloquent
## 1=>M  

related tables
* myPosts
* comments

related files
* Model: MyPosts, Comments
* Contorller: PostController

## table relation
1 MyPost --has Many-->Comments

**MyPosts Model**
```
class MyPosts extends Model
{
    use HasFactory;
    protected $table = 'myPosts';

    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }
}
```
```hasMany(related,$FK)``` rewrite the default FK

---

**Comments Model**
```
class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
```

<br />

# Get Data

### get comments by Post ID
```
 public function getCommentsByPosts($id)
    {
        $comments = MyPosts::find($id)->comments;
        return $comments;
    }
```


## 1 => 1  
related tables
* User
* Phone

related files
* Model: User, phone
* Contorller: PhoneController

## table relation
1 User --has Only One-->Phone

**Phone Model**
```
class Phone extends Model
{
    use HasFactory;
    protected $table = 'phones';

    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
}
```
**User Model**
```
class User extends Authenticatable
{
    ...
        public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
```




**PhoneController**

```
class PhoneController extends Controller
{
    public function allUserWithPhone()
        {
            //not working, don't know why
            return $user = User::all()->phone;
        }

        public function insertPhone()
        {
            $phone = new Phone();
            $phone->phone = '123';
            $user = new User();
            $user->name = 'John1';
            $user->email = 'John1@web.com';
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->password = 'abc';
            $user->remember_token = 'abcde';
            $user->save();
            $user->phone()->save($phone);
            return 'user and phone has been created';
        }

        public function getPhoneByUserID($id)
        {
            return $phone = User::find($id)->phone;
        }
}
```

## many => many
related tables
* User
* Role

related files
* Model: User, Role, RoleUser
* Contorller: RoleController

**Role Model**
```
class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    public function users()
    {
        return $this->belongsToMany(User::class,'role_users');
    }
}
```
**User Model**
```
class User extends Authenticatable
{
 public function roles()
    {
        return $this->belongsToMany(Role::class,'role_users');
    }
}
```    

**RoleController Controller**
```
class RoleController extends Controller
{
    //
    public function getUser()
    {
        
    }

    public function addRole()
    {
        $roles = [
            ['name'=>'postman'],
            ['name'=>'officer'],
            ['name'=>'store Manager'],
        ];

        Role::insert($roles);
        return 'new roles has been added';
    }

    public function addUserWithRoles()
    {
        $user = new User();
        $user->name ='newUser';
        $user->email ='newUser@email.com';
        $user->email_verified_at =date('Y-m-d H:i:s');
        $user->password ='PWD';
        $user->remember_token ='PWD_TOKEN';
        $user->save();

        $rolesIDs = [3,5]; //HR and Manager
        $user->roles()->attach($rolesIDs);

        return 'HR and Manager for the user has been added';
    }
    
    public function getAllRolesByUsers($id)
    {
        return User::find($id)->roles;
    }
}
```



