@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table" >
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                First Name
                            </th>
                            <th>
                                Last Name
                            </th>
                            <th>
                                Company
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Language
                            </th>
                            <th>
                                Country
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td>
                                    {{ $row->id }}
                                </td>
                                <td>
                                    {{ $row->personTitle->person_title }}
                                </td>
                                <td>
                                    {{ $row->first_name }}
                                </td>
                                <td>
                                    {{ $row->last_name }}
                                </td>
                                <td>
                                    {{ $row->company_name }}
                                </td>
                                <td>
                                    {{ $row->email }}
                                </td>
                                <td>
                                    {{ $row->language->language }}
                                </td>
                                <td>
                                    {{ $row->country->country_name }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
