<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Basic styling to maximize textarea */
        textarea {
            width: 100%;
            height: 400px; /* Adjust height as needed */
            box-sizing: border-box; /* Ensures padding and border are included in the width and height */
        }
        /* Optional: To make form elements look better */
        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="{{ url('user_task') }}" method="POST">
        @csrf
        <div>
            <label for="task_name">Task Name</label>
            <input type="text" id="name" name="task_name" value="{{ old('task_name') }}">
            @error('task_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
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
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}">
            @error('deadline')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
    </form>
</body>
</html>