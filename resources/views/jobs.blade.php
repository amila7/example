<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    @foreach ($jobs as $job )
    <li>
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            {{ $job['title'] }}:pays {{ $job['salary'] }}per year.
        </a>

    </li>
    @endforeach
</x-layout>
