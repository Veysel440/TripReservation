<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Hakkımızda Ekle</title>
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
            <div class="header-title">
                <h1>Yeni Hakkımızda Ekle</h1>
            </div>
            <div class="header-actions">
                <span>Admin</span>
            </div>
        </header>
        <div class="product-create-container">
            <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Başlık:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="image">Görsel:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="content">İçerik:</label>
                    <textarea id="content" name="content" rows="4" required></textarea>
                </div>
                <div class="button-container">
                    <a href="{{ route('admin.about.index') }}" class="btn btn-secondary">Geri Dön</a>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>
