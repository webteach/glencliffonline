<?php

namespace App\Policies;

use App\User;
use App\Announcement;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnnouncementPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given announcement.
     *
     * @param User $user
     * @param Announcement $announcement
     * @return bool
     */
    public function destroy(User $user, Announcement $announcement)
    {
        return $user->id === $announcement->user_id;
    }
}
