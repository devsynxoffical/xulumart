@extends('layouts.laramart.master')

@section('title', 'Sign In | ' . config('app.name', 'XuLu Mart'))

@section('content')
<style>
    .xm-auth-page {
        background: #FEF5EE;
        min-height: 80vh;
        padding: 48px 16px 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    .xm-auth-wrapper {
        width: 100%;
        max-width: 980px;
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(5, 52, 26, 0.08);
        border: 1px solid #F3E6D9;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1.15fr;
    }
    .xm-auth-sidebar {
        background: linear-gradient(145deg, #05341A 0%, #084D27 60%, #032010 100%);
        color: #ffffff;
        padding: 48px 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }
    .xm-auth-sidebar::before {
        content: '';
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(253,96,0,0.25) 0%, rgba(253,96,0,0) 70%);
        top: -60px;
        right: -60px;
        pointer-events: none;
    }
    .xm-auth-sidebar::after {
        content: '';
        position: absolute;
        width: 320px;
        height: 320px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(16,185,129,0.15) 0%, rgba(16,185,129,0) 70%);
        bottom: -80px;
        left: -80px;
        pointer-events: none;
    }
    .xm-auth-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(253, 96, 0, 0.2);
        border: 1px solid rgba(253, 96, 0, 0.5);
        color: #FD6000;
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        width: fit-content;
        margin-bottom: 24px;
    }
    .xm-auth-brand-title {
        font-size: 28px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1.25;
        margin-bottom: 12px;
    }
    .xm-auth-brand-desc {
        color: #D1D5DB;
        font-size: 14.5px;
        line-height: 1.55;
        margin-bottom: 32px;
    }
    .xm-feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 32px;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }
    .xm-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }
    .xm-feature-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(255,255,255,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FD6000;
        font-size: 16px;
        flex-shrink: 0;
    }
    .xm-feature-text h4 {
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        margin: 0 0 2px;
    }
    .xm-feature-text p {
        color: #9CA3AF;
        font-size: 12.5px;
        margin: 0;
        line-height: 1.4;
    }
    .xm-auth-trust-box {
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 14px;
        padding: 14px 18px;
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: auto;
    }
    .xm-trust-stars {
        color: #FBBF24;
        font-size: 13px;
        letter-spacing: 2px;
    }
    .xm-trust-info {
        font-size: 12px;
        color: #E5E7EB;
        line-height: 1.35;
    }
    .xm-trust-info strong {
        color: #ffffff;
        display: block;
    }
    .xm-auth-main {
        padding: 48px 44px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #ffffff;
    }
    .xm-auth-header {
        margin-bottom: 28px;
    }
    .xm-auth-h1 {
        font-size: 26px;
        font-weight: 800;
        color: #05341A;
        margin-bottom: 6px;
        line-height: 1.25;
    }
    .xm-auth-subtitle {
        font-size: 14px;
        color: #6B7280;
        margin: 0;
    }
    .xm-auth-subtitle a {
        color: #FD6000;
        font-weight: 700;
        text-decoration: none;
        transition: color 0.15s ease;
    }
    .xm-auth-subtitle a:hover {
        color: #E05500;
        text-decoration: underline;
    }
    .xm-form-group {
        margin-bottom: 18px;
    }
    .xm-form-label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: #374151;
        margin-bottom: 6px;
    }
    .xm-input-wrap {
        position: relative;
        display: flex;
        align-items: center;
    }
    .xm-input-icon {
        position: absolute;
        left: 16px;
        color: #9CA3AF;
        font-size: 15px;
        pointer-events: none;
        transition: color 0.2s ease;
    }
    .xm-form-control {
        width: 100%;
        border: 1.5px solid #E5E7EB;
        border-radius: 12px;
        padding: 12px 16px 12px 46px;
        font-size: 14px;
        color: #1F2937;
        background: #FDFDFD;
        min-height: 48px;
        transition: all 0.2s ease;
        outline: none;
        font-family: inherit;
    }
    .xm-form-control:focus {
        border-color: #05341A;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(5, 52, 26, 0.1);
    }
    .xm-form-control.is-invalid {
        border-color: #EF4444;
        background: #FEF2F2;
    }
    .xm-input-wrap:focus-within .xm-input-icon {
        color: #05341A;
    }
    .xm-pwd-toggle {
        position: absolute;
        right: 14px;
        background: none;
        border: none;
        color: #9CA3AF;
        cursor: pointer;
        padding: 6px;
        font-size: 14px;
        transition: color 0.15s ease;
    }
    .xm-pwd-toggle:hover {
        color: #374151;
    }
    .xm-field-error {
        color: #DC2626;
        font-size: 12px;
        font-weight: 600;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .xm-auth-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 16px 0 24px;
    }
    .xm-remember-wrap {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: #4B5563;
        cursor: pointer;
        user-select: none;
    }
    .xm-remember-wrap input[type="checkbox"] {
        accent-color: #05341A;
        width: 16px;
        height: 16px;
        cursor: pointer;
    }
    .xm-forgot-link {
        font-size: 13px;
        font-weight: 700;
        color: #FD6000;
        text-decoration: none;
        transition: color 0.15s ease;
    }
    .xm-forgot-link:hover {
        color: #E05500;
        text-decoration: underline;
    }
    .xm-btn-submit {
        width: 100%;
        background: #05341A;
        color: #ffffff;
        border: none;
        border-radius: 12px;
        padding: 14px 24px;
        font-size: 15px;
        font-weight: 800;
        letter-spacing: 0.3px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 8px 20px rgba(5, 52, 26, 0.2);
    }
    .xm-btn-submit:hover {
        background: #084D27;
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(5, 52, 26, 0.28);
    }
    .xm-btn-submit:active {
        transform: translateY(0);
    }
    .xm-auth-footer-note {
        margin-top: 24px;
        padding-top: 20px;
        border-top: 1px solid #F3F4F6;
        text-align: center;
        font-size: 12px;
        color: #9CA3AF;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }
    .xm-auth-footer-note i {
        color: #10B981;
    }

    @media (max-width: 900px) {
        .xm-auth-wrapper {
            grid-template-columns: 1fr;
            max-width: 520px;
        }
        .xm-auth-sidebar {
            display: none;
        }
        .xm-auth-main {
            padding: 36px 24px;
        }
    }
</style>

<div class="xm-auth-page">
    <div class="container d-flex justify-content-center">
        <div class="xm-auth-wrapper">
            
            {{-- Left Column: Brand Feature Showcase --}}
            <div class="xm-auth-sidebar">
                <div>
                    <span class="xm-auth-badge">
                        <i class="fas fa-shield-alt"></i> Official Member Portal
                    </span>
                    <h2 class="xm-auth-brand-title">Welcome back to XuLu Mart</h2>
                    <p class="xm-auth-brand-desc">Sign in to manage your wholesale & retail orders, enjoy live delivery tracking, and access member-only deals.</p>

                    <ul class="xm-feature-list">
                        <li class="xm-feature-item">
                            <div class="xm-feature-icon"><i class="fas fa-box-open"></i></div>
                            <div class="xm-feature-text">
                                <h4>Order Tracking & Invoices</h4>
                                <p>View real-time delivery status and download PDF invoices anytime.</p>
                            </div>
                        </li>
                        <li class="xm-feature-item">
                            <div class="xm-feature-icon"><i class="fas fa-percent"></i></div>
                            <div class="xm-feature-text">
                                <h4>Wholesale & VIP Discounts</h4>
                                <p>Unlock factory direct volume pricing and exclusive seasonal offers.</p>
                            </div>
                        </li>
                        <li class="xm-feature-item">
                            <div class="xm-feature-icon"><i class="fas fa-headset"></i></div>
                            <div class="xm-feature-text">
                                <h4>Dedicated WhatsApp Support</h4>
                                <p>Get fast 1-on-1 assistance for custom bulk orders & inquiries.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="xm-auth-trust-box">
                    <div class="xm-trust-stars">★★★★★</div>
                    <div class="xm-trust-info">
                        <strong>4.9 / 5 Rating</strong>
                        <span>Trusted by 25,000+ happy customers</span>
                    </div>
                </div>
            </div>

            {{-- Right Column: Interactive Login Form --}}
            <div class="xm-auth-main">
                <div class="xm-auth-header">
                    <h1 class="xm-auth-h1">Sign in to your Account</h1>
                    <p class="xm-auth-subtitle">
                        Don't have an account yet? 
                        <a href="{{ route('register') }}">Create an account &rarr;</a>
                    </p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" style="border-radius:12px;font-size:13px;font-weight:600;margin-bottom:20px;">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email Address --}}
                    <div class="xm-form-group">
                        <label for="email" class="xm-form-label">Email Address *</label>
                        <div class="xm-input-wrap">
                            <i class="fas fa-envelope xm-input-icon"></i>
                            <input id="email" 
                                   type="email" 
                                   class="xm-form-control @error('email') is-invalid @enderror" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="name@example.com" 
                                   required 
                                   autocomplete="email" 
                                   autofocus>
                        </div>
                        @error('email')
                            <div class="xm-field-error">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="xm-form-group">
                        <label for="password" class="xm-form-label">Password *</label>
                        <div class="xm-input-wrap">
                            <i class="fas fa-lock xm-input-icon"></i>
                            <input id="password" 
                                   type="password" 
                                   class="xm-form-control @error('password') is-invalid @enderror" 
                                   name="password" 
                                   placeholder="Enter your password" 
                                   required 
                                   autocomplete="current-password">
                            <button type="button" class="xm-pwd-toggle" onclick="togglePasswordVisibility('password', this)" aria-label="Toggle password visibility">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="xm-field-error">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Remember Me & Forgot Password --}}
                    <div class="xm-auth-actions">
                        <label class="xm-remember-wrap" for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>Remember Me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="xm-forgot-link" href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="xm-btn-submit">
                        <span>Sign In to Account</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>

                    <div class="xm-auth-footer-note">
                        <i class="fas fa-lock"></i>
                        <span>SSL 256-Bit Encrypted &amp; 100% Safe Checkout</span>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
function togglePasswordVisibility(inputId, btn) {
    var input = document.getElementById(inputId);
    if (!input) return;
    var icon = btn.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>
@endsection
