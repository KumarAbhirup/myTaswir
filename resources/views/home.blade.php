<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content">
                <div class="title m-b-md">
                    Dashboard
                </div>

                <div class="links">
                    <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                    <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                    <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                    <a href="https://github.com/KumarAbhirup/mytaswir" target="_blank">GitHub</a>
                </div>
                <div class="container my_panel">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-default">
                              <div class="panel-heading">Dashboard</div>

                              <div class="panel-body">
                                  @if (session('status'))
                                      <div class="alert alert-success">
                                          {{ session('status') }}
                                      </div>
                                  @endif

                                  <div class="ui segments">
                                    <div class="ui segment">
                                      <p><a href="{{url('/')}}">Enter the PicWorld</a></p>
                                    </div>
                                    <div class="ui segment">
                                      <p><a href="{{url('/publicize')}}">Publicize a picture</a></p>
                                    </div>
                                    <div class="ui segment">
                                      <p><a href="{{url('/manage')}}">Manage pictures</a></p>
                                    </div>
                                    <div class="ui segment">
                                      <p><a href="{{url('/settings')}}">Profile Settings</a></p>
                                    </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                </div>

            </div>
        </div>
    </body>
</html>
{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
