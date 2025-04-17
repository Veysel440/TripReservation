<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Rezervasyon Ekle</title>
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
                <h1>Yeni Rezervasyon Ekle</h1>
            </div>
            <div class="header-actions">
                <span>Admin</span>
                <li>
                </li>
            </div>
        </header>
        <div class="product-create-container">
            <form action="{{ route('admin.reservation.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Ad Soyad:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="destination">Gidilecek Yer:</label>
                    <input type="text" id="destination" name="destination" required>
                </div>

                <div class="form-group">
                    <label for="date_time">Tarih ve Saat:</label>
                    <input type="datetime-local" id="date_time" name="date_time" required>
                </div>

                <div class="form-group">
                    <label for="message">Mesaj:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <div class="button-container">
                    <a href="{{ route('admin.reservation.index') }}" class="btn btn-secondary">Geri Dön</a>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
</html>
