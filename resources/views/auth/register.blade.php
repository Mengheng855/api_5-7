<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>register</title>
</head>
<body>
    <div class="container p-5 mt-5 shadow">
        <h1>Register</h1>
        <form action="{{route('add')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Username</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <p class="mt-2">Already have account?<a href="/">login</a></p>
            <div class="btn ">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>
</html>