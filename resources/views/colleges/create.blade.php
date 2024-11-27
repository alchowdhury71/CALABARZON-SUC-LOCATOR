@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <!-- Centered Title -->
        <h1 style="text-align: center;">Add New SUC</h1>
        <!-- Centered Form -->
        <form action="{{ route('colleges.store') }}"
              method="POST"
              enctype="multipart/form-data"
              style="width: 50%;"
              class="mx-auto">
            @csrf

            <!-- Avatar -->
            <div class="md-3 mb-3">
                <label for="avatar" class="form-label">Avatar</label>

                <!-- Avatar Preview -->
                <div style="margin:10px; text-align:center">
                    <img
                        id="avatar-preview"
                        src="{{ asset('storage/images/placeholder-image.jpg') }}"
                        alt="No logo set"
                        style="width:150px; height:150px; border-radius:50%">
                </div>

                <!-- File Input and Clear Button -->
                <div style="display: flex; align-items: center;">
                    <input type="file" name="avatar" id="avatar" class="form-control" style="flex: 1;" accept="image/*">
                    <button type="button" class="btn btn-light btn-sm" id="clear-avatar" style="margin-left: 10px;">
                        &#x2716; <!-- Unicode X symbol -->
                    </button>
                </div>

                @error('avatar')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- SUC Name -->
            <div class="mb-3">
                <label for="name" class="form-label">SUC Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contact -->
            <div class="mb-3">
                <label for="contact_number" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact_number">
                @error('contact_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Latitude -->
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="number" class="form-control" id="latitude" name="latitude" step="any" required>
                @error('latitude')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Longitude -->
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="number" class="form-control" id="longitude" name="longitude" step="any" required>
                @error('longitude')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Website -->
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" name="website">
                @error('website')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('colleges.index') }}" class="btn btn-success">Back</a>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById('clear-avatar').addEventListener('click', function () {
        const fileInput = document.getElementById('avatar');
        fileInput.value = ''; // Clear the file input value
    });
</script>
@endsection
