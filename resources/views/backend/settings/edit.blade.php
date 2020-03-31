@extends('backend.layout')
  @section('content') 
    <section class="content-header">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Settings</h3>
        </div>
        <div class="box-body">
          <p>Settings Page</p>
        </div>
        <div class="box-body">
          <form action="{{route('settings.Update',['id'=>$settings->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label>Description</label>
            <div class="row">
              <div class="col-xs-12">
                <input class="form-control" name="settings_description" readonly type="text" value="{{$settings->settings_description}}">
              </div>
            </div>
          </div>

          @if ($settings->settings_type=="file")
          <div class="form-group">
            <label>Phote Choose</label>
            <div class="row">
              <div class="col-xs-12">
                <input class="form-control" name="settings_value" required type="file">
              </div>
            </div>
          </div>
          @endif
          
          <div class="form-group">
            <label>Include</label>
            <div class="row">
              <div class="col-xs-12">
                @if ($settings->settings_type=="text")
                <input class="form-control" type="text" name="settings_value" required value="{{$settings->settings_value}}">
                @endif

                @if ($settings->settings_type=="textarea")
                <textarea class="form-control" name="settings_value" cols="30" rows="10">{{$settings->settings_value}}</textarea>
                @endif

                @if ($settings->settings_type=="ckeditor")
                <textarea class="form-control" id="editor1" name="settings_value">{{$settings->settings_value}}</textarea>
                @endif
                <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                <div align="right" class="box-footer">
                  <button type="submit" class="btn btn-success">Edit</button>
                </div>
              </div>
            </div>
          </div>

          </form>
        </div>
      </div> 
    </section>
  
  @endsection
@section('css')@endsection
@section('js')@endsection