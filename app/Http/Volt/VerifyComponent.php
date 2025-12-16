<?php

declare(strict_types=1);

namespace Modules\Cms\Http\Volt;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;
use Modules\User\Models\User;
use Webmozart\Assert\Assert;

/**
 * Summary of VerifyComponent.
 *
 * @see https://github.com/thedevdojo/genesis/blob/main/stubs/class/resources/views/pages/auth/verify.blade.php
 */
class VerifyComponent extends Component
{
    public function resend(): void
    {
<<<<<<< HEAD
=======
        /*
         * if (auth()->user()->hasVerifiedEmail()) {
         * return redirect()->intended(route('dashboard'));
         * }
         *
         * auth()->user()->sendEmailVerificationNotification();
         *
         * return back()->with('status', 'verification-link-sent');
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 555d679 (.)
        Assert::notNull($user = auth()->guard('web')->user());
        /** @var User $user */
        $user = $user;
<<<<<<< HEAD

=======
=======
        Assert::notNull($user = auth()->user());
>>>>>>> 76ce10d (.)
=======
        Assert::notNull($user = auth()->guard('web')->user());
        /** @var \App\Models\User $user */
        $user = $user;
>>>>>>> 46d657c (.)
>>>>>>> 555d679 (.)
=======
        Assert::notNull($user = auth()->user());
>>>>>>> 026fd7e (.)
        if ($user->hasVerifiedEmail()) {
            redirect('/');
        }

        $user->sendEmailVerificationNotification();

        // Cast to MustVerifyEmail for the Verified event
        if ($user instanceof MustVerifyEmail) {
            event(new Verified($user));
        }

        $this->dispatch('resent');
        session()->flash('resent');
    }
}
