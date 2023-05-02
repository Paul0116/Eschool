<style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 1rem;
    }
    
    th, td {
      text-align: left;
      padding: 0.5rem;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    </style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enrollees') }}
        </h2>
    </x-slot>
{{-- /fDQ^er@RVTBA8mM%CnyZ --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <table>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Courses</th>
                    @foreach($students as $student)
                    <tr>
                        <td class="border px-4 py-2">{{ $student->name }}</td>
                        <td class="border px-4 py-2">{{ $student->email }}</td>
                        <td class="border px-4 py-2">{{ $student->courses }}</td>
                    </tr>
                    @endforeach
                   </table>
              
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
