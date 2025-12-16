<?php

declare(strict_types=1);

namespace Modules\Cms\Http\View\Composers;

// use App\Repositories\UserRepository;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Modules\Xot\Contracts\UserContract;

/**
 * Class XotComposer.
 */
class XotComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $user = Auth::user();
        if (!($user instanceof Authenticatable)) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($user instanceof UserContract)) {
            return;
        }

=======
>>>>>>> 555d679 (.)
        /** @var \Illuminate\Database\Eloquent\Relations\HasOne $profileRelation */
        $profileRelation = $user->profile();
        $profile = $profileRelation->first();
=======
        $profile = $user->profile;
>>>>>>> 026fd7e (.)
        $lang = app()->getLocale();
        $params = [];
        $route_current = Route::current();
        if ($route_current instanceof \Illuminate\Routing\Route) {
            $params = $route_current->parameters();
        }

        $view->with('params', $params);
        $view->with('lang', $lang);
        $view->with('profile', $profile);
    }
}
