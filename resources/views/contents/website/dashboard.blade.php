@extends('layout.master')
@section('page-contents')

    @include('contents.website.dashboard-components.SlideComponent')
    @include('contents.website.dashboard-components.ServicesComponent')
    @include('contents.website.dashboard-components.HostingComponent')
    @include('contents.website.dashboard-components.WorkProcessComponent')
    <!-- @include('contents.website.dashboard-components.OurTeamComponent') -->
    
@endsection