<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            XYZ School
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <P>This is resuly sheet panel</P>
                <table>
                    <tr>
                        <th style="border-bottom: 1px solid #ddd;padding: 8px;text-align: center; width: 5%;">ID</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Name</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Bangla</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">English</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Mathematics</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Physics</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Chemistry</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Biology</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 8px;text-align: center; width: 5%;">Actions</th>
                </table>
                @foreach($resultsheets as $r)
                <table>   
                    <tr> 
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->student_id}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->name}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->bangla}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->english}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->mathematics}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->physics}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->chemistry}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%">{{$r->biology}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 8px;text-align: left; width: 5%"><button style="margin-top: 20px;background-color: #398AB9;color: #EEEEEE;height: 30px;width: 50px;"><a href="{{url('/Edit')}}" id="applynowlink">Edit</a></button>
                        <button style="margin-top: 20px;background-color: #ff0000;color: #EEEEEE;height: 30px;width: 60px;"><a href="{{url('/Delete')}}" id="applynowlink">Delete</a></button>
                    </td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>