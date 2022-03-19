<x-app-layout>
    <x-slot name="style">
        <style>
            .idea-container:last-of-type{
                margin-bottom: 5rem !important;
            }
        </style>
    </x-slot>
    <div class="flex items-center space-x-4">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-md shadow border border-transparent focus:border-blue">
                <option value="">All</option>
                <option value="category one">Category One</option>
                <option value="category two">Category Two</option>
                <option value="category three">Category Three</option>
                <option value="category four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-md shadow border border-transparent focus:border-blue">
                <option value="">Other Filters</option>
                <option value="other_filter_one">Other Filter One</option>
                <option value="other_filter_two">Other Filter Two</option>
                <option value="other_filter_three">Other Filter Three</option>
                <option value="other_filter_four">Other Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <img src="{{ asset('images/search.png') }}" alt="search" class="absolute top-1/2 left-2 -translate-y-1/2 w-5">
            <input type="search" placeholder="Find an idea" class="pr-4 py-2 pl-8 border border-transparent focus:border-blue shadow rounded-md w-full placeholder:text-gray-900">
        </div>
    </div> 

    <div class="ideas-container space-y-6 my-6">
     <div class="idea-container bg-white rounded-md flex shadow hover:shadow-card cursor-pointer">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="border border-gray-200 hover:border-gray-300 w-20 bg-gray-100 font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Vote</button>
            </div>
        </div>
        <div class="flex px-2 py-6">
            <a href="" class="flex-shrink-0">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="" class="w-14 h-14 rounded-md">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:under">
                        A random title will go here.
                    </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                </div>
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category one</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">Open</div>
                        <button class="relative flex items-center justify-center bg-gray-100 hover:bg-gray-200 h-7 transition duration-150 ease-in py-2 px-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>

                            <ul class="absolute -left-7.5 top-7.5 w-64 font-semibold bg-white shadow-dialog roundex-xl py-1 text-left ml-8">
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
    <div class="idea-container bg-white rounded-md flex shadow">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl text-blue">16</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="border border-gray-200 hover:border-gray-300 w-20 bg-blue text-white font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Voted</button>
            </div>
        </div>
        <div class="flex px-2 py-6">
            <a href="" class="flex-shrink-0">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="" class="w-14 h-14 rounded-md">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:under">
                        A random title will go here.
                    </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                </div>
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div>11 hours ago</div>
                        <div>&bull;</div>
                        <div>Category one</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-yellow text-white text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">In Progress</div>
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

    <div class="idea-container bg-white rounded-md flex shadow">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="border border-gray-200 hover:border-gray-300 w-20 bg-gray-100 font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Vote</button>
            </div>
        </div>
        <div class="flex px-2 py-6">
            <a href="" class="flex-shrink-0">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="" class="w-14 h-14 rounded-md">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:under">
                        A random title will go here.
                    </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                </div>
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category one</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-red text-white text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">Closed</div>
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

    <div class="idea-container bg-white rounded-md flex shadow">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="border border-gray-200 hover:border-gray-300 w-20 bg-gray-100 font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Vote</button>
            </div>
        </div>
        <div class="flex px-2 py-6">
            <a href="" class="flex-shrink-0">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="" class="w-14 h-14 rounded-md">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:under">
                        A random title will go here.
                    </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                </div>
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category one</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-green text-white text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">Implemented</div>
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

    <div class="idea-container bg-white rounded-md flex shadow">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="border border-gray-200 hover:border-gray-300 w-20 bg-gray-100 font-bold text-xxs uppercase rounded-md px-4 py-3 transition duration-150 ease-in">Vote</button>
            </div>
        </div>
        <div class="flex px-2 py-6">
            <a href="" class="flex-shrink-0">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="" class="w-14 h-14 rounded-md">
            </a>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:under">
                        A random title will go here.
                    </a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quasi, veritatis, facilis dolorum possimus aliquid voluptatibus enim magni officiis, nihil cupiditate numquam? Velit dignissimos, ipsam iusto corporis dolorum eum soluta, odio a animi aspernatur est nemo earum assumenda qui quasi numquam molestias amet voluptate itaque! Dolorum, accusamus quia neque aperiam dolore fugit, libero nam magnam molestiae exercitationem sint! Ipsa totam provident molestiae at, labore ab necessitatibus minima sunt, cupiditate quod praesentium fugit asperiores delectus, pariatur impedit officiis non. Voluptate cumque voluptatum neque eaque eveniet vel necessitatibus accusantium maiores. Molestiae rem culpa optio asperiores quae! Similique minima dolor impedit distinctio voluptates!
                </div>
                <div class="flex items-center justify-between mt-8">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category one</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-purple text-white text-xxs font-bold uppercase w-28 h-7 leading-none rounded-full text-center py-2 px-4">Considering</div>
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

    </div> <!-- End Ideas Container>
</x-app-layout>
