<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div
                        class='flex items-center  justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
                        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                            <div class='max-w-md mx-auto space-y-6'>
                                <form action={{ route('answers.store', ['application' => $application->id]) }}
                                    method="POST">
                                    @csrf
                                    <h2 class="text-2xl font-bold ">Answer application #{{ $application->id }}</h2>
                                    <label class="uppercase text-sm font-bold opacity-70">Answer</label>
                                    <textarea name="body" required rows="5" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>
                                    <div class=" flex justify-between">
                                        <input type="submit"
                                            class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                            value="Submit">
                                        <a href={{ route('dashboard') }}
                                            class="py-3 px-6 my-2 bg-red-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
