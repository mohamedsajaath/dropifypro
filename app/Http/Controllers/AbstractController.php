<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\NotImplementedException;

abstract class AbstractController extends Controller
{
    private String $childClass;
    public function __construct()
    {
        $this->childClass = get_class($this);
    }
    protected function index()
    {
        try {
            $view = $this->getIndexView();
            $data = $this->getIndexData();
            return view($view)->with($data);
        } catch (\Exception $ex) {
            return self::response($ex->getMessage(), [], 500);
        }
    }

    protected function create()
    {
        try {
            $data = $this->getCreateData();
            $view = $this->getCreateView();
            return view($view)->with($data);
        } catch (\Exception $ex) {
            return self::response($ex->getMessage(), [], 500);
        }
    }

    protected function edit($id)
    {
        try {
            $view = $this->getEditView();
            $data = $this->getEditData($id);
            return view($view)->with($data);
        }catch(\Exception $ex){
            return self::response($ex->getMessage(), [], 500);
        }
    }

    protected function getIndexView()
    {
        throw new NotImplementedException($this->childClass . ".getIndexView method not implemented");
    }

    protected function getCreateView()
    {
        throw new \Exception($this->childClass . ".getCreateView method not implemented");
    }

    protected function getEditView()
    {
        throw new \Exception($this->childClass . '.getEditView method not implemented');
    }

    protected function getCreateData()
    {
        return [];
    }

    protected function getEditData($id)
    {
        return [];
    }

    protected function getIndexData()
    {
        return [];
    }
}
