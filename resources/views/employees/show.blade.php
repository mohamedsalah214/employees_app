<x-layouts.app>

<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="mx-auto max-w-5x1 py-32 sm:py-48 lg:py-10">
        <div class="relative overflow-x-auto mt-10">
            <div>Employee #ID: {{ $employee->id }}</div>
            <div>First Name: {{ $employee->first_name }}</div>
            <div>Last Name: {{ $employee->last_name }}</div>
            <div>Phone Number: {{ $employee->phone }}</div>
            <div>Address: {{ $employee->address }}</div>
            <div>Notes: {{ $employee->notes }}</div>
        </div>
        <div class="flex space-x-2 max-w-sm mx-auto mt-10">
            <a href="{{ route('employees.edit', $employee->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
        </div>
    </div>
</div>

</x-layouts.app>
