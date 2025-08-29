<?php 

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserService 
{
    public function list($search = null)
    {
        return User::when($search, function($query, $search){
            $query->where('name', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%");
        })->paginate(10);
    }

    public function create(array $data)
    {
        if(isset($data['image'])){
            $data['image'] = $this->uploadImg($data['image']);
        }

        return User::create($data);
    }

    public function update(User $user, array $data)
    {
        if(isset($data['image'])){
            if($user->image && Storage::disk('public')->exists($user->image)){
                Storage::disk('public')->delete($user->image);
            }
            $data['image'] = $this->uploadImg($data['image']);
        }

        $user->update($data);
        return $user;
    }

    public function delete(User $user)
    {
        if($user->image && Storage::disk('public')->exists($user->image)){
            Storage::disk('public')->delete($user->image);
        }
        return $user->delete()
;    }

    private function uploadImg($img)
    {
        return $img->store('users', 'public');
    }
}