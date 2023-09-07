@extends('layouts_new.base')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-body border-top">
                    <div class="row mb-0">
                        <!-- col -->
                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center"
                                style="border: 1px solid orange; -webkit-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                            -moz-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                            box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);">
                                <div class="me-2">
                                    <span class="text-orange display-5"><i class="ri-stethoscope-fill"></i></span>
                                </div>
                                <div>
                                    <span>{{ __('Registered Medical') }}</span>
                                    <h3 class="font-medium mb-0">20</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center"
                                style="border: 1px solid cyan; -webkit-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                                -moz-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                                box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);">
                                <div class="me-2">
                                    <span class="text-cyan display-5"><i class="ri-team-line"></i></span>
                                </div>
                                <div>
                                    <span>{{ __('Registered Patients') }}</span>
                                    <h3 class="font-medium mb-0">50</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                            <div class="d-flex align-items-center"
                                style="border: 1px solid green; -webkit-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                                -moz-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                                box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);">
                                <div class="me-2">
                                    <span class="text-green display-5"><i class="ri-shopping-bag-fill"></i></span>
                                </div>
                                <div>
                                    <span>Estimate Sales</span>
                                    <h3 class="font-medium mb-0">5489</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center"
                                style="border: 1px solid blue; -webkit-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                                -moz-box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);
                                box-shadow: 10px 9px 5px 0px rgba(214,214,214,1);">
                                <div class="me-2">
                                    <span class="text-primary display-5"><i data-feather="dollar-sign"></i></span>
                                </div>
                                <div>
                                    <span>Earnings</span>
                                    <h3 class="font-medium mb-0">$23,568.90</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
