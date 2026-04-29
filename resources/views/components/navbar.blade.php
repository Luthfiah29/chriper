 {{-- <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
     <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
         <a href="/" class="flex items-center space-x-3">
             <img src="{{ asset('image/sign.png') }}" alt="Icon Chirper" class="w-8 h-8">
             <span class="text-xl font-bold whitespace-nowrap">Chirper</span>
         </a>

         <button id="navbar-toggle" type="button"
             class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
             <span class="sr-only">Open main menu</span>
             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
             </svg>
         </button>

         <div class="hidden w-full md:block md:w-auto" id="navbar-menu">
             <ul
                 class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-3 md:mt-0 md:border-0 md:bg-white">
                 <li>
                     <button type="button"
                         class="w-full md:w-auto text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 transition">Sign
                         in</button>
                 </li>
                 <li>
                     <button type="button"
                         class="w-full md:w-auto text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 transition">Sign
                         Up</button>
                 </li>
             </ul>
         </div>
     </div>
 </nav> --}}


 <nav class="bg-[#0b0b10]/80 backdrop-blur-md border-b border-white/5 sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 group">
            <div class="p-2 bg-pink-500/10 rounded-lg group-hover:bg-pink-500/20 transition">
                <img src="{{ asset('image/sign.png') }}" alt="Icon Chirper" class="w-6 h-6">
            </div>
            <span class="text-xl font-black whitespace-nowrap text-white tracking-tighter">Chirper</span>
        </a>

        <button id="navbar-toggle" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-zinc-400 rounded-xl md:hidden hover:bg-white/5 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-menu">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:flex-row md:space-x-4 md:mt-0 md:border-0">
                <li>
                    <button type="button"
                        class="w-full md:w-auto text-zinc-300 hover:text-white font-semibold text-sm px-5 py-2.5 transition">
                        Sign In
                    </button>
                </li>
                <li>
                    <button type="button"
                        class="w-full md:w-auto text-[#0b0b10] bg-white hover:bg-pink-300 font-bold rounded-xl text-sm px-6 py-2.5 transition duration-300 shadow-lg shadow-white/5">
                        Sign Up
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
