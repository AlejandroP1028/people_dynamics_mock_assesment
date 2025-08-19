<x-app-layout>
    <div class="max-w-lg mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Contact Details</h1>

        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>

        <div class="mt-4">
            <a href="{{ route('contacts.edit', $contact) }}" 
               class="bg-green-500 text-white px-4 py-2 rounded">Edit</a>
            <a href="{{ route('contacts.index') }}" 
               class="ml-2 text-gray-600">Back</a>
        </div>
    </div>
</x-app-layout>
