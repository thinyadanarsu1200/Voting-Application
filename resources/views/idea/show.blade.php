<x-app-layout>
    <div>
        <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
              </svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <livewire:idea-show :idea="$idea" :votesCount="$votesCount"/>

    <livewire:idea-comments :idea="$idea" />

    <x-notification-success/>

    @push('scripts')
        
    @endpush

    @push('modals')
        <x-idea-modals :idea="$idea" />    
    @endpush


    <div class="fixed bottom-0 right-0 mr-2 mb-5">
        <x-dialog alignmentClasses="origin-bottom-right right-0" contentClasses="-top-72.5" width="w-48 md:w-104" show="block md:hidden">
            <x-slot name="trigger">
                <button type="button"
                class="flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-3xl border-blue hover:bg-blue-hover transition duration-150 ease-in text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-right mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                  </svg>
                Reply
                </button>
            </x-slot>
            <x-slot name="content">
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                            class="w-full text-sm bg-gray-100 rounded-md placeholder:text-gray-400 border border-transparent focus:border-blue transition duration-150 ease-in px-4 py-2"
                            placeholder="Go ahead, don't be shy, share your thoughts..."
                            ></textarea>
                        </div>
                        <div class="flex flex-col md:flex-row item-center md:space-x-3">
                            <button 
                            @click="open = false"
                            type="button"
                            class="flex items-center justify-center w-full md:w-1/2 h-11 text-xs bg-blue font-semibold rounded-md border-blue hover:bg-blue-hover transition duration-150 ease-in text-white">
                            Post Comment
                            </button>
                            <button 
                            @click="open = false"
                            type="button"
                            class="flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-md border-gray-200 hover:bg-gray-400 transition duration-150 ease-in mt-2 md:mt-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                 </svg>
                                 <span class="ml-1">Attach</span>
                             </button>
                        </div>
                    </form>
            </x-slot>
        </x-dialog>
    </div>
    
</x-app-layout>
