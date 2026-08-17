<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    @foreach($students as $student)

    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>

        <td>
            <a href="/students/{{ $student->id }}/edit">
                Edit
            </a>

            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">

                @csrf
                @method('DELETE')

                <button type="submit">Delete</button>

            </form>
        </td>
    </tr>

    @endforeach

</table>