A new submission has been made!

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
        <td>Last Name:</td>
        <td>{{ $submission->last_name }}</td>
    </tr>
    <tr>
        <td>Company:</td>
        <td>{{ $submission->company_name }}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{ $submission->email }}</td>
    </tr>
    <tr>
        <td>Language:</td>
        <td>{{ $submission->language->language }}</td>
    </tr>
    <tr>
        <td>Country:</td>
        <td>{{ $submission->country->country_name }}</td>
    </tr>
</table>
