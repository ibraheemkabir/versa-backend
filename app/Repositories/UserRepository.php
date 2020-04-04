<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }

    public function track_user_activity($user_id,$activity,$time)
    {
        echo 'helo';
        return DB::table('user_activities')->insert([
            ['user_id' => $user_id, 'activity' => $activity,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
