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

    @push('modals')
        <x-idea-modals :idea="$idea" />    
    @endpush

    <div class="comments-container relative space-y-4 md:space-y-6 md:ml-22 mb-8 mt-1 pt-6">
        <div class="comment-container relative bg-white rounded-md flex shadow">
            <div class="flex flex-col md:flex-row px-2 py-6 ml-4">
                <a href="" class="flex-shrink-0">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="" class="w-14 h-14 rounded-md">
                </a>
                <div class="md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:under">
                            A random title will go here.
                         </a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                    </div>
                    <div class="flex items-center justify-between mt-8">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <x-dropdown alignmentClasses="origin-top-right right-0 md:origin-top-left md:left-0">
                                <x-slot name="trigger">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link>Mark as Span</x-dropdown-link>
                                    <x-dropdown-link>Mark as Delete</x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="comment-container is-admin relative bg-white flex rounded-lg shadow mt-4">
            <div class="flex flex-1 px-4 py-6">
              <div class="flex-shrink-0">
                <a href="#">
                  <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="" class="w-14 h-14 rounded-md">
                  <span class="text-blue font-bold uppercase text-xxs text-center block mt-1">Admin</span>
                </a>
              </div>
              <div class="ml-4 flex-1">
                <h4 class="text-xl font-semibold">
                  <a href="#" class="hover:underline">
                    Status Changed to "Consideration"
                  </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
                <div class="flex items-center justify-between mt-6">
                  <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                    <div class="font-bold text-blue">John Doe</div>
                    <div>&bull;</div>
                    <div>10 hours ago</div>
                  </div>
                  <div class="flex items-center space-x-2">
                    <button class="relative bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center h-7 transition duration-150 ease-in py-2 
                      px-3">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                      </svg>
        
                      <ul class="hidden absolute -left-7.5 top-6 w-44 font-semibold bg-white shadow-dialog rounded-xl py-1 text-left ml-8">
                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as spam</a></li>
                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as delete</a></li>
                      </ul>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End comment Container -->

        <div class="comment-container relative bg-white rounded-md flex shadow">
            <div class="flex px-2 py-6 ml-4">
                <a href="" class="flex-shrink-0">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="" class="w-14 h-14 rounded-md">
                </a>
                <div class="mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:under">
                            A random title will go here.
                        </a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                    </div>
                    <div class="flex items-center justify-between mt-8">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative flex items-center justify-center bg-gray-100 hover:bg-gray-200 h-7 transition duration-150 ease-in py-2 px-3 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
    
                                <ul class="absolute -left-7.5 top-7.5 w-64 font-semibold bg-white shadow-lg roundex-xl py-1 text-left ml-8">
                                    <li>
                                        <a href="" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as Span</a>
                                        <a href="" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">Mark as Delete</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

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
