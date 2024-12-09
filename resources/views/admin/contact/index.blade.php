@section('title', 'Contact Messages')
@extends('layouts.admin')

@section('content')

    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-container">
                    <div class="d-flex align-items-center  mb-3">

                        <div class="table-title font-weight-bold mx-auto">Turan Cars - Contact Messages</div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Control</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $key=>$contact)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
                                    @if($contact->status)
                                        <span class="badge badge-pill badge-success">Read</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Unread</span>
                                    @endif
                                </td>
                                <td class="d-flex column-gap-2">
                                    @if(!$contact->status)
                                    <a href="{{route('admin.contact.read', ['id'=>$contact->id])}}" onclick="confirm('Are you sure to change status?')" class="btn btn-sm btn-info">Read</a>
                                    @endif
                                    <a href="{{route('admin.contact.destroy', ['id'=>$contact->id])}}" onclick="confirm('Are you sure to delete this car?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>

    <x-admin.alert/>

@endsection

<script>
    var contactId = @json($contact->id);
</script>
