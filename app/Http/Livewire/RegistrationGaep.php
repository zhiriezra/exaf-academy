<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RegistrationGaep extends Component
{

    public $BASE_URL = 'https://academy.extensionafrica.com/lms';


    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $phone;
    public $highest_level_of_education;
    public $current_status;
    public $organisation;
    public $how_long_worked_with_farmers;
    public $total_number_of_farmers_worked_with;
    public $total_number_of_farmers_working_with;
    public $how_did_learn_about_us;
    public $password;
    public $password_confirmation;
    public $program = 'gaep';
    public $step = 1;


    public function render()
    {
        return view('livewire.registration-gaep');
    }

    // protected $rules = [
    //     'highest_level_of_education' => 'required|min:6',
    //     'current_status' => 'required',
    //     'organisation' => 'required',
    //     'how_long_worked_with_farmers' => 'required',
    //     'total_number_of_farmers_worked_with' => 'required',
    //     'total_number_of_farmers_working_with' => 'required',
    //     'how_did_learn_about_us' => 'required',
    //     'password' => 'required|min:6|confirmed',
    // ];

    // protected $messages = [
    //     'how_long_worked_with_farmers.required' => 'How long have you worked with farmers field is required',
    //     'total_number_of_farmers_worked_with.required' => 'Total number of farmers you have worked with field is required',
    //     'how_did_learn_about_us' => 'How did you learn about us field is required',
    //     'total_number_of_farmers_working_with' => 'Total number of farmers currently working with field is required',
    //     'how_did_learn_about_us' => 'How did you learn about us field is required'
    // ];

    public function next(){

        $this->resetErrorBag();
        $this->validateData();
        $this->step++;


    }

    public function prev(){
        $this->step--;
    }

    public function validateData(){
        if($this->step == 1){
            $this->validate([
                'username' => 'required|unique:mdl_user,username,except,id|lowercase',
                'email' => 'required|unique:mdl_user,email,except,id|lowercase',
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required|numeric|unique:mdl_user,phone1,except,id',
            ]);
        }elseif($this->step == 2){
            $this->validate([
                'highest_level_of_education' => 'required|min:6',
                'current_status' => 'required',
                'organisation' => 'required',
                'how_long_worked_with_farmers' => 'required',
                'total_number_of_farmers_worked_with' => 'required',
                'total_number_of_farmers_working_with' => 'required',
                'how_did_learn_about_us' => 'required',
            ]);
        }elseif($this->step == 3){
            $this->validate([
                'password' => 'required|min:6|confirmed',
            ]);
        }
    }
    public function register(){

        $this->validateData();

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
                            'type' => 'organisation',
                            'value' => $this->organisation
                        ],

                        [
                            'type' => 'how_long_worked_with_farmers',
                            'value' => $this->how_long_worked_with_farmers
                        ],

                        [
                            'type' => 'total_number_of_farmers_worked_with',
                            'value' => $this->total_number_of_farmers_worked_with
                        ],

                        [
                            'type' => 'total_number_of_farmers_working_with',
                            'value' => $this->total_number_of_farmers_working_with
                        ],

                        [
                            'type' => 'how_did_learn_about_us',
                            'value' => $this->how_did_learn_about_us
                        ],

                        [
                            'type' => 'program',
                            'value' => $this->program
                        ],
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

            session()->flash('success', 'Dear '.$createdUser.', Your application for the GAEP program has been submitted successfully, you will be contacted shortly via email when your data is validated');
            return redirect()->route('success');
        }
    }
}
