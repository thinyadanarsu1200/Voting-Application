<x-app-layout>
    <div class="flex items-center space-x-4">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-md shadow border-none">
                <option value="">All</option>
                <option value="category one">Category One</option>
                <option value="category two">Category Two</option>
                <option value="category three">Category Three</option>
                <option value="category four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-md shadow border-none">
                <option value="">Other Filters</option>
                <option value="other_filter_one">Other Filter One</option>
                <option value="other_filter_two">Other Filter Two</option>
                <option value="other_filter_three">Other Filter Three</option>
                <option value="other_filter_four">Other Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <img src="{{ asset('images/search.png') }}" alt="search" class="absolute top-1/2 left-2 -translate-y-1/2 w-5">
            <input type="search" placeholder="Find an idea" class="pr-4 py-2 pl-8 border-none shadow rounded-md w-full placeholder:text-gray-900">
        </div>
    </div>
</x-app-layout>
