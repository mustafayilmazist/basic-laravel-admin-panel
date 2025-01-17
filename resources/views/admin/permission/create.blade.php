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
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="{{ route('permission.index') }}" title="{{ __('-View permission') }}">
                            {{ __('Back to all permissions') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form method="POST" action="{{ route('permission.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</label>
                    <input id="name" class="form-control{{$errors->has('name') ? 'border-red-400' : ''}}"
                           type="text"
                           name="name"
                           value="{{ old('name') }}"
                    />
                </div>
                <div class="flex justify-end mt-4">
                    <input  type="submit" value="{{ __('Create') }}" class="btn btn-info"/>
                </div>
            </form>
        </div>
    </div>
@endsection
