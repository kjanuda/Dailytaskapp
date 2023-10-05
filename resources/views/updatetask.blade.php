<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Custom CSS for additional styling */
        body {
            background-color: #f8f9fa; /* Background color */
        }
        .container {
            max-width: 400px; /* Limit container width */
            padding: 20px;
            background-color: #ffffff; /* Container background color */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Container shadow */
            margin: 30px auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-cancel {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    
<div class="container">
    <h1 class="text-center">Update Task</h1>
    <form action="/updatetasks" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="task">Task</label>
            <input type="text" class="form-control" id="task" name="task" value="{{$taskdata->task}}">
            <input type="hidden" name="id" value="{{$taskdata->id}}"/>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-warning">Update</button>
            <button type="button" class="btn btn-cancel" onclick="goBack()">Cancel</button>

<script>
function goBack() {
    window.history.back();
}
</script>

        </div>
    </form>
</div>

</body>
</html>
