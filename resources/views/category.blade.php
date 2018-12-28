@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category page</div>

                <div class="card-body">

                    <h1>{{ $category->name }}</h1>

                    <ul>
                    @foreach($companies as $company)
                        <li>
                            <a href="{{ route('companies.show', $company->id) }}">{{ $company->name }}</a>
                        </li>
                    @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
