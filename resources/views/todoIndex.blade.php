@extends('layouts/main')

@section('title', 'Create To-Do')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-uppercase fs-7 text-muted">
                            <tr>
                                <th class="ps-4" style="width: 50%;">Task Title</th>
                                <th style="width: 20%;">Due Date</th>
                                <th style="width: 15%;">Status</th>
                                <th class="text-end pe-4" style="width: 15%;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($todos as $todo)
                                <tr>
                                    <!-- Title & Attached Tags -->
                                    <td class="ps-4">
                                        <div class="fw-semibold text-dark">
                                            {{ $todo->title }}
                                        </div>
                                        @if($todo->tags->isNotEmpty())
                                            <div class="mt-1">
                                                @foreach($todo->tags as $tag)
                                                    <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle">
                                                                {{ $tag->name }}
                                                            </span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </td>

                                    <!-- Due Date Column -->
                                    <td>
                                                <span class="text-muted fs-7">
                                                    {{ $todo->due_date ? \Carbon\Carbon::parse($todo->due_date)->format('M d, Y') : 'No date set' }}
                                                </span>
                                    </td>

                                    <!-- Status Column -->
                                    <td>
                                        @if ($todo->completed)
                                            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                                        Completed
                                                    </span>
                                        @else
                                            <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-2 py-1">
                                                        Pending
                                                    </span>
                                        @endif
                                    </td>

                                    <!-- Action Buttons Column -->
                                    <td class="text-end pe-4">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-outline-secondary btn-sm">
                                                Edit
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <!-- Fallback Empty State -->
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        <div class="fs-4 mb-2">📋</div>
                                        <p class="mb-0">No tasks found. Click "+ Create New Task" to get started!</p>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
