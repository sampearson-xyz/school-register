<?php

namespace App\Http\Controllers;

use App\Models\AttendanceLesson;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = array(
            array('name' => 'Maths - 04/04/22', 'class_group_id' => 1, 'start' => '2022-04-04 09:00:00', 'end' => '2022-04-04 10:30:00', 'teacher_id' => 1),
            array('name' => 'English - 04/04/22', 'class_group_id' => 2, 'start' => '2022-04-04 11:00:00', 'end' => '2022-04-04 12:30:00', 'teacher_id' => 2),
            array('name' => 'Science - 04/04/22', 'class_group_id' => 3, 'start' => '2022-04-04 13:30:00', 'end' => '2022-04-04 15:00:00', 'teacher_id' => 1),
            array('name' => 'Maths - 05/04/22', 'class_group_id' => 1, 'start' => '2022-04-05 09:00:00', 'end' => '2022-04-05 10:30:00', 'teacher_id' => 1),
            array('name' => 'English - 05/04/22', 'class_group_id' => 2, 'start' => '2022-04-05 11:00:00', 'end' => '2022-04-05 12:30:00', 'teacher_id' => 2),
            array('name' => 'Science - 05/04/22', 'class_group_id' => 3, 'start' => '2022-04-05 13:30:00', 'end' => '2022-04-05 15:00:00', 'teacher_id' => 1),
            array('name' => 'Maths - 06/04/22', 'class_group_id' => 1, 'start' => '2022-04-06 09:00:00', 'end' => '2022-04-06 10:30:00', 'teacher_id' => 1),
            array('name' => 'English - 06/04/22', 'class_group_id' => 2, 'start' => '2022-04-06 11:00:00', 'end' => '2022-04-06 12:30:00', 'teacher_id' => 2),
            array('name' => 'Science - 06/04/22', 'class_group_id' => 3, 'start' => '2022-04-06 13:30:00', 'end' => '2022-04-06 15:00:00', 'teacher_id' => 1),
            array('name' => 'Maths - 07/04/22', 'class_group_id' => 1, 'start' => '2022-04-07 09:00:00', 'end' => '2022-04-07 10:30:00', 'teacher_id' => 1),
            array('name' => 'English - 07/04/22', 'class_group_id' => 2, 'start' => '2022-04-07 11:00:00', 'end' => '2022-04-07 12:30:00', 'teacher_id' => 2),
            array('name' => 'Science - 07/04/22', 'class_group_id' => 3, 'start' => '2022-04-07 13:30:00', 'end' => '2022-04-07 15:00:00', 'teacher_id' => 1),
            array('name' => 'Maths - 08/04/22', 'class_group_id' => 1, 'start' => '2022-04-08 09:00:00', 'end' => '2022-04-08 10:30:00', 'teacher_id' => 1),
            array('name' => 'English - 08/04/22', 'class_group_id' => 2, 'start' => '2022-04-08 11:00:00', 'end' => '2022-04-08 12:30:00', 'teacher_id' => 2),
            array('name' => 'Science - 08/04/22', 'class_group_id' => 3, 'start' => '2022-04-08 13:30:00', 'end' => '2022-04-08 15:00:00', 'teacher_id' => 1),
        );

        print_r(json_encode($data));exit;
    }
}
