<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Últimos posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($posts as $post)
                        <a href="socialmedia.com/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <div class="px-6 py-4">
                              <p class="text-gray-700 text-base">
                                {{ $post->post_content }}
                              </p>
                            </div>
                          </div>
                          <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
