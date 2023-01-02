<?php

use App\Http\Controllers\RoyalMailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AccountManagerController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\Admin\OnBoardingController;
use App\Http\Controllers\RegisterPlanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\admin\ProductController;
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

Route::get('/register-with-plan-details', [RegisterPlanController::class, 'index'])->name('register.plan');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'updateDetails'])->name('profile.update');
    Route::patch('/profile/image', [ProfileController::class, 'updateImage'])->name('profile.image');
    Route::patch('/profile/email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ADMIN START
    Route::middleware(['auth.admin'])->prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('pages.admin.dashboard.index');
        })->name('admin.dashboard');


        Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
        Route::get('/products/list', [ProductController::class, 'list'])->name('admin.products.list');
        Route::post('/products/create', [ProductController::class, 'store'])->name('admin.products.store');
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

        Route::get('/tickets', [TicketController::class, 'index'])->name('admin.support.tickets.index');
        Route::post('/tickets/store', [TicketController::class, 'store'])->name('admin.support.tickets.store');
        Route::get('/support/tickets/ticket-details', [TicketController::class, 'ticketDetails'])->name('admin.support.tickets.ticket-details');

        Route::get('/support/account-managers', [AccountManagerController::class, 'index'])->name('admin.support.account-managers.index');
        Route::post('/support/account-managers/store', [AccountManagerController::class, 'store'])->name('admin.account-managers.store');
        Route::get('/support/account-managers/edit/{id}', [AccountManagerController::class, 'edit'])->name('admin.account-managers.edit');
        Route::post('/support/account-managers/update', [AccountManagerController::class, 'update'])->name('admin.account-managers.update');
        Route::get('/support/account-managers/delete/{id}', [AccountManagerController::class, 'destroy'])->name('admin.account-managers.delete');

        Route::get('/admin/on-boardings', [OnBoardingController::class, 'index'])->name('admin.on-boardings.index');
        Route::post('/on-boardings', [OnBoardingController::class,'store'])->name('admin.on-boarding.store');
        Route::get('/on-boardings/{id}', [OnBoardingController::class,'edit'])->name('admin.on-boarding.edit');
        Route::post('/on-boardings/update/{id}', [OnBoardingController::class,'update'])->name('admin.on-boarding.update');
        Route::get('/on-boardings/delete/{id}', [OnBoardingController::class, 'destroy'])->name('admin.on-boarding.destroy');
        
        Route::get('/on-boardings/singleDate/{date}', [OnBoardingController::class, 'singleDate'])->name('admin.on-boardings.singleDate');




        Route::get('/wholesale-requests', function () {
            return view('pages.admin.wholesale-requests.index');
        })->name('admin.wholesale-requests');

        Route::get('/manage-emails', function () {
            return view('pages.admin.manage-emails.index');
        })->name('admin.manage-emails');

        // ADMIN ACCOUNT SETTING START
        Route::get('/account/{page}', [ProfileController::class, 'index'])->name('admin.account.');

        Route::get('/account-plan', [PlanController::class, 'index'])->name('admin.plan');
        Route::get('/account-plan/list', [PlanController::class, 'list'])->name('admin.plan.list');
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

        Route::get('/support/tickets', [App\Http\Controllers\TicketController::class, 'index'])->name('seller.support.ticket');
        Route::post('support/tickets/store', [App\Http\Controllers\TicketController::class, 'store'])->name('seller.support.store');
        Route::get('/support/ticket-details', [App\Http\Controllers\TicketController::class, 'ticketDetails'])->name('seller.support.ticket-details');
        Route::post('support/close-ticket/store', [App\Http\Controllers\TicketController::class, 'store'])->name('seller.support.close_ticket.reason');

        Route::get('/wholesale-request', function () {
            return view('pages.seller.wholesale-request.index');
        })->name('wholesale-request');

        Route::get('/onboarding', function () {
            return view('pages.seller.onboarding.index');
        })->name('onboarding');

        // SELLER ACCOUNT SETTING START
        Route::get('seller/account/{page}', [ProfileController::class, 'sellerIndex'])->name('seller.account.');
        // SELLER ACCOUNT SETTING END









    });
    //SELLER END


//Royal- Mail-Api

// Route::get('/royal-mail-create-orders', [RoyalMailController::class, 'create']);
// Route::get('/royal-mail-get-orders', [RoyalMailController::class, 'index']);
// Route::get('/royal-mail-update-orders', [RoyalMailController::class, 'update']);

});
require __DIR__ . '/auth.php';
