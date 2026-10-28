@extends('layouts/main')

@section('title', 'Create To-Do')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Bootstrap Card layout to containerize the form -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Create a New Todo</h5>
                    </div>
                    <div class="card-body p-4">

                        <form action="{{ route('todos.store') }}" method="POST">
                            @csrf

                            <!-- Task Title Input -->
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Todo Title</label>
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Enter todo title"
                                    value="{{ old('title') }}"
                                >
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description Textarea -->
                            <div class="mb-4">
                                <label for="description" class="form-label fw-bold">Description</label>
                                <textarea
                                    name="description"
                                    id="description"
                                    rows="4"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Provide brief details about the todo..."
                                >{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Due Date Calendar -->
                            <div class="mb-4">
                                <label for="due_date" class="form-label fw-bold">Due Date</label>
                                <input
                                    type="date"
                                    name="due_date"
                                    id="due_date"
                                    class="form-control @error('due_date') is-invalid @enderror"
                                    value="{{ old('due_date') }}"
                                >
                                @error('due_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label d-block fw-bold">Is Todo Completed?</label>

                                <!-- "No" Radio Button Option (Default Setup) -->
                                <div class="form-check form-check-inline">
                                    <input
                                        type="radio"
                                        name="completed"
                                        id="completed_no"
                                        value="0"
                                        class="form-check-input @error('completed') is-invalid @enderror"
                                        {{ old('completed', '0') === '0' ? 'checked' : '' }}
                                    >
                                    <label for="completed_no" class="form-check-label">No</label>
                                </div>

                                <!-- "Yes" Radio Button Option -->
                                <div class="form-check form-check-inline">
                                    <input
                                        type="radio"
                                        name="completed"
                                        id="completed_yes"
                                        value="1"
                                        class="form-check-input @error('completed') is-invalid @enderror"
                                        {{ old('completed') === '1' ? 'checked' : '' }}
                                    >
                                    <label for="completed_yes" class="form-check-label">Yes</label>
                                </div>

                                <!-- Validation Error Handling Display -->
                                @error('completed')
                                <div class="text-danger small mt-1 d-block">{{ $message }}</div>
                                @enderror
                            </div>



                            <!-- Interactive Form Buttons -->
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/" class="btn btn-outline-secondary">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary px-4">
                                    Save Todo
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
