<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class CollectionController extends Controller
{
    public function index(){
    	$group =Group::where('status','0')->get();
    	return view('frondend.collections.index')->with('group',$group);
    }

    public function groupview($group_url)
    {   
        $group =Group::where('url',$group_url)->first();
        $group_id =$group->id;
        $catogory =Category::where('group_id',$group_id)->where('status','!=','2')->where('status','0')->get();
    	return view('frondend.collections.catogory')->with('catogory',$catogory)->with('group',$group);
    }
}
