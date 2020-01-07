@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col3 p-5">
            <img src="https://instagram.fudi1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fudi1-1.fna.fbcdn.net&_nc_ohc=Tj6v7qiBykUAX8dRddF&oh=0c30bedf6a64469d9de8b019518126e4&oe=5EAA2DD7" class="rounded-circle">
        </div>
        <div class="col9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
            <div >{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fudi1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.1.743.743a/s640x640/79013780_988511461518028_6762939584770433774_n.jpg?_nc_ht=instagram.fudi1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=oyLgC8oNscoAX8Y6SLQ&oh=7a4540bb7c6f12495f1e7005669d8135&oe=5EABFE60" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fudi1-1.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.561.561a/79225007_186012015855932_2310000774829668783_n.jpg?_nc_ht=instagram.fudi1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=_5_XE9Vg0tcAX88LYMS&oh=f349832cc97ae37a195ca3b5276a652c&oe=5EB49066" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fudi1-2.fna.fbcdn.net/v/t51.2885-15/e35/c92.0.496.496a/76876296_2463502693772064_5406679365456228022_n.jpg?_nc_ht=instagram.fudi1-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=KhXwgwPGIE0AX_tHED5&oh=b167802bea4e2b50ad59c7e4aa99b0b4&oe=5EA9D160" class="w-100">
        </div>
    </div>

</div>
@endsection
