<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-900">
            {{ __('Edit Contact') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('contacts.update', $contact) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div>
                    <x-input-label for="name" value="Name" />
                    <x-text-input id="name" type="text" name="name"
                        value="{{ old('name', $contact->name) }}"
                        class="mt-1 block w-full"
                        required />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" type="email" name="email"
                        value="{{ old('email', $contact->email) }}"
                        class="mt-1 block w-full"
                        required />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <!-- Phone -->
                <div>
                    <x-input-label for="phone" value="Phone" />
                    <x-text-input id="phone" type="text" name="phone"
                        value="{{ old('phone', $contact->phone) }}"
                        class="mt-1 block w-full" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-1" />
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-3">
                    <x-primary-button>Update</x-primary-button>
                    <a href="{{ route('contacts.index') }}"
                       class="text-gray-600 hover:text-gray-800 underline">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
