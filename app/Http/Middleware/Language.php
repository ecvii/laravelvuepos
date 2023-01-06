<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $installCheck = config('gain.installed');

        $locale = "english";

        if ( $installCheck && Schema::hasTable('settings')) {
            $language = Setting::getSettingValue('language_setting');

            if ($language) {
                $locale = strtolower($language->setting_value);
            }

        }

        app()->setLocale($locale);

        return $next($request);
    }
}
