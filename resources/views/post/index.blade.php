<x-app-layout> 

    <div class="container max-w-7xl mx-auto px-2 sm: px-6 lg:px-8 ">
        <div class="grid grid cols-3 gap-6 ">

            {{-- @dump($posts->images->url) --}}


            @foreach ($posts as $post)
                <article>
                    {{ $post->images_id }}
                </article>
            @endforeach


        </div>
    </div>

</x-app-layout>
