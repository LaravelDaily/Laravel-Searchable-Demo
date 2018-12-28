@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company page</div>

                <div class="card-body">

                    <h1>{{ $company->name }}</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mattis augue et nulla fringilla laoreet. Etiam egestas imperdiet eros, vitae molestie magna blandit eget. Nunc eu mauris a dolor interdum efficitur. Integer et enim diam. Nullam posuere est id sem dignissim, at ornare libero eleifend. Donec urna sapien, rutrum at commodo id, tempor a libero. Cras imperdiet sit amet ipsum eu porttitor. Donec sit amet vestibulum lorem, vitae luctus velit. Donec id nisl sed sapien finibus sagittis et et purus. Mauris suscipit tincidunt elit, ut vehicula nibh vulputate et.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
