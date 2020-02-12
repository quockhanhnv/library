<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PracticeRoom;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePracticeRoomRequest;
class PracticeroomController extends Controller
{
    public function index(Request $request)
    {
    	$pageSize = $request->pageSize == null ? 10 : $request->pageSize;
    	$fullUrl = $request->fullUrl();	
    	$keyword = $request->keyword;
    	$addPath = "";
    	if(!$keyword)
    	{
    		$practicerooms = DB::table('practicerooms')->whereNull('deleted_at')->paginate($pageSize);
    		$addPath = "?pageSize=$pageSize";
    	}
    	else
    	{
    		$practicerooms = PracticeRoom::where('practicerooms_name', 'like', "%$keyword%")->paginate($pageSize);
    		$addPath = "?keyword=$keyword&pageSize=$pageSize";
    	}
    	$practicerooms->withPath($addPath);
    	return view('admin.practicerooms.index', compact('practicerooms', 'keyword', 'fullUrl', 'pageSize'));

    }

    public function add()
    {
    	$practiceroom = new PracticeRoom();
    	$practiceroom->practicerooms_active = 1;

    	return view('admin.practicerooms.create', compact('practiceroom'));
    }

    public function save(SavePracticeRoomRequest $request)
    {
         //dd($request->all());
        if($request->id)
        {
            $practiceroom = PracticeRoom::find($request->id);
            if(!$practiceroom)
            {
                return view('admin.404');
            }
        }
        else
        {
            $practiceroom = new PracticeRoom();
        }

        $practiceroom->practicerooms_active = isset($request->practicerooms_active) ? 1 : 0;

        //$practiceroom->fill($request->all());
        //$practiceroom->save()

        $practiceroom->practicerooms_name = $request->practicerooms_name;
        $practiceroom->practicerooms_computer_numbers = $request->practicerooms_computer_numbers;
        //dd($practiceroom);
        $practiceroom->save();

        return redirect(route('practiceroom.index'));
        
    }
    public function edit($id)
    {
        $practiceroom = PracticeRoom::find($id);
        if(!$practiceroom)
        {
            return view('admin.404');
        }
        return view('admin.practicerooms.edit', compact('practiceroom'));
    }
    public function remove($id)
    {
        //dd($id);
        $practiceroom = PracticeRoom::find($id);
        //dd($practiceroom);
        
        $practiceroom->delete();
       return redirect(route('practiceroom.index'));
    }
}
