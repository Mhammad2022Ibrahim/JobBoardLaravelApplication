<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs" class="mt-10">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">

                            <x-form-input id="title" name="title" placeholder="CEO" required></x-form-input>

                            <x-form-error name="title" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="company">Company</x-form-label>
                        <div class="mt-2">

                            <x-form-input id="company" name="company" placeholder="Eurisko" required></x-form-input>

                            <x-form-error name="company" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="location">Location</x-form-label>
                        <div class="mt-2">

                            <x-form-input id="location" name="location" placeholder="Beirut"></x-form-input>

                            <x-form-error name="location" />

                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">

                            <x-form-input id="salary" name="salary" placeholder="50,000$" required></x-form-input>

                            <x-form-error name="salary" />

                        </div>
                    </x-form-field>

                    <div class="sm:col-span-4">
                        <x-form-label for="description">Description</x-form-label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                        <x-form-error name="description" />


                    </div>

                    <!-- <div class="mt-10"> 
                    @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-red-500 text-sm italic">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif  
            </div> -->

                </div>


                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <x-form-button>Save</x-form-button>
                </div>
    
            </form>





</x-layout>