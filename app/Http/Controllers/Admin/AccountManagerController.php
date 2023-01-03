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

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountManagers = AccountManager::getAll();
        return view('pages.admin.support.account_managers.index')
            ->with(['account_manager_details' => $accountManagers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.support.account_managers.includes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
