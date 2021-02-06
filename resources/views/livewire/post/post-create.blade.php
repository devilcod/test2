<div>
    <div class=" m-4 md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Blog Post</h3>
            <p class="mt-1 text-sm text-gray-600">
              Create the blog to post
            </p>
          </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
          <form action="#" method="POST" wire:submit.prevent="createPost" multipart-form-data>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                  <div class="col-span-3 sm:col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">
                      Title
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="title" id="title" wire:model="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="input the title here">
                    </div>
                  </div>
                </div>
    
                <div>
                  <label for="about" class="block text-sm font-medium text-gray-700">
                    Body
                  </label>
                  <div class="mt-1">
                    <textarea id="body" name="body" wire:model="body" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="the body of the content type here"></textarea>
                  </div>
                  <p class="mt-2 text-sm text-gray-500">
                    Write the whole description
                  </p>
                </div>             
                <div>
                  <label class="block text-sm font-medium text-gray-700">
                    Thumbnail
                  </label>
                  <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                          <span>Upload a file</span>
                          <input id="file-upload" name="thumbnail" type="file" wire:model="thumbnail" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                      </div>
                      <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                      </p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!--<div wire:loading wire:target="thumbnail">Uploading...</div> -->
              <button type = "submit" class = "inline-flex items-center px-4 py-2 m-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                  Submit
              </button>
            </div>
          </form>
        </div>
      </div>
</div>
