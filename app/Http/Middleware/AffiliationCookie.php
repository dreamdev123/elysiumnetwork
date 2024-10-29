<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use App\User;

class AffiliationCookie
{
    protected static $affiliate_identifier_get_names = [
        'a',
        'ref',
        'r',
        'sponsor',
    ];

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $affiliate_identifier = null;
        foreach (self::$affiliate_identifier_get_names as $affiliate_identifier_get_name) {
            if (
                $request->filled($affiliate_identifier_get_name)
                && strlen($request->get($affiliate_identifier_get_name)) <= 12
            ) {
                $affiliate_identifier = $request->get($affiliate_identifier_get_name);
                break;
            }
        }
        if ($affiliate_identifier) {
            if (User::where('customer_id', $affiliate_identifier)->exists()) {
                Cookie::queue('affiliation_code', $affiliate_identifier, 60 * 24 * 30 * 3, null, env('AFFILIATION_COOKIE_DOMAIN', '.'. env('APP_BASE_DOMAIN', 'elysiumnetwork.io')));
            }
        }

        return $next($request);
    }
}
