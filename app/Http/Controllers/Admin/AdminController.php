<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Page;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $page = Page::all();;
        return view('admin/home',['page' => $page]);
    }
    
    public function edit($id){
        $model = Page::findOrFail($id);

        $model = Page::where('id', '=', $model->id)->firstOrFail();
        
        return view('admin/page', ['model' => $model]);
    }
}
