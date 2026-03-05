@extends('layouts.app')
@section('content')
<div class="cart-page">
        <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="header-left">
                <a href="{{ route('catalogo') }}" class="back-link-header">
                    <i class="fas fa-arrow-left"></i> Volver al Catálogo
                </a>
                <a href="{{ route('catalogo') }}" class="logo">MACUIN</a>
            </div>
            <div class="header-right">
                <a href="{{ route('pedidos') }}" class="nav-link">Mis Pedidos</a>
                <a href="{{ route('carrito') }}" class="cart-link active">
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
                <h1 class="page-title">Crear Pedido</h1>
                <p class="page-subtitle">Revisa y confirma tu pedido</p>
            </div>

            <div class="cart-layout">
                <!-- Cart Items -->
                <div class="cart-items-section">
                    <div class="cart-item">
                        <div class="cart-item-info">
                            <h3 class="cart-item-name">Filtro de Aceite</h3>
                            <span class="cart-item-price">$15</span>
                        </div>
                        <div class="cart-item-controls">
                            <button class="qty-btn minus">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="qty-value">2</span>
                            <button class="qty-btn plus">
                                <i class="fas fa-plus"></i>
                            </button>
                            <span class="cart-item-total">$30</span>
                            <button class="btn-remove">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>

                    <div class="cart-item">
                        <div class="cart-item-info">
                            <h3 class="cart-item-name">Pastillas de Freno</h3>
                            <span class="cart-item-price">$89</span>
                        </div>
                        <div class="cart-item-controls">
                            <button class="qty-btn minus">
                                <i class="fas fa-minus"></i>
                            </button>
                            <span class="qty-value">1</span>
                            <button class="qty-btn plus">
                                <i class="fas fa-plus"></i>
                            </button>
                            <span class="cart-item-total">$89</span>
                            <button class="btn-remove">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="cart-summary-section">
                    <div class="cart-summary-card">
                        <h3 class="summary-title">Resumen del Pedido</h3>
                        <div class="summary-rows">
                            <div class="summary-row">
                                <span class="summary-label">Subtotal</span>
                                <span class="summary-value">$1,190</span>
                            </div>
                            <div class="summary-row">
                                <span class="summary-label">IVA (16%)</span>
                                <span class="summary-value">$190.40</span>
                            </div>
                            <div class="summary-row total">
                                <span class="summary-label">Total</span>
                                <span class="summary-value total-price">$1,380.40</span>
                            </div>
                        </div>
                        <button class="btn-confirm-order">Confirmar Pedido</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection