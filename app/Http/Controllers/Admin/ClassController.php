<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Classes;
use App\Http\Requests\SaveClassRequest;
use Illuminate\Validation\Validator;
class ClassController extends Controller
{
    public function index(Request $request)
    {
    	$pageSize = $request->pageSize == null ? 10 : $request->pageSize;
    	$fullUrl = $request->fullUrl();	
    	$keyword = $request->keyword;
    	$addPath = "";
    	if(!$keyword)
    	{
    		$classes = DB::table('classes')->whereNull('deleted_at')->paginate($pageSize);
    		$addPath = "?pageSize=$pageSize";
    	}
    	else
    	{
    		$classes = Classes::where('classes_name', 'like', "%$keyword%")->paginate($pageSize);
    		$addPath = "?keyword=$keyword&pageSize=$pageSize";
    	}
    	$classes->withPath($addPath);
    	//dd($classes);
    	return view('admin.classes.index', compact('classes', 'keyword', 'fullUrl', 'pageSize'));
    }

    public function add()
    {
    	$class = new Classes();
    	$class->classes_active = 1;

    	return view('admin.classes.create', compact('class'));
    }

    public function save(SaveClassRequest $request)
    {
    	if($request->id)
    	{
    		$class = Classes::find($request->id);
    		if(!$class)
    		{
    			return view('admin.404');
    		}
    	}
    	else
    	{
    		$class = new Classes();
    	}
    	
    	//dd($request->all());
    	$class->fill($request->all());

    	$class->classes_active = isset($request->classes_active) ? 1 : 0;
 		//dd($class);

    	$class->save();
    	
    	return redirect(route('class.index'));
    }

    public function edit($id)
    {
    	$class = Classes::find($id);
   		//dd($user);
        if(!$class)
        {
            return view('admin.404');
        }
        return view('admin.classes.edit', compact('class'));
    }

    public function remove($id)
    {
    	$class = Classes::find($id);
    	if(!$class)
    	{
    		return view('admin.404');
    	}
    	$class->delete();
    	return redirect(route('class.index'));
    }
}
