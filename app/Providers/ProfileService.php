<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class ProfileService extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
    public function update(User $user, array $data)
    {
        $user->update([
            'name' => $data['name'],
            'phone' => $data['phone'] ?? null,


        ]);
        if (isset($data['qualifications'])) {
            $user->qualifications()->delete();
            foreach ($data['qualifications'] as $q) {
                $user->qualifications()->create($q);
            }
            return $user->load('qualifications');
        }
    }
}
