@extends('layouts.app')
@section('content')
<div class="order-detail-page">
        <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="header-left">
                <a href="pedidos.html" class="back-link-header">
                    <i class="fas fa-arrow-left"></i> Volver a Pedidos
                </a>
                <a href="catalogo.html" class="logo">MACUIN</a>
            </div>
            <div class="header-right">
                <a href="pedidos.html" class="nav-link active">Mis Pedidos</a>
                <a href="carrito.html" class="cart-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">2</span>
                </a>
                <a href="login.html" class="user-link">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Order Header -->
            <div class="order-detail-header">
                <div class="order-title-section">
                    <span class="order-label">Pedido</span>
                    <h1 class="order-title">ORD-2026-001</h1>
                    <span class="order-year">2026</span>
                </div>
                <button class="btn-download">
                    <i class="fas fa-download"></i> Descargar
                </button>
            </div>

            <!-- Order Status Timeline -->
            <div class="order-status-card">
                <h3 class="card-title">Estado del Pedido</h3>
                <div class="status-timeline">
                    <div class="timeline-step completed">
                        <div class="step-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="step-label">Recibido</span>
                    </div>
                    <div class="timeline-line completed"></div>
                    <div class="timeline-step completed">
                        <div class="step-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="step-label">Surtido</span>
                    </div>
                    <div class="timeline-line completed"></div>
                    <div class="timeline-step completed">
                        <div class="step-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <span class="step-label">Enviado</span>
                    </div>
                    <div class="timeline-line pending"></div>
                    <div class="timeline-step pending">
                        <div class="step-icon">
                            <span>4</span>
                        </div>
                        <span class="step-label">Entregado</span>
                    </div>
                </div>
            </div>

            <!-- Order Items -->
            <div class="order-items-card">
                <h3 class="card-title">Artículos del Pedido</h3>
                <div class="order-items-list">
                    <div class="order-item">
                        <div class="item-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="item-details">
                            <h4 class="item-name">Filtro de Aceite</h4>
                            <p class="item-quantity">Cantidad: 2</p>
                        </div>
                        <div class="item-price-section">
                            <span class="item-total">$30</span>
                            <span class="item-unit">$15 c/u</span>
                        </div>
                    </div>

                    <div class="order-item">
                        <div class="item-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="item-details">
                            <h4 class="item-name">Pastillas de Freno</h4>
                            <p class="item-quantity">Cantidad: 1</p>
                        </div>
                        <div class="item-price-section">
                            <span class="item-total">$89</span>
                            <span class="item-unit">$89 c/u</span>
                        </div>
                    </div>

                    <div class="order-item">
                        <div class="item-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="item-details">
                            <h4 class="item-name">Filtro de Aire</h4>
                            <p class="item-quantity">Cantidad: 1</p>
                        </div>
                        <div class="item-price-section">
                            <span class="item-total">$28</span>
                            <span class="item-unit">$28 c/u</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="order-summary-card">
                <h3 class="card-title">Resumen del Pedido</h3>
                <div class="summary-rows">
                    <div class="summary-row">
                        <span class="summary-label">Subtotal</span>
                        <span class="summary-value">$1,470</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">IVA (16%)</span>
                        <span class="summary-value">$235.20</span>
                    </div>
                    <div class="summary-row total">
                        <span class="summary-label">Total</span>
                        <span class="summary-value total-price">$1,705.20</span>
                    </div>
                </div>
                <div class="shipping-address">
                    <h4 class="address-title">Dirección de Envío</h4>
                    <p class="address-text">Av. Principal #123, Col. Centro, Ciudad de México, CP 06000</p>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection