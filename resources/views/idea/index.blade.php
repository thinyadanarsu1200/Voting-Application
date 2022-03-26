<x-app-layout>
    <div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-4">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-md shadow border border-transparent focus:border-blue">
                <option value="">All</option>
                <option value="category one">Category One</option>
                <option value="category two">Category Two</option>
                <option value="category three">Category Three</option>
                <option value="category four">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-md shadow border border-transparent focus:border-blue">
                <option value="">Other Filters</option>
                <option value="other_filter_one">Other Filter One</option>
                <option value="other_filter_two">Other Filter Two</option>
                <option value="other_filter_three">Other Filter Three</option>
                <option value="other_filter_four">Other Filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <img src="{{ asset('images/search.png') }}" alt="search" class="absolute top-1/2 left-2 -translate-y-1/2 w-5">
            <input type="search" placeholder="Find an idea" class="pr-4 py-2 pl-8 border border-transparent focus:border-blue shadow rounded-md w-full placeholder:text-gray-900">
        </div>
    </div> 

    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
            <livewire:idea-index :idea="$idea" :votesCount="$idea->votes_count"/>
        @endforeach
    </div> 

    <div class="my-8">
        {{ $ideas->links() }}
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

</x-app-layout>
