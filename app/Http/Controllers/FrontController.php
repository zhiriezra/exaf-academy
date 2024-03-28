<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public $BASE_URL = 'http://localhost/exaf-academy';

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
            'password' => 'required|min:6|confirmed'
        ]);

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'bbbd2c1bc2ef4d0b214c1e5479a73be3',
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
                    'phone1' => $request->phone
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

            'wstoken' => 'bbbd2c1bc2ef4d0b214c1e5479a73be3',
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

            'wstoken' => 'bbbd2c1bc2ef4d0b214c1e5479a73be3',
            'wsfunction' => 'core_course_get_courses_by_field',
            'moodlewsrestformat' => 'json',
            'field' => 'ids',
            'value' => '2,6,7,8'
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
}


