<form wire:submit.prevent="createIdea" method="POST" class="space-y-4 px-4 py-6">
    <div>
        <input wire:model="title" type="text" class="border-transparent focus:border-v-blue text-sm w-full bg-gray-100 rounded-md placeholder:text-gray-900 px-4 py-2"
        placeholder="Your Idea">
        @error('title')
            <p class="mt-1 text-red text-xs">{{ $message }}</p>
        @enderror
    </div>
   <div>
    <select wire:model.defer="category_id" name="category_id" id="category_id" class="border-transparent focus:border-v-blue text-sm w-full bg-gray-100 rounded-md placeholder:gray-900 px-4 py-2">
        <option value="0">Choose Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
            <p class="mt-1 text-red text-xs">{{ $message }}</p>
        @enderror
   </div>
   <div>
       <textarea wire:model="description" name="idea" id="idea" cols="30" rows="4" class="border-transparent focus:border-v-blue text-sm w-full bg-gray-100 rounded-md placeholder:text-gray-900 px-4 py-2" 
       placeholder="Describe your idea...."></textarea>
       @error('description')
            <p class="mt-1 text-red text-xs">{{ $message }}</p>
        @enderror
   </div>
   <div class="flex items-center justify-between space-x-3">
       <button type="button"
       class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-md border-gray-200 hover:bg-gray-400 transition duration-150 ease-in">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
            </svg>
            <span class="ml-1">Attach</span>
        </button>
        <button type="submit"
        class="flex items-center justify-center w-1/2 h-11 text-xs bg-v-blue font-semibold rounded-md border-v-blue hover:bg-v-blue-hover transition duration-150 ease-in text-white">
            Submit
        </button>
   </div>

     {{-- <x-alert status="success" :message="session('success')"/> --}}

</form>
