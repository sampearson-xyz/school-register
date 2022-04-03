<?php

namespace App\Console\Commands;

use App\Models\Lesson;
use Illuminate\Console\Command;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\ClassGroup;
use Illuminate\Support\Facades\DB;

class ImportDemoData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports demo data from txt files located in the storage directory. This allows the app to function without an integration present.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->import('teacher', json_decode(file_get_contents(storage_path() . '/teachers.txt')));
        $this->info('Finished importing teachers');
        $this->import('student', json_decode(file_get_contents(storage_path() . '/students.txt')));
        $this->info('Finished importing students');
        $this->import('class', json_decode(file_get_contents(storage_path() . '/class-groups.txt')));
        $this->info('Finished importing classes');
        $this->import('lesson', json_decode(file_get_contents(storage_path() . '/lessons.txt')));
        $this->info('Finished importing lessons');
        $this->import('class_students', json_decode(file_get_contents(storage_path() . '/class_groups_students.txt')));
        $this->info('Finished importing classes student joins');
    }

    public function import($type, $data)
    {
        if($type == 'teacher')
        {
            foreach($data as $teacher)
            {
                $insert = Teacher::firstOrNew(array('external_id' => $teacher->external_id));
                $insert->name = $teacher->name;
                $insert->external_id = $teacher->external_id;
                $insert->save();
            }
        }

        if($type == 'student')
        {
            foreach($data as $student)
            {
                $insert = Student::firstOrNew(array('external_id' => $student->external_id));
                $insert->name = $student->name;
                $insert->external_id = $student->external_id;
                $insert->save();
            }
        }

        if($type == 'class')
        {
            foreach($data as $class_group)
            {
                $insert = ClassGroup::firstOrNew(array('external_id' => $class_group->external_id));
                $insert->name = $class_group->name;
                $insert->external_id = $class_group->external_id;
                $insert->save();
            }
        }

        if($type == 'lesson')
        {
            foreach($data as $lesson)
            {
                $insert = Lesson::firstOrNew(array('name' => $lesson->name, 'start' => $lesson->start));
                $insert->name = $lesson->name;
                $insert->class_group_id = $lesson->class_group_id;
                $insert->start = $lesson->start;
                $insert->end = $lesson->end;
                $insert->teacher_id = $lesson->teacher_id;
                $insert->status = 'open';
                $insert->save();
            }
        }

        if($type == 'class_students')
        {
            foreach($data as $class_group)
            {
                DB::table('class_groups_students')->insert([
                    'class_group_id' => $class_group->class_group_id,
                    'student_id' => $class_group->student_id
                ]);
            }
        }
    }
}
