<div class="gallery-bg overflow-auto">
    <div class="grid grid-cols-2 md:grid-cols-3 sm:grid-cols-1 gallery-layout">
        @foreach($images as $image)
            <div class="gallery-image relative aspect-square max-w-sm">
                <img class="h-full w-auto object-cover rounded-lg" src="{{ $image->url }}" alt="{{ $image->alt }}">

                <button type="button" class="absolute top-0 right-0 m-2 text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                        <g clip-path="url(#clip0_5_195)">
                            <path d="M5.71653 0C4.36072 0 3.00711 0.541961 1.98438 1.62655C-0.0609727 3.79558 -0.0584153 7.26835 1.98438 9.43891L9.82048 17.7672C9.96072 17.9158 10.1553 18 10.3586 18C10.5619 18 10.7565 17.9158 10.8967 17.7672C13.5116 14.9941 16.1256 12.2197 18.7403 9.44686C20.7857 7.27769 20.7857 3.80373 18.7403 1.63449C16.695 -0.534677 13.3137 -0.534677 11.2685 1.63449L10.3625 2.59633L9.44881 1.62661C8.42615 0.542028 7.0725 6.62261e-05 5.71666 6.62261e-05L5.71653 0ZM5.71653 1.47015C6.67145 1.47015 7.62444 1.86569 8.37241 2.65875L9.82808 4.19927V4.19939C9.96845 4.34802 10.1629 4.43209 10.3663 4.43209C10.5696 4.43209 10.7641 4.34801 10.9044 4.19939L12.3524 2.66662C13.8482 1.08031 16.1685 1.08031 17.6643 2.66662C19.16 4.25294 19.16 6.82794 17.6643 8.41439C15.2294 10.9965 12.7973 13.5817 10.3626 16.1642L3.06091 8.40677C1.56589 6.81824 1.56513 4.24512 3.06091 2.65901C3.80875 1.86585 4.76187 1.47041 5.71679 1.47041L5.71653 1.47015Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_5_195">
                                <rect width="19.823" height="18" fill="white" transform="translate(0.451324)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>

                <div class="-mt-20 h-20 w-full shadow-lg align-middle rounded-lg text-center overflow-hidden backdrop-blur-md">
                    <div class="grid grid-cols-2 grid-rows-1 gap-0 content-center pt-5 gallery-buttons">
                        <a href="#" class="btn-info rounded-full px-5 py-2.5 mr-2 mb-2">
                            Manage
                        </a>
                        <a href="#" class="ml-2 btn-delete rounded-full px-5 py-2.5 mr-2 mb-2">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
