<?php

namespace App\models;

use App\models\product\Category;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public function pro_cate()
    {
        return $this->belongsTo(Category::class, 'pro_cate_id', 'id');
    }

    protected $table = "services";
    public function saveServices($request)
    {
    	$id = $request->id;
        if($id != ""){
            $query = Services::where([
                'id' => $id
             ])->first();
            if ($query) {
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = $request->image;
                $query->pro_cate_id = $request->pro_cate_id;
                $query->save();
            }else{
                $query = new Services();
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = $request->image;
                $query->pro_cate_id = $request->pro_cate_id;
                $query->save();
            }
            
        }else{
                $query = new Services();
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = $request->image;
                $query->pro_cate_id = $request->pro_cate_id;
                $query->save();
            
        }
        return $query;
    }
}
