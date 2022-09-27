@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('My Account') }}</h5>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('admin.account.info.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name"
                            class="{{ $errors->account->has('name') ? ' text-red-400' : '' }}">{{ __('Name') }}</label>
                        <input id="name"
                            class="form-control{{ $errors->account->has('name') ? ' border-red-400' : '' }}" type="text"
                            name="name" value="{{ old('name', $user->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="email"
                            class="{{ $errors->account->has('email') ? ' text-red-400' : '' }}">{{ __('Email') }}</label>

                        <input id="email"
                            class="form-control{{ $errors->account->has('email') ? ' border-red-400' : '' }}"
                            type="email" name="email" value="{{ old('email', $user->email) }}" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            {{ __('Update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('Change Password') }}</h5>
            </div>
        </div>
        <div class="col-lg-12">
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('admin.account.password.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="old_password"
                                class="{{ $errors->password->has('old_password') ? ' text-red-400' : '' }}">{{ __('Old Password') }}</label>

                            <input id="old_password"
                                class="form-control{{ $errors->password->has('old_password') ? ' border-red-400' : '' }}"
                                type="password" name="old_password" />
                        </div>

                        <div class="form-group">
                            <label for="new_password"
                                class="{{ $errors->password->has('new_password') ? ' text-red-400' : '' }}">{{ __('New Password') }}</label>

                            <input id="new_password"
                                class="form-control{{ $errors->password->has('new_password') ? ' border-red-400' : '' }}"
                                type="password" name="new_password" />
                        </div>

                        <div class="form-group">
                            <label for="confirm_password"
                                class="{{ $errors->password->has('confirm_password') ? ' text-red-400' : '' }}">{{ __('Confirm password') }}</label>

                            <input id="confirm_password"
                                class="form-control{{ $errors->password->has('confirm_password') ? ' border-red-400' : '' }}"
                                type="password" name="confirm_password" />
                        </div>

                        <div class="form-group">
                            <button type='submit' class='btn btn-success'>
                                {{ __('Change Password') }}
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection
