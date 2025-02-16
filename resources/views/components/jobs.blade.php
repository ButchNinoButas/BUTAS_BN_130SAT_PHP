<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </a>
            </li>
                </div>
            </a>
        @endforeach
    </ul>
    </div>
</x-layout>