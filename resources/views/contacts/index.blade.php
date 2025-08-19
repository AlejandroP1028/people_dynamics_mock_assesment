<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <x-slot name="header">
            <h2 class="text-xl font-semibold text-gray-900">
                {{ __('Contacts') }}
            </h2>
        </x-slot>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Contact List</h3>
                <a href="{{ route('contacts.create') }}" 
                   class="inline-flex items-center rounded-md bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Add Contact
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 font-medium text-gray-600 border-b">Name</th>
                            <th class="px-6 py-3 font-medium text-gray-600 border-b">Email</th>
                            <th class="px-6 py-3 font-medium text-gray-600 border-b">Phone</th>
                            <th class="px-6 py-3 font-medium text-gray-600 border-b text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($contacts as $contact)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-3 text-gray-900">{{ $contact->name }}</td>
                                <td class="px-6 py-3 text-gray-700">{{ $contact->email }}</td>
                                <td class="px-6 py-3 text-gray-700">{{ $contact->phone }}</td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex w-full space-x-2 justify-end">
                                        <a href="{{ route('contacts.show', $contact) }}" 
                                           class="inline-flex items-center rounded-md bg-blue-500 px-3 py-1.5 text-xs font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            View
                                        </a>
                                        <a href="{{ route('contacts.edit', $contact) }}" 
                                           class="inline-flex items-center rounded-md bg-green-500 px-3 py-1.5 text-xs font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                                            Edit
                                        </a>
                                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" 
                                              onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="inline-flex items-center rounded-md bg-red-500 px-3 py-1.5 text-xs font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
