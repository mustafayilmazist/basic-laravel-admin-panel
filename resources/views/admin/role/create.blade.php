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
        <form method="POST" action="{{ route('role.store') }}">
        @csrf

            <div class="form-group">
                <label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</label>

                <input id="name" class="form-control{{$errors->has('name') ? 'border-red-400' : ''}}"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    />
            </div>

            <div class="form-group">
                <h3 class="">Permissions</h3>
                <div class="grid grid-cols-4 gap-4">
                    @forelse ($permissions as $permission)
                        <div class="">
                            <label class="form-check-label">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @empty
                        ----
                    @endforelse
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <input  type="submit" value="{{ __('Update') }}" class="btn btn-info"/>
            </div>
        </form>
    </div>
    </div>
@endsection
