<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $item)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $item->slug }}" class="hover:underline">

                <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $item['title'] }}</h2>
            </a>
            <div class="">
                By
                <a class="text-base text-gray-500 hover:underline" href="/authors/{{ $item->author->username }}">{{ $item->author->name}}</a>
                in
                <a class="text-base text-gray-500 hover:underline" href="/categories/{{ $item->category->slug }}">{{ $item->category->name}}</a> | {{ $item ->created_at->diffforhumans()  }}
            </div>
            <p class="my-8 font-light">
                {{ Str::limit($item['body'], 100) }}
            </p>
            <a href="/posts/{{ $item->slug }}" class="font-medium text-blue-400">read more &raquo;</a>

        </article>
    @endforeach

</x-layout>
