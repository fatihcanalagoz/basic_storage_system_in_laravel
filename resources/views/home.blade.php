@extends('layouts.app')
 
 


@section('container')
{{-- FOLDER LİST START --}}
    <div class="wrapper">

        
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-between welcome-content mb-3">
                            <h4>All Files</h4>
                            <div class="d-flex align-items-center">
                                <div class="list-grid-toggle mr-4">
                                    <span class="icon icon-grid i-grid"><i
                                            class="ri-layout-grid-line font-size-20"></i></span>
                                    <span class="icon icon-grid i-list"><i class="ri-list-check font-size-20"></i></span>
                                    <span class="label label-list">List</span>
                                </div>
                                <div class="dashboard1-dropdown d-flex align-items-center">
                                    <div class="dashboard1-info rounded">
                                        <a href="#calander" class="collapsed" data-toggle="collapse"
                                            aria-expanded="false">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                        <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                            <li class="mb-2">
                                                <a href="#" data-toggle="tooltip" data-placement="right"
                                                    title="Calander"><i class="las la-calendar iq-arrow-left"></i></a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" data-toggle="tooltip" data-placement="right"
                                                    title="Keep"><i class="las la-lightbulb iq-arrow-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" data-placement="right"
                                                    title="Tasks"><i class="las la-tasks iq-arrow-left"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon icon-grid i-grid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body image-thumb">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <a href="{{route('pdf')}}"  ><img src="../assets/images/layouts/page-7/pdf.png"
                                                class="img-fluid" alt="image1"></a>
                                    </div>
                                    <h6>PDF Files</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body image-thumb">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <a href="{{route('doc')}}" ><img src="../assets/images/layouts/page-7/doc.png"
                                                class="img-fluid" alt="image1"></a>
                                    </div>
                                    <h6>Word Files</h6>
                                </div>
                            </div>
                        </div>
                         
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-body image-thumb">
                                    <div class="mb-4 text-center p-3 rounded iq-thumb">
                                        <div class="iq-image-overlay"></div>
                                        <a href="{{route('ppt')}}" ><img src="../assets/images/layouts/page-7/ppt.png"class="img-fluid" alt="image1"></a>
                                    </div>
                                    <h6>Power Point Files</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
     
    {{-- FOLDER LİST END --}}

    {{-- RECENT FILES --}}
      
</div>
</div>
@endsection

 