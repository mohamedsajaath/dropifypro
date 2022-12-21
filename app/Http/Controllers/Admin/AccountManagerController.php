<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Service\Admin\AccountManagerService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountManagerRequest;
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
        $account_manager_details = AccountManagerService::show();
        
        return view('pages.admin.support.account-managers.index')
        ->with("account_manager_details", $account_manager_details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
       // return view('pages.admin.support.account-managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //get all request data as array
        $inputs = $request->all();

        //create new record
        $newAccountManager = new AccountManager();
        $newAccountManager->fill($inputs);

        // dd($newAccountManager);
        $newAccountManager->save();

        $result = "result";
        $message = "Succesfully insert";
        $errors = [];
        $status = 200;

        return response()->json(['result' => $result, 'message' => $message, 'errors' => $errors], $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accountManager = AccountManager::find($id);
        return view('pages.admin.support.account-managers.includes.edit')->with('account_managers', $accountManager);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(AccountManagerRequest $request, AccountManager $AccountManager)
    // {
    //     try {
    //         $id = $request->id;
    //         $AccountManager = new AccountManager();
    //         $AccountManager = AccountManager::find($id);
    //         $AccountManager->name = $request->name;
    //         $AccountManager->email = $request->email;
    //         $AccountManager->contact_no = $request->contact_no;
    //         $AccountManager->response_time = $request->response_time
    //         $AccountManager::save($AccountManager);
    //         return self::response('Successfully Updated');
    //     } catch (\Exception $ex) {
    //         return self::response($ex->getMessage(), [], 422);
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
