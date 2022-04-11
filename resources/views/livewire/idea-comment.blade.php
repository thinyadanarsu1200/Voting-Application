<div class="comment-container relative bg-white border border-transparent rounded-md flex shadow">
    <div class="flex flex-1 flex-col md:flex-row px-2 py-6 ml-4">
        <a href="" class="flex-shrink-0">
            <img src="{{ $comment->user->getAvatar() }}" alt="" class="w-14 h-14 rounded-md">
        </a>
        <div class="flex-1 md:mx-4">
            <div class="text-gray-600">
                {{ $comment->body }}
            </div>
            <div class="flex items-center justify-between mt-8">
                <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                    <div class="font-bold text-gray-900">{{ $comment->user->name }}</div>
                    <div>&bull;</div>
                   @if ($comment->user_id === $comment->idea->user_id)
                        <abbr 
                        class="rounded-full py-2 px-4 bg-gray-100 text-gray-400 border hover:border-gray-300 cursor-pointer no-underline"
                        title="Original Poster"
                        >
                        OP
                        </abbr>
                        <div>&bull;</div>
                   @endif
                    <div>{{ $comment->created_at->diffForHumans() }}</div>
                </div>
                <div class="flex items-center space-x-2">
                  @auth
                  <x-dropdown alignmentClasses="origin-top-right right-0 md:origin-top-left md:left-0">
                    <x-slot name="trigger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                    </x-slot>
                    <x-slot name="content">
                        @can('update',$comment)
                            <x-dropdown-link
                            href="#"
                            @click.prevent="
                                isOpen = false
                                Livewire.emit('setEditComment',{{ $comment->id }})
                                {{-- $dispatch('custom-show-delete-modal') --}}
                            "
                            >
                                Edit Comment
                            </x-dropdown-link>
                        @endcan
                        @can('delete',$comment)
                            <x-dropdown-link
                            href="#"
                            @click.prevent="
                                isOpen = false
                                Livewire.emit('setDeleteComment',{{ $comment->id }})
                                {{-- $dispatch('custom-show-delete-modal') --}}
                            "
                            >
                                    Delete Comment
                            </x-dropdown-link>
                        @endcan
                        <x-dropdown-link>Mark As Span</x-dropdown-link>
                    </x-slot>
                </x-dropdown>
                  @endauth
                </div>
            </div>
        </div>
    </div>
</div> 