@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Users</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <form action="{{ $information?route('information.update','1'):route('information.store') }}" method="POST">
                    @csrf
                    @if ($information)
                        @method('PUT')
                    @endif
                         <div class="card">
                          <div class="card-header">
                            <h4>Information Settings</h4>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <div class="row">
                                <label for="notic"  class="col-md-3">{{ __('Notic ') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="notic" id="notic" class="form-control" value="{{ old('notic', $information?$information->notic:'') }}" placeholder="{{ __('Notic') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="people"  class="col-md-3">{{ __('Poor People ') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="people" id="people" class="form-control" value="{{ old('people', $information?$information->people:'') }}" placeholder="{{ __('Poor People in Bangaldesh') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="phone"  class="col-md-3">{{ __('Phone Number') }}</label>
                                <div class="col-md-9">
                                    <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone', $information?$information->phone:'') }}" placeholder="{{ __('Phone Number') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="email"  class="col-md-3">{{ __('Email Address') }}</label>
                                <div class="col-md-9">
                                    <input type="email" name="email"  id="email" class="form-control" value="{{ old('email', $information?$information->email:'') }}" placeholder="{{ __('Email Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="facebook"  class="col-md-3">{{ __('Facebook Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook', $information?$information->facebook:'') }}" placeholder="{{ __('Facebook Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="instagram"  class="col-md-3">{{ __('instagram Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $information?$information->instagram:'') }}" placeholder="{{ __('Instagram Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="twitter"  class="col-md-3">{{ __('Twitter Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old('twitter', $information?$information->twitter:'') }}" placeholder="{{ __('Twitter Address') }}">
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="row">
                                <label for="pinterest"  class="col-md-3">{{ __('Pinterest Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="pinterest" id="pinterest" class="form-control" value="{{ old('pinterest', $information?$information->pinterest:'') }}" placeholder="{{ __('Pinterest Address') }}">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label for="address"  class="col-md-3">{{ __('Address') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $information?$information->address:'') }}" placeholder="{{ __('Address') }}">
                                </div>
                              </div>
                            </div>



                            <div class="form-group">
                              <div class="row">
                                <label for="map" class="col-md-3">{{ __('Map') }}</label>
                                <div class="col-md-9">
                                    <input type="text" name="map" id="map" class="form-control" value="{{ old('map', $information?$information->map:'') }}" placeholder="{{ __('Map') }}">
                                </div>
                              </div>
                            </div>

                            @can('info-create')
    

                              <div class="text-center">
                              <button type="submit" class="btn btn-primary"> Information Save </button>
                            </div>
                        @endcan
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection