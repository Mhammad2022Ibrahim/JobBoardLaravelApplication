<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <!-- <h1 class="text-4xl lg:text-6xl font-extrabold mb-6">This is the about page</h1> -->

    <div class="space-y-6">
    @foreach ($jobs as $job)

        <!-- <div class="mb-4 p-4 border rounded-lg shadow-sm"> -->
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:bg-gray-50">
            <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name ?? 'N/A' }}</div>    
            <h2 class="text-2xl font-bold mb-2">{{ $job['title'] }}</h2>
                <li class="text-gray-700 mb-2"><strong>Company: </strong>{{ $job['company'] }}</li>
            <li class="text-gray-700 mb-2"><strong>Location: </strong>{{ $job['location'] }}</li>
            <li class="text-gray-700 mb-2"><strong>Employer: </strong>{{ $job->employer->name ?? 'N/A' }}</li>
            <li class="text-gray-700 mb-2"><strong>Salary: </strong>{{ $job['salary'] }}</li>
            <li class="text-gray-700 mb-2"><strong>Description: </strong>{{ $job['description'] }}</li>
            </a>
            
        <!-- </div> -->
    @endforeach

    <div class="mt-6">
        {{ $jobs->links() }} <!-- for pagination-->

    </div>

</x-layout>