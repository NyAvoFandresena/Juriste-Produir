@extends('admin.app')

@section('admincontent')
    {{-- HEADER --}}
    <div class="hidden md:block lg:block">
    </div>
    <div class="bg-white p-3  rounded-sm ">

        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
            <span clas="text-green-500">
                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                    </path>
                </svg>
            </span>
            <span class="tracking-wide text-lg px-2 m-2">Liste des stagiaires</span>
        </div>
        <div class="flex my-2 py-1">
        </div>
    </div>
    {{-- END HEADER --}}
    {{-- !Liste --}}
    <!-- component -->
    <div class=">
        <div class="max-w-sm mx-auto my-10">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <ul class="divide-y divide-gray-200">
                <li class="p-3 flex justify-between items-center user-card">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full"
                            src="https://unsplash.com/photos/oh0DITWoHi4/download?force=true&w=640" alt="Christy">
                        <span class="ml-3 font-medium">Christy</span>
                    </div>
                    <div>

                    </div>
                </li>
                <li class="p-3 flex justify-between items-center user-card">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full"
                            src="https://unsplash.com/photos/7Zb7kUyQg1E/download?force=true&w=640" alt="David">
                        <span class="ml-3 font-medium">David</span>
                    </div>
                    <div>

                    </div>
                </li>
                <li class="p-3 flex justify-between items-center user-card">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full"
                            src="https://unsplash.com/photos/F_-0BxGuVvo/download?force=true&w=640" alt="Nancy">
                        <span class="ml-3 font-medium">Nancy</span>
                    </div>
                    <div>

                    </div>
                </li>
                <li class="p-3 flex justify-between items-center user-card">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full"
                            src="https://unsplash.com/photos/3TLl_97HNJo/download?force=true&w=640" alt="Stella">
                        <span class="ml-3 font-medium">Stella</span>
                    </div>
                    <div>

                    </div>
                </li>
                <li class="p-3 flex justify-between items-center user-card">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full"
                            src="https://unsplash.com/photos/1AhGNGKuhR0/download?force=true&w=640" alt="Mary">
                        <span class="ml-3 font-medium">Mary</span>
                    </div>
                    <div>

                    </div>
                </li>

            </ul>
        </div>
    </div>
    </div>
@endsection
