@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <h5>{{ __('Permissions') }}</h5>
            </div>
        </div>
        <div class="col-lg-12">

            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ route('permission.create') }}" class="btn btn-info">{{ __('Add Permission') }}</a>
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

                <table id="" class="table table-striped table-bordered data_table" style="width:100%">
                    <tbody>
                    <tr>
                        <td class="">{{ __('Name') }}</td>
                        <td class="">{{$permission->name}}</td>
                    </tr>
                    <tr>
                        <td class="">{{ __('Created') }}</td>
                        <td class="">{{$permission->created_at}}</td>
                    </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
