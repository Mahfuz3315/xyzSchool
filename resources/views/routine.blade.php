<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            XYZ School
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table>
                    <tr>
                        <th style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">Day</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 30px;text-align: left;">Period 1</th>
                        <th style="border-bottom: 1px solid #ddd; padding: 30px;text-align: left;">Period 2</th>
                        <th style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">Period 3</th>
                        <th style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">Period 4</th>
                        <th style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">Period 5</th>
                        <th style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">Period 6</th>
                    </tr>
                </table>
                @foreach($routines as $r)
                <table>   
                    <tr> 
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Day}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Period_1}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Period_2}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Period_3}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Period_4}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Period_5}}</td>
                        <td style="border-bottom: 1px solid #ddd;padding: 30px;text-align: left;">{{$r->Period_6}}</td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>