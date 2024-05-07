<?php

namespace App\Http\Controllers;

use App\Models\Pathway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public $BASE_URL = 'https://academy.extensionafrica.com/lms';

    function welcome(){
        return view('welcome');
    }

    function login(){
        return view('pages.login');
    }

    function register(){
        return view('pages.register');
    }

    public function createAccount(Request $request){


        $this->validate($request, [
            'username' => 'required|unique:mdl_user,username,except,id',
            'email' => 'required|unique:mdl_user,email,except,id',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric|unique:mdl_user,phone1,except,id',
            'password' => 'required|min:6|confirmed',
            'program' => 'required'
        ]);

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'f1dad363aee866aaf29ed993282f6235',
            'wsfunction' => 'core_user_create_users',
            'moodlewsrestformat' => 'json',
            'users' => [
                [
                    'username' => $request->username,
                    'password' => $request->password,
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'auth' => 'manual',
                    'phone1' => $request->phone,
                ]
            ]

        ]);

        $response = $response->json();


        if (isset($response['errorcode'])) {
            if(isset($response['debuginfo'])){
                $error = $response['debuginfo'];
            }

            if(isset($response['message']) && !isset($response['debuginfo'])){
                $error = $response['message'];
            }

            session()->flash('error', 'There was a critical error, please contact support!');

            return redirect()->back();

        } else {

            $createdUser = $response[0]['username'];

            // Make this a queue for performance
            $this->add_new_user_to_cohort($request->program, $request->username);


            $loginAttempt = Http::get($this->BASE_URL.'/webservice/rest/server.php',[
                'wstoken' => '6dce0796e2e69e00d438f1cf85d016a6',
                'wsfunction' => 'auth_userkey_request_login_url',
                'moodlewsrestformat'=>'json',
                'user' => [
                    'username' => $createdUser
                ]
            ]);

            $login = $loginAttempt->json();

            if(!empty($login['loginurl'])){
                return redirect($login['loginurl']);
            }else{
                return redirect()->route('login');
            }

        }

    }

    public function add_new_user_to_cohort($cohort, $username){


        $members = [
            [
                'cohorttype' => [
                    'type' => 'idnumber',
                    'value' => $cohort
                ],

                'usertype' => [
                    'type' => 'username',
                    'value' => $username
                ]
            ]

        ];

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'f1dad363aee866aaf29ed993282f6235',
            'wsfunction' => 'core_cohort_add_cohort_members',
            'moodlewsrestformat' => 'json',
            'members' =>    $members

        ]);

    }

    public function loginNewUSer($username){


        $request = Http::get($this->BASE_URL.'/webservice/rest/server.php',[
                'wstoken' => '6dce0796e2e69e00d438f1cf85d016a6',
                'wsfunction' => 'auth_userkey_request_login_url',
                'moodlewsrestformat'=>'json',
                'user' => [
                    'username' => $username
                ]
        ]);

        $response = $request->json();
        if(!empty($response['loginurl'])){
            return redirect($response['loginurl']);
        }else{
            return redirect()->route('login');
        }

    }

    public function about(){
        return view('pages.about');
    }

    public function getSingleCourse($shortname){

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'f1dad363aee866aaf29ed993282f6235',
            'wsfunction' => 'core_course_get_courses_by_field',
            'moodlewsrestformat' => 'json',
            'field' => 'shortname',
            'value' => $shortname

        ]);
        $courses = $response->json();
        $course = $courses['courses'];
        $courseDetail = [];

        foreach($course as $courseDetail){
            $courseDetail['id'] = $courseDetail['id'];
            $courseDetail['fullname'] = $courseDetail['fullname'];
            $courseDetail['shortname'] = $courseDetail['shortname'];
            $courseDetail['courseimage'] = $courseDetail['courseimage'];
            $courseDetail['summary'] = $courseDetail['summary'];
        }

        return view('pages.course', compact('courseDetail'));
    }

    public function courseCatalogue(){

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'f1dad363aee866aaf29ed993282f6235',
            'wsfunction' => 'core_course_get_courses_by_field',
            'moodlewsrestformat' => 'json',
            'field' => 'ids',
            'value' => '4,5'
        ]);
        $courses = $response->json();

        $courses = $courses['courses'];

        return view('pages.course-catalogue', compact('courses'));
    }

    public function loginTest(){


        $request = Http::get($this->BASE_URL.'/webservice/rest/server.php',[
                'wstoken' => '6dce0796e2e69e00d438f1cf85d016a6',
                'wsfunction' => 'auth_userkey_request_login_url',
                'moodlewsrestformat'=>'json',
                'user' => [
                    'username' => 'exafadmin'
                ]
        ]);

        $response = $request->json();
        return redirect($response['loginurl']);

    }

    public function saep(){
        return view('pages.saep');
    }

    public function gaep(){
        return view('pages.gaep');
    }

    public function aepp(){
        return view('pages.aepp');
    }
}


