<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('View Contact') }}
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto py-8 px-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6 text-gray-900">Contact Details</h1>

            <div class="space-y-4">
                <div>
                    <span class="font-medium text-gray-700">Name:</span>
                    <p class="text-gray-900">{{ $contact->name }}</p>
                </div>

                <div>
                    <span class="font-medium text-gray-700">Email:</span>
                    <p class="text-gray-900">{{ $contact->email }}</p>
                </div>

                <div>
                    <span class="font-medium text-gray-700">Phone:</span>
                    <p class="text-gray-900">{{ $contact->phone }}</p>
                </div>
            </div>

            <div class="mt-6 flex items-center gap-3">
                <a href="{{ route('contacts.edit', $contact) }}" 
                   class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md shadow hover:bg-green-700">
                    Edit
                </a>

                <a href="{{ route('contacts.index') }}" 
                   class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-md shadow hover:bg-gray-300">
                    Back
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
