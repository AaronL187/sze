<x-app-layout>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                @foreach($jobs as $job)
                    <li class="p-3 border-b hover:bg-gray-200">
                        <a href="#" class="text-xl font-bold flex items-center">
                            {!! $job->company->logo !!}
                            <div class="mr-5">
                                <h2 class="mt-0 mb-2 text-3xl font-medium leading-tight text-primary">
                                    {{ $job->name }}
                                </h2>
                                <h5 class="mt-0 mb-2 text-xl font-medium leading-tight text-primary">
                                    {{ $job->company->name }}
                                </h5>
                            </div>
                            <div>
                            <span class="inline-block rounded border-2 border-primary px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-primary-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"                            >
                                PHP
                            </span>
                            </div>
                            <span class="ml-auto border border-1 border-gray-500 p-3 text-gray-500">
                                {{ $job->salary }}
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</x-app-layout>
