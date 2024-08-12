@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            {{ isset($contact) ? 'Edit Contact' : 'Create New Contact' }}
          </div>

          <div class="card-body">
            <form method="POST" enctype='multipart/form-data'
              action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}">
              @csrf
              @if (isset($contact))
                @method('PUT')
              @endif

              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                <div class="col-md-6">
                  <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name', $contact->name ?? '') }}" required autocomplete="name"
                    autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number"
                  class="col-md-4 col-form-label text-md-end">{{ __('Phone number') }}</label>
                <div class="col-md-6">
                  <input id="phone_number" type="tel"
                    class="form-control @error('phone_number') is-invalid @enderror"
                    name="phone_number"
                    value="{{ old('phone_number', $contact->phone_number ?? '') }}" required
                    autocomplete="phone_number">

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="profile_picture" class="col-md-4 col-form-label text-md-end">Profile
                  Picture</label>

                <div class="col-md-6">
                  <input id="profile_picture" type="file"
                    class="@error('profile_picture') is-invalid @enderror form-control"
                    name="profile_picture">

                  @error('profile_picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ isset($contact) ? __('Update') : __('Create') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
