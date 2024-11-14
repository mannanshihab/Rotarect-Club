<div>
    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Card Section -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6">
                        @forelse ($events as $event)
                            <a href="#">
                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                                    <div class="p-4 md:p-5 flex gap-x-4">
                                        <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                            </svg>  
                                        </div>

                                        <div class="grow">
                                            <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500">
                                                {{$event->name}}
                                            </p>
                                            <div class="hs-tooltip">
                                                <div class="hs-tooltip-toggle">
                                                    <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                                        
                                                    </span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="mt-3 flex items-center gap-x-2">
                                            
                                            <span class="inline-flex items-center gap-x-1 py-0 px-2 rounded-full bg-green-100 text-green-900">
                                                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                                <span class="inline-block text-xs font-medium">
                                                {{$event->date}}
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </a>
                        @empty
                            <div class="bg-white border px-4 py-5 text-center text-green-950 shadow-sm rounded-xl">
                                <p>Empty</p>
                            </div> 
                        @endforelse
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Section -->
            </div>
        </div>
    </div>
</div>

