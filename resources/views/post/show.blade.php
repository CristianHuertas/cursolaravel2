<x-app-layout>
    <div class="container max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-gray-500 ">{{ $post->name }}</h1>
        <div class="text-lg text-gray-500 mb-2 ">
            {!! $post->extract !!}
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 ">
            {{-- contenido principal --}}
            <div class="md:col-span-2 lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                            alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2015/05/28/23/12/auto-788747_960_720.jpg"
                            alt="">
                    @endif


                    {{-- <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                        alt=""> --}}

                        <img class="w-full h-80 object-cover object-center" src=""
                        alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {{ $post->body }}
                </div>

            </div>

            {{-- contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-500 mb-4">Mas en {{ $post->category->name }}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar) }}">
                                {{-- <img class="w-36 h-20 object-cover object-center" src="{{ Storage::url($similar->image->url) }}"
                                    alt=""> --}}
                                    <img class="w-36 h-20 object-cover object-center" src=""
                                    alt="">
                                <span class="ml-2 text-gray-600">{{ $similar->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>


            </aside>
        </div>
    </div>


</x-app-layout>
