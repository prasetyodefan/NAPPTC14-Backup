<header class="bg-white shadow p-4 flex justify-between items-center">
    <div class="container mx-auto flex justify-between items-center">
        <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-600 hover:text-gray-800 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div class="text-lg font-bold">News Talenthub</div>
        <div class="hidden lg:flex items-center">
            <span class="text-gray-700 mr-4">Tom Cook</span>
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center text-gray-600 hover:text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="absolute right-0 w-48 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg" x-show="open" @click.away="open = false" x-cloak>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
