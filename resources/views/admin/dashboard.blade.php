@extends('admin.app')

@section('admincontent')
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
            <span class="tracking-wide text-lg px-2 m-2">Tableau de bord</span>
        </div>
        <div class="flex my-2 py-1">
        </div>
        <!-- the document logo and stuff -->
    </div>

    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 sm:block ">
        <div class="overflow-hidden border border-gray-200  md:rounded-lg">
            {{-- ! début Contenu --}}
            <!-- component -->
            {{-- ! SEMAINES --}}
            <div class="ml-auto mb-6 lg:w-[5075%] xl:w-[80%] 2xl:w-[85%]">
                <div class="sticky z-10 top-0 h-16 border-b bg-white lg:py-2.5">
                    <h4>Semaine du 23/01/2024</h4>
                </div>
                <div class="px-6 pt-6 2xl:container">
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        {{-- !ACTIVITE --}}
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Traitement plainte
                                        PAPS
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">2</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Tri de Phases
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Numérisation
                                        d'adresses
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">0</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Réunion S.G
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">2</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Compte Rendu
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">8</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Dossier PAPs
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">0</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Visites Juridiques
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">1</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Descentes sur Terrain
                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">7</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-2 lg:col-span-1">
                            <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-white">
                                <div>
                                    <h5 class="text-xl text-gray-600 text-center">Autres

                                    </h5>
                                    <div class="mt-2 flex justify-center gap-4">
                                        <h3 class="text-3xl font-bold text-gray-700">0</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- !FIN ACTIVITE SEMAINE --}}
                    </div>
                </div>
            </div>
            {{-- !FIN SEMAINE --}}





            {{-- ! fin Contenu --}}
        </div>
    </div>
@endsection
