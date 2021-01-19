<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mahasiswa = DB::table('students')->get(); //pake query builder
        // return Student::all(); //bntuk json
        $students = Student::all();
        // return view ('students.index', ['students' => $students]);
        return view ('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cara1
        // $student = new Student;
        // $student->jurusan = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        //cara2 = harus pake fillable di model
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,
        // ]);

        //validasi
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:9',
        ]);

        //cara3 = ambil semua pake fillable juga
        Student::create($request->all());
        
        return redirect('/students')->with('status', 'berhasil menambah data!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        //validasi
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:9',
        ]);

        Student::where('id', $student->id)
                    ->update([
                        'nama' => $request->nama,
                        'nim' => $request->nim,
                        'email' => $request->email,
                        'jurusan' => $request->jurusan
                    ]);
        return redirect('/students')->with('status', 'berhasil update data!');
            
        //return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'berhasil menghapus data!');
        // return $student;
    }
}
