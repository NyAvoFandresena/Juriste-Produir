@extends('layouts.app')

@section('content')
    <!-- component -->
    <!-- component -->

    <div class="min-h-full">
        <div class="bg-blue-200 flex justify-between">
            <div class=" max-w-7xl px-4 py-6 bg-blue-200 sm:px-6 lg:px-8 hidden lg:block md:block">

                <img class=" flex-1 w-48 h-48 rounded-full shadow-lg"
                    src="https://static.independent.co.uk/2023/09/14/15/WOLFPACK_Gallery_Kristin_10232022_FO_0064_aprRT.jpg?width=1200&height=1200&fit=crop"
                    alt="">
            </div>
            <div class="bg-blue-200  max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class=" text-3xl font-sans tracking-tight text-gray-900">
                    Nom Admin
                </h1>
                <p class="ml-10">Administrateur du site</p>
            </div>

            <div class="bg-blue-200 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                <div class="flex justify-between">

                    <!-- Content -->
                    <div class="flex-1">
                        <!-- Rest of content -->
                    </div>

                </div>

            </div>

        </div>
        <main>
            <div class=" max-w-7xl py-0 ">
                <div class="md:flex no-wrap md:-mx-2  ">
                    <!-- Left Side -->

                    <div class=" w-full md:w-3/12 ">

                        <div class=" p-3 ">

                            <ul
                                class="-mt-3 text-sm font-semibold text-gray-500 hover:text-gray-700 py-2 px-3 mt-3 divide-y rounded bg-white ">
                                <li class="items-center py-3">
                                    <span>Nom Prenom</span><br />
                                    <span class="ml-auto">Email</span>

                                </li>

                                <li class=" items-center py-3">
                                    <span>Juriste, adminstrateur du site</span><br />
                                    <span class="ml-auto">+261 38 XX XXX XX</span>

                                    <span class="ml-auto">Antananarivo, Madagascar</span>


                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Right Side -->
                    <div class="w-full mx-2   md:block lg:block md:-mt-24 sm:mt-0">
                        <!-- Profile tab -->
                        <!-- About Section -->

                        <!-- End of about section -->

                        <div class="my-1 "></div>

                        @yield('admincontent')
                        <!-- End of profile tab -->
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
