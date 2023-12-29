<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Professors_table;

class HomeController extends Controller
{

    public function register()
    {
        return view("register");
    }
    public function store()
    {
        $student = new User;
        $student->name = request('name');
        $student->email = request('email');
        $student->password = request('password');

        $student->save();
        return request()->all();
        // return redirect('login');

    }
    public function student()
    {
        $students = User::all();
        return view('students', compact('students'));
    }

    public function login()
    {
        return view("login");
    }
    public function index1()
    {
        return view("index1");
    }
    public function index2()
    {
        return view("index2");
    }
    public function index3()
    {
        return view("index3");
    }
    public function eventManagement()
    {
        return view("eventManagement");
    }
   
    public function formElements()
    {
        return view("formElements");
    }
    public function formWizard()
    {
        return view("formWizard");
    }
    public function formSummerNote()
    {
        return view("formSummerNote");
    }
    public function addProfessors()
    {
        return view("addProfessors");
    }
    public function storeProfessorsInfo(Request $request)
    {
        
        $validated = $request->validate([
            'email' => 'required|unique:professors_info|email',
            'firstname' => 'required|min:5',
            'lastname' =>'required',
            'dateOfJoining' =>'required',
            'password' =>'required|min:5',
            'confirmPassword' =>'required|same:password|min:5',
            'mobileNumber' =>'required|numeric|min:10',
            'designation' =>'required',
            'dateOfBirth' =>'required',
            'education' =>'required'
        ]);
        $professorData=new Professors_table;
        $professorData->firstname=request("firstname");
        $professorData->lastname=request("lastname");
        $professorData->email=request("email");
        $professorData->dateOfJoining=request("dateOfJoining");
        $professorData->password=request("password");
        $professorData->confirmPassword=request("confirmPassword");
        $professorData->mobileNumber=request("mobileNumber");
        $professorData->designation=request("designation");

        $professorData->dateOfBirth=request("dateOfBirth");
        $professorData->education=request("education");

        $professorData->save();
        return redirect('/allProfessors');

        // $firstname = $request->input('firstname');
        // $lastname = $request->input('lastname');
        // $email = $request->input('email');
        // $dateOfJoining = $request->input('dateOfJoining');
        // $password = $request->input('password');
        // $confirmPassword = $request->input('confirmPassword');
        // $mobileNumber = $request->input('mobileNumber');
        // $designation = $request->input('designation');
        // $dateOfBirth = $request->input('dateOfBirth');
        // $education = $request->input('education');
        // // $gender = $request->select('gender');
        // // $department= $request->input('department');

        // $isInsertSuccess = Professors_table::insert([
        //     'firstname' => $firstname,
        //     'lastname' => $lastname,
        //     'email' => $email,
        //     'dateOfJoining' => $dateOfJoining,
        //     'password'=> $password,
        //     'confirmPassword' => $confirmPassword,
        //     'mobileNumber' => $mobileNumber,
        //     'designation' => $designation,
        //     'dateOfBirth' => $dateOfBirth,
        //     'education' => $education,
        //     // 'gender' => $gender,
        //     // 'department' => $department

        // ]);
    
        // if ($isInsertSuccess==true) {
        

        //     return redirect('/allProfessors');
        // }
    }
    public function allProfessors(){
        $Professors=Professors_table::all();
        return view("allProfessors",compact('Professors'));
    }
    public function delete_professors_data($id){
        $professor=User::find($id);
        $professor->delete();
        return redirect('allProfessors');
    }

    
}

