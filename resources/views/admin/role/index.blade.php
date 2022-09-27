@extends('layouts.app')
@section('content')
    <div class="row">
        @include("admin.inc.alert")
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('Roles') }}</h5>
            </div>
        </div>
        <div class="col-lg-12">
            @can('role create')
            <div class="col-lg-12" id="alert_box">
                <a href="{{ route('role.create') }}" class="btn btn-info">{{ __('Add Role') }}</a>
            </div>
            @endcan
            <div class="col-lg-12">
                <table id="" class="table table-striped table-bordered data_table" style="width:100%">
                    <thead>
                    <tr>
                        <th style="width: 100px;">#</th>
                        <th style="width: 300px;">Rol Adı</th>
                        @canany(['role edit', 'role delete'])
                        <th class="text-right">İşlemler</th>
                        @endcanany
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>
                                <a href="{{ route('role.show', $role->id) }}">{{ $role->name }}</a>
                            </td>
                            <td class="text-right">
                                @canany(['role edit', 'role delete'])
                                    <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                        @can('role edit')
                                            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-info">
                                                {{ __('Edit') }}
                                            </a>
                                        @endcan
                                        @can('role delete')
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                    onclick="return confirm('{{ __('Are you sure you want to delete?') }}')">
                                                {{ __('Delete') }}
                                            </button>
                                        @endcan
                                    </form>
                                @endcanany
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
