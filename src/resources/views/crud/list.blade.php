@extends('laravel-admin::layouts.app')

@section('content')
    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title w-100 text-right">
                            <a href="{{ route("{$route_base}.create") }}" class="btn btn-sm btn-success">Add new</a>
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            {{-- <p class="card-text"></p> --}}
                            <div class="table-responsive">
                                <table class="table jd-datatable">
                                    <thead>
                                        <tr>
                                            @foreach($table_columns as $column)
                                                @php $column['title'] = $column['title'] ?? $column['name'] @endphp
                                                <th class="{{ ($column['sortable'] ?? $column['name'] !== 'actions' ) ? '' : 'no-sort' }}">{{ title_case($column['title']) }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('laravel-admin::layouts.datatables-config')