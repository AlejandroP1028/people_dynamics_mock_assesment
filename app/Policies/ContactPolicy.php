<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Contact;
use App\Models\User;

class ContactPolicy
{
    public function viewAny(User $user): bool { return true; }
public function view(User $user, Contact $contact): bool { return $contact->user_id === $user->id || $user->role === 'admin'; }
public function create(User $user): bool { return true; }
public function update(User $user, Contact $contact): bool { return $contact->user_id === $user->id || $user->role === 'admin'; }
public function delete(User $user, Contact $contact): bool { return $contact->user_id === $user->id || $user->role === 'admin'; }
}
