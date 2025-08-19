<x-app-layout>
    <div class="max-w-lg mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Contact</h1>

        <form action="{{ route('contacts.update', $contact) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="name" value="Name" />
                <x-text-input id="name" type="text" name="name" value="{{ old('name', $contact->name) }}" class="w-full mt-1" required />
                <x-input-error :messages="$errors->get('name')" class="mt-1" />
            </div>

            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" type="email" name="email" value="{{ old('email', $contact->email) }}" class="w-full mt-1" required />
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <div>
                <x-input-label for="phone" value="Phone" />
                <x-text-input id="phone" type="text" name="phone" value="{{ old('phone', $contact->phone) }}" class="w-full mt-1" />
                <x-input-error :messages="$errors->get('phone')" class="mt-1" />
            </div>

            <div class="flex items-center space-x-2">
                <x-primary-button>Update</x-primary-button>
                <a href="{{ route('contacts.index') }}" class="text-gray-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
