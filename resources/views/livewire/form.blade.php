<form wire:submit.prevent='submit' class="flex flex-col h-screen items-center">
    <div class="border py-24 px-48 flex flex-col items-center gap-8 rounded-xl bg-gray-100">
        <div class="w-full flex flex-col text-center">
            <label for="" class="pb-4">Имя</label>
            <input wire:model.defer="form.name" class="rounded-xl pt-3" type="text" id="name" placeholder="Введите имя">
            @error('form.name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full  flex flex-col text-center">
            <label for="" class="pb-4">Email</label>
            <input wire:model.defer="form.email" class="rounded-xl pt-3" type="text" id="email" placeholder="Введите email">
            @error('form.email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full  flex flex-col text-center">
            <label for="" class="pb-4">Telegram</label>
            <input wire:model.defer="form.telegram" class="rounded-xl pt-3" type="text" id="telegram"
                   placeholder="Вставьте ссылку на профиль telegram">
            @error('form.telegram')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full  max-w-[350px] flex flex-col text-center">
            <label for="" class="pb-4">Комментарий</label>
            <textarea wire:model.defer="form.message" class="rounded-xl pt-3" id="message" cols="30" rows="10"></textarea>
            @error('form.message')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="py-[12px] max-w-[180px] w-[180px] bg-[#03965D] text-white rounded-xl">Отправить</button>
    </div>
</form>
