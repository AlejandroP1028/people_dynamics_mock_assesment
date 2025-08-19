<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">
        <div class="flex flex-row justify-between items-center ">
<h1 class="text-2xl font-bold mb-4">Contacts</h1>

        <a href="{{ route('contacts.create') }}" class="bg-blue-800 text-white px-4 py-2 rounded">
            Add Contact
        </a>
        </div>
        

        <table class="w-full mt-6 border-collapse border border-gray-200 bg-white ">
            <thead >
                <tr class="bg-white">
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Phone</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td class="border px-4 py-2">{{ $contact->name }}</td>
                        <td class="border px-4 py-2">{{ $contact->email }}</td>
                        <td class="border px-4 py-2">{{ $contact->phone }}</td>
                        <td class="border px-4 py-2 space-x-2">
                            <a href="{{ route('contacts.show', $contact) }}" class="text-blue-500">View</a>
                            <a href="{{ route('contacts.edit', $contact) }}" class="text-green-500">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
