<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    protected function create()
    {
        $view = $this->getCreateView();
        return view($view);
    }

    protected function edit($id)
    {
        $view = $this->getEditView();
        $data = $this->getFormData($id);
        return view($view)->with($data);
    }

    abstract protected function getCreateView();

    abstract protected function getEditView();

    abstract protected function getFormData($id);
}
