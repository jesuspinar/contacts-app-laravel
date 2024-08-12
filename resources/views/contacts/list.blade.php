@extends('layouts.app')

@section('content')
  <div class="container pt-4 p-3">
    <div class="row">
      @forelse ($contacts as $contact)
        <div class="col-md-4 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title text-capitalize">{{ $contact->name }}</h3>
              <p class="m-2">{{ $contact->phone_number }}</p>
              <a href="{{ route('contacts.show', $contact) }}" class="btn btn-primary mb-2">Detail
              </a>
              <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-secondary mb-2">Edit
              </a>
              <form action="{{ route('contacts.destroy', $contact) }}" method="POST"
                class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2"
                  onclick="return confirm('Are you sure you want to delete this contact?');">
                  Delete
                </button>
              </form>
            </div>
          </div>
        </div>
      @empty
        <div class="col-md-4 mx-auto">
          <div class="card card-body text-center">
            <p>No contacts saved yet</p>
            <a href="{{ route('contacts.create') }}">Add One!</a>
          </div>
        </div>
      @endforelse
    </div>
    <div>
      {{ $contacts->links() }}
    </div>
  </div>
@endsection
