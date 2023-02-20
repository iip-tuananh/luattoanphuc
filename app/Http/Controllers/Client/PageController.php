<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product\Product;
use Session;
use App\models\product\Category;
use App\models\product\TypeProduct;
use DB,stdClass,File;
use App\models\District;
use Goutte\Client;
use App\models\blog\Blog;
use App\models\MessContact;
use App\models\Services;
use App\models\website\Prize;
use App\models\website\Founder;
use App\models\website\Partner;
use App\models\PageContent;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function orderNow()
    { 
        return view('orderNow');
    }
    public function baogia()
    {
        return view('baogia');
    }
    public function menu()
    {
        
        $data['allproduct'] = Product::where([
            ['status', '=', 1]
        ])->limit(9)->orderBy('id','DESC')->get(['id','name','discount','price','images','slug']);
        $data['hotnews'] = Blog::where([
            ['status','=',1],
            ['type_news','=','tin-hot']
        ])->orderBy('id','DESC')->limit(7)->get(['id','title','slug','created_at','image']);
        return view('menu',$data);
    }
    public function quickview($id){
        $data['product'] = Product::with('cate')->where('id',$id)->first();
        return view('layouts.product.quickview',$data);
    }
    public function aboutUs(){
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['founder'] = Founder::where(['status'=>1])->get(['id','name','position','image']);
        $data['album'] = Prize::where(['status'=>1])->get(['id','name','image']);
        $data['pageContent'] = PageContent::where(['type'=>'gioi-thieu-chung', 'language'=>'vi', 'status'=>1])->first(['id','title','content', 'image', 'description']);
        $data['services'] = Services::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(6)->get(['id','name','slug','description','image']);
        return view('aboutus',$data);
    }
    public function contact()
    {
        return view('contactus');
    }
    public function getPostInfor()
    {
        $data['category_product'] = Category::where('status',1)->get();
        return view('post_info.index',$data);
    }
    public function postPostInfor(Request $request,Product $product )
    {
        $data = $product->createClient($request);
        $data['category'] = Category::where(['status'=> 1])->orderBy('id','ASC')->get();
        $data['categoryFirst'] = Category::where(['status'=> 1])->orderBy('id','ASC')->first();
        $productNewFirstTab = Product::where([
            'category'=> $data['categoryFirst'] ? $data['categoryFirst']->id : 0,
            'status' => 0
        ])->with('customer')
        ->orderBy('id','ASC')
        ->limit(10)->get()->toArray();
        $data['productNewFirstTab'] = array_chunk($productNewFirstTab,2);
        return view('home',$data)->with('success','Tin của bạn đang được xét duyệt!');
    }
    public function typeproduct($id)
    {
        $arr = [];
        $data = TypeProduct::where('cate_id',$id)->get();
        $lang = Session::get('locale');
        foreach($data as $item){
            $obj = new stdClass();
            $obj->name = languageName($item->name);
            $obj->id = $item->id;
            $arr[] = $obj;
        }
        return response()->json([
    		'message' => 'get data Success',
    		'data'=> $arr
    	],200);
    }
    public function district($id)
    {
        $data = District::where('_province_id',$id)->get();
        return response()->json([
    		'message' => 'get data Success',
    		'data'=> $data
    	],200);
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $productOpt = Services::where('status',1)->where('name', 'LIKE', '%'.$keyword.'%')
        ->get();
        $data['keyword'] = $request->keyword;
        $data['countproduct'] = count($productOpt);
        $data['resultPro'] = $productOpt;
        $data['blogs'] = Blog::where(['status'=>1])->orderBy('id', 'desc')->limit(9)->get(['id','title','image','description','created_at','updated_at','slug']);
        return view('search_result',$data);
    }
    public function postcontact(Request $request){
        $data = new MessContact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->mess = $request->mess;
        $data->address = $request->address;
        $data->service = $request->service;
        $data->save();
        if($data){
            return Redirect::to('/')->with('status', 'Gửi tin thành công');
        }else{
            return back()->with('error', 'Gửi tin thất bại');
        }
        
    }

    public function listService()
    {
        $data['title_page'] = 'Tất cả dịch vụ';
        $data['services'] = Services::where(['status'=>1])->select()->paginate(12);
        $data['blogs'] = Blog::where(['status'=>1])->orderBy('id', 'desc')->limit(9)->get(['id','title','image','description','created_at','updated_at','slug']);
        return view('service.list', $data);
    }

    public function serviceDetail($slug)
    {
        $data['detail_service'] = Services::where(['slug'=>$slug , 'status'=>1])->first();
        $data['blogs'] = Blog::where(['status'=>1, 'service_id'=>$data['detail_service']->id])->orderBy('id', 'desc')->limit(10)->get(['id','title','image','description','created_at','updated_at','slug']);
        $data['proCate'] = Category::where(['status'=>1, 'id'=>$data['detail_service']->pro_cate_id])->first();
        return view('service.detail',$data);
    }

    public function luatSu($slug) 
    {
        $data['founder'] = Founder::where(['status'=>1, 'slug'=>$slug])->first();
        return view('chitiet-luatsu', $data);
    }

    public function dangKiDichVu()
    {
        return view('dangkidichvu');
    }
}
