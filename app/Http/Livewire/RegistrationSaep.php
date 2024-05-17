<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RegistrationSaep extends Component
{

    public $BASE_URL = 'https://academy.extensionafrica.com/lms';


    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $phone;
    public $institution;
    public $current_level;
    public $course;
    public $program = 'saep';
    public $how_did_learn_about_us;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.registration-saep');
    }

    protected $rules = [
        'username' => 'required|unique:mdl_user,username,except,id|lowercase',
        'email' => 'required|unique:mdl_user,email,except,id|lowercase',
        'firstname' => 'required',
        'lastname' => 'required',
        'phone' => 'required|numeric|unique:mdl_user,phone1,except,id',
        'institution' => 'required|min:6',
        'current_level' => 'required',
        'course' => 'required',
        'password' => 'required|min:6|confirmed',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register(){

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'f1dad363aee866aaf29ed993282f6235',
            'wsfunction' => 'core_user_create_users',
            'moodlewsrestformat' => 'json',
            'users' => [
                [
                    'username' => $this->username,
                    'password' => $this->password,
                    'firstname' => $this->firstname,
                    'lastname' => $this->lastname,
                    'email' => $this->email,
                    'auth' => 'email',
                    'customfields' => [
                        [
                            'type' => 'institution',
                            'value' => $this->institution
                        ],

                        [
                            'type' => 'phone',
                            'value' => $this->phone
                        ],

                        [
                            'type' => 'current_level',
                            'value' => $this->current_level
                        ],

                        [
                            'type' => 'course_of_study',
                            'value' => $this->course
                        ],

                        [
                            'type' => 'how_did_learn_about_us',
                            'value' => $this->how_did_learn_about_us
                        ],

                        [
                            'type' => 'program',
                            'value' => $this->program
                        ]
                    ]
                ]
            ]

        ]);

        $response = $response->json();

        // dd($response);

        if (isset($response['errorcode'])) {

            if(isset($response['debuginfo'])){
                $error = $response['debuginfo'];
                session()->flash('error', $error);
            }

            if(isset($response['message']) && !isset($response['debuginfo'])){
                $error = $response['message'];
                session()->flash('error', $error);
            }

            return redirect()->back();

        } else {

            $createdUser = $response[0]['username'];
            $newUser = DB::table('mdl_users')->where('username', $createdUser)->first();
            $newUser->confirmed = 0;

            $newUser->save();


            session()->flash('success', 'Dear '.$createdUser.', Your application for the SAEP program has been submitted successfully, you will be contacted shortly via email when your data is validated');
            return redirect()->route('success');
        }
    }


}
