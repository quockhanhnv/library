<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\PracticeRoom;
use App\Models\Time;
use App\Models\Weekday;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
    // ========== Phòng máy 01 ===================
    	// sáng thứ 2 
    	$monday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();
         //dd($monday_morning);

         // sáng thứ 3
         $tuesday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();

         // sáng thứ 4
         $wednesday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();

         // sáng thứ 5
         $thursday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();

         // sáng thứ 6
         $friday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();
           
           // sáng thứ 7
         $sarturaday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();
              // sáng CN
         $sunday_morning = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 1)
            ->get();



           // Chiều thứ 2


    	$monday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();
         //dd($monday_morning);

         // chiều thứ 3
         $tuesday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();

         // chiều thứ 4
         $wednesday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();

         // chiều thứ 5
         $thursday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();

         // chiều thứ 6
         $friday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();
           
           // chiều thứ 7
         $saturaday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();
              // chiều thứ CN
         $sunday_afternoon = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 1)
            ->get();

            // Tối thứ 2
            $monday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();
         //dd($monday_morning);

         // Tối thứ 3
         $tuesday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();

         // Tối thứ 4
         $wednesday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();

         // Tối thứ 5
         $thursday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();

         // Tối thứ 6
         $friday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();
           
           // Tối thứ 7
         $saturaday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();
              // Tối CN
         $sunday_evening = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 1)
            ->get();


        // ========== Phòng máy 02 ===================
    	// sáng thứ 2 
    	$monday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();
         //dd($monday_morning);

         // sáng thứ 3
         $tuesday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();

         // sáng thứ 4
         $wednesday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();

         // sáng thứ 5
         $thursday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();

         // sáng thứ 6
         $friday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();
           
           // sáng thứ 7
         $sarturaday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();
              // sáng CN
         $sunday_morning_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 1)
            ->where('register_practiceroom_id', 2)
            ->get();
           // Chiều thứ 2


    	$monday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();
         //dd($monday_morning);

         // chiều thứ 3
         $tuesday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();

         // chiều thứ 4
         $wednesday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();

         // chiều thứ 5
         $thursday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();

         // chiều thứ 6
         $friday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();
           
           // chiều thứ 7
         $saturaday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();
              // chiều thứ CN
         $sunday_afternoon_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 2)
            ->where('register_practiceroom_id', 2)
            ->get();

            // Tối thứ 2
            $monday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();
         //dd($monday_morning);

         // Tối thứ 3
         $tuesday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();

         // Tối thứ 4
         $wednesday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();

         // Tối thứ 5
         $thursday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();

         // Tối thứ 6
         $friday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();
           
           // Tối thứ 7
         $saturaday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();
              // Tối CN
         $sunday_evening_pm02 = DB::table('register')->select('register.register_id', 'register_user_id', 'register_class_id', 'register_subject_id', 'register_weekday_id', 'register_time_id', 'register_practiceroom_id', 'name', 'email', 'subjects_name', 'weekdays_name', 'times_name', 'practicerooms_name', 'classes_name')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 3)
            ->where('register_practiceroom_id', 2)
            ->get();



    	return view('admin.registers.index', compact('monday_morning','tuesday_morning', 'wednesday_morning', 'thursday_morning', 'friday_morning', 'sarturaday_morning', 'sunday_morning', 'monday_afternoon', 'tuesday_afternoon', 'wednesday_afternoon', 'thursday_afternoon', 'friday_afternoon', 'saturaday_afternoon', 'sunday_afternoon', 'monday_evening', 'tuesday_evening', 'wednesday_evening', 'thursday_evening', 'friday_evening', 'saturaday_evening', 'sunday_evening', 'monday_morning_pm02','tuesday_morning_pm02', 'wednesday_morning_pm02', 'thursday_morning_pm02', 'friday_morning_pm02', 'sarturaday_morning_pm02', 'sunday_morning_pm02', 'monday_afternoon_pm02', 'tuesday_afternoon_pm02', 'wednesday_afternoon_pm02', 'thursday_afternoon_pm02', 'friday_afternoon_pm02', 'saturaday_afternoon_pm02', 'sunday_afternoon_pm02', 'monday_evening_pm02', 'tuesday_evening_pm02', 'wednesday_evening_pm02', 'thursday_evening_pm02', 'friday_evening_pm02', 'saturaday_evening_pm02', 'sunday_evening_pm02' ));
    }

    public function add()
    {
    	$register_user_id = \Auth::user()->id;
    	$register = new  Register();
    	$classes = Classes::all();
    	$subjects = Subject::all();
    	$practicerooms = PracticeRoom::all();
    	$times = Time::all();
    	$weekdays = Weekday::all();
    	return view('admin.registers.create', compact('register_user_id','register', 'classes', 'subjects', 'practicerooms', 'times', 'weekdays'));
    }

    public function save(Request $request)
    {
    	if($request->id)
    	{
    		$register = Register::find($request->id);
    		if(!$register)
            {
                return view('admin.404');
            }
    	}
    	else
    	{
    		$register = new Register();
    	}
    	//dd($request->all());
    	$register->fill($request->all());
    	$register->save();

    	return redirect(route('register.index'));

    }

    public function remove($id)
    {
        //dd($id);
        $register = Register::find($id);
        //dd($register);
        
        $register->delete();
    
       return redirect(route('register.schedule'));
    }

    public function schedule()
    {

    	// sáng thứ 2 
    	$monday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 1)
			->where('register_user_id', \Auth::user()->id)
            ->get();
         //dd($monday_morning);

         // sáng thứ 3
         $tuesday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // sáng thứ 4
         $wednesday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // sáng thứ 5
         $thursday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // sáng thứ 6
         $friday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           
           // sáng thứ 7
         $sarturaday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
              // sáng CN
         $sunday_morning = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
            // dd($sunday_morning);
           // Chiều thứ 2


    	$monday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
         //dd($monday_morning);

         // chiều thứ 3
         $tuesday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // chiều thứ 4
         $wednesday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // chiều thứ 5
         $thursday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // chiều thứ 6
         $friday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           
           // chiều thứ 7
         $saturaday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
              // chiều thứ CN
         $sunday_afternoon = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

            // Tối thứ 2
            $monday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
         //dd($monday_morning);

         // Tối thứ 3
         $tuesday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // Tối thứ 4
         $wednesday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // Tối thứ 5
         $thursday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // Tối thứ 6
         $friday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           
           // Tối thứ 7
         $saturaday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
              // Tối CN
         $sunday_evening = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();


        // ========== Phòng máy 02 ===================
    	// sáng thứ 2 
    	$monday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
         //dd($monday_morning);

         // sáng thứ 3
         $tuesday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // sáng thứ 4
         $wednesday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // sáng thứ 5
         $thursday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // sáng thứ 6
         $friday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           
           // sáng thứ 7
         $sarturaday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
              // sáng CN
         $sunday_morning_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 1)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           // Chiều thứ 2


    	$monday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
         //dd($monday_morning);

         // chiều thứ 3
         $tuesday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // chiều thứ 4
         $wednesday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // chiều thứ 5
         $thursday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // chiều thứ 6
         $friday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           
           // chiều thứ 7
         $saturaday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
              // chiều thứ CN
         $sunday_afternoon_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 2)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

            // Tối thứ 2
            $monday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 1)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
         //dd($monday_morning);

         // Tối thứ 3
         $tuesday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 2)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // Tối thứ 4
         $wednesday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 3)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // Tối thứ 5
         $thursday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 4)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();

         // Tối thứ 6
         $friday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 5)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
           
           // Tối thứ 7
         $saturaday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 6)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
              // Tối CN
         $sunday_evening_pm02 = DB::table('register')
            ->join('users', 'register.register_user_id', '=', 'users.id')
            ->join('classes', 'register.register_class_id', '=', 'classes.id')
            ->join('subjects', 'register.register_subject_id', '=', 'subjects.id')
            ->join('weekdays', 'register.register_weekday_id', '=', 'weekdays.id')
            ->join('times', 'register.register_time_id', '=', 'times.id')
            ->join('practicerooms', 'register.register_practiceroom_id', '=', 'practicerooms.id')
            ->where('weekdays.id', 7)
            ->where('times.id', 3)
            ->where('register_user_id', \Auth::user()->id)
            ->get();
            
    return view('admin.registers.schedule', compact('monday_morning','tuesday_morning', 'wednesday_morning', 'thursday_morning', 'friday_morning', 'sarturaday_morning', 'sunday_morning', 'monday_afternoon', 'tuesday_afternoon', 'wednesday_afternoon', 'thursday_afternoon', 'friday_afternoon', 'saturaday_afternoon', 'sunday_afternoon', 'monday_evening', 'tuesday_evening', 'wednesday_evening', 'thursday_evening', 'friday_evening', 'saturaday_evening', 'sunday_evening', 'monday_morning_pm02','tuesday_morning_pm02', 'wednesday_morning_pm02', 'thursday_morning_pm02', 'friday_morning_pm02', 'sarturaday_morning_pm02', 'sunday_morning_pm02', 'monday_afternoon_pm02', 'tuesday_afternoon_pm02', 'wednesday_afternoon_pm02', 'thursday_afternoon_pm02', 'friday_afternoon_pm02', 'saturaday_afternoon_pm02', 'sunday_afternoon_pm02', 'monday_evening_pm02', 'tuesday_evening_pm02', 'wednesday_evening_pm02', 'thursday_evening_pm02', 'friday_evening_pm02', 'saturaday_evening_pm02', 'sunday_evening_pm02' ));
    
    }
}
