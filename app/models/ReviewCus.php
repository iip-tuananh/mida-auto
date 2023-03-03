<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ReviewCus extends Model
{
    protected $table = "reviewcus";
    public function saveReviewCus($request)
    {
    	$id = $request->id;
        if($id != ""){
            $query = ReviewCus::where([
                'id' => $id
             ])->first();
            if ($query) {
                $query->name = json_encode($request->name);
                $query->position = json_encode($request->position);
                $query->content = json_encode($request->content);
                $query->status = $request->status;
                $query->phone = $request->phone;
                $query->license_plate = $request->license_plate;
                $query->avatar = json_encode($request->avatar);
                $query->save();
            }else{
                $query = new ReviewCus();
                $query->name = json_encode($request->name);
                $query->position = json_encode($request->position);
                $query->content = json_encode($request->content);
                $query->status = $request->status;
                $query->phone = $request->phone;
                $query->license_plate = $request->license_plate;
                $query->avatar = json_encode($request->avatar);
                $query->save();
            }
            
        }else{
                $query = new ReviewCus();
                $query->name = json_encode($request->name);
                $query->position = json_encode($request->position);
                $query->content = json_encode($request->content);
                $query->status = $request->status;
                $query->phone = $request->phone;
                $query->license_plate = $request->license_plate;
                $query->avatar = json_encode($request->avatar);
                $query->save();
            
        }
        return $query;
    }
}
