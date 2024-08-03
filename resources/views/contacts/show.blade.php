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
              <div class="col-md-4 text-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                  fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
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
