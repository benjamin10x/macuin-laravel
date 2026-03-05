@extends('layouts.app')
@section('content')
<div class="orders-page">
        <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="header-left">
                <a href="catalogo.html" class="back-link-header">
                    <i class="fas fa-arrow-left"></i> Volver al Catálogo
                </a>
                <a href="catalogo.html" class="logo">MACUIN</a>
            </div>
            <div class="header-right">
                <a href="{{ route('pedidos') }}" class="nav-link active">Mis Pedidos</a>
                <a href="{{ route('carrito') }}" class="cart-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">2</span>
                </a>
                <a href="{{ route('login') }}" class="user-link">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">Historial de Pedidos</h1>
                <p class="page-subtitle">Consulta el estado de tus pedidos</p>
            </div>

            <!-- Orders List -->
            <div class="orders-list">
                <!-- Order 1 -->
                <a href="{{ route('pedido-detalle', ['id' => 'ORD-2026-001']) }}" class="order-card">
                    <div class="order-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="order-info">
                        <h3 class="order-number">ORD-2026-001</h3>
                        <p class="order-date">27 de enero de 2026 • 3 artículos</p>
                    </div>
                    <div class="order-right">
                        <span class="order-price">$1,705</span>
                        <span class="order-status status-enviado">Enviado</span>
                    </div>
                    <i class="fas fa-chevron-right order-arrow"></i>
                </a>

                <!-- Order 2 -->
                <a href="pedido-detalle.html" class="order-card">
                    <div class="order-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="order-info">
                        <h3 class="order-number">ORD-2026-002</h3>
                        <p class="order-date">24 de enero de 2026 • 2 artículos</p>
                    </div>
                    <div class="order-right">
                        <span class="order-price">$2,340</span>
                        <span class="order-status status-surtido">Surtido</span>
                    </div>
                    <i class="fas fa-chevron-right order-arrow"></i>
                </a>

                <!-- Order 3 -->
                <a href="pedido-detalle.html" class="order-card">
                    <div class="order-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="order-info">
                        <h3 class="order-number">ORD-2026-003</h3>
                        <p class="order-date">10 de enero de 2026 • 1 artículo</p>
                    </div>
                    <div class="order-right">
                        <span class="order-price">$89</span>
                        <span class="order-status status-entregado">Entregado</span>
                    </div>
                    <i class="fas fa-chevron-right order-arrow"></i>
                </a>

                <!-- Order 4 -->
                <a href="pedido-detalle.html" class="order-card">
                    <div class="order-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="order-info">
                        <h3 class="order-number">ORD-2026-004</h3>
                        <p class="order-date">14 de enero de 2026 • 4 artículos</p>
                    </div>
                    <div class="order-right">
                        <span class="order-price">$3,200</span>
                        <span class="order-status status-cancelado">Cancelado</span>
                    </div>
                    <i class="fas fa-chevron-right order-arrow"></i>
                </a>

                <!-- Order 5 -->
                <a href="pedido-detalle.html" class="order-card">
                    <div class="order-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="order-info">
                        <h3 class="order-number">ORD-2026-005</h3>
                        <p class="order-date">8 de enero de 2026 • 2 artículos</p>
                    </div>
                    <div class="order-right">
                        <span class="order-price">$1,450</span>
                        <span class="order-status status-entregado">Entregado</span>
                    </div>
                    <i class="fas fa-chevron-right order-arrow"></i>
                </a>
            </div>
        </div>
    </main>
</div>
@endsection