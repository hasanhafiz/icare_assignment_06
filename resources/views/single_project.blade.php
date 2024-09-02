@extends('layouts.master')
@section('title', $single_project->Title )
@section('page_header')
<section class="page-header page-header-modern bg-color-grey page-header-md ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <div class="overflow-hidden pb-2">
                            <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">{{ $single_project->Title }}</h1>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li class="active">Single Project</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('main')

<div class="container py-4">

    <div class="row">
        <div class="col appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">
            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                <img src="{{ asset('assets/img/projects/project-short-' . $single_project->id .'.jpg') }}" class="img-fluid border-radius-0" alt="">
            </div>
        </div>
    </div>

    <div class="row pt-4 mt-2 mb-5">
        <div class="col-md-7 mb-4 mb-md-0">

            <h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Description</strong></h2>

            {!! nl2br($single_project->Description) !!}

            <hr class="solid my-5">

            <strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">Share</strong>
            <ul class="social-icons">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fa fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>

        </div>
        <div class="col-md-5">
            <h2 class="text-color-dark font-weight-normal text-5 mb-2">Project <strong class="font-weight-extra-bold">Details</strong></h2>
            <ul class="list list-icons list-primary list-borders text-2">
                <li><i class="fa fa-caret-right left-10"></i> <strong class="text-color-primary">Client: </strong>{{ $single_project->Client }}</li>
                <li><i class="fa fa-caret-right left-10"></i> <strong class="text-color-primary">Date: </strong> {{ $single_project->Date }}</li>
                <li><i class="fa fa-caret-right left-10"></i> <strong class="text-color-primary">Tecnology Used:</strong>
                    @foreach($single_project->Skills as $skill)
                        <? $badge = Arr::random(['primary','secondary','info','dark','warning']) ?>
                        <span class="">{{ $skill }} | </span>
                    @endforeach
                </li>
                <li><i class="fa fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL: </strong> <a href="{{ $single_project->ProjectURL }}" target="_blank" class="text-dark">{{ $single_project->ProjectURL }}</a></li>
            </ul>
        </div>
    </div>

</div>

@endsection
