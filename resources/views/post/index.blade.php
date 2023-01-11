<x-app-layout>

    <div class="container max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">

            {{-- @dump($posts->images->url) --}}


            @foreach ($posts as $post)
                <article class="w-full h-40 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif"
                    style="background-image: blue ">
                    <div class="w-full h-full px-8 flex flez-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                            
                        </div>
                        <h1 class="text-4xl text-blue-500 leading-8 font-bold">
                            <a href="{{ route('posts.show', $post)}}">
                            {{-- se debe llamar al metodo --}}
                            {{ $post->name }}

                            </a>
                        </h1>


                    </div>
                </article>
            @endforeach


        </div>

        <div>
            {{ $posts->links() }}
        </div>

    </div>

</x-app-layout>
