@extends('layouts.app')

@section('content')
  <div class="container pt-4 p-3">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card">
          <div class="card-header">
            Contact Details
          </div>
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-md-4 text-center mb-3 ">
                <img height='145' width='145' class="rounded-2" style="object-fit: cover"
                  src="{{ Storage::url($contact->profile_picture) }}">
              </div>
              <div class="col-md-8">
                <h3 class="card-title">{{ $contact->name }}</h3>
                <p class="card-text">
                  <strong>Phone Number:</strong>
                  <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
                </p>
                <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
