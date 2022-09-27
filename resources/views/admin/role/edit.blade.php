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
                <div class="col-lg-12" id="">
                    <a href="{{ route('role.index') }}" class="btn btn-info">{{ __('Back to all roles') }}</a>
                </div>
            @endcan
            <div class="col-lg-12">
                <form method="POST" action="{{ route('role.update', $role->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</label>

                        <input id="name" class="form-control{{$errors->has('name') ? 'border-red-400' : ''}}"
                                            type="text"
                                            name="name"
                                            value="{{ old('name', $role->name) }}"
                        />
                    </div>
                    @unless ($role->name == env('APP_SUPER_ADMIN', 'super-admin'))
                        <div class="form-group">
                            <h3 class="">Permissions</h3>
                            <div class="">
                                @forelse ($permissions as $permission)
                                    <div class="">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ in_array($permission->id, $roleHasPermissions) ? 'checked' : '' }} class="">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @empty
                                    ----
                                @endforelse
                            </div>
                        </div>
                    @endunless
                    <div class="flex justify-end mt-4">
                        <input  type="submit" value="{{ __('Update') }}" class="btn btn-info"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
