<x-dialog 
event="commentWasCreated"
align="left" width="w-48 md:w-104" 
show="hidden md:block">
    <x-slot name="trigger">
        <button type="button"
        class="flex items-center justify-center w-32 h-11 text-xs bg-v-blue font-semibold rounded-md border-blue hover:bg-blue-hover transition duration-150 ease-in text-white">
        Reply
        </button>
    </x-slot>
    <x-slot name="content">
           @auth
           <form wire:submit.prevent="createComment" action="#" method="POST" class="space-y-4">
            <div>
                <textarea x-ref="body" wire:model="body" name="post_comment" id="post_comment" cols="30" rows="4"
                class="w-full text-sm bg-gray-100 rounded-md placeholder:text-gray-400 border border-transparent focus:border-blue transition duration-150 ease-in px-4 py-2"
                placeholder="Go ahead, don't be shy, share your thoughts..."
                ></textarea>
            </div>
            <div class="flex flex-col md:flex-row item-center md:space-x-3">
                <button 
            type="submit"
                class="flex items-center justify-center w-full md:w-1/2 h-11 text-xs bg-v-blue font-semibold rounded-md border-blue hover:bg-v-blue-hover transition duration-150 ease-in text-white">
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
           @else
           <div>
            <p class="font-normal">Please login or create an account to post a comment.</p>
            <div class="flex items-center space-x-3 mt-4">
                <a
                    href="{{ route('login') }}"
                    class="w-1/2 h-11 text-sm text-center bg-v-blue text-white font-semibold rounded-xl hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                >
                    Login
                </a>
                <a
                    href="{{ route('register') }}"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                >
                    Sign Up
                </a>
            </div>
        </div>
           @endauth
    </x-slot>
</x-dialog>
