You have been successfully registered!

<table>
    <tr>
        <td>ID:</td>
        <td>{{ $submission->id }}</td>
    </tr>
    <tr>
        <td>Title:</td>
        <td>{{ $submission->personTitle->person_title }}</td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td>{{ $submission->first_name }}</td>
    </tr>
    <tr>
        <td>Center Name:</td>
        <td>{{ $submission->center_name }}</td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td>{{ $submission->last_name }}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{ $submission->email }}</td>
    </tr>
    <tr>
        <td>Language:</td>
        <td>{{ $submission->language }}</td>
    </tr>
    <tr>
        <td>Country:</td>
        <td>{{ $submission->country }}</td>
    </tr>
</table>
