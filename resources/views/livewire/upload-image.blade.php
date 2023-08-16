<div>
    <div class="">
        <form wire:submit.prevent="store" class="flex flex-row">
            <label for="image"></label>
            <input type="file"
                   accept="image/*"
                   id="image"
                   wire:model="image"
                   class="w-64 md:w-128 lg:w-128 text-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                        file:bg-transparent file:border-0
                        file:bg-gray-100 file:mr-4
                        dark:file:bg-gray-700 dark:file:text-gray-400">
            <button type="submit" class="w-32 md:w-32 lg:w-32 ml-6 justify-center btn-primary bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
            @error('image')
                <p class="w-32 md:w-64 lg:w-64 txt-error ml-8 items-center align-middle">
                    {{ $message }}
                </p>
            @enderror
        </form>
    </div>
</div>
