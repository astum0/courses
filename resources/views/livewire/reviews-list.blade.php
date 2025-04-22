<ul class="flex flex-col gap-[6px] mt-[20px]">
    @foreach ($reviews as $review)
        <li class="p-8 bg-white rounded-[10px]">
            <h4 class="text-2xl pb-3 text-gray-600"><span class="text-gray-800">Пользователь:</span> {{ $review->user->name }}</h4>
            <p class="text-[18px] text-gray-600"><span class="text-gray-800">Коментарий:</span> {{ $review->text }}</p>
        </li>
    @endforeach
</ul>
