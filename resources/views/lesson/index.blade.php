@extends('structure.base')

@section('content')
    <div class="py-4 dark">
        <h1 class="text-3xl mb-8 text-white w-24">Lessons</h1>
        <table class="table-fixed border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead class="bg-slate-50 dark:bg-slate-700">
            <tr>
                <th class="border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Lesson</th>
                <th class="border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Teacher</th>
                <th class="w-60 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Action</th>
            </tr>
            </thead>
            <tbody class="text-white">
            @foreach($lessons as $key => $lesson)
                <tr>
                    <td class="border border-slate-300 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400">
                        {{ $lesson->name }}
                    </td>
                    <td class="border border-slate-300 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400">
                        {{ $lesson->teacher->name }}
                    </td>
                    <td class="w-60 border border-slate-300 dark:border-slate-600 p-4 text-slate-500 dark:text-slate-400">
                        @if($lesson->status != 'closed')
                           <a href="{{ route('lesson.show', $lesson->id) }}" class="inline-block px-12 py-3 text-sm text-white font-medium bg-blue-500 rounded focus:outline-none focus:ring">
                                Take register
                            </a>
                        @else
                            <span class="inline-block px-10 py-3 text-sm text-black font-medium bg-slate-200 rounded focus:outline-none focus:ring">Register closed</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
