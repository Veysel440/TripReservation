<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Servis Ekle</title>
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
            <h1>Yeni Servis Ekle</h1>
        </header>

        <section class="settings">
            <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Başlık Alanı -->
                <div class="form-group">
                    <label for="title">Başlık</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">İçerik</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Servisi Kaydet</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
