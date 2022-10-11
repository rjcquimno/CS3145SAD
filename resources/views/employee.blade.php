<x-layout>
    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Employee Management System</h1>
    </section>
@include('partials._search')
<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-8">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Id#</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Phone #</td>
        <td class="border-2 border-black">Address</td>
        <td class="border-2 border-black">Email</td>
        <td class="border-2 border-black">Gender</td>
        <td class="border-2 border-black">Birthdate</td>
        <td class="border-2 border-black">Role</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    @foreach ($employeelist as $employee)
    @csrf
    <tr class="border-2 border-black text-center">
        <th>{{$loop->index+1}}</th>
        <td class="border-2 border-black">{{$employee['emp_fullName']}}</td>
        <td class="border-2 border-black">{{$employee['emp_phoneNum']}}</td>
        <td class="border-2 border-black">{{$employee['emp_address']}}</td>
        <td class="border-2 border-black">{{$employee['emp_email']}}</td>
        <td class="border-2 border-black">{{$employee['emp_gender']}}</td>
        <td class="border-2 border-black">{{$employee['emp_birthdate']}}</td>
        <td class="border-2 border-black">{{$employee['emp_role']}}</td>
        <td class="border-2 border-black"><a href="/editemployee/{{$employee->id}}">
            <i class="fa-solid fa-pencil"></i> Edit
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500">
            <form method="Post" action="/employee/{{$employee->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table><br>
    <a href="/createemployee" class="absolute bottom-1/3 left-10 bg-black text-white py-2 px-5">Add employee</a>
    <a href="/employee/attendance" class="absolute bottom-1/3 right-10 bg-black text-white py-2 px-5">Attendance</a>
</section>
</x-layout>