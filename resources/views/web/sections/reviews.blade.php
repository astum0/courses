    <section class="py-[60px] bg-[#DEDEDE]">
    <x-container>
        <div class="flex flex-col">
            <h2 class="text-3xl ">
                Отзывы покупателей:
            </h2>
            <hr class="border-[#747474] mt-2"/>
            <ul class="mt-5 flex justify-between">
                <li class="flex flex-col gap-5 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <img src="{{ url('/img/review.jpg') }}" alt="Фотограция" class="object-cover rounded-full size-20">
                        <h3 class="text-xl">
                            Елена Т.
                        </h3>
                    </div>
                    <p class="max-w-48 text-center italic">
                        Все понравилось, изучила JS за 3 дня , правда не спала и не ела все это время, но мне понравилось.
                    </p>
                </li>
                <li class="flex flex-col gap-5 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <img src="{{ url('/img/michaels.jpg') }}" alt="Фотограция" class="object-cover rounded-full size-20">
                        <h3 class="text-xl">
                            Михаил П.
                        </h3>
                    </div>
                    <p class="max-w-48 text-center italic">
                        Мне понравилось, думал будет тяжело, но ошибся, на заводе тяжелее.
                    </p>
                </li>
                <li class="flex flex-col gap-5 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <img src="{{ url('/img/dmitrii.jpg') }}" alt="Фотограция" class="object-cover rounded-full size-20">
                        <h3 class="text-xl">
                            Александр Д.
                        </h3>
                    </div>
                    <p class="max-w-48 text-center italic">
                        Понравился курс по Python, не зря отвалил 400к заработанных за 3 года в макдональдсе.
                    </p>
                </li>
            </ul>
        </div>
    </x-container>
</section>
