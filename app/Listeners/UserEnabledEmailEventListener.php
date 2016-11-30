<?php

namespace SisCad\Listeners;

use SisCad\Events\UserEnabledEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

use SisCad\Repositories\UserRepository;

class UserEnabledEmailEventListener
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
    public function handle(UserEnabledEvent $event)
    {
        $user_new = $event->getUser();

        $user_new = $this->userRepository->findUserById($user_new);

        Mail::send('emails.users.new_authorized', ['user_new' => $user_new], function ($msg) use ($user_new)
        {
            $msg->from('aafcorsan@aafcorsan.com.br', 'AAFCorsan');
            $msg->to($user_new->email, $user_new->name)->subject('SisCad: Ativação de sua conta.');
        });
    }
}
