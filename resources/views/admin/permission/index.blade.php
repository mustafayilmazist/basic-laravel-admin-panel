@extends('layouts.app')
@section('content')
    <div class="row">
        @include("admin.inc.alert")
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('Permissions') }}</h5>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-lg-12" id="alert_box">
                <a href="{{ route('permission.create') }}" class="btn btn-info">{{ __('Add Permission') }}</a>
            </div>
            <div class="col-lg-12">
                <table id="" class="table table-striped table-bordered data_table" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th th style="width: 300px;">Ad</th>
                        @canany(['permission edit', 'permission delete'])
                            <th class="text-right">İşlemler</th>
                        @endcanany
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($permissions as $key => $permission)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>
                                <a href="{{ route('permission.show', $permission->id) }}">{{ $permission->name }}</a>
                            </td>
                            @canany(['permission edit', 'permission delete'])
                                <td class="text-right">
                                    <form action="{{ route('permission.destroy', $permission->id) }}" method="POST">
                                        @can('permission edit')
                                            <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-info">
                                                {{ __('Edit') }}
                                            </a>
                                        @endcan
                                        @can('permission delete')
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                    onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                {{ __('Delete') }}
                                            </button>
                                        @endcan
                                    </form>
                                </td>
                            @endcanany
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
