<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class PasswordReset extends Notification
{
    use Queueable;

	private static $toMailCallback;
    public $token;
    public $parametarExport;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
	    $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parametarExport = substr($actual_link, 18, 2);

	    if (static::$toMailCallback) {
		    return call_user_func(static::$toMailCallback, $notifiable, $this->token);
	    }

	    return (new MailMessage)
            ->view(
			    'auth.emails.password', ['token' => $this->token, 'parametarExport' => $parametarExport]
		    )
		    ->subject(Lang::getFromJson('Reset Password Notification'))
		    ->from(Lang::getFromJson('info@example.com'));


//	    return (new MailMessage)
//		    ->from('info@example.com')
//		    ->subject( 'Reset your password' )
//		    ->line('You are receiving this email because we received a password reset request for your account.') // Here are the lines you can safely override
//		    ->action('Reset Password', url('password/reset', $this->token))
//		    ->line('If you did not request a password reset, no further action is required.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
