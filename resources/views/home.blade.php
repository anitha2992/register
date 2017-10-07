@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                    Logged in : {{ Auth::user()->latest_login->diffForHumans() }}
                </div>
                <div class="panel-body">
                    LogIn Time : {{ Auth::user()->latest_login }}
                </div>
                <div class="panel-body">
                    Previous LogIn Time : {{ Auth::user()->previous_visit }}
                </div>
                <div class="panel-body">
                    Number of times logged in : {{ Auth::user()->value }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
