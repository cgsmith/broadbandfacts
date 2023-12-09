<?php
declare(strict_types=1);

namespace App\Actions\FilamentCompanies;

use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;
use Wallo\FilamentCompanies\Contracts\ResolvesSocialiteUsers;
use Wallo\FilamentCompanies\Socialite as FilamentCompaniesSocialite;

class ResolveSocialiteUser implements ResolvesSocialiteUsers
{
    /**
     * Resolve the user for a given provider.
     */
    public function resolve(string $provider): User
    {
        $user = Socialite::driver($provider)->user();

        if (FilamentCompaniesSocialite::generatesMissingEmails()) {
            /** @phpstan-ignore-next-line */
            $user->email = $user->getEmail() ?? ("{$user->id}@{$provider}".config('app.domain'));
        }

        return $user;
    }
}
