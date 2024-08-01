@extends('layout.app')
@section('content')
<div class="container">
    <div class="row justify-conent-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ _('User Task Form') }}</div>

                <div class="card_body">
                    @if(session('success'))
                    <div class="alert alert-sucess" role="alert">
                        <div>{{ session('success') }}</div>
                        {{session("success")}}
            </div>
@endif


<form action="{{ url('user_task') }}" method="POST">
        @csrf
        <div>
            <div class="row mb-3 mx-3">
            <label for="task_name">Task Name</label>
            <input type="text" id="name" name="task_name" class="form-control @error('task_name') is-valid @enderror" value="{{ old('task_name') }}">
            @error('task_name')
                <div class="Invalid-feedback p-8" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div>
        <div class="row mb-3 mx-3">
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="">--</option>
                <option value="pending">Pending</option>
                <option value="on_progress">On Progress</option>
                <option value="completed">Completed</option>
            </select>
            @error('status')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
        <div class="row mb-3 mx-3">
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <div class="row mb-3 mx-3">
            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}">
            @error('deadline')
                <div>{{ $message }}</div>
            @enderror
        </div>
</div>