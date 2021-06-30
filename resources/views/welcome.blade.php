@extends('layouts.index')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 col-12">
            <div class="flex sm:justify-between items-center pt-8 sm:justify-start sm:pt-0">
                <div>
                    <img src="{{ asset('images/logo.svg') }}" alt="">
                </div>
                <div class="mb-0 pt-3">
                    <h3>Technical Skill Assessment</h3>
                </div>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <a href="{{ route('task1') }}" class="">
                        <div class="p-6 h-150">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    Task 1
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('task2') }}" class="">
                        <div class="p-6 h-150 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    Task 2
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('task3') }}" class="">
                        <div class="p-6 h-150 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    Task 3
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('task4') }}" class="">
                        <div class="p-6 h-150 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                     stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                                    Task 4
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>
@endsection
