@extends('admin_layouts.inc')
@section('title','Setting')
@section('header','Setting')
@section('head_description','Setting')
@section('breadcrumb','Setting')
@section('styles')
  <link href="{{ asset('/admin_ui/assets/layouts/layout4/css/image.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- Main content -->
<div class="row">
  <div class="col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-dark">
          <i class="icon-settings font-dark"></i>
          <span class="caption-subject bold uppercase">Setting Data</span>
        </div>
        <div class="tools"> </div>
      </div>
      <div class="portlet-body">
              <table class="table table-striped table-bordered table-hover" id="settings">
                <thead>
                  <th class="col-md-1">logo ar</th>
                  <th class="col-md-1">logo en</th>
                  <th class="col-md-1">location en</th>
                  <th class="col-md-1">phone</th>
                  <th class="col-md-1">email</th>
                  <th class="col-md-1">facebook</th>
                  <th class="col-md-1">google</th>
                  <th class="col-md-1">twitter</th>
                  <th class="col-md-1">Actions</th>
                </thead>
                <tbody>
                  @foreach ($tableData->getData()->data as $row)
                  <tr>
                    <td>{!! $row->logo_ar !!}</td>
                    <td>{!! $row->logo_en !!}</td>
                    <td>{{  $row->location_en }}</td>
                    <td>{{  $row->phone }}</td>
                    <td>{{  $row->email }}</td>
                    <td>{{  $row->facebook }}</td>
                    <td>{{  $row->google }}</td>
                    <td>{{  $row->twitter }}</td>
                    <td>{!! $row->actions !!}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- END EXAMPLE TABLE PORTLET-->
        </div>
      </div>

      @include('admin_layouts.Edit_imgModal')

      @endsection

      @section('scripts')
        <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/multipart_insert.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/upload.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/layouts/layout4/scripts/app.js') }}"></script>
      <script type="text/javascript">
       $(document).ready(function() {
        oTable = $('#settings').DataTable({
          "processing": true,
          "serverSide": true,
          "responsive": true,
          'paging'      : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
          "ajax": {{ $tableData->getData()->recordsFiltered }},
          "columns": [
          {data: 'logo_ar', name: 'logo_ar'},
          {data: 'logo_en', name: 'logo_en'},
          {data: 'location_en', name: 'location_en'},
          {data: 'phone', name: 'phone'},
          {data: 'email', name: 'email'},
          {data: 'facebook', name: 'facebook'},
          {data: 'google', name: 'google'},
          {data: 'twitter', name: 'twitter'},
          {data: 'actions', name: 'actions', orderable: false, searchable: false}
          ]
        })
      });
    </script>
      <script src="{{ asset('/admin-ui/js/for_pages/table.js') }}"></script>
    @endsection
