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
          <input type="search" placeholder="Find an Idea" class="w-full rounded-xl border-none placeholder-gray-900 bg-white px-4 py-2 pl-8">
          <div class="absolute top-0 flex items-center h-full ml-2">

              <svg class="w-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" ><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>

          </div>
      </div>
  </div>
</x-app-layout>
