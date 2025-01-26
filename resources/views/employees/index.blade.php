<x-layouts.app>

<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="mx-auto max-w-5x1 py-32 sm:py-48 lg:py-10">
        <div class="relative overflow-x-auto mt-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Employee #ID</th>
                        <th scope="col" class="px-6 py-3">First Name</th>
                        <th scope="col" class="px-6 py-3">Last Name</th>
                        <th scope="col" class="px-6 py-3">Phone Number</th>
                        <th scope="col" class="px-6 py-3">Address</th>
                        <th scope="col" class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <x-table.employees :$employee />
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</x-layouts.app>
