<?php

namespace App\Http\Livewire\Courses;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CourseCategory extends Component
{
    public $BASE_URL = 'https://academy.extensionafrica.com/lms';

    public $courses;

    public function render()
    {
        return view('livewire.courses.course-category');
    }

    public function mount(){

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'f1dad363aee866aaf29ed993282f6235',
            'wsfunction' => 'core_course_get_courses_by_field',
            'moodlewsrestformat' => 'json',
            'field' => 'ids',
            'value' => '4,5,10'

        ]);
        $response = $response->json();


        $this->courses = $response['courses'];
    }
}
