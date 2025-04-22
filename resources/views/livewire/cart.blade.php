<div class="h-screen mt-12">
    <h1 class="text-3xl">
        Это корзина
    </h1>
    <ul class="flex w-full flex-col gap-4">
        @foreach ($carts as $cart)
            <li class="w-full flex bg-slate-50 p-[15px] rounded-lg">
                <a href="{{ route('category.details', $cart->cours->id) }}" class="flex w-full justify-between items-center">
                    <div class="flex flex-col">
                        <h3 class="text-3xl mb-2">{{$cart->cours->title}}</h3>
                        <p class="text-xl">{{ $cart->cours->description}}</p>
                    </div>
                    <span class="text-xl">{{ $cart->cours->price }} ₽</span>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="w-[400px] p-[25px] bg-slate-50 rounded-md">
        <h2 class="text-gray-500 text-[20px] mb-[12px]">Общая стоимость: {{ $sum }}</h2>
        <livewire:buy />
    </div>
</div>
