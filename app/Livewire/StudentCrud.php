<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Student;
use Livewire\Attributes\Title;

#[Title('Student Show')]

class StudentCrud extends Component
{
    public $students, $name, $email, $phone, $student_id;
    public $isOpen = 0;
    public function render()
    {
        // dd('render');
        return view('livewire.student-crud', [
            'students' => Student::all(),
        ]);        
        // $this->students = Student::all();
        // dd($this->students);
        // return view('livewire.student-crud');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->student_id = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 
            $this->student_id ? 'Student Updated Successfully.' : 'Student Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->phone = $student->phone;

        $this->openModal();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Student Deleted Successfully.');
    }
}
