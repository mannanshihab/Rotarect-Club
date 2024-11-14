<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Card Section -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                        <!-- Card -->
                        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg class="shrink-0 size-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                        
                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500">
                                        Total users
                                    </p>
                                    <div class="hs-tooltip">
                                        <div class="hs-tooltip-toggle">
                                        <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                            The number of all users
                                        </span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mt-1 flex items-center gap-x-2">
                                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                        {{$total_users}}
                                    </h3>
                                    <span class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900">
                                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                                        <span class="inline-block text-xs font-medium">
                                        12.5%
                                        </span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                            <div class="p-4 md:p-5 flex gap-x-4">
                                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                                    <svg class="shrink-0 size-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                        
                                <div class="grow">
                                    <div class="flex items-center gap-x-2">
                                    <p class="text-xs uppercase tracking-wide text-gray-500">
                                        Active users
                                    </p>
                                    <div class="hs-tooltip">
                                        <div class="hs-tooltip-toggle">
                                        <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm" role="tooltip">
                                            The number of active users
                                        </span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mt-1 flex items-center gap-x-2">
                                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                                            {{$total_active}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Card Section -->
            </div>
        </div>
    </div>
</div>
