@extends('layouts.master')
@section('title', ' Working Experiences')
@section('page_header')
<section class="page-header page-header-modern bg-color-grey page-header-md ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <div class="overflow-hidden pb-2">
                            <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">Work Experience</h1>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="active">Work Experience</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@section('main')
<div class="container container-xl-custom">
    <table class="table table-striped table-hover">
    <thead>
    </thead>
    <tbody>
    @forelse ($experiences as $experience)
      <tr style="">
        <td style="vertical-align: center;padding: 50px;">{{ $experience->Timeline }}</td>
        <td style="vertical-align: center;padding: 50px;">
            <strong class="lead text-bold">{{ $experience->Position }}</strong>
            <p class="lead">{{ $experience->CompanyName }}</p>
            <div>
                <ul>
                @foreach ($experience->JobResponsibilities as $job)
                <li>{{ $job }}</li>
                @endforeach
                </ul>
            </div>
        </td>
      </tr>
    @empty

    @endforelse
    </tbody>

    </table>
</div>

@endsection
