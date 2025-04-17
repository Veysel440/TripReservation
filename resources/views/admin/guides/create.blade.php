<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Rehber Ekle</title>
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
                <h1>Yeni Rehber Ekle</h1>
            </div>
            <div class="header-actions">
                <span>Admin</span>
                <li>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Çıkış Yap
                    </a>
                </li>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </header>

        <div class="announcement-create-container">
            <form action="{{ route('admin.guides.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">İsim:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="description">Tanım:</label>
                    <input type="text" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="story">Hikaye (Uzun Tanıtım):</label>
                    <textarea id="story" name="story" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="experience">Tecrübe:</label>
                    <input type="text" id="experience" name="experience">
                </div>

                <div class="form-group">
                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter:</label>
                    <input type="text" id="twitter" name="twitter">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook:</label>
                    <input type="text" id="facebook" name="facebook">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram:</label>
                    <input type="text" id="instagram" name="instagram">
                </div>

                <div class="form-group">
                    <label for="photo">Rehber Fotoğrafı:</label>
                    <input type="file" id="photo" name="photo" accept="image/*">
                </div>

                <div class="button-container">
                    <a href="{{ route('admin.guides.index') }}" class="btn btn-secondary">Geri Dön</a>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>
