<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";

    public function cate()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id', 'id');
    }

    public function saveServices($request)
    {
    	$id = $request->id;
        $category_slug = ServiceCategory::where('id', $request->category_id)->first(['slug']);
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
                $query->image = json_encode($request->image);
                $query->category_id = $request->category_id;
                $query->category_slug = $category_slug->slug;
                $query->save();
            }else{
                $query = new Services();
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = json_encode($request->image);
                $query->category_id = $request->category_id;
                $query->category_slug = $category_slug->slug;
                $query->save();
            }
            
        }else{
                $query = new Services();
                $query->name = $request->name;
                $query->slug = to_slug($request->name);
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = json_encode($request->image);
                $query->category_id = $request->category_id;
                $query->category_slug = $category_slug->slug;
                $query->save();
            
        }
        return $query;
    }
}
