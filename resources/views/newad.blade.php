<x-layout title='New ad'>
    <form method="POST" action="/newad">
        @csrf
        <div class="col-span-full">
            <x-newadbox name='Description' beskrivning='Saker'></x-newadbox>
        </div>
        <div>
            <x-newadbox name='Location' beskrivning='Saker'></x-newadbox>
        </div>
        <div>
            <x-newadbox name='Price' beskrivning='Saker'></x-newadbox>
        </div>
        <div>
            <x-newadbox name='Title' beskrivning='Saker'></x-newadbox>
        </div>
        <div>
            <x-newadbox name='Delivery' beskrivning='Saker'></x-newadbox>
        </div>
        <div>
            <x-newadbox name='Seller' beskrivning='Saker'></x-newadbox>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>
</x-layout>