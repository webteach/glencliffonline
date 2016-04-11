<?php

namespace App\Repositories;

use App\User;
use App\Announcement;

class AnnouncementRepository
{
    /**
     * Get all of the announcements for a given user.
     * 
     * @param User $user
     * @return Collection
     */
     public function forUser(User $user)
     {
         return Announcement::where('user_id', $user->id)
         ->orderBy('created_at', 'asc')
         ->get();
     }
}