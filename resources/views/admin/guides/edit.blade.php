<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehber Düzenle</title>
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/admin-settings.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/admin-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/admin-bank-settings.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="admin-container">

    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>Yönetici Paneli</h2>
        </div>
        @include('admin.partials.sidebar')
    </aside>

    <main class="main-content">
        <header class="header">
            <h1>Rehber Düzenle</h1>
        </header>

        <section class="settings">
            <form action="{{ route('admin.guides.update', $guide->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">İsim:</label>
                    <input type="text" name="name" class="form-control" value="{{ $guide->name }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Tanım:</label>
                    <input type="text" name="description" class="form-control" value="{{ $guide->description }}">
                </div>

                <div class="form-group">
                    <label for="story">Hikaye (Uzun Tanıtım):</label>
                    <textarea name="story" class="form-control" rows="4">{{ $guide->story }}</textarea>
                </div>

                <div class="form-group">
                    <label for="experience">Tecrübe:</label>
                    <input type="text" name="experience" class="form-control" value="{{ $guide->experience }}">
                </div>

                <div class="form-group">
                    <label for="email">E-posta:</label>
                    <input type="email" name="email" class="form-control" value="{{ $guide->email }}">
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter:</label>
                    <input type="text" name="twitter" class="form-control" value="{{ $guide->twitter }}">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook:</label>
                    <input type="text" name="facebook" class="form-control" value="{{ $guide->facebook }}">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram:</label>
                    <input type="text" name="instagram" class="form-control" value="{{ $guide->instagram }}">
                </div>

                <div class="form-group">
                    <label for="photo">Rehber Fotoğrafı:</label>
                    <input type="file" name="photo" class="form-control">
                    @if($guide->photo)
                        <p>Mevcut Fotoğraf:</p>
                        <img src="{{ asset('storage/' . $guide->photo) }}" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
