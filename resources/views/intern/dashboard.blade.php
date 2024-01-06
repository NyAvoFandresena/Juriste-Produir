@extends('intern.app')

@section('interncontent')
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
    </div>
    <div class="m-5 text-center">
        <button class="block  px-3 py-2  font-bold text-sm no-underline hover:shadow-lg bg-blue-600 text-white">
            Ajouter Activité</button>
    </div>

    <div class="p-6 px-0">
        <span>Semaine du 01/01/2024</span>
        <table class="mt-4 w-full min-w-max table-auto text-left">
            <thead>
                <tr>
                    <th
                        class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p
                            class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            Horodatage
                        </p>
                    </th>
                    <th
                        class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p
                            class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            Activité
                        </p>
                    </th>
                    <th
                        class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p
                            class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                            Commentaire
                        </p>
                    </th>
                    <th
                        class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p
                            class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">

                        </p>
                    </th>
                    <th
                        class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p
                            class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                        </p>
                    </th>
                    <th
                        class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                        <p
                            class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- ? LIGNE EXEMPLE --}}
                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    Lundi : 01/01/2024</p>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                    12:30</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">

                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    Tri de Phases</p>

                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                Tri de phases et mises en valeur des dossiers auprès du juge</p>
                        </div>
                    </td>
                    <td>
                        <button
                            class="block mb-4 px-3 py-2 text-xs font-bold no-underline hover:shadow bg-gray-600 text-white">Modifier</button>

                    </td>
                    <td><button
                            class="block mb-4 px-3 py-2 text-xs font-bold no-underline hover:shadow bg-red-600 text-white">Supprimer</button>
                    </td>
                </tr>
                {{-- ? FIN LIGNE EXEMPLE --}}
                <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    Lundi : 01/01/2024</p>
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                    15:30</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex items-center gap-3">

                            <div class="flex flex-col">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                    Descente sur terrain</p>

                            </div>
                        </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                        <div class="flex flex-col">
                            <p
                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                Descente dans les quartiers d'Andranomanalina</p>
                        </div>
                    </td>
                    <td>
                        <button
                            class="block mb-4 px-3 py-2 text-xs font-bold no-underline hover:shadow bg-gray-600 text-white">Modifier</button>

                    </td>
                    <td><button
                            class="block mb-4 px-3 py-2 text-xs font-bold no-underline hover:shadow bg-red-600 text-white">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- !FIN SEMAINE --}}
@endsection
