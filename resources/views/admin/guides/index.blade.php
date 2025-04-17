<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehber Yönetimi</title>
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
                <h1>Rehber Yönetimi</h1>
            </div>
            <div class="header-actions">
                <span>Admin</span>
                <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Çıkış Yap</a></li>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </header>
        <div class="announcement-settings-container">
            <div class="announcement-settings-actions">
                <a href="{{ route('admin.guides.create') }}" class="btn btn-primary">Yeni Rehber Ekle</a>
            </div>
            <h3>Rehber Listesi</h3>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Tanım</th>
                        <th>Hikaye</th>
                        <th>Tecrübe</th>
                        <th>Email</th>
                        <th>Twitter</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Fotoğraf</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($guides as $guide)
                        <tr>
                            <td>{{ $guide->name }}</td>
                            <td>{{ Str::limit($guide->description, 30) }}</td>
                            <td>{{ Str::limit($guide->story, 30) }}</td>
                            <td>{{ $guide->experience }}</td>
                            <td>{{ $guide->email }}</td>
                            <td>{{ $guide->twitter }}</td>
                            <td>{{ $guide->facebook }}</td>
                            <td>{{ $guide->instagram }}</td>
                            <td>
                                @if($guide->photo)
                                    <img src="{{ asset('storage/' . $guide->photo) }}" alt="{{ $guide->name }}" width="100">
                                @else
                                    <span>Fotoğraf yok</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.guides.edit', $guide->id) }}" class="btn" title="Düzenle">
                                    <i class="fas fa-edit"></i>
                                </a> |
                                <form action="{{ route('admin.guides.destroy', $guide->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" onclick="return confirm('Rehberi silmek istediğinizden emin misiniz?')" title="Sil">
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
