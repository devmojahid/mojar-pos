<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;
class ProfileService
{
    /**
     * Update the user's profile information.
     *
     * @param  array  $data
     * @param  \App\Models\User  $user
     */
    public function update(array $data, $user,$avatar)
    {
        DB::transaction(function () use ($data, $user,$avatar) {
            $user->update($data);
            if($avatar){
                $user->clearMediaCollection("avatars");
                $user->addMedia($avatar)->toMediaCollection("avatars");
            }
        });
        
    }

    /**
     * Update the user's password.
     *
     * @param  array  $data
     * @param  \App\Models\User  $user
     */
    public function updatePassword(array $data, $user)
    {
        
        $user->update([
            "password" => bcrypt($data["new_password"]),
        ]);
    }

}