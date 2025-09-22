<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    :root {
        --sidebar-width: 250px;
        --sidebar-width-collapsed: 80px;
        --admin-bg: #111827; /* Dark Blue-Gray */
        --admin-surface: #1F2937;
        --admin-border: #374151;
        --admin-text: #F9FAFB;
        --admin-text-muted: #9CA3AF;
        --admin-accent: #FB923C; /* Softer Orange */
        --admin-accent-hover: #FDBA74;
    }
    *, *::before, *::after { box-sizing: border-box; }
    body {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
        background-color: var(--admin-bg);
        color: var(--admin-text);
        display: flex;
    }
    .sidebar {
        width: var(--sidebar-width);
        background-color: var(--admin-surface);
        height: 100vh;
        position: fixed;
        border-right: 1px solid var(--admin-border);
        transition: width 0.3s ease;
        overflow-x: hidden;
    }
    .sidebar-header { padding: 20px; text-align: center; }
    .sidebar-header h2 { margin: 0; font-size: 1.5rem; }
    .sidebar-nav { padding: 0 15px; }
    .sidebar-nav a {
        display: flex;
        align-items: center;
        white-space: nowrap;
        color: var(--admin-text-muted);
        text-decoration: none;
        padding: 14px 15px;
        border-radius: 8px;
        margin-bottom: 8px;
        transition: background-color 0.2s, color 0.2s;
        font-weight: 500;
    }
    .sidebar-nav a.active, .sidebar-nav a:hover {
        background-color: var(--admin-accent);
        color: #111827;
    }
    .sidebar-nav i { font-size: 1.1rem; width: 30px; text-align: center; margin-right: 15px; }
    body.sidebar-collapsed .sidebar { width: var(--sidebar-width-collapsed); }
    body.sidebar-collapsed .sidebar-header h2,
    body.sidebar-collapsed .sidebar-nav a span { display: none; }
    body.sidebar-collapsed .main-content { margin-left: var(--sidebar-width-collapsed); }
    .main-content {
        margin-left: var(--sidebar-width);
        width: calc(100% - var(--sidebar-width));
        transition: margin-left 0.3s ease;
    }
    .main-content-header {
        display: flex;
        align-items: center;
        padding: 20px 40px;
        background-color: var(--admin-surface);
        border-bottom: 1px solid var(--admin-border);
    }
    .sidebar-toggle-btn {
        background: none;
        border: none;
        color: var(--admin-text);
        font-size: 1.5rem;
        cursor: pointer;
    }
    .user-info { margin-left: auto; font-weight: 600; }
    .content-wrapper { padding: 40px; }
    
    /* ===== PERBAIKAN TAMPILAN KONTEN ADMIN ===== */
    .content-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid var(--admin-border);
    }
    h1 { font-size: 1.8rem; font-weight: 600; margin: 0; }
    .content-box {
        background: var(--admin-surface);
        padding: 30px;
        border-radius: 8px;
    }
    .btn { display: inline-block; padding: 10px 20px; background-color: var(--admin-accent); color: white; text-decoration: none; border-radius: 5px; font-weight: 600; border: none; cursor: pointer; transition: background-color 0.2s; }
    .btn:hover { background-color: var(--admin-accent-hover); }
    .btn-edit { background-color: #ffc107; color: #1E1E1E;}
    .btn-delete { background-color: #dc3545; }
    table { width: 100%; border-collapse: collapse; }
    th, td { padding: 15px; border-bottom: 1px solid var(--admin-border); text-align: left; }
    th { color: var(--admin-text-muted); text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.5px; }
    tbody tr:hover { background-color: rgba(255, 255, 255, 0.02); }
    td img {
    max-height: 80px;      
    max-width: 80px;       
    width: auto;        
    height: auto;          
    object-fit: contain;   
    border-radius: 5px;
    vertical-align: middle; }
td:last-child {
    display: flex;
    gap: 10px;
    align-items: center; 
}
    .alert-success { background-color: #166534; color: #DCFCE7; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-weight: 500; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 500; color: var(--admin-text-muted);}
    .form-group input, .form-group textarea { width: 100%; padding: 12px; background: var(--admin-bg); border: 1px solid var(--admin-border); border-radius: 5px; color: var(--admin-text); font-size: 1rem; transition: border-color 0.2s, box-shadow 0.2s; }
    .form-group input:focus, .form-group textarea:focus { outline: none; border-color: var(--admin-accent); box-shadow: 0 0 0 3px rgba(251, 146, 60, 0.3); }
</style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <nav class="sidebar-nav">
            <a href="{{ route('stories.index') }}" class="{{ request()->routeIs('stories.*') ? 'active' : '' }}">
                <i class="fas fa-book-open"></i> <span>Kelola Cerita</span>
            </a>
            <a href="{{ url('/') }}" target="_blank">
                <i class="fas fa-globe"></i> <span>Lihat Website</span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </nav>
    </div>

    <div class="main-content">
        <header class="main-content-header">
            <button id="sidebar-toggle" class="sidebar-toggle-btn">
                <i class="fas fa-bars"></i>
            </button>
            <div class="user-info">
                <span>{{ Auth::user()->name }}</span>
            </div>
        </header>

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
</body>
</html>