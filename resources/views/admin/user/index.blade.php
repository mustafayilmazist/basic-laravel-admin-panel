@extends('layouts.app')
@section('content')
    <div class="row">
        @include("admin.inc.alert")
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('Users') }}</h5>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="col-lg-12" id="alert_box">
                <a href="{{ route('user.create') }}" class="btn btn-info">{{ __('Add User') }}</a>
            </div>
            <div class="col-lg-12">
                <table id="" class="table table-striped table-bordered data_table" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th th style="width: 300px;">Ad</th>
                            <th th style="width: 300px;">Email</th>
                            <th th style="width: 200px;">Rol</th>
                            @canany(['user edit', 'user delete'])
                            <th class="text-right">İşlemler</th>
                            @endcanany
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>
                                    <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->roles->pluck('name')->implode(', ') }}
                                </td>
                                @canany(['user edit', 'user delete'])
                                <td class="text-right">
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                            @can('user edit')
                                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">
                                                    {{ __('Edit') }}
                                                </a>
                                            @endcan
                                            @can('user delete')
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
