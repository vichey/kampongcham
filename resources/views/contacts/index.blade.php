@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Contact List&nbsp;&nbsp;
                    <a href="{{url('/admin/contact/create')}}" class="btn btn-link btn-sm">
                        New
                    </a>
                </div>
                <div class="card-block">

                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>ប្រភេទនៃទំនាក់ទំនង</th>
                                <th>ឈ្មោះ</th>
                                <th>លេខទូរស័ព្ទ</th>
                                <th>អីុម៉ែល</th>
                                <th>សកម្មភាព</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($contacts as $c)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$c->contact_type_id}}</td>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->phone}}</td>
                                    <td>{{$c->email}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{url('/admin/contact/edit/'.$c->id)}}" title="Edit">Edit</a>
                                        <a class="btn btn-xs btn-danger"  href="{{url('/admin/contact/delete/'.$c->id)}}" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{$contacts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection