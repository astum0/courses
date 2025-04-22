@props(['cours'])
<div class="pt-12">
        <li class="items-center text-center flex flex-col gap-5 border p-5 max-w-[100%] bg-[#F4F4F4] rounded-3xl">
            <h3 class="text-3xl text-center text-[#004A62]">
                {{ $cours->title }}
            </h1>
            <p class="text-center max-w-96">
                {{ $cours->description }}
            </p>
            <div class="flex justify-between w-full items-center">
                <span class="">
                    Цена: {{ $cours->price }}₽
                </span>
                <a href="{{ route('category.details', $cours->id) }}" onclick="copy()"
                    class="px-4 py-2 text-1xl bg-[#03965d] hover:bg-[#2c795b] ease-linear duration-200 text-white rounded-xl">
                    Подробнее
                </a>
            </div>
        </li>
</div>



