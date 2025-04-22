<header class="border-b-2 bg-white drop-shadow-[0_5px_10px_rgba(0,0,0,0.10)] ">
    <x-container>
        <div class="flex justify-between items-center h-[56px]">
            <div class="flex gap-2 items-center">
                <img src="{{ url('/img/logo.png') }}" alt="Логотип" class="size-[40px]">
                <a href="{{ route('home') }}" class="text-black/90">
                    <span class="text-[#03965D]">
                    Skill
                    </span>Code
                </a>
            </div>
            <nav class="flex">
                <ul class="flex gap-[40px]">
                    <li class="text-black/90">
                        <a href="{{ route('home') }}" class="">
                            Главная
                        </a>
                    </li>
                    <li class="text-black/50">
                        <a href="#courses" class="">
                            Все курсы
                        </a>
                    </li>
                    <li class="text-black/50">
                        <a href="{{ route('cart') }}" class="">
                            Корзина
                        </a>
                    </li>
                    <li class="text-black/50">
                        <a href="{{ route('contacts') }}" class="">
                            Контакты
                        </a>
                    </li>
                </ul>
            </nav>
            @if (Route::has('login'))
            <nav class="flex justify-end">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black/90 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        Профиль
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black/90 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        Логин
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Регистрация
                        </a>
                    @endif
                @endauth
            </nav>
            @endif
        </div>
    </x-container>
</header>
