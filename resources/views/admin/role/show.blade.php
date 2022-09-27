@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('Roles') }}</h5>
            </div>
        </div>
        <div class="col-lg-12">

            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ route('role.create') }}" class="btn btn-info">{{ __('Add Role') }}</a>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="{{ route('role.index') }}" title="{{ __('Back to all roles') }}">
                                {{ __('Back to all roles') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">

                <table id="" class="table table-striped table-bordered data_table" style="width:100%">
                    <tbody>
                    <tr>
                        <td class="">{{ __('Name') }}</td>
                        <td class="">{{$role->name}}</td>
                    </tr>
                    <tr>
                        @unless ($role->name == env('APP_SUPER_ADMIN', 'super-admin'))
                            <td class="">{{ __('Permissions') }}</td>
                            <td class="">
                                <div class="">
                                    @forelse ($permissions as $permission)
                                        <div class="">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ in_array($permission->id, $roleHasPermissions) ? 'checked' : '' }} disabled="disabled" class="">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @empty
                                        ----
                                    @endforelse
                                </div>
                            </td>
                    </tr>
                    @endunless
                    <tr>
                        <td class="">{{ __('Created') }}</td>
                        <td class="">{{$role->created_at}}</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
