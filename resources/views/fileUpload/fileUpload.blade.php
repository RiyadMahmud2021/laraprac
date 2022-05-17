@extends('layouts.app')


@section('title','File Uploader')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laravel JS Axios File Upload</h4>
                    </div>
                    <div class="card-body">
                         <input id = 'fileId' class='form-control' type = 'file' >
                         <button onClick ="onUpload()" id = 'uploadBtnId' class = 'btn my-3  btn-block btn-primary' > Upload </button>
                    </div>
                </div>

            </div>
    </div>
</div>

@endsection

@section('script')
<script type ='text/javascript'>

function onUpload(){
     // let myFile = document.getElementById('fileId').files; // catching fileList
     let myFile = document.getElementById('fileId').files[0]; // catching single file
     alert(myFile);
}
</script>
@endsection
