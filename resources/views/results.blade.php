<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            XYZ School
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 
                @foreach($results as $result)
                <hr>
                <hr>
                <p>Student ID : {{$result->student_id}}</p>
                <p>Name : {{$result->name}}</p>
                <h1>Result :</h1>
                <p>Bangla ----> {{$result->bangla}}</p>
                <p>English ----> {{$result->english}}</p>
                <p>Mathematics ----> {{$result->mathematics}}</p>
                <p>Physics ----> {{$result->physics}}</p>
                <p>chemistry ----> {{$result->chemistry}}</p>
                <p>Biology ----> {{$result->biology}}</p>
                <hr>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>