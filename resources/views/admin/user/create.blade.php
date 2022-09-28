@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>{{ __('Users') }}</h5>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="{{ route('user.index') }}" title="{{ __('Create user') }}">
                            {{ __('Back to all users') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="{{ $errors->has('name') ? 'text-red-400' : '' }}">
                            {{ __('Name') }}
                        </label>
                        <input id="name" class="form-control{{ $errors->has('name') ? 'border-red-400' : '' }}"
                            type="text" name="name" value="{{ old('name') }}" />
                    </div>

                    <div class="form-group">
                        <label for="email" class="{{ $errors->has('email') ? 'text-red-400' : '' }}">
                            {{ __('Email') }}
                        </label>

                        <input id="email" class="form-control{{ $errors->has('email') ? 'border-red-400' : '' }}"
                            type="email" name="email" value="{{ old('email') }}" />
                    </div>

                    <div class="form-group">
                        <label for="password" class="{{ $errors->has('password') ? 'text-red-400' : '' }}">
                            {{ __('Password') }}
                        </label>

                        <input id="password" class="form-control{{ $errors->has('password') ? 'border-red-400' : '' }}"
                            type="password" name="password" />
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="{{ $errors->has('password') ? 'text-red-400' : '' }}">
                            {{ __('Password Confirmation') }}
                        </label>

                        <input id="password_confirmation"
                            class="form-control{{ $errors->has('password') ? 'border-red-400' : '' }}" type="password"
                            name="password_confirmation" />
                    </div>

                    <div class="form-group">
                        <h3 class="">
                            Roles</h3>
                        <div class="grid grid-cols-4 gap-4">
                            @forelse ($roles as $role)
                                <div class="">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="roles[]" value="{{ $role->name }}" class="">
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @empty
                                ----
                            @endforelse
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <input type="submit" value="{{ __('Create') }}" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
