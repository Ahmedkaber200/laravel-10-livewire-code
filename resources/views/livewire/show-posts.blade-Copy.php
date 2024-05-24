<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <button wire:click="create()" class="btn btn-primary">Create Student</button>

    @if($isOpen)
    <div class="modal display-block">
        <div class="modal-content">
            <span wire:click="closeModal()" class="close">&times;</span>
            <form>
                <input type="hidden" wire:model="student_id">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" wire:model="name" class="form-control" id="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" wire:model="email" class="form-control" id="email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" wire:model="phone" class="form-control" id="phone">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="button" wire:click.prevent="store()" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <button wire:click="edit({{ $student->id }})" class="btn btn-primary">Edit</button>
                    <button wire:click="delete({{ $student->id }})" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
