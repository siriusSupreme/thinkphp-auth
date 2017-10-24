<?php

namespace Illuminate\Auth\Events;

use Illuminate\Queue\SerializesModels;

class Login
{
    use SerializesModels;

    /**
     * The authenticated user.
     *
     * @var \Sirius\Auth\Contracts\Authenticatable
     */
    public $user;

    /**
     * Indicates if the user should be "remembered".
     *
     * @var bool
     */
    public $remember;

    /**
     * Create a new event instance.
     *
     * @param  \Sirius\Auth\Contracts\Authenticatable  $user
     * @param  bool  $remember
     * @return void
     */
    public function __construct($user, $remember)
    {
        $this->user = $user;
        $this->remember = $remember;
    }
}
