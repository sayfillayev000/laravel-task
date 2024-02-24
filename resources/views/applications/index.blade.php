<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My application') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (auth()->user()->role->name === 'client')
                        <h2 class=" text-blue-500 font-bold text-xl ">Received Application</h2>
                        <div>
                            @foreach ($applications as $application)
                                <div class="rounded-xl mt-5 border p-5 shadow-md w-9/12 bg-white">
                                    <div class="flex w-full items-center justify-between border-b pb-3">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                            </div>
                                            <div class="text-lg font-bold text-slate-700">{{ $application->user->name }}
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-8">
                                            <button
                                                class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">#{{ $application->id }}</button>
                                            <div class="text-xs text-neutral-500">{{ $application->created_at }}</div>
                                        </div>
                                    </div>
                                    <div class=" flex justify-between  items-center">
                                        <div>

                                            <div class="mt-4 mb-6">
                                                <div class="mb-3 text-xl font-bold"> {{ $application->subject }} </div>
                                                <div class="text-sm text-neutral-600"> {{ $application->message }}
                                                </div>
                                            </div>

                                            <div>
                                                <div class="flex items-center justify-between text-slate-500">
                                                    {{ $application->user->email }}
                                                </div>
                                            </div>
                                        </div>
                                        @if (is_null($application->file_url))
                                            <div class="cursor-pointer p-4 text-center rounded-2xl ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                                No file
                                            </div>
                                        @else
                                            <a target="_blank" href={{ asset('storage/' . $application->file_url) }}
                                                class=" cursor-pointer p-4 bg-blue-500 rounded-2xl ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="white"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                </svg>

                                            </a>
                                        @endif
                                    </div>
                                    @if ($application->answer()->exists())
                                        <div>
                                            <hr class="my-4 block border">
                                            <strong>Answer: </strong>
                                            <span>{{ $application->answer->body }}</span>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                            <div class=" mt-4  ml-6 block">
                                {{ $applications->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
