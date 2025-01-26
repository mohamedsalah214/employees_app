@props(['employee'])

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">#{{ $employee->id }}</th>
    <td class="px-6 py-4">{{ $employee->first_name }}</td>
    <td class="px-6 py-4">{{ $employee->last_name }}</td>
    <td class="px-6 py-4">{{ $employee->phone }}</td>
    <td class="px-6 py-4">{{ $employee->address }}</td>
    <td class="px-6 py-4">
        <div class="flex space-x-2">
            <a href="{{ route('employees.show', $employee->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">More Details</a>
            <a href="{{ route('employees.edit', $employee->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
        </div>
    </td>
</tr>
