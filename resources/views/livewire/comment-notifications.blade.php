<div>
    <x-dialog align="right" width="w-76 sm:w-87.5" height="max-h-125" contentClasses="overflow-y-auto -right-11 sm:right-0">
        <x-slot name="trigger">
           <button 
           wire:click.prevent="getNotifications"
           class="relative">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                 </svg>
                 <span class="absolute bg-v-red text-white rounded-full h-5 w-5 text-xxs flex items-center justify-center -top-1 -right-1 border-2">8</span>
           </button>
        </x-slot>
        <x-slot name="content">
           <div class="space-y-4">
               @foreach ($notifications as $notification)
               <a href="{{ route('idea.show', $notification->data['idea_slug']) }}"
                class="flex space-x-4 hover:bg-gray-300 rounded-md p-2">
                    <img src="{{ $notification->data['user_avatar']}}" alt="user" class="w-10 h-10 rounded-md"/>
                    <div class="ml-4">
                        <div class="line-clamp-6">
                            <span class="font-semibold">{{ $notification->data['user_name'] }}</span>
                            commented on
                            <span class="font-semibold">{{ $notification->data['idea_title'] }}</span>
                            <span>"{{ $notification->data['comment_body'] }}"</span>
                        </div>
                        <div class="text-xs text-gray-500 mt-2">
                            {{ $notification->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </div>
                </a>
               @endforeach
           </div>
        </x-slot>
    </x-dialog>
       
   </div>