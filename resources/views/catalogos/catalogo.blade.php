@extends('layouts.app')

@section('content')

   <!-- Header -->
    <header class="header">
        <div class="header-container">
            <a href="{{ route('catalogo') }}" class="logo">MACUIN</a>
            <div class="header-right">
                <a href="{{ route('pedidos') }}" class="nav-link">Mis Pedidos</a>
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
            <h1 class="page-title">Catálogo de Autopartes</h1>
            
            <!-- Search Bar -->
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Buscar autopartes...">
            </div>

            <!-- Products Grid -->
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Filtros</span>
                        <h3 class="product-name">Filtro de Aceite</h3>
                        <div class="product-footer">
                            <span class="product-price">$15</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 45 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Frenos</span>
                        <h3 class="product-name">Pastillas de Freno</h3>
                        <div class="product-footer">
                            <span class="product-price">$89</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 23 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Product 3 - Out of Stock -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Encendido</span>
                        <h3 class="product-name">Bujías NGK</h3>
                        <div class="product-footer">
                            <span class="product-price">$32</span>
                            <span class="product-stock out-of-stock">
                                <i class="fas fa-times-circle"></i> Agotado
                            </span>
                        </div>
                        <button class="btn-out-stock" disabled>Sin Stock</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Eléctrico</span>
                        <h3 class="product-name">Batería 12V</h3>
                        <div class="product-footer">
                            <span class="product-price">$1,299</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 12 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Suspensión</span>
                        <h3 class="product-name">Amortiguador Delantero</h3>
                        <div class="product-footer">
                            <span class="product-price">$2,450</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 8 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Filtros</span>
                        <h3 class="product-name">Filtro de Aire</h3>
                        <div class="product-footer">
                            <span class="product-price">$28</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 34 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Lubricantes</span>
                        <h3 class="product-name">Aceite Sintético 5W-30</h3>
                        <div class="product-footer">
                            <span class="product-price">$45</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 56 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-cube"></i>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Eléctrico</span>
                        <h3 class="product-name">Alternador</h3>
                        <div class="product-footer">
                            <span class="product-price">$3,200</span>
                            <span class="product-stock available">
                                <i class="fas fa-check-circle"></i> 5 disponibles
                            </span>
                        </div>
                        <button class="btn-add-cart">Agregar al Carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection