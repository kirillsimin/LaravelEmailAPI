<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Email;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmailPolicy
{
    use HandlesAuthorization;

    public function show(User $user)
    {
        $id = app('router')->current()->parameters()['email'];

        return Email::findOrFail($id)->user_id === $user->id;
    }
}
