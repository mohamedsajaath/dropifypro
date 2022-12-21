<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AccountManagerController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\Admin\OnBoardingController;
use App\Http\Controllers\RegisterPlanController;
use App\Http\Controllers\OrderController;
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

//HOME START
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
//HOME END

Route::post('/register-with-plan-details', [RegisterPlanController::class, 'index'])->name('register.plan');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/image', [ProfileController::class, 'updateImage'])->name('profile.image');
    Route::patch('/profile/email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ADMIN START

    Route::middleware(['auth.admin'])->prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('pages.admin.dashboard.index');
        })->name('admin.dashboard');


        Route::get('/products', [\App\Http\Controllers\admin\ProductController::class, 'index'])->name('admin.products');
        Route::post('/products/create', [\App\Http\Controllers\admin\ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/products/recommend', function () {
            return view('pages.admin.products.recommend.index');
        })->name('admin.products.recommend');


        Route::get('/orders/paid', function () {
            return view('pages.admin.orders.paid.index');
        })->name('admin.orders.paid');
        Route::get('/orders/unpaid', function () {
            return view('pages.admin.orders.unpaid.index');
        })->name('admin.orders.unpaid');
        Route::get('/wallet', function () {
            return view('pages.admin.sellers.wallets.index');
        })->name('admin.sellers.wallet');
        Route::get('/ebay-accounts', function () {
            return view('pages.admin.sellers.ebay-accounts.index');
        })->name('admin.sellers.ebay-accounts');
        Route::get('/memberships/active', function () {
            return view('pages.admin.memberships.active.index');
        })->name('admin.sellers.memberships.active');
        Route::get('/memberships/cancelled', function () {
            return view('pages.admin.memberships.cancelled.index');
        })->name('admin.sellers.memberships.cancelled');

        Route::get('/tickets/index', [TicketController::class, 'index'])->name('admin.support.tickets.index');
        Route::get('/tickets/create', [TicketController::class, 'create'])->name('admin.support.tickets.create');
        Route::post('/tickets/store', [TicketController::class, 'store'])->name('admin.support.tickets.store');

        Route::get('/account-managers/index', [AccountManagerController::class, 'index'])->name('admin.support.account-managers.index');
        // Route::get('account-managers/create', [AccountManagerController::class, 'create'])->name('admin.account-managers.create');
        Route::post('/account-managers/store', [AccountManagerController::class, 'store'])->name('admin.account-managers.store');
        Route::get('/account-managers/edit/{id}', [AccountManagerController::class, 'edit'])->name('admin.account-managers.edit');

        Route::get('/onboardings', function () {
            return view('pages.admin.onboardings.index');
        })->name('admin.onboardings');

        Route::get('/wholesale-requests', function () {
            return view('pages.admin.wholesale-requests.index');
        })->name('admin.wholesale-requests');

        Route::get('/manage-emails', function () {
            return view('pages.admin.manage-emails.index');
        })->name('admin.manage-emails');

        // ADMIN ACCOUNT SETTING START
        Route::get('/account_overview', function () {
            return view('pages.admin.account_settings.overview');
        })->name('admin.overview');

        Route::get('/account_profile', function () {
            return view('pages.admin.account_settings.profile');
        })->name('admin.profile');

        Route::get('/account_e-bay', function () {
            return view('pages.admin.account_settings.ebay');
        })->name('admin.ebay');

        Route::get('/account_plan', [PlanController::class, 'index'])->name('admin.plan');
        Route::post('/plan', [PlanController::class, 'store'])->name('plan.store');
        Route::get('/plan/{id}', [PlanController::class, 'edit'])->name('plan.edit');
        Route::post('/plan/update', [PlanController::class, 'update'])->name('plan.update');
        // ADMIN ACCOUNT SETTING END

    });
    //ADMIN END


    //SELLER START
    Route::middleware(['auth.seller'])->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.seller.dashboard.index');
        })->name('dashboard');

        Route::get('/products/all', function () {
            return view('pages.seller.products.all.index');
        })->name('products-all');

        Route::get('/products/imported', function () {
            return view('pages.seller.products.imported.index');
        })->name('products-imported');

        Route::get('/products/recommended', function () {
            return view('pages.seller.products.recommended.index');
        })->name('products-recommended');

        Route::get('/orders/paid-orders', [OrderController::class, 'index'])->name('paid-orders');
       

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

        // SELLER ACCOUNT SETTING START
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
        // SELLER ACCOUNT SETTING END
    });
    //SELLER END



    //Royal- Mail-Api


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


    Route::get('/account-managers/index', [AccountManagerController::class, 'index'])->name('admin.support.account-managers.index');
    // Route::get('account-managers/create', [AccountManagerController::class, 'create'])->name('admin.account-managers.create');
    Route::post('/account-managers/store', [AccountManagerController::class, 'store'])->name('admin.account-managers.store');
    Route::get('/account-managers/edit/{id}', [AccountManagerController::class, 'edit'])->name('admin.account-managers.edit');
    Route::post('/account-managers/update', [AccountManagerController::class, 'update'])->name('admin.account-managers.update');




    Route::get('/wholesale-requests', function () {
        return view('pages.admin.wholesale-requests.index');
    })->name('admin.wholesale-requests');


    Route::get('/manage-emails', function () {
        return view('pages.admin.manage-emails.index');
    })->name('admin.manage-emails');



});

//ADMIN END


//SELLER START
Route::get('/seller/dashboard', function () {
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



// SELLER ACCOUNT SETTING START
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
// SELLER ACCOUNT SETTING END

// ADMIN ACCOUNT SETTING START
Route::get('/admin/account_overview', function () {
    return view('pages.admin.account_settings.overview');
})->name('admin.overview');

Route::get('/admin/account_profile', function () {
    return view('pages.admin.account_settings.profile');
})->name('admin.profile');

Route::get('/admin/account_e-bay', function () {
    return view('pages.admin.account_settings.ebay');
})->name('admin.ebay');

Route::get('/admin/account_plan', [PlanController::class, 'index'])->name('admin.plan');
Route::post('/plan', [PlanController::class, 'store'])->name('plan.store');
Route::get('/plan/{id}', [PlanController::class, 'edit'])->name('plan.edit');
Route::post('/plan/update', [PlanController::class, 'update'])->name('plan.update');

//  onboarding

Route::get('/admin/onboardings', [OnBoardingController::class, 'index'])->name('admin.onboardings');
Route::post('/onboardings', [OnBoardingController::class,'store'])->name('onboardings.store');
Route::get('/onboardings/{id}', [OnBoardingController::class,'edit'])->name('onboardings.edit');
Route::post('/onboardings/update/{id}', [OnBoardingController::class,'update'])->name('onboardings.update');
Route::delete('/onboardings', [OnBoardingController::class, 'destroy'])->name('onboardings.destroy');

// ADMIN ACCOUNT SETTING END

//Royal- Mail-Api

Route::get('/royal-mail-create-orders', [RoyalMailController::class, 'create']);
Route::get('/royal-mail-get-orders', [RoyalMailController::class, 'index']);
Route::get('/royal-mail-update-orders', [RoyalMailController::class, 'update']);




});
require __DIR__ . '/auth.php';
