<?php

namespace App\Models;

use App\Exceptions\RemoveOwnerException;
use App\Exceptions\TooManyUsersException;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $incrementing = false;

    /**
     * Users in the company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class, 'company_id');
    }

    /**
     * Current number of users in the company
     *
     * @return mixed
     */
    public function currentSize()
    {
        return $this->users()->count();
    }

    /**
     * Add a user to the company
     *
     * @param User $user
     * @throws TooManyUsersException
     */
    public function add(User $user)
    {
        if ($this->currentSize() == $this->max_size) {
            throw new TooManyUsersException;
        }

        $this->users()->save($user);
    }

    /**
     * Remove a user from the company
     *
     * @param User $user
     * @throws RemoveOwnerException
     */
    public function remove(User $user)
    {
        if ($user->owns($this)) {
            throw new RemoveOwnerException;
        }

        $this->users()->where('id', $user->id)
            ->update(['company_id' => null]);
    }
}
