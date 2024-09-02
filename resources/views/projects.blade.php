@extends('layouts.master')
@section('title', 'Project List')
@section('page_header')
<section class="page-header page-header-modern bg-color-grey page-header-md ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <div class="overflow-hidden pb-2">
                            <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">Portfolio</h1>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="active">Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('main')
<div class="container py-2">

    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
        <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
        <li class="nav-item" data-option-value=".PHP"><a class="nav-link text-2-5 text-uppercase" href="#">PHP</a></li>
        <li class="nav-item" data-option-value=".React"><a class="nav-link text-2-5 text-uppercase" href="#">React</a></li>
        <li class="nav-item" data-option-value=".AWS"><a class="nav-link text-2-5 text-uppercase" href="#">AWS</a></li>
        <li class="nav-item" data-option-value=".Laravel"><a class="nav-link text-2-5 text-uppercase" href="#">Laravel</a></li>
    </ul>

    <div class="sort-destination-loader mt-4 pt-2 sort-destination-loader-loaded">
        <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*" style="position: relative; height: 1314.03px;">

            @forelse ($projects as $project)
                <div class="col-md-6 col-lg-4 isotope-item {{ implode(' ', $project->Skills) }}" style="position: absolute; left: 0px; top: 0px;">
                    <div class="portfolio-item">
                        <a href="{{ route('portfolio_single' , $project->id) }}">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/img/projects/project-masonry-1-' . $project->id . '.jpg') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $project->Title }}</span>
                                        <span class="thumb-info-type">{{ $project->Client }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fa fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            @empty

            @endforelse

        </div>
    <div class="bounce-loader"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div>

</div>

@endsection
