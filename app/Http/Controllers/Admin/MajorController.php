<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveMajorRequest;
use Illuminate\Validation\Validator;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->keyword);
        //dd($request->fullUrl());

        $pageSize = $request->pageSize == null ? 10 : $request->pageSize;
        $fullUrl = $request->fullUrl(); // lấy fullUrl để pagesize
        $keyword = $request->keyword; // từ khóa tìm kiếm
        $addPath = "";
        if(!$keyword) // keyword null
        {
            $majors = DB::table('majors')->whereNull('deleted_at')->paginate($pageSize);
            $addPath .= "?pageSize=$pageSize";
        }
        else{
            $majors = Major::where('majors_name', 'like', "%$keyword%")->whereNull('deleted_at')->paginate($pageSize);
            $addPath .= "?keyword=$keyword&pageSize=$pageSize";
          
        }
    	$majors->withPath($addPath);
    	return view('admin.majors.index', compact('majors', 'keyword', 'fullUrl', 'pageSize'));
    }
    public function add()
    {
    	$major = new Major();

    	return view('admin.majors.create', compact('major'));
    }
    public function save(SaveMajorRequest $request)
    {
         //dd($request->all());
        if($request->id)
        {
            $major = Major::find($request->id);
            if(!$major)
            {
                return view('admin.404');
            }
        }
        else
        {
            $major = new Major();
        }
        $major->majors_active = isset($request->majors_active) ? 1 : 0;

        //$major->fill($request->all());
        //$major->save()
        

        $major->majors_name = $request->majors_name;
        $major->majors_detail = $request->majors_detail;
        //dd($major);
        $major->save();

        return redirect(route('major.index'));
        
    }
    public function edit($id)
    {
        $major = Major::find($id);
        if(!$major)
        {
            return view('admin.404');
        }
        return view('admin.majors.edit', compact('major'));
    }
    public function remove($id)
    {
        //dd($id);
        $major = Major::find($id);
        //dd($major);
        
        $major->delete();
       return redirect(route('major.index'));
    }
}
