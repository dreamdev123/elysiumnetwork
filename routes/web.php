<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Localisation

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'affiliationCookie']
    ],
    static function () {
        Route::group(['as' => 'marketing::'], static function () {
            Route::get(LaravelLocalization::transRoute('routes./'), static function () {
                return view('index');
            })->name('index');
            Route::get(LaravelLocalization::transRoute('routes.faq'), static function () {
                return view('faq');
            })->name('faq');
            Route::get(LaravelLocalization::transRoute('routes.country'), static function () {
                return view('country');
            })->name('country');
            Route::get(LaravelLocalization::transRoute('routes.register'), static function () {
                die(".");
                return view('register/register');
            })->name('register');
            Route::get(LaravelLocalization::transRoute('routes.register_details'), static function () {
                return view('register/register_details');
            })->name('register_details');
            Route::get(LaravelLocalization::transRoute('routes.register_thank_you_page'), static function () {
                return view('register/register_thank_you_page');
            })->name('register_thank_you_page');

            Route::get(LaravelLocalization::transRoute('routes.founderslaunch'), ['as' => 'founderslaunch', 'uses' => 'FoundersLaunchController@showForm']);
            Route::post(LaravelLocalization::transRoute('routes.founderslaunch'), ['as' => 'founderslaunch', 'uses' => 'FoundersLaunchController@send']);

            Route::get(LaravelLocalization::transRoute('routes.contact-us'), ['as' => 'contact-us', 'uses' => 'Marketing\ContactUsController@index']);
            Route::post(LaravelLocalization::transRoute('routes.contact-us-send'), ['as' => 'contact-us-send', 'uses' => 'Marketing\ContactUsController@send']);

            // LEGAL:
            Route::group(['as' => 'legal::'], static function () {
                Route::get(LaravelLocalization::transRoute('routes.legal/gdpr'), ['as' => 'gdpr', 'uses' => 'Marketing\LegalController@gdpr']);
                Route::get(LaravelLocalization::transRoute('routes.legal/terms-of-supply'), ['as' => 'terms-of-supply', 'uses' => 'Marketing\LegalController@termsOfService']);
                Route::get(LaravelLocalization::transRoute('routes.legal/terms-of-use'), ['as' => 'terms-of-use', 'uses' => 'Marketing\LegalController@termsOfUse']);
            });
        });
    }
);//end localisation


// Affiliation URL
Route::get('/{affiliation_code}/{back?}', static function ($affiliation_code, $back = 0) {
    // if (!Cookie::has('affiliation_code') && \App\User::where('customer_id', $affiliation_code)->exists()) {
    if (\App\User::where('customer_id', $affiliation_code)->exists()) {
        \Cookie::queue(cookie(
            'affiliation_code', $affiliation_code, 60 * 24 * 30 * 3, null, '.'. env('APP_BASE_DOMAIN', 'elysiumnetwork.io')
        ));
    }
    return redirect('/');

    // if (0 === (int)$back) {
    //     return redirect()->away("https://www.elysiumcapital.".(\App::environment('local')?'test':'io')."/{$affiliation_code}/1");
    // } else {
    //     return redirect()->away('https://www.elysiumcapital.'.(\App::environment('local')?'test':'io').'/');
    // }

})->where('affiliation_code', '[0-9]{6}+')->name('affiliation:referral-link');


//Dynamic sitemap
Route::group(['as' => 'sitemap::xml::', 'middleware' => ['web']], static function () {
    Route::get('sitemap.xml', ['as' => 'index', 'uses' => 'SitemapController@sitemapXML']);
    Route::get('sitemap-marketing.xml', ['as' => 'marketing', 'uses' => 'SitemapController@sitemapMarketingXML']);
});
