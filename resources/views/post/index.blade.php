<x-app-layout> 

    <div class="container max-w-7xl mx-auto px-2 sm: px-6 lg:px-8 py-8">
        <div class="grid grid cols-3 gap-6 ">

            {{-- @dump($posts->images->url) --}}


            @foreach ($posts as $post)

            {{-- se debe llamar al metodo --}}
                {{ $post->user->id }} 

                <article class="w-full h-40 bg-cover bg-center @if($loop->first) col-span-2 @endif" style="background-image: blue ">
                    <div class="w-full h-full px-8 flex flez-col justify-center">
                        <div>
                            {{-- {{ $post->users->user_id }} --}}
                        </div>
                        <h1 class="text-4xl text-blue-500 leading-8 font-bold">
                            <a href=""></a>
                        </h1>


                    </div>
                </article>
            @endforeach


        </div>
    </div>

</x-app-layout>
