<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Team -->
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Title -->
                    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">Our Members</h2>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Creative people</p>
                    </div>
                    <!-- End Title -->
                
                    <!-- Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Start Col -->
                        @forelse ($users as $user)
                            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200">
                                <div class="flex items-center gap-x-4">
                                    @if($user->avatar == "")
                                        <img class="rounded-full size-20" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                                    @else
                                        <img class="rounded-full size-20" src="{{ $user->avatar }}" alt="Avatar">
                                    @endif
                                    <div class="grow">
                                        <h3 class="font-medium text-gray-800">
                                        {{$user->name}}
                                        </h3>
                                        <p class="text-xs uppercase text-gray-500">
                                            {{ $user->info ? $user->info->designation : 'Memberrr' }}
                                        </p>
                                    </div>
                                </div>
                                
                                <p class="mt-3 text-gray-500">
                                    {{ $user->info ? $user->info->bio : 'I am an ambitious workaholic, but apart from that, pretty simple person.' }}
                                </p>
                                <!-- Social Brands -->
                                <div class="mt-3 space-x-1">
                                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " href="{{  $user->info ? $user->info->facebook : '#'}}" target="_blank">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" viewBox="0 0 16 16">
                                            <path d="M8.001 0C3.582 0 0 3.582 0 8.001c0 3.993 2.925 7.307 6.75 7.93v-5.608H4.897V8.001h1.853V6.275c0-1.837 1.08-2.853 2.737-2.853.793 0 1.619.142 1.619.142v1.78h-.912c-.899 0-1.18.558-1.18 1.129v1.328h2.012l-.321 2.322H8.015v5.609C11.925 15.308 15 11.994 15 8.001 15 3.582 11.418 0 8.001 0z"/>
                                        </svg>
                                    </a>
                                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " href="{{  $user->info && $user->info->whatsapp ? 'https://wa.me/' . $user->info->whatsapp : '#' }}" target="_blank">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.672.149-.198.297-.767.967-.94 1.166-.173.198-.347.223-.644.074-.297-.148-1.255-.462-2.39-1.475-.882-.785-1.48-1.753-1.653-2.05-.173-.297-.018-.457.13-.606.133-.132.297-.347.446-.52.15-.173.198-.297.298-.496.099-.198.05-.372-.025-.521-.074-.148-.672-1.591-.922-2.18-.242-.582-.487-.502-.672-.512l-.573-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.478 1.065 2.875 1.213 3.074c.148.198 2.098 3.2 5.077 4.487.709.306 1.261.489 1.691.626.71.225 1.356.193 1.866.117.569-.085 1.758-.719 2.006-1.412.248-.694.248-1.29.173-1.412-.075-.123-.273-.198-.573-.347z"/>
                                            <path fill-rule="evenodd" d="M12 2c-5.523 0-10 4.477-10 10 0 1.745.458 3.383 1.26 4.804L2 22l5.5-1.26A9.953 9.953 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zM20 12c0 4.418-3.582 8-8 8-.995 0-1.951-.145-2.856-.415l-.856.196-2.35.54.517-2.273.16-.704-.377-.622C5.696 15.261 5 13.693 5 12c0-4.418 3.582-8 8-8s8 3.582 8 8z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " href="#">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
                                        </svg>
                                    </a>
                                </div>
                                <!-- End Social Brands -->
                            </div>
                        @empty
                            <p>No Data </p>
                        @endforelse
                        <!-- End Col -->
                        
                    </div>
                    <!-- End Grid -->
                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                </div>
                <!-- End Team -->
            </div>
        </div>
    </div>
</div>
