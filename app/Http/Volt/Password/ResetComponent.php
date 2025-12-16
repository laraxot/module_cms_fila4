<?php

declare(strict_types=1);

namespace Modules\Cms\Http\Volt\Password;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

/**
 * @see https://github.com/thedevdojo/genesis/blob/main/stubs/class/resources/views/pages/auth/password/reset.blade.php
 */
#[Layout('cms::layouts.auth')]
class ResetComponent extends Component
{
    #[Validate('required|email')]
    public null|string $email = null;

    /**
     * Summary of emailSentMessage.
     */
    public bool|string|array $emailSentMessage = false;

    public function sendResetPasswordLink(): void
    {
        $this->validate();

        $response = Password::broker()->sendResetLink(['email' => $this->email]);

        if (Password::RESET_LINK_SENT === $response) {
<<<<<<< HEAD
            $message = trans($response);
            if (is_array($message)) {
                $this->emailSentMessage = implode(' ', $message);
            } else {
                $this->emailSentMessage = is_string($message) ? $message : (string) $message;
            }
=======
            $this->emailSentMessage = trans($response);
>>>>>>> c18bda2 (.)

            return;
        }

        $this->addError('email', trans($response));
    }
}
