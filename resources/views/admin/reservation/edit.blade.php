<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Düzenle</title>
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
            <h1>Rezervasyon Düzenle</h1>
        </header>

        <section class="settings">
            <form action="{{ route('admin.reservation.update', $reservation->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Ad Soyad:</label>
                    <input type="text" name="name" class="form-control" value="{{ $reservation->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">E-posta:</label>
                    <input type="email" name="email" class="form-control" value="{{ $reservation->email }}" required>
                </div>

                <div class="form-group">
                    <label for="destination">Gidilecek Yer:</label>
                    <input type="text" name="destination" class="form-control" value="{{ $reservation->destination }}" required>
                </div>

                <div class="form-group">
                    <label for="date_time">Tarih ve Saat:</label>
                    <input type="datetime-local" name="date_time" class="form-control" value="{{ \Carbon\Carbon::parse($reservation->date_time)->format('Y-m-d\TH:i') }}" required>
                </div>

                <div class="form-group">
                    <label for="message">Mesaj:</label>
                    <textarea name="message" class="form-control" required>{{ $reservation->message }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
