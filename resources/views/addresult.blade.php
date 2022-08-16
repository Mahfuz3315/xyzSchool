<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            XYZ School
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <P>This is add result panel</P>

                <div style="border-radius: 5px;background-color: #f2f2f2;padding: 20px;">
                    <form action="/addingresult" method="post">
                        @csrf
                        <label for="name">Name</label><br>
                        <input type="text" id="name" name="name" placeholder="Student's name.." style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <label for="id">Student ID</label><br>
                        <input type="text" id="id" name="id" placeholder="Student ID.." style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>
                        <hr><br>
                        <p style="text-decoration:underline ;">Enter marks here subjectwise</p>
                        
                        <label for="bangla">Bangla</label><br>
                        <input type="number" id="marks" name="bangla" placeholder="" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <label for="english">English</label><br>
                        <input type="number" id="marks" name="english" placeholder="" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <label for="mathematics">Mathematics</label><br>
                        <input type="number" id="marks" name="mathematics" placeholder="" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <label for="physics">Physics</label><br>
                        <input type="number" id="marks" name="physics" placeholder="" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <label for="chemistry">Chemistry</label><br>
                        <input type="number" id="marks" name="chemistry" placeholder="" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <label for="biology">Biology</label><br>
                        <input type="number" id="marks" name="biology" placeholder="" style="width: 50%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"><br>

                        <input type="submit" value="Submit" style="width: 20%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;">
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>