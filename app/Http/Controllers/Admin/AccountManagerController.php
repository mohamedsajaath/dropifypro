<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Service\Admin\AccountManagerService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountManagerUpdateRequest;
use App\Http\Requests\AccountManagerStoreRequest;
use App\Models\AccountManager;
use Illuminate\Http\Request;

class AccountManagerController extends Controller
{
    use ResponseWrapperAdmin;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountManagers = AccountManager::getAll();
        return view('pages.admin.support.account_managers.index')->with("account_manager_details", $accountManagers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.admin.support.account_managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        AccountManagerService::storeFromRequest($request);
        return self::response('Successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accountManager = AccountManager::findById($id);
        return view('pages.admin.support.account_managers.includes.edit')->with('account_managers', $accountManager);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountManagerUpdateRequest $request)
    {
        AccountManagerService::storeFromRequest($request, $request['id']);
        return self::response('Successfully updated');
    }

    /**
     * Update the user's profile Email information.
     *
     * @param \App\Http\Requests\ProfileEmailUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function updateEmail(AccountManagerStoreRequest $request)
    // {
    //     $emailValidated = AccountManagerService::validateemail($request->confirmemail);
    //     if (!$emailValidated) {
    //         return back()->with(['status'=>'error','message'=> 'Enter Valid Email']);
    //     }
    //     AccountManagerService::updateFromRequest($request);
    //     return back()->with(['status'=>'success','message'=>'Email-Created']);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AccountManagerService::deleteById($id);
        return self::response('success', 'User deleted!');
    }
}
