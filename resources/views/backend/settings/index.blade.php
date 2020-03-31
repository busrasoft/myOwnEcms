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
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Description</th>  
            <th>Include</th>  
            <th>Keyword</th>  
            <th>Type</th>  
            <th></th>  
          </tr>  
          <tbody id="sortable">
            @foreach ($data['adminSettings'] as $adminSettings)

            <tr id="{{$adminSettings->id}}">
            <td>{{$adminSettings->id}}</td>
            <td class="sortable">{{$adminSettings['settings_description']}}</td>
            <td>{{$adminSettings->settings_value}}</td>
            <td>{{$adminSettings->settings_key}}</td>
            <td>{{$adminSettings->settings_type}}</td>
            <td width="5"><a href="javascript:void(0)"><i class="fa fa-pencil-square"></i></a></td>
            <td width="5"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i></a></td>
              
            </tr>
            @endforeach
          </tbody>
        </thead>
      </table>
    </div>
    </div> 
    

<script>
 
</script>


  </section>

  <script type="text/javascript">
    $(function(){

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#sortable').sortable({
            revert: true,
            handle: ".sortable",
            stop: function (event, ui) {
                var data = $(this).sortable('serialize');
                $.ajax({
                    type: "POST",
                    data: data,
                    url: "{{route('settings.Sortable')}}",
                    success: function (msg) {
                        // console.log(msg);
                        if (msg) {
                            alert("işlem başarılı");
                        } else {
                            alert("işlem başarısız");
                        }
                    }
                });

            }
        });
        $('#sortable').disableSelection();

    });
</script>



  @endsection
  @section('css')@endsection
  @section('js')@endsection