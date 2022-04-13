<div class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-4">
    <div class="w-full md:w-1/3">
        <select wire:model="category" name="category" id="category" class="w-full rounded-md shadow border border-transparent focus:border-blue">
            <option value="">All Categories</option>
            @foreach ($categories as $category)
            <option value="{{ $category->slug }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="w-full md:w-1/3">
        <select wire:model="filter" name="other_filters" id="other_filters" class="w-full rounded-md shadow border border-transparent focus:border-blue">
            <option value="">No Filters</option>
            <option value="top-voted">Top Voted</option>
            <option value="my-ideas">My Ideas</option>
            @admin
                <option value="spam-reports">Spam Ideas</option>
                <option value="spam-comments">Spam Comments</option>
            @endadmin
        </select>
    </div>
    <div class="w-full md:w-2/3 relative">
        <img src="{{ asset('images/search.png') }}" alt="search" class="absolute top-1/2 left-2 -translate-y-1/2 w-5">
        <input wire:model="search" type="search" placeholder="Find an idea" class="pr-4 py-2 pl-8 border border-transparent focus:border-blue shadow rounded-md w-full placeholder:text-gray-900">
    </div>
</div> 
