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
        <span class="tracking-wide text-lg px-2 m-2">Modifier l'activité</span>
    </div>
    <div class="flex my-2 py-1">
    </div>
</div>

{{-- ! DEBUT FORME --}}
<!-- component -->
<div class=" h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-8 rounded-lg shadow-md">
        <form class="p-6">
            <!-- Post Content Section -->
            <div class="mb-6">
                <label for="postContent" class="block text-gray-700 text-sm font-bold mb-2">Type d'activité:
                </label>
                <select name="activite" id="activite">
                    <option value="plainte_paps">Réception de plainte PAPS</option>
                    <option value="tri_phases">Tri de phases</option>
                    <option value="numerisation_adresse">Numérisation d'adresses</option>
                    <option value="reunion_sg">Réunion au S.G</option>
                    <option value="compte_rd">Compte rendu</option>
                    <option value="dossier_paps">Tratement de dossier PAPS</option>
                    <option value="visites">Visites juridiques</option>
                    <option value="desc_terrain">Descente sur terrain</option>
                    <option value="autres">Autres</option>
                </select>
            </div>
            <!-- Post Content Section -->
            <div class="mb-6">
                <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Commentaire:</label>
                <textarea id="comment" name="comment" rows="4" class="w-full border-2 rounded-md px-4 py-2 leading-5 transition duration-150 ease-in-out sm:text-sm
  sm:leading-5 resize-none focus:outline-none focus:border-blue-500" placeholder="Ajouter un commentaire à votre activité"> ancien activité</textarea>
            </div>
            
            <!-- Submit Button and Character Limit Section -->
            <div class="flex items-center justify-between">
                <button type="submit" class="block  px-3 py-2  font-bold text-sm no-underline hover:shadow-lg bg-blue-600 text-white"> Mettre à Jour   
                </button>  
            </div>
        </form>
    </div>
</div>
@endsection