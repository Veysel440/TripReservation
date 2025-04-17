<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Yönetimi</title>
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
                <h1>Rezervasyon Yönetimi</h1>
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

        <div class="product-settings-container">
            <div class="product-settings-actions">
                <a href="{{ route('admin.reservation.create') }}" class="btn btn-primary">Yeni Rezervasyon Ekle</a>
            </div>
            <h3>Rezervasyon Listesi</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Email</th>
                        <th>Hedef</th>
                        <th>Tarih</th>
                        <th>Mesaj</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->destination }}</td>
                            <td>{{ $reservation->date_time->format('d.m.Y H:i') }}</td>
                            <td>{{ Str::limit($reservation->special_request, 30) }}</td>
                            <td>
                                <a href="{{ route('admin.reservation.edit', $reservation->id) }}" class="btn" title="Düzenle">
                                    <i class="fas fa-edit"></i>
                                </a> |
                                <form action="{{ route('admin.reservation.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" onclick="return confirm('Bu rezervasyonu silmek istediğinizden emin misiniz?')" title="Sil">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</body>
</html>
