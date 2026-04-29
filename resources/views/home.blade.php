{{-- <x-layouts.app>
    <x-slot:title>Home | Chirper</x-slot:title>

    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <x-card />
                </div>
            </div>

            <div class="lg:col-span-2">
                <h3 class="text-2xl font-bold text-[#cba6f7] mb-6">
                    Latest Chirps
                </h3>

                <div class="space-y-5">
                    @foreach ($chirps as $chirp)
                        <div class="bg-[#181825] border border-[#313244] rounded-2xl p-5 hover:border-[#cba6f7] transition">
                            <div class="flex gap-3 mb-4">
                                <div class="w-11 h-11 rounded-full bg-[#313244] flex items-center justify-center font-bold text-[#cba6f7]">
                                    {{ substr($chirp['author'], 0, 1) }}
                                </div>

                                <div>
                                    <h4 class="font-bold text-[#cba6f7]">{{ $chirp['author'] }}</h4>
                                    <p class="text-xs text-[#6c7086]">{{ $chirp['time'] }}</p>
                                </div>
                            </div>

                            <p class="text-[#bac2de]">
                                {{ $chirp['message'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-layouts.app> --}}



<x-layouts.app>
    <x-slot:title>Home | Chirper</x-slot:title>

    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left -->
            <div class="lg:col-span-1">
                <div class="sticky top-8">
                    <x-card />
                </div>
            </div>

            <!-- Right -->
            <div class="lg:col-span-2">
                <h3 class="text-3xl font-black text-pink-300 mb-6">
                    Latest Chirps ✨
                </h3>

                <div class="space-y-5">
                    @foreach ($chirps as $chirp)
                        <div class="bg-zinc-950 border border-pink-300/10 rounded-3xl p-6 hover:border-pink-300/30 transition duration-300">

                            <div class="flex gap-4 mb-4">
                                <div class="w-12 h-12 rounded-2xl bg-pink-300 text-zinc-950 flex items-center justify-center font-black">
                                    {{ substr($chirp['author'], 0, 1) }}
                                </div>

                                <div>
                                    <h4 class="font-bold text-pink-300">
                                        {{ $chirp['author'] }}
                                    </h4>
                                    <p class="text-xs text-pink-100/40">
                                        {{ $chirp['time'] }}
                                    </p>
                                </div>
                            </div>

                            <p class="text-pink-50/80 leading-relaxed">
                                {{ $chirp['message'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
