<?php

use App\Http\Controllers\RoyalMailController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('layouts.app');
});

//HOME START
Route::get('/home', function () {
    return view('pages.home.index');
})->name('home');
//HOME END

//ADMIN START


Route::prefix('admin')->group(function(){


    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard.index');
    })->name('admin.dashboard');


    Route::get('/products/active', function () {
        return view('pages.admin.products.index');
    })->name('admin.products.active');


    Route::get('/products/recommend', function () {
        return view('pages.admin.products.recommend.index');
    })->name('admin.products.recommend');


    Route::get('/orders/paid', function () {
        return view('pages.admin.orders.paid.index');
    })->name('admin.orders.paid');


    Route::get('/orders/unpaid', function () {
        return view('pages.admin.orders.unpaid.index');
    })->name('admin.orders.unpaid');


    Route::get('/sellers/wallet', function () {
        return view('pages.admin.sellers.wallets.index');
    })->name('admin.sellers.wallet');


    Route::get('/sellers/ebay-accounts', function () {
        return view('pages.admin.sellers.ebay-accounts.index');
    })->name('admin.sellers.ebay-accounts');


    Route::get('/sellers/memberships/active', function () {
        return view('pages.admin.memberships.active.index');
    })->name('admin.sellers.memberships.active');


    Route::get('/sellers/memberships/cancelled', function () {
        return view('pages.admin.memberships.cancelled.index');
    })->name('admin.sellers.memberships.cancelled');


    Route::get('/support/tickets', function () {
        return view('pages.admin.support.tickets.index');
    })->name('admin.support.tickets');


    Route::get('/support/account-managers', function () {
        return view('pages.admin.support.account-managers.index');
    })->name('admin.support.account-managers');


    Route::get('/onboardings', function () {
        return view('pages.admin.onboardings.index');
    })->name('admin.onboardings');


    Route::get('/wholesale-requests', function () {
        return view('pages.admin.wholesale-requests.index');
    })->name('admin.wholesale-requests');


    Route::get('/manage-emails', function () {
        return view('pages.admin.manage-emails.index');
    })->name('admin.manage-emails');



});

//ADMIN END


//SELLER START
Route::get('/dashboard', function () {
    return view('pages.seller.dashboard.index');
})->name('seller.dashboard');

Route::get('/products/all', function () {
    return view('pages.seller.products.all.index');
})->name('products-all');

Route::get('/products/imported', function () {
    return view('pages.seller.products.imported.index');
})->name('products-imported');

Route::get('/products/recommended', function () {
    return view('pages.seller.products.recommended.index');
})->name('products-recommended');

Route::get('/orders/paid-orders', function () {
    return view('pages.seller.orders.paid.index');
})->name('paid-orders');

Route::get('/orders/unpaid-orders', function () {
    return view('pages.seller.orders.unpaid.index');
})->name('unpaid-orders');

Route::get('/wallet', function () {
    return view('pages.seller.wallet.index');
})->name('wallet');

Route::get('/sales-report', function () {
    return view('pages.seller.sales-report.index');
})->name('sales-report');

Route::get('/support', function () {
    return view('pages.seller.support.index');
})->name('support');

Route::get('/wholesale-request', function () {
    return view('pages.seller.wholesale-request.index');
})->name('wholesale-request');

Route::get('/onboarding', function () {
    return view('pages.seller.onboarding.index');
})->name('onboarding');

//SELLER END



// ACCOUNT SETTING START
Route::get('/seller/account_overview', function () {
    return view('pages.seller.account_settings.overview');
})->name('seller.overview');

Route::get('/seller/account_profile', function () {
    return view('pages.seller.account_settings.profile');
})->name('seller.profile');
Route::get('/seller/account_e-bay', function () {
    return view('pages.seller.account_settings.ebay');
})->name('seller.ebay');
Route::get('/seller/account_plan', function () {
    return view('pages.seller.account_settings.plans');
})->name('seller.plan');
// ACCOUNT SETTING END






//Royal- Mail-Api

Route::get('/royal-mail-create-orders', [RoyalMailController::class, 'create']);
Route::get('/royal-mail-get-orders', [RoyalMailController::class, 'index']);
Route::get('/royal-mail-update-orders', [RoyalMailController::class, 'update']);


