<li class="items-center my-14 flex flex-col gap-5 border p-5 max-w-[100%] bg-[#F4F4F4] rounded-3xl">
    <img src="{{ url('storage', $details->image) }}" class="rounded-xl max-w[700px] max-h[700px] bg-center bg-cover" alt="">
    <h3 class="text-3xl flex text-center text-[#004A62]">
        {{ $details->title }}
    </h1>
    <p class="text-center max-w-96">
        {{ $details->description }}
    </p>
    <div class="flex flex-col justify-between w-full items-center">
        <livewire:buy :id="$details->id">
    </div>
    <div class="w-full">
        <livewire:reviews :id="$details->id"/>
    </div>
</li>
