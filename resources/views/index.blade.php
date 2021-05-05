<x-app-layout>
    <div class="filter flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="filter_id" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Filter One</option>
                <option value="Category One">Filter Tow</option>
                <option value="Category One">Filter Three</option>
                <option value="Category One">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea"
                   class="w-full rounded-xl border-none placeholder-gray-900 bg-white px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">

                <svg class="w-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>

            </div>
        </div>
    </div>

    <div class="ideas-container  space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card  transition duration-150 ease-in  bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 transition duration-150 ease-in text-sm  border border-gray-200 hover:border-gray-400 font-bold text-xs uppercase rounded-xl px-4 py-3">
                            Vote
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="{{asset('img/profile-card.svg')}}" alt="" class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>

                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="w-4 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                </svg>
                                <ul class="absolute p-4 ml-8 w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 block transition duration-150">Make as
                                            Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 block transition duration-150">Delet
                                            Post</a>
                                    </li>
                                </ul>
                            </button>

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>
</x-app-layout>
