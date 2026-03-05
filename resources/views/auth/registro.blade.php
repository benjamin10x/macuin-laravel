    
@extends('layouts.app')

@section('content')
<div class="auth-page">
   <!-- Back Link -->
    <a href="{{ route('catalogo') }}" class="back-link">
        <i class="fas fa-arrow-left"></i> Volver
    </a>

    <!-- Auth Container -->
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-logo">MACUIN</h1>
                <h2 class="auth-title">Crear Cuenta</h2>
                <p class="auth-subtitle">Registro de nuevo cliente</p>
            </div>

            <form class="auth-form">
                <div class="form-group">
                    <label class="form-label">Nombre Completo</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-input" placeholder="Juan Pérez">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Correo Electrónico</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-input" placeholder="tu@email.com">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Teléfono</label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <input type="tel" class="form-input" placeholder="(555) 123-4567">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" placeholder="********">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Confirmar Contraseña</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" placeholder="********">
                    </div>
                </div>

                <button type="submit" class="btn-auth">Registrarse</button>
            </form>

            <div class="auth-footer">
                <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" class="auth-link">Inicia sesión</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
