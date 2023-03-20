<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->admin;
    }

    public function view(User $user, Item $item): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->admin;
    }

    public function update(User $user, Item $item): bool
    {
        return $user->admin;
    }
    public function delete(User $user, Item $item)
    {
        return $user->admin;
    }

    public function restore(User $user, Item $item)
    {
        //
    }

    public function forceDelete(User $user, Item $item)
    {
        //
    }
}
