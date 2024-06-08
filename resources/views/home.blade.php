@extends('layouts.main')
@section('content')
        <!-- Carousel Start -->
        @include('includes.carousel')
        <!-- Carousel End -->


        <!-- Facilities Start -->
        @include('includes.facility')
        <!-- Facilities End -->


        <!-- About Start -->
        @include('includes.abouts')
        <!-- About End -->


        <!-- Call To Action Start -->
        @include('includes.callTo')
        <!-- Call To Action End -->


        <!-- Classes Start -->
        @include('includes.classes')
        <!-- Classes End -->


        <!-- Appointment Start -->
        @include('includes.appoint')
        <!-- Appointment End -->


        <!-- Team Start -->
        @include('includes.team')
        <!-- Team End -->


        <!-- Testimonial Start -->
        @include('includes.testimonial')
        <!-- Testimonial End -->
@endsection

