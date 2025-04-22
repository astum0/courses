<x-container>
    <ul class="grid grid-cols-2 gap-7 h-screen">
        @foreach ($course as $cours)
            <x-card.courses :cours='$cours'/>
        @endforeach
    </ul>
</x-container>

