<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis Düzenle</title>
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
            <h1>Servis Düzenle</h1>
        </header>

        <section class="settings">
            <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Başlık:</label>
                    <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
                </div>

                <div class="form-group">
                    <label for="description">İçerik:</label>
                    <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Görsel:</label>
                    <input type="file" name="image" class="form-control">
                    @if($service->image)
                        <p>Mevcut Görsel:</p>
                        <img src="{{ asset('storage/service_images/' . $service->image) }}" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
