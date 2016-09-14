<?php

namespace App\Http\Controllers\Backend\Access\Notice;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class NoticeController extends Controller
{
    //
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(FormBuilder $formBuilder)
    {
       // return view('backend.access.notice.index');
        $form = $formBuilder->create(\App\Forms\NoticeForm::class, [
            'method' => 'POST',
            /*'url' => route('notice.save')*/
        ]);

        return view('backend.access.notice.index', compact('form'));
    }

}
