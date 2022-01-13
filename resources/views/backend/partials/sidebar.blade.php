
    <div class="flex flex-col w-64 h-screen py-8 bg-white border-r dark:bg-gray-800 dark:border-gray-600">
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Brand</h2>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a class="flex items-center px-5 py-2{{request()->is('dashboard') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard">
                    <span class="mx-4 font-medium">Dashboard</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/utilisateur') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/utilisateur">
                    <span class="mx-4 font-medium">Utilisateur</span>
                </a>
                <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/magasins') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/magasins">
                    <span class="mx-4 font-medium">Magasins</span>
                </a>
                <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/produits') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/produits">
                    <span class="mx-4 font-medium">Produits</span>
                </a>
                <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/panier') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/panier">
                    <span class="mx-4 font-medium">Panier</span>
                </a>
                <a class="flex items-center px-4 py-2 mt-5 {{request()->is('dashboard/commande') ? ('text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200') : ('text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700')}}" href="/dashboard/commande">
                    <span class="mx-4 font-medium">Commandes</span>
                </a>
                <a class="blue lighten-1" href="/shop/{{ Auth::user()->magasin->id }}">My Shop</a>
            </nav>
        </div>
    </div>
