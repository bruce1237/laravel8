# send email
## Gmail
1. make a controller ```php artisan make:controller MailController```
2. make a class ```php artisan make:mail TestMail```
   
**MailController**

```
class MailController extends Controller
{
    //
    public function sendEmail()
    {
        $email = [
            'title'=>'mail form laravel.local',
            'body'=>"THis is for testing html code: Strong",
        ];

        Mail::to('sunbohouse@hotmail.com')->send(new TestMail($email));
        return 'email sent';
    }
}
```

**TestMail Class**
```
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        //
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->subject('test mail from laravel.local')->view('emails.TestMail');
    }
}
```

**TestMail blade**
use ```$email``` variable to show content
```
{{$email['title']}}
{{$email['body']}}
```