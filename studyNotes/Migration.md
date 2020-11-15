# Migration
## table migrate
make migration table
```php artisan make:migration create_myPost_table --create=myPosts```
this will create a new file in ```\app\database\migrations``` called create_myPost_table.php

insdie the migration file, there two functions up() and down(),
* up(): run when the table created
  
  ```public function up()
    {
        Schema::create('myPosts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }
    ```
  
* down(): run when the table is deleted

once the up() has been done, use command: 
``` php artisan migrate ``` to migrate the tables'

**RollBack migrate**

``` php artisan migrate:rollback``` 
each time the command will rollback one step

**Refersh migrate**

``` php artisan migrate:refresh ```
this command will remove all the tables and re-migrate all the tables

## Seeding
command ``` php artisan make:seeder seedNameSeeder ```

this command will create a new file: SeedNameSeeder in ```\app\database\seeders\``` called seedNameSeeder.php

1. inside the run() function, create some data
```
 public function run()
    {
        //
        DB::table('myPost')->insert([
            'title'=>'Title First',
            'body'=>'body First'
        ]);
    }
```
2. inside databaseSeeder.php, run() function, registier the seederNameSeeder class

```
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            seedNameSeeder::class,
        ]);
    }
}
```
3. to fillin the data, run the following command: 
``` php artisan db:seed```

**insert multi-records**:  just simply put the insert into a loop