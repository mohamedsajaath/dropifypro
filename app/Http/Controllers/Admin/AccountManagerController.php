<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AbstractController;
use App\Helper\Service\Admin\AccountManagerService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountManagerUpdateRequest;
use App\Http\Requests\AccountManagerStoreRequest;
use App\Models\AccountManager;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AccountManagerController extends AbstractController
{
    use ResponseWrapperAdmin;

    public function __construct()
    {
    }

    public function getIndexView()
    {
        return 'pages.admin.support.account_managers.index';
    }

    public function getIndexData()
    {
        $accountManager = AccountManager::getAll();
        return [
            'account_manager_details' => $accountManager,
        ];
    }

    public function getCreateView()
    {
        return 'pages.admin.support.account_managers.includes.create';
    }

    public function store(AccountManagerStoreRequest $request)
    {
        $accountManager = new AccountManager();
        $accountManager->storeFromRequest($request);
        $accountManager = AccountManagerService::save($accountManager);
        $response = ['message' => 'Successfully Added', 'event' => $accountManager];
        return response()->json($response);
    }

    public function show($id)
    {
        //
    }

    public function getEditView()
    {
        return 'pages.admin.support.account_managers.includes.edit';
    }

    public function getEditData($id)
    {
        $accountManager = AccountManager::find($id);
        return ['account_managers' => $accountManager];
    }

    public function update(Request $request, $id)
    {
        try {

            $accountManager = AccountManager::find($id);
            $accountManager->loadFromRequest($request);
            AccountManagerService::save($accountManager);
            return self::response('Successfully added');
        } catch (\Exception $ex) {
            return self::response($ex->getMessage(), [], 422);
        }
    }

    public function destroy($id)
    {
        AccountManagerService::deleteById($id);
        return self::response('Event deleted!');
    }
}
