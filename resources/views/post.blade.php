<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

        <article class="py-8 max-w-screen-md ">
                <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $item['title'] }}</h2>
            <div class="text-base text-gray-500">
                <a href="">{{ $item['author'] }}</a> | maret 2012
            </div>
            <p class="my-8 font-light">
              {{$item['body']}}
            </p>
            <a href="/posts" class="font-medium text-blue-400">&laquo; Back to Posts</a>
        </article>


</x-layout>
