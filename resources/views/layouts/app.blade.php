<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>DropKopf</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico" ')}}"/>
      
      <link rel="stylesheet" href="{{asset('/assets/css/backend-plugin.min.css')}}">
    
      <link rel="stylesheet" href="{{asset('/assets/css/upload.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('/assets/vendor/remixicon/fonts/remixicon.css')}}">
      
      <!-- Viewer Plugin -->
        <!--PDF-->
        <link rel="stylesheet" href="{{asset('/assets/vendor/doc-viewer/include/pdf/pdf.viewer.css')}}">
        <!--Docs-->
        <!--PPTX-->
        <link rel="stylesheet" href="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/css/pptxjs.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/css/nv.d3.min.css')}}">
        <!--All Spreadsheet -->
        <link rel="stylesheet" href="{{asset('/assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.css')}}">
        <!--Image viewer-->
        <link rel="stylesheet" href="{{asset('/assets/vendor/doc-viewer/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css')}}">
        <!--officeToHtml-->
        <link rel="stylesheet" href="{{asset('/assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.css')}}">  
        <link rel="stylesheet" href="{{asset('/assets/css/backend.css?v=1.0.0')}}">
        @yield('css')
    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- sidebar start -->
         
    <div class="iq-sidebar  sidebar-default ">
      <div class="iq-sidebar-logo d-flex align-items-center justify-content-center">
          <a href="{{route('dashboard')}}" class="header-logo">
              <img src="../assets/images/Drop.png" class="img-fluid rounded-normal light-logo" alt="logo" style="width: 110px; height:110px;  ">
           </a>
          <div class="iq-menu-bt-sidebar">
              <i class="las la-bars wrapper-menu"></i>
          </div>
      </div>
      <div class="data-scrollbar" data-scroll="1">
          <div class="new-create select-dropdown input-prepend input-append">
              <div class="btn-group">
                  <div data-toggle="dropdown">
                  <div class="search-query selet-caption"><i class="las la-plus pr-2"></i>
                <label for="">Create New</label>
                </div><span class="search-replace"></span>
                  <span class="caret"><!--icon--></span>
                  </div>
                  <ul class="dropdown-menu">
                      <li><div class="item"><i class="ri-folder-add-line pr-3"></i>
                    <label for="">New Folder</label>
                    </div></li>
                   
                        <li>
                            <div class="item" value="File upload">
                              <i class="ri-file-upload-line pr-3"></i>
                            <a href="{{route('files.upload')}}">Upload Files</a>
                             
                            </div>
                          </li>
              
                   
                  </ul>
              </div>
          </div>
          <nav class="iq-sidebar-menu">
              <ul id="iq-sidebar-toggle" class="iq-menu">
                   <li class=" ">
                      <a href="{{route('dashboard')}}" class="">
                              <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                          </a>
                      <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                      </ul>
                   </li>
                   
                   <li class="active">
                      <a href="{{route('files')}}" class="">
                              <i class="lar la-file-alt iq-arrow-left"></i><span>Files</span>
                          </a>
                      <ul id="page-files" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                      </ul>
                   </li>
                    
              
                   <li class=" ">
                          <a href="{{route('upload')}}" class="">
                            <i class="ri-file-upload-line pr-3"></i><span>File Upload</span>
                          </a>
                      <ul id="page-delete" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                      </ul>
                   </li>
             
              </ul>
          </nav>
          
          <div class="p-3"></div>
      </div>
      </div>       <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
              <i class="ri-menu-line wrapper-menu"></i>
              <a href="{{route('dashboard')}}" class="header-logo">
                  <img src="../assets/images/Drop.png" class="img-fluid rounded-normal light-logo" ">
                
              </a>
          </div>
              <div class="iq-search-bar device-search">
                  
                  <form>
                      <div class="input-prepend input-append">
                          <div class="btn-group">
                              <label class="dropdown-toggle searchbox" data-toggle="dropdown">
                              <input class="dropdown-toggle search-query text search-input" type="text"  placeholder="Type here to search..."><span class="search-replace"></span>
                              <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                              <span class="caret"><!--icon--></span>
                              </label>
                              <ul class="dropdown-menu">
                                  <li><a href="#"><div class="item"><i class="far fa-file-pdf bg-info"></i>PDFs</div></a></li>
                                  <li><a href="#"><div class="item"><i class="far fa-file-alt bg-primary"></i>Documents</div></a></li>
                                  <li><a href="#"><div class="item"><i class="far fa-file-excel bg-success"></i>Excels</div></a></li>
                                  <li><a href="#"><div class="item"><i class="far fa-file-powerpoint bg-danger"></i>Power Points</div></a></li>
                                  
                              </ul>
                          </div>
                      </div>
                  </form>
              </div>
  
              <div class="d-flex align-items-center">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto navbar-list align-items-center">
                      <li class="nav-item nav-icon search-content">
                          <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ri-search-line"></i>
                          </a>
                          <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                              <form action="#" class="searchbox p-2">
                                  <div class="form-group mb-0 position-relative">
                                  <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                  <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                  </div>
                              </form>
                          </div>
                      </li> 
                     
                      <li class="nav-item nav-icon dropdown"> 
                          <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          <i class="ri-settings-3-line"></i>
                          </a>
                          <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton02">
                              <div class="card shadow-none m-0">
                                  <div class="card-body p-0 ">
                                      <div class="p-3">
                                          <a href="#" class="iq-sub-card pt-0"><i class="ri-settings-3-line"></i> Settings</a>
                                          <a href="#" class="iq-sub-card"><i class="ri-hard-drive-line"></i> Get Drive for desktop</a>
                                          <a href="#" class="iq-sub-card"><i class="ri-keyboard-line"></i> Keyboard Shortcuts</a>
                                      </div>                                
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item nav-icon dropdown caption-content">
                          <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                              <div class="caption bg-primary line-height">P</div>
                          </a>
                          <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton03">
                              <div class="card mb-0">
                                  <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                  <div class="header-title">
                                      <h4 class="card-title mb-0">Profile</h4>
                                  </div>
                                  <div class="close-data text-right badge badge-primary cursor-pointer "><i class="ri-close-fill"></i></div>
                                  </div>
                                  <div class="card-body">
                                      <div class="profile-header">
                                          <div class="cover-container text-center">
                                              <div class="rounded-circle profile-icon bg-primary mx-auto d-block">
                                                  F                                                    
                                                  <a href="">
                                                      
                                                  </a>
                                              </div>
                                              <div class="profile-detail mt-3">
                                              <h5><a href="../app/user-profile-edit.html">{{Auth::user()->name}}</a></h5>
                                              <p>{{Auth::user()->email}}</p>
                                              </div>
                                              <a href="/logout" class="btn btn-primary">Sign Out</a>
                                          </div>
                                        
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      </ul>                     
                  </div> 
              </div>
          </nav>
      </div>
  </div>
    
    <!-- sidebar end -->
    @if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach      
        </div>  
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        <i class="fa fa-check"></i>
        {{session('success')}}</div>
