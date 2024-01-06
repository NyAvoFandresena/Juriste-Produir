@extends('layouts.app')

@section('content')
    <!-- hero -->
    <div class="w-full py-24 px-6 bg-cover bg-no-repeat bg-center relative z-10"
        style="background-image: url('{{ asset('images/tana.png') }}');">

        <div class="container max-w-4xl mx-auto text-center">
            <h1 class="text-xl leading-tight md:text-3xl text-center text-gray-100 mb-3">PRODUIR</h1>
            <p class="text-md md:text-lg text-center text-white ">projet gouvernemental malgache
            </p>


        </div>

    </div>
    <!-- /hero -->

    <!-- home content -->
    <div class="w-full px-6 py-12 bg-white">
        <div class="container max-w-4xl mx-auto text-center pb-10">

            <h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
                Une ville plus saine avec produir
            </h3>
            <p>Pour en savoir plus sur nos services et notre politique de confidentialité , veuillez approcher nos bureaux
                localisés à Andavamamba derrière l'immeuble "cenam"ou contactez le numéro 038
            </p>



        </div>

        <div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="{{ asset('images/pierre.jpg') }}" class="w-full h-64 object-cover mb-6" />

                <h2 class="text-xl leading-tight mb-2">Amélioration Urbaine
                </h2>

            </div>

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="{{ asset('images/canal.png') }}" class="w-full h-64 object-cover mb-6" />

                <h2 class="text-xl leading-tight mb-2">Curage des canaux d'évacuation
                </h2>

            </div>

            <div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
                <img src="{{ asset('images/site.jpg') }}" class="w-full h-64 object-cover mb-6" />

                <h2 class="text-xl leading-tight mb-2">site de confinement créer pour l'amélioration de leur bien-être</h2>

            </div>

        </div>
    </div>
    <!-- /home content -->

    <!-- about -->
    <div class="w-full px-6 py-12 text-left bg-gray-300 text-gray-700 leading-normal">
        <div class="container max-w-4xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
            <div class="w-full md:w-1-3">
                <h3 class="text-3xl mb-8 text-black leading-tight">
                    Vers une Ville Meilleure
                </h3>

                <p class="mb-5">Dans une ère où les citoyens sont de plus en plus conscients de
                    l'impact de leur environnement sur leur qualité de vie, l'initiative visant
                    à créer une ville meilleure émerge comme un phare d'espoir et de progrès.
                    À l'heure où les défis urbains se multiplient, de nombreuses communautés
                    embrassent cette idée novatrice avec
                    l'intention de transformer leurs espaces de vie en des lieux plus durables, inclusifs et prospères.</p>
                <p>
                    En misant sur des stratégies novatrices, le projet Produir vise à revitaliser les quartiers urbains tout
                    en préservant l'essence culturelle unique de la ville. Des initiatives axées sur l'aménagement paysager,
                    la rénovation des infrastructures et la promotion des espaces verts transforment peu à peu Antananarivo
                    en une métropole plus verte et plus accueillante.
                </p>
            </div>
            <div class="w-full md:w-2-3 pt-10 md:px-6 md:pt-0">
                <img src="{{ asset('images/produir.png') }}" class="w-full h-auto" />
            </div>
        </div>
    </div>
    <!-- /about -->
@endsection
