@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                <div class="card-body">
                    <div>
                        Name: {{ucfirst(Auth::user()->name)}}<br>
                        Email: {{Auth::user()->email}}<br>
                        Created: {{ date('j F, Y', strtotime(Auth::user()->created_at)) }}<br>
                    </div>

                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
                          Success Message is here
                    </div>
 
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
