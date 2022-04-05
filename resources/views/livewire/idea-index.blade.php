<div 
        x-data="{target:null,ignores:['button','svg','path','a']}"
        @click ="
            target = $event.target.tagName.toLowerCase();
            if(!ignores.includes(target)){
                $event.target.closest('.idea-container').querySelector('.idea-link').click();            }
        "
        class="idea-container bg-white rounded-md flex shadow hover:shadow-card cursor-pointer">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl @if($hasVoted) text-v-blue @endif">{{ $votesCount}}</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    @if ($hasVoted)
                        <button 
                        wire:click.prevent="vote"
                        class="text-white hover:border-v-blue-hover w-20 bg-v-blue font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Voted</button>
                    @else
                        <button 
                        wire:click.prevent="vote" 
                        class="hover:border-gray-300 w-20 bg-gray-100 font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Vote</button>
                    @endif
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-4 md:py-6 ">
                <a href="" class="flex-shrink-0">
                    {{-- https://source.unsplash.com/200x200/?face&crop=face&v=1 --}}
                    <img src="{{ $idea->user->getAvatar() }}" alt="" class="w-14 h-14 rounded-md">
                </a>
                <div class="w-full md:mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="{{ route('idea.show',$idea) }}" class="idea-link hover:under">
                            {{ $idea->title }}
                        </a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        {{ $idea->description }}
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mt-8">
                            <div class="flex items-center text-xs font-semibold md:space-x-2 text-gray-400">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>{{ $idea->category->name }}</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 comments</div>
                            </div>
                            <div 
                            class="flex items-center space-x-2">
                                <div class="{{ Str::kebab($idea->status->name) }} text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">
                                    {{ $idea->status->name }}
                                </div>
                                {{-- <x-dropdown alignmentClasses="origin-top-right right-0 md:origin-top-left md:left-0">
                                    <x-slot name="trigger">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link>Mark as Span</x-dropdown-link>
                                        <x-dropdown-link>Mark as Delete</x-dropdown-link>
                                    </x-slot>
                                </x-dropdown> --}}
                            </div>
                            <div class="flex items-center md:hidden mt-4 md:mt-0">
                                <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                    <div class="text-sm font-bold leading-none @if($hasVoted) text-v-blue @endif">{{ $votesCount}}</div>
                                    <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                                </div>
                                @if ($hasVoted)
                                    <button 
                                    wire:click.prevent="vote"
                                    class="border border-gray-200 hover:border-v-blue-hover w-20 bg-v-blue text-white font-bold text-xxs
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
                    </div>
                </div>
            </div>
        </div>