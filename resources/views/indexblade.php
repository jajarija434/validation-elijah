<!DOCTYPE html>
<hrml lang="emn">
<body>
    <meta character="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Deadline</th>
                        </tr>
                </thead>
                <tbody>
                   @foreach ($tasks as $task)
                   <tr>
                    <td>{{ $task->taskname }}<td>
                    <td>{{ $task->status }}<td>
                    <td>{{ $task->desciption }}<td>
                    <td>{{ $task->deadline }}<td>
                        </tr>
                        @endforeach
                </tbody>
            <table>