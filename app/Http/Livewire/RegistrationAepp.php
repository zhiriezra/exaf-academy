<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RegistrationAepp extends Component
{
    public $BASE_URL = 'https://academy.extensionafrica.com/lms';

    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $phone;
    public $highest_level_of_education;
    public $current_status;
    public $program = 'aepp';
    public $how_did_learn_about_us;

    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.registration-aepp');
    }

    protected $rules = [
        'username' => 'required|unique:mdl_user,username,except,id|lowercase',
        'email' => 'required|unique:mdl_user,email,except,id|lowercase',
        'firstname' => 'required',
        'lastname' => 'required',
        'phone' => 'required|numeric|unique:mdl_user,phone1,except,id',
        'highest_level_of_education' => 'required|min:6',
        'current_status' => 'required',
        'password' => 'required|min:6|confirmed',
    ];

    public function register(){

        $this->validate();

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
                            'type' => 'phone',
                            'value' => $this->phone
                        ],

                        [
                            'type' => 'highest_level_of_education',
                            'value' => $this->highest_level_of_education
                        ],

                        [
                            'type' => 'current_status',
                            'value' => $this->current_status
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
