@extends('layouts.app')

@section('container')
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid">

                <div class="upload">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data"  >
                        @csrf
                        <div class="drag-image">
                            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                            <h6>Upload File Here</h6>

                            <label for="file">Browse File</label>
                            <input type="file" id="file" name="file" hidden  >
                         
                            <input type="submit" value="submit" class="submit">

                        </div>
                    </form>
                     
                    <div class="barpro" style="width: 500px; margin:10px 10px; display:none;">
                        <div class="filesPart">
                            <div class="test"></div>
                        </div>
                        <div class="progress" style="position: relative; width: 100%;  height: 20px; " >
                            <div class="bar" style="background-color: #2dab27; width: 0%; height: 20px;"></div>
                            <div class="percent" style="position: absolute; display: block; left: 50%; transform: translateX(-50%); text-align: center; color: #040608; line-height: 20px;">
                              0%
                          </div>
                      </div>
                  </div>
       

                </div>
               


            </div>
        </div>
    @endsection

    @section('js')

    <script>
 
var file = document.querySelectorAll('input[type=file]');
var fileId = document.querySelector('#file')
var submit = document.querySelector('.submit');
var fileName = document.querySelector('.filesPart');
var bar = document.querySelector('.barpro');
fileId.addEventListener('change', function () {
    bar.style.display = 'block'

    for (var i = 0; i < file.length; i++) {
        if (file[i].files.length > 0) {
            var fileName = document.createElement('div');
        
            fileName.classList.add('fileName');
            fileName.style.marginBottom = '5px';
            
            var nameSpan = document.createElement('span');
            nameSpan.classList.add('nameFile');
            nameSpan.textContent = file[i].files[0].name;
            
           
            var image = document.createElement('img');
            if(file[i].files[0].name.split('.').pop() == 'docx'){
                
                image.src = '../assets/images/layouts/page-7/doc.png';
                
            }
            if(file[i].files[0].name.split('.').pop() == 'pdf'){
                
                image.src = '../assets/images/layouts/page-7/pdf.png';
            }
            if(file[i].files[0].name.split('.').pop() == 'pptx' || file[i].files[0].name.split('.').pop() == 'pptx'){
                
                image.src = '../assets/images/layouts/page-7/ppt.png';
            }
            image.alt = '';
            image.style.width = '20px';
            image.style.height = '20px';

            fileName.appendChild(image);
            fileName.appendChild(nameSpan);
       
           document.querySelector('.test').appendChild(fileName);
        }
    }
 
});

    </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
        <script type="text/javascript">
            var SITEURL = "{{ URL('/') }}";
            $(function() {
                $(document).ready(function() {
                    var bar = $('.bar');
                    var percent = $('.percent');
                    $('form').ajaxForm({
                        beforeSend: function() {
                            var percentVal = '0%';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        uploadProgress: function(event, position, total, percentComplete) {
                            var percentVal = percentComplete + '%';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        complete: function(xhr) {
                            alert('File Uploaded Successfully');

                        }
                    });
                });
            });
        </script>
   
    @endsection
