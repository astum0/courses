<div class="mt-[30px]">
    <h2 class="text-4xl mb-2">Отзывы</h2>
    @if (Route::has('login'))
        @auth
        <form wire:submit="save" class="w-full flex flex-col justify-items-start gap-[10px]">
            <input type="text" wire:model='text' class="rounded-[10px] px-[20px] py-[12px] border-none bg-white h-[70px]" placeholder="Напишите свой отзыв">
            <button type="submit" class="text-1xl max-w-[180px] p-3 bg-[#03965D] rounded-xl text-white">Отправить</button>
        </form>
        @else
        Зарегистрируйтесь что-бы оставить отзыв
        @endauth
    @endif
    <div class="mt-[45px]">
        <livewire:reviews-list :id="$id">
    </div>
</div>