@endif
 
    @yield('container')
    <!-- Wrapper End-->
   
    <!-- Backend Bundle JavaScript -->
   
 

     <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Title</h4>
                    <div>
                        <a class="btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="resolte-contaniner" style="height: 500px;" class="overflow-auto">
                        File not found
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    
    <script src="{{asset('/assets/js/backend-bundle.min.js')}}"></script>
    
<!-- Chart Custom JavaScript -->
<script src="{{asset('/assets/js/customizer.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('/assets/js/chart-custom.js')}}"></script>

<!--PDF-->
<script src="{{asset('/assets/vendor/doc-viewer/include/pdf/pdf.js')}}"></script>
<!--Docs-->
<script src="{{asset('/assets/vendor/doc-viewer/include/docx/jszip-utils.js')}}"></script>
<script src="{{asset('/assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js')}}"></script>
<!--PPTX-->
<script src="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js')}}"></script>
<script src="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js')}}"></script>
<script src="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js')}}"></script>
<script src="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js')}}"></script>
<script src="{{asset('/assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js')}}"></script>
<!--All Spreadsheet -->
<script src="{{asset('/assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js')}}"></script>
<script src="{{asset('/assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js')}}"></script>
<!--Image viewer-->
<script src="{{asset('/assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js')}}"></script>
<!--officeToHtml-->
<script src="{{asset('/assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js')}}"></script>
<script src="{{asset('/assets/js/doc-viewer.js')}}"></script>
<!-- app JavaScript -->
<script src="{{asset('/assets/js/app.js')}}"></script>
@yield('js')
  </body>
</html>