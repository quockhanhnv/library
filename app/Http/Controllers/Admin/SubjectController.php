<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveSubjectRequest;
class SubjectController extends Controller
{
    public function index(Request $request)
    {
    	$pageSize = $request->pageSize == null ? 10 : $request->pageSize;
    	$fullUrl = $request->fullUrl();	
    	$keyword = $request->keyword;
    	$addPath = "";
    	if(!$keyword)
    	{
    		$subjects = DB::table('subjects')->whereNull('deleted_at')->paginate($pageSize);
    		$addPath = "?pageSize=$pageSize";
    	}
    	else
    	{
    		$subjects = Subject::where('subjects_name', 'like', "%$keyword%")->paginate($pageSize);
    		$addPath = "?keyword=$keyword&pageSize=$pageSize";
    	}
    	$subjects->withPath($addPath);
    	//dd($classes);
    	return view('admin.subjects.index', compact('subjects', 'keyword', 'fullUrl', 'pageSize'));
    }

    public function add()
    {
    	$subject = new Subject();
    	$subject->subjects_active = 1;

    	return view('admin.subjects.create', compact('subject'));
    }

    public function save(SaveSubjectRequest $request)
    {
    	if($request->id)
    	{
    		$subject = Subject::find($request->id);
    		if(!$subject)
    		{
    			return view('admin.404');
    		}
    	}
    	else
    	{
    		$subject = new Subject();
    	}
    	
    	//dd($request->all());
    	$subject->fill($request->all());

    	$subject->subjects_active = isset($request->subjects_active) ? 1 : 0;
 		//dd($subject);

    	$subject->save();
    	
    	return redirect(route('subject.index'));
    }

    public function edit($id)
    {
    	$subject = Subject::find($id);
   		//dd($user);
        if(!$subject)
        {
            return view('admin.404');
        }
        return view('admin.subjects.edit', compact('subject'));
    }

    public function remove($id)
    {
    	$subject = Subject::find($id);
    	if(!$subject)
    	{
    		return view('admin.404');
    	}
    	$subject->delete();
    	return redirect(route('subject.index'));
    }
}
