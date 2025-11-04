<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <!-- To send emails in Laravel, follow these step-by-step instructions to configure your mail driver, create a Mailable class, and send emails using Laravel’s Mail facade.

📬 Step-by-Step Guide to Sending Emails in Laravel
✅ Step 1: Install Laravel (if not already)
laravel new email-demo
cd email-demo


✅ Step 2: Configure Mail Settings in .env
Update your .env file with your mail server credentials. Example for Gmail SMTP:
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@gmail.com
MAIL_FROM_NAME="Your App Name"


⚠️ If using Gmail, enable "Less secure app access" or use an App Password with 2FA enabled.


✅ Step 3: Create a Mailable Class
Run this Artisan command:
php artisan make:mail WelcomeMail


This creates app/Mail/WelcomeMail.php. Edit it like this:
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject('Welcome to Our App')
                    ->view('emails.welcome');
    }
}



✅ Step 4: Create the Email Blade View
Create a file at resources/views/emails/welcome.blade.php:
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
<body>
    <p>Thank you for joining us!</p>
</body>
</html>



✅ Step 5: Send the Email
You can send the email from a controller or route:
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/send-email', function () {
    $details = [
        'name' => 'Farhan'
    ];

    Mail::to('recipient@example.com')->send(new WelcomeMail($details));

    return 'Email sent!';
});



✅ Step 6: Test It
Start your Laravel server:
php artisan serve


Visit http://localhost:8000/send-email in your browser. You should see "Email sent!" and receive the email in your inbox.

🧠 Bonus Tips
- Use Mailtrap for safe testing in development.
- Use php artisan make:notification for notification-based emails.
- Queue emails with implements ShouldQueue in your Mailable class for better performance.

-->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Dummy Emaillll.... -->
     <h1>Hello Sir </h1>
     {{$msg}}
</body>
</html>
