<div>
   <livewire:custom-filter/>

    <div class="ideas-container space-y-6 my-6">
        @forelse ($ideas as $idea)
            <livewire:idea-index :key="$idea->id" :idea="$idea" :votesCount="$idea->votes_count"/>
        @empty
        <div class="mx-auto w-70 mt-12">
            <img src="{{ asset('images/no-ideas.svg') }}" alt="No Ideas" class="mx-auto" style="mix-blend-mode: luminosity">
            <div class="text-gray-400 text-center font-bold mt-6">No ideas were found...</div>
        </div>
        @endforelse
    </div> 

    <div class="my-8">
        {{-- {{ $ideas->links() }} --}}
        {{ $ideas->appends(request()->query())->links() }}
    </div>

    
    <div class="fixed bottom-0 right-0 mr-2 mb-5">
        <x-dialog alignmentClasses="origin-bottom-right right-0" contentClasses="-top-122" width="w-72.5" show="block md:hidden">
            <x-slot name="trigger">
                <button type="button"
                class="flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-3xl border-blue hover:bg-blue-hover transition duration-150 ease-in text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-right mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                  </svg>
                Add an Idea
                </button>
            </x-slot>
            <x-slot name="content">
                    <div class="bg-white rounded-lg shadow md:sticky">
                        <div class="text-center px-6 py-2 pt-6">
                            <h3 class="font-semibold text-base">Add an idea</h3>
                            <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>
                        </div>

                        <form action="" method="POST" class="space-y-4 px-4 py-6">
                            <div>
                                <input type="text" class="border-transparent focus:border-blue text-sm w-full bg-gray-100 rounded-md placeholder:text-gray-900 px-4 py-2"
                                placeholder="Your Idea">
                            </div>
                           <div>
                            <select name="add_category" id="add_category" class="border-transparent focus:border-blue text-sm w-full bg-gray-100 rounded-md placeholder:gray-900 px-4 py-2">
                                <option value="">Choose Category</option>
                                <option value="other_filter_one">Category One</option>
                                <option value="other_filter_two">Category Two</option>
                                <option value="other_filter_three">Category Three</option>
                                <option value="other_filter_four">Category Four</option>
                            </select>
                           </div>
                           <div>
                               <textarea name="idea" id="idea" cols="30" rows="4" class="border-transparent focus:border-blue text-sm w-full bg-gray-100 rounded-md placeholder:text-gray-900 px-4 py-2" 
                               placeholder="Describe your idea...."></textarea>
                           </div>
                           <div class="flex items-center justify-between space-x-3">
                               <button type="button"
                               class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-md border-gray-200 hover:bg-gray-400 transition duration-150 ease-in">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Attach</span>
                                </button>
                                <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-md border-blue hover:bg-blue-hover transition duration-150 ease-in text-white">
                                    Submit
                                </button>
                           </div>
                        </form>
                    </div>
            </x-slot>
        </x-dialog>
    </div>
</div>
