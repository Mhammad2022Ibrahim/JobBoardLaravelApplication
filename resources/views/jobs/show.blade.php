<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <div class="mb-4 p-4 border rounded-lg shadow-sm">
        <h2 class="text-2xl font-bold mb-2">{{ $job['title'] }}</h2>
        <li class="text-gray-700 mb-2">Company: {{ $job['company'] }}</li>
        <li class="text-gray-700 mb-2">Location: {{ $job['location'] }}</li>
        <li class="text-gray-700 mb-2">Salary: {{ $job['salary'] }}</li>
        <li class="text-gray-700 mb-2">Description: {{ $job['description'] }}</li>
    </div>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Job</x-button>
    </p>


</x-layout>