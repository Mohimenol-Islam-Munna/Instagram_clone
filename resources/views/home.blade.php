@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- profile image  --}}
        <div class="col-md-4">
            <div class="text-center">
                <img src={{ asset('icons/profile_image.jpg')}} alt="profile image" class="img-fluid rounded-circle">
            </div>
        </div>

        {{-- profile information  --}}
        <div class="col-md-8">
            <div>
                <div class="d-flex">
                    <div class="mr-3">
                        <h1>{{ auth()->user()->username }}</h1>
                    </div>
                    <div class="mr-3 mt-1">
                        <a href="#" class="btn btn-outline-secondary">Edit Profile</a>
                    </div>
                    <div class="mr-3 mt-2">
                        <a href="#">
                            <img src={{ asset('icons/setting.png') }} alt="profile setting" style="max-width: 100%; height: 25px">
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class="d-flex">
                    <div class="mr-3">
                        <strong>111</strong> <span>posts</span>
                    </div>
                    <div class="mr-3">
                        <strong>192</strong> <span>followers</span>
                    </div>
                    <div class="mr-3">
                        <strong>405</strong> <span>following</span>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <div>
                    <h4>Mohimenol Munna</h4>
                    <p>
                        Studying Bsc in computer science & engineering♥♥♥CSE♥♥♥
                        at pabna university of science & technology ♥♥♥PUST♥♥♥
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
