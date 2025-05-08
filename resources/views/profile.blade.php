@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="profile-picture-container mb-3">
                    <img id="profile-image" src="{{ $user->getProfilePictureUrl() }}"
                        class="img-circle elevation-2" alt="User Image" style="width: 150px; height: 150px; object-fit: cover;">
                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm" id="change-picture-btn">
                            <i class="fas fa-camera mr-1"></i> Ganti Gambar
                        </button>
                    </div>
                </div>
                <form id="profile-picture-form" style="display: none;">
                    @csrf
                    <input type="file" name="image" id="image" accept="image/*">
                </form>
            </div>
            <div class="col-md-8">
                <h4>Informasi Akun</h4>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30%">Username</th>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $user->nama }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ $user->getRoleName() }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#change-picture-btn').on('click', function() {
            $('#image').click();
        });

        $('#image').on('change', function() {
            const file = this.files[0];
            if (file) {
                const formData = new FormData($('#profile-picture-form')[0]);

                $.ajax({
                    url: '{{ url("/profile/update-picture") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status) {
                            // Update profile image on page
                            $('#profile-image').attr('src', response.image_url);

                            // Update image in sidebar
                            $('.user-panel .image img').attr('src', response.image_url);

                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                timer: 2000,
                                showConfirmButton: false
                            });
                        }
                    },
                    error: function(xhr) {
                        let message = 'An error occurred';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            message = xhr.responseJSON.message;
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: message
                        });
                    }
                });
            }
        });
    });
</script>
@endpush
