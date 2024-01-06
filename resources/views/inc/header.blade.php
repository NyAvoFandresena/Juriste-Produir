<header class="w-full px-6 bg-white">
    <div class="container mx-auto max-w-4xl md:flex justify-between items-center">
        <a href="{{ route('homepage') }}"
            class="block py-6 w-full text-center md:text-left md:w-auto text-gray-600 no-underline flex justify-center items-center">
            Juriste Produir
        </a>
        <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
            @guest
                <a href="{{ route('login') }}" class="inline-block no-underline bg-black text-white text-sm py-2 px-3">Se connecter</a>
            @endguest
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        <div class="inline-block no-underline bg-black text-white text-sm py-2 px-3">Se déconnecter</div>
                    </button>
                </form>
            @endauth

        </div>
    </div>
</header>
