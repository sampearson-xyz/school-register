@extends('structure.base')

@section('content')
    <div class="py-4 dark">
        <h1 class="text-3xl mb-8 text-white">Lesson Register: {{ $lesson->name }}</h1>
        <div class="p-4 border rounded text-sky-700 bg-sky-50 border-sky-900/10 mb-8" role="alert">
            <strong class="text-sm font-medium">Mark students as present or absent by checking/unchecking the box next to the students' name. When you've finished, click 'Save Register'.</strong>
        </div>
        <form method="post" action="/attendance-lesson" enctype="multipart/form-data">
            <table class="table-fixed border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                <thead class="bg-slate-50 dark:bg-slate-700">
                <tr>
                    <th class="border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Lesson</th>
                    <th class="w-16 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left"></th>
                </tr>
                </thead>
                <tbody class="text-white">
                @foreach($lesson->class_group->students as $key => $student)
                    <tr>
                        <td class="border border-slate-300 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400">
                            {{ $student->name }}
                        </td>
                        <td class="w-16 border border-slate-300 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400">
                            <div class="flex justify-center">
                                <div class="form-check form-switch">
                                    <input type="hidden" name="attendance[{{ $student->id }}]" value="0" />
                                    <input name="attendance[{{ $student->id }}]" class="form-check-input appearance-none w-8 float-left h-8 align-top bg-white bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm" type="checkbox" checked value="1">
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button type="submit" value="Save Register" class="inline-block p-4 text-sm font-medium bg-blue-500 rounded text-white my-8">Save Register</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}"/>
        </form>
    </div>
@endsection

@section('extra_scripts')
<script src="{{ asset('js/extra.js') }}"></script>
@endsection
