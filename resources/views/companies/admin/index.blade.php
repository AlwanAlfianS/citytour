@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Companies</div>

                    <div class="panel-body table-responsive">
                        <router-view name="companiesIndex"></router-view>
                        {{--<router-view></router-view>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
