<div class="py-20 px-2">
    <div class="flex justify-center">
        <div class="text-center">
            <h1 class="text-2xl font-bold text-gray-700">EXPERIENCE A GOOD STAY, ENJOY FANTASTIC OFFERS</h1>
            <p class="my-10 text-gray-500">FIND OUR FRIENDLY WELCOMING RECEPTION</p>
        </div>
    </div>

    <!-- Block analitik -->
    <div class="md:flex hidden items-center justify-center h-auto">
        <div class="bg-gray-800 container md:mx-24 mx-2 text-sm my-5 grid md:grid-cols-2 lg:grid-cols-4 text-gray-200 p-8 gap-5 rounded-lg" x-data="{serviceData: servicesData}">
            <template x-for="service in serviceData" :key="service">
                <div class="space-y-1 text-center">
                    <div class="text-7xl">
                        <i :class="service.icon"></i>
                    </div>
                    <div class="justify-center flex">
                        <div class="h-1 w-40 mb-3 bg-yellow-400"></div>
                    </div>
                    <div x-text="service.title" class="text-2xl font-medium text-white"></div>
                    <div x-text="service.signature"></div>
                </div>
            </template>
        </div>
    </div>

    <!-- Block analitik mobile -->
    <section class="py-10">
        <div class="flex md:hidden items-center justify-center h-auto bg-gray-800">
            <div class="flex shadow-md text-center border-t py-5 mx-2 overflow-auto whitespace-nowrap bg-gray-800" x-data="{serviceData: servicesData}">
                <template x-for="service in serviceData" :key="service">
                    <div class="space-y-1 text-center mx-4 my-5">
                        <div class="text-5xl text-gray-200">
                            <i :class="service.icon"></i>
                        </div>
                        <div class="justify-center flex">
                            <div class="h-1 w-40 mb-3 bg-yellow-400"></div>
                        </div>
                        <div x-text="service.title" class="text-xl font-medium text-white"></div>
                        <div x-text="service.signature" class="text-gray-200"></div>
                    </div>
                </template>
            </div>
        </div>
    </section>
</div>