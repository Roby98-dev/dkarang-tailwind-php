<!-- Hero CTA header -->
<section class="md:pt-0">
    <!-- Swiper -->
    <div class="swiper-container h-screen">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-cover bg-center bg-no-repeat" style="background-image: url('<?= SITEURL; ?>images/hero/IMG-20210126-WA0023.jpg');">
                <div class=" bg-gradient-to-t from-black w-full h-full text-center uppercase text-indigo-100 pt-60">
                    <h1 class="mx-auto font-bold text-5xl md:tracking-widest">D'Karang</h1>
                    <p class="text-xl my-5 font-semibold md:tracking-widest">We know what you love</p>
                    <p class="text-sm md:tracking-widest uppercase">Welcome to our lodges</p>
                </div>
            </div>
            <div class="swiper-slide bg-cover bg-center bg-no-repeat" style="background-image: url('<?= SITEURL; ?>images/hero/IMG-20210126-WA0024.jpg');">
                <div class="bg-gradient-to-t from-black w-full h-full text-center uppercase text-indigo-100 pt-60">
                    <h1 class="mx-auto font-bold text-5xl md:tracking-widest">D'Karang</h1>
                    <p class="text-xl my-5 font-semibold md:tracking-widest">Stay with friends & families</p>
                    <p class="text-sm md:tracking-widest uppercase">Come & enjoy precious moment with us</p>
                </div>
            </div>
            <div class="swiper-slide bg-cover bg-center bg-no-repeat" style="background-image: url('<?= SITEURL; ?>images/hero/IMG-20210126-WA0025.jpg');">
                <div class="bg-gradient-to-t from-black w-full h-full text-center uppercase text-indigo-100 pt-60">
                    <h1 class="mx-auto font-bold text-5xl md:tracking-widest">D'Karang</h1>
                    <p class="text-xl my-5 font-semibold md:tracking-widest">Want luxury vacation</p>
                    <p class="text-sm md:tracking-widest uppercase">Get accommodation today</p>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Modal Button -->
        <div x-data="{ showModal : false }" class="relative bottom-40 z-10 text-center justify-center flex">
            <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-indigo-500 hover:text-white focus:bg-indigo-50 focus:text-indigo shadow-lg">Learn
                more</button>

            <!-- Modal Background -->
            <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <!-- Modal -->
                <div x-show="showModal" class="bg-white rounded-xl max-w-2xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                    <!-- Title -->
                    <span class="font-bold block text-2xl mb-3">Welcome!</span>
                    <!-- Some beer 🍺 -->
                    <div class="mb-5 bg-indigo-500 h-52 md:h-80 rounded-xl shadow-lg bg-cover bg-center bg-no-repeat" style="background-image: url('<?= SITEURL; ?>images/hero/IMG-20210126-WA0025.jpg');">
                    </div>
                    <p>D'Karang Eco Lodge</p>

                    <!-- Buttons -->
                    <div class="text-right space-x-5 mt-5">
                        <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo mb-2">Cancel</button>
                        <a href="https://poinsla.xyz/" target="blank" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next md:bg-gray-800 py-8 px-5 rounded-lg"></div>
        <div class="swiper-button-prev md:bg-gray-800 py-8 px-5 rounded-lg"></div>
    </div>
</section>