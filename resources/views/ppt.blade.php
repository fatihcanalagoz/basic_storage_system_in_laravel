@extends('layouts.app')
 

@section('container')
<div class="wrapper">

    <div class="content-page">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                   <div class="d-flex align-items-center justify-content-between welcome-content mb-3">
                      <h4>All Files</h4>
                      <div class="d-flex align-items-center">
                          <div class="list-grid-toggle mr-4">
                              <span class="icon icon-grid i-grid"><i class="ri-layout-grid-line font-size-20"></i></span>
                              <span class="icon icon-grid i-list"><i class="ri-list-check font-size-20"></i></span>
                              <span class="label label-list">List</span>
                          </div>
                          <div class="dashboard1-dropdown d-flex align-items-center">
                              <div class="dashboard1-info rounded">
                                  <a href="#calander" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                      <i class="ri-arrow-down-s-line"></i>
                                  </a>
                                  <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                      <li class="mb-2">
                                          <a href="#" data-toggle="tooltip" data-placement="right" title="Calander"><i
                                                  class="las la-calendar iq-arrow-left"></i></a>
                                      </li>
                                      <li class="mb-2">
                                          <a href="#" data-toggle="tooltip" data-placement="right" title="Keep"><i
                                                  class="las la-lightbulb iq-arrow-left"></i></a>
                                      </li>
                                      <li>
                                          <a href="#" data-toggle="tooltip" data-placement="right" title="Tasks"><i
                                                  class="las la-tasks iq-arrow-left"></i></a>
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
                @foreach ($models as $model )
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                   
                      
                       <div class="card-body image-thumb">
                        <div class="mb-4 text-center p-3 rounded iq-thumb">
                            <div class="iq-image-overlay"></div>
                            <a href="#" data-title="{{$model->filename}}" data-load-file="file" data-load-target="#resolte-contaniner" data-url="/uploads/{{$model->filename}}" data-toggle="modal" data-target="#exampleModal">                                
                                <img src="../assets/images/layouts/page-7/ppt.png" class="img-fluid" alt="image1"></a>   
                         
                        </div>
                        <h6>{{$model->filename}}</h6>    
                         
                            
                             
                    </div>
                     
                    </div>
                </div>
              
                 @endforeach
                   
                  
              </div>
          </div>
          <div class="icon icon-grid i-list">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card card-block card-stretch card-height">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table mb-0 table-borderless tbl-server-info">
                                  <thead>
                                      <tr>
                                          <th scope="col">Name</th>
                                          <th scope="col">Owner</th>
                                          <th scope="col">Last Edit</th>
                                          <th scope="col">File Size</th>
                                          <th scope="col"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                    @foreach ($models as $model )
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="icon-small bg-danger rounded mr-3">
                                                    <i class="ri-file-excel-line"></i>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../uploads/{{$model->filename}}" data-toggle="modal" data-target="#exampleModal" data-title="alexa5.pdf" style="cursor: pointer;">{{$model->filename}}</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>{{$model->updated_at}}</td>
                                        <td>{{$model->filesize}} MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton10" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="/files/delete/{{$model->id}}"><i class="ri-delete-bin-6-fill mr-2"></i>Delete </a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                  </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
 