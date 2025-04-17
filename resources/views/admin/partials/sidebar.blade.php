<nav class="sidebar-nav">
    <ul>
        <li><a href="{{ route('admin') }}"><i class="fas fa-home"></i> Anasayfa</a></li>
        <li><a href="{{ route('admin.about.index') }}"><i class="fas fa-bars"></i> Hakkımızda</a></li>
        <li><a href="{{ route('admin.guides.index') }}"><i class="fas fa-bars"></i> Rehberler</a></li>
        <li><a href="{{ route('admin.service.index') }}"><i class="fas fa-bars"></i> Servisler</a></li>
        <li><a href="{{ route('admin.contact.index') }}"><i class="fas fa-bars"></i> İletişişm</a></li>
        <li><a href="{{ route('admin.reservation.index') }}"><i class="fas fa-bars"></i> Reservasyonlar</a></li>
        <li><a href="{{ url('/') }}" target="_blank"><i class="fas fa-eye"></i> Siteyi Görüntüle</a></li>
    </ul>
</nav>
