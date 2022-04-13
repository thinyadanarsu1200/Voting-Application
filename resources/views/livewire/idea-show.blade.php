<div class="idea-and-buttons container">
    <div class="idea-container bg-white rounded-md flex shadow mt-4">
        <div class="flex flex-1 flex-col md:flex-row px-2 py-6 ml-4">
            <a href="" class="flex-shrink-0 mx-2 md:mx-0">
                <img src="{{ $idea->user->getAvatar() }}" alt="" class="w-14 h-14 rounded-md">
            </a>
            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:under">
                        {{ $idea->title }}
                    </a>
                </h4>
                @admin
                    @if ($idea->spam_reports > 0)
                        <p class="text-red-500  mb-2 text-sm">Spam Reports - {{ $idea->spam_reports }}</p>
                    @endif
                @endadmin
                <div class="text-gray-600 mt-3 line-clamp-3">
                    {{ $idea->description }}
                </div>
                
                <div class="flex md:flex-row md:items-center md:justify-between mt-8">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>{{ $idea->category->name }}</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">{{ $this->idea->comments()->count() }} comments</div>
                    </div>
                    <div class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="{{ Str::kebab($idea->status->name) }} text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">
                            {{ $idea->status->name }}
                        </div>
                        @auth
                            <x-dropdown alignmentClasses="origin-top-right right-0 md:origin-top-left md:left-0">
                                    <x-slot name="trigger">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </x-slot>
                                    <x-slot name="content">
                                        @can('update', $idea)
                                        <x-dropdown-link
                                        href="#"
                                        @click.prevent="
                                            isOpen = false
                                            $dispatch('custom-show-edit-modal')
                                        "
                                        >
                                                Edit Idea
                                            </x-dropdown-link>
                                        @endcan

                                        @can('delete', $idea)
                                        <x-dropdown-link
                                        href="#"
                                        @click.prevent="
                                            isOpen = false
                                            $dispatch('custom-show-delete-modal')
                                        "
                                        >
                                            Delete Idea
                                        </x-dropdown-link>
                                        @endcan

                                        <x-dropdown-link
                                        href="#"
                                        @click.prevent="
                                            isOpen = false
                                            $dispatch('custom-show-mark-idea-as-spam-modal')
                                        "
                                        >
                                            Mark as Spam
                                        </x-dropdown-link>

                                        @admin
                                            @if ($idea->spam_reports > 0)
                                            <x-dropdown-link
                                            href="#"
                                            @click.prevent="
                                                isOpen = false
                                                $dispatch('open-reset-spam-report-modal')
                                            "
                                            >
                                                Reset spam reports
                                            </x-dropdown-link>
                                            @endif
                                        @endadmin
                                    </x-slot>
                            </x-dropdown>
                        @endauth
                    </div>
                </div>   
            </div>
        </div>
    </div> 

      {{-- Mobile --}}
      <div class="flex items-center md:hidden mt-4 md:mt-0">
        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
            <div class="text-sm font-bold leading-none
            @if($hasVoted) text-v-blue @endif">{{ $votesCount }}</div>
            <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
        </div>
       @if ($hasVoted)
            <button 
            wire:click.prevent="vote"
            class="border bg-v-blue text-white border-gray-200 hover:border-v-blue-hover w-20  font-bold text-xxs
            uppercase rounded-xl px-4 py-3 transition duration-150 ease-in -mx-5">
            Voted
            </button>
       @else
            <button
            wire:click.prevent="vote"
            class="border border-gray-200 hover:border-gray-300 w-20 bg-gray-200 font-bold text-xxs
            uppercase rounded-xl px-4 py-3 transition duration-150 ease-in -mx-5">
            Vote
            </button>
       @endif
    </div> 

    {{-- Button Container --}}
    
    <div class="buttons-container flex items-center justify-between mt-6 ">
        <div class="flex flex-col md:flex-row items-center space-x-3 ml-0 md:ml-6">
           <livewire:create-comment :idea="$idea"/>
            @can('change status')
           <livewire:set-status :idea="$idea"/>
            @endcan
        </div>
        <div class="hidden md:flex items-center space-x-3">
            <div class="bg-white font-semibold rounded-md px-3 py-2">
                <div class="text-xl leading-snug @if($hasVoted) text-v-blue @endif">{{ $votesCount }}</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            @if ($hasVoted)
            <button
            wire:click.prevent="vote"
            type="button"
            class="flex items-center justify-center w-36 h-11 text-xs bg-v-blue text-white font-semibold rounded-md border-gray-200 hover:bg-v-blue-hover transition duration-150 ease-in">
            <span class="uppercase text-xs">Voted</span>
            </button>   
            @else
            <button 
            wire:click.prevent="vote"
            type="button"
            class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-md border-gray-200 hover:bg-gray-400 transition duration-150 ease-in">
            <span class="uppercase text-xs">Vote</span>
            </button>
            @endif
        </div>
    </div>
</div>
