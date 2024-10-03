@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro" style="background-color: transparent">
                <a href="{{ route('home') }}"><img class="main-logo" src="<?= asset('assets/images/logo.png') ?>" alt="" style="margin-top: 60px" /></a>
            </div>
        </div>
    </div>
</div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <a href="{{ route('admin.product-list.index') }}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Products</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px; cursor:pointer" class="label bg-green">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{ $products }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('admin.mailbox.index') }}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Tickets</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px; cursor:pointer" class="label bg-blue">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{ $tickets }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('admin.blog.index') }}">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                    <h4 class="text-left text-uppercase"><b>Blogs</b></h4>
                                    <div class="row vertical-center-box vertical-center-box-tablet">
                                        <div class="col-xs-3 mar-bot-15 text-left">
                                            <label style="font-size:15px; cursor:pointer" class="label bg-red">See Details</label>
                                        </div>
                                        <div class="col-xs-9 cus-gh-hd-pro">
                                            <h2 class="text-right no-margin">{{ $blogs }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        <a href="{{ route('admin.settings') }}">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Settings</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label style="font-size:15px; cursor:pointer" class="label bg-purple">See Details</label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"> </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
@endsection