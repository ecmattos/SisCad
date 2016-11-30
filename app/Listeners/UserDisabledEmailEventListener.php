<?php

namespace SisCad\Listeners;

use SisCad\Events\UserDisabledEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

use SisCad\Repositories\UserRepository;

class UserDisabledEmailEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Handle the event.
     *
     * @param  UserNewEvent  $event
     * @return void
     */
    public function handle(UserDisabledEvent $event)
    {
        $user = $event->getUser();

        $user = $this->userRepository->findUserById($user);

        Mail::send('emails.users.disabled', ['user' => $user], function ($msg) use ($user)
        {
            $msg->from('aafcorsan@aafcorsan.com.br', 'AAFCorsan');
            $msg->to($user->email, $user->name)->subject('SisCad: Desativação de sua conta.');
        });
    }
}