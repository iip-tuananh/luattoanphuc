<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\PageContent;
use Session;

class PageContentController extends Controller
{
    public function detail($slug)
    {
    	$data['pagecontentdetail'] = PageContent::where(['type'=>'bo-tro-gioi-thieu','language'=>'vi','status'=>1,'slug'=>$slug])->first();
    	return view('pageContent',$data);
    }
}
