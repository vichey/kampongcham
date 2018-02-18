@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Slide List&nbsp;&nbsp;
                        <a href="{{url('/slide/create')}}" class="btn btn-link btn-sm">
                             New
                        </a>
                </div>
                <div class="card-block">

                    <table class="tbl">
                        <thead>
                            <tr>
                                <th>&numero;</th>
                                <th>Image <span class="text-primary">(900 X 400)</span> </th>
                                <th>Name</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($slides as $sli)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{URL::asset('/img/').'/'.$sli->photo}}" width="100"/></td>
                                    <td>{{$sli->name}}</td>
                                    <td>{{$sli->order}}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary"  href="{{url('/slide/edit/'.$sli->id)}}" title="Edit">Edit</a>
                                        <a class="btn btn-xs btn-danger"  href="{{url('/slide/delete/'.$sli->id)}}" title="Delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection