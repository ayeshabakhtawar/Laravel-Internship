<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Student List</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
        </tr>
        @foreach($students as $student)

        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->course }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>