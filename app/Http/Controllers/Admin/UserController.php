<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SaveUserRequest;
class UserController extends Controller
{
    public function index(Request $request)
    {
    	$pageSize = $request->pageSize == null ? 10 : $request->pageSize;
    	$fullUrl = $request->fullUrl();	
    	$keyword = $request->keyword;
    	$addPath = "";
    	if(!$keyword)
    	{
    		$users = DB::table('users')->whereNull('deleted_at')->paginate($pageSize);
    		$addPath = "?pageSize=$pageSize";
    	}
    	else
    	{
    		$users = User::where('name', 'like', "%$keyword%")->paginate($pageSize);
    		$addPath = "?keyword=$keyword&pageSize=$pageSize";
    	}
    	$users->withPath($addPath);
    	return view('admin.users.index', compact('users', 'keyword', 'fullUrl', 'pageSize'));
    }

    public function add()
    {
    	$user = new User();
    	$user->users_active = 1;

    	return view('admin.users.create', compact('user'));
    }

    public function save(SaveUserRequest $request)
    {
    	if($request->id)
    	{
    		$user = User::find($request->id);
    		if(!$user)
    		{
    			return view('admin.404');
    		}
    	}
    	else
    	{
    		$user = new User();
            //$user->password = Hash::make($request->password);
    	}
    	//dd($request->all());
    	
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->name = $request->name;
    	$user->users_role_id = $request->users_role_id;
    	$user->users_phone = $request->users_phone;
    	$user->users_birthday = $request->users_birthday;
    	$user->users_address = $request->users_address;

    	//avatar

    	$user->users_active = isset($request->users_active) ? 1 : 0;
 		//dd($user);

         if($request->hasFile('users_avatar')){
            $file = $request->file('users_avatar');
            $fileName = uniqid()."-".$file->getClientOriginalName();
            $file->storeAs('uploads', $fileName);
            $user->users_avatar = 'uploads/'.$fileName;
        }
       

    	$user->save();
    	
    	return redirect(route('user.index'));
    }

    public function edit($id)
    {
    	$user = User::find($id);
   		//dd($user);
        if(!$user)
        {
            return view('admin.404');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function remove($id)
    {
    	$user = User::find($id);
    	if(!$user)
    	{
    		return view('admin.404');
    	}
    	$user->delete();
    	return redirect(route('user.index'));
    }

    public function profile()
    {
        return view('admin.users.profile');
    }
}
