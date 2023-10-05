<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Task</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS for additional styling */
        body {
            background-color: #f8f9fa; /* Background color */
        }
        .container {
            max-width: 800px; /* Limit container width */
            padding: 20px;
            background-color: #ffffff; /* Container background color */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Container shadow */
            margin-top: 30px;
        }
        .center-text {
            text-align: center;
        }
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Bootstrap Navbar as the Action Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Daily Task</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                </li>
                <!-- Add more navbar items as needed -->
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="center-text">
            <h1 class="mb-4"><b>Daily Task</b></h1>
        </div>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="/saveTask">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="task" placeholder="Enter your task here">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">ADD</button>
                    <button class="btn btn-warning" type="button" id="clearBtn">CLEAR</button>
                </div>
            </div>
        </form>

        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                            @if($task->iscompleted)
                                <button class="btn btn-success">Completed</button>
                            @else
                                <button class="btn btn-warning">Not Completed</button>
                            @endif
                        </td>
                        <td>

                        @if(!$task->iscompleted)
                            <a href='/markascompleted/{{$task->id}}' class="btn btn-secondary">mc</a>
                            <!-- Add action buttons here, e.g., Edit and Delete -->
                          @else
                          <a href='/markasnotcompleted/{{$task->id}}' class="btn btn-info">mnt</a>
                          @endif
                          <a href="{{ route('deleteTask', $task->id) }}" class="btn btn-danger">Delete</a>
                          <a href="{{ route('updatetaskview', $task->id) }}" class="btn btn-dark">update</a>
                          
                        </td>
                    </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Include Bootstrap JS (optional) if you require JavaScript functionality -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script> -->
    <footer class="footer">
        &copy;  2023 Januda All Rights Reserved
    </footer>
</body>
</html>