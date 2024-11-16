<details class="px-3">
    <summary class="font-bold">
        {{ $title }}
    </summary>
    <div class="flex flex-col pl-4">
        @foreach ($items as $item)
            <a href="{{ $item[0] }}" class="hover:text-violet-600 transition-all duration-300">{{ $item[1] }}</a>
        @endforeach
    </div>
</details>
