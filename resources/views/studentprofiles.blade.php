<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            XYZ School
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <P>This is student profile panel</P>
                <table>
                    <tr>
                        <th style="border-bottom: 1px solid #ddd;padding: 8px;text-align: center; width: 5%;">Name</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Mail</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Student ID</th>
                </table>
                @foreach($studentprofiles as $r)
                <table>   
                    <tr> 
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: center; width: 5%">{{$r->name}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: center; width: 5%">{{$r->email}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: center; width: 5%">{{$r->student_id}}</td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>