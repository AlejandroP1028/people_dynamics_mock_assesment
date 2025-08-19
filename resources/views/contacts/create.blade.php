<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Contact
        </h2>
    </x-slot>

    <div class="max-w-lg mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Add Contact</h1>

        <form action="{{ route('contacts.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name"
                    class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>

            <div>
                <input type="email" name="email" placeholder="Email"
                    class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300" required>
            </div>

            <div>
                <input type="text" name="phone" placeholder="Phone"
                    class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300">
            </div>

            <div class="flex items-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition">
                    Save
                </button>
                <a href="{{ route('contacts.index') }}" class="ml-4 text-gray-600 hover:text-gray-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
