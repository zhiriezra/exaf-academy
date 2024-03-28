<?php

namespace App\Http\Livewire\Courses;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CourseCategory extends Component
{
    public $BASE_URL = 'http://localhost/exaf-academy';

    public $courses;

    public function render()
    {
        return view('livewire.courses.course-category');
    }

    public function mount(){

        $response = Http::get($this->BASE_URL.'/webservice/rest/server.php',[

            'wstoken' => 'bbbd2c1bc2ef4d0b214c1e5479a73be3',
            'wsfunction' => 'core_course_get_courses_by_field',
            'moodlewsrestformat' => 'json',
            'field' => 'ids',
            'value' => '2,6,7,8'

        ]);
        $response = $response->json();

        $this->courses = $response['courses'];
    }
}
