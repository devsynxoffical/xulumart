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
        background: linear-gradient(145deg, #05341A 0%, #084D27 60%, #032010 100%) !important;
        color: #ffffff !important;
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
        background: rgba(253, 96, 0, 0.2) !important;
        border: 1px solid rgba(253, 96, 0, 0.6) !important;
        color: #FD6000 !important;
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.6px;
        width: fit-content;
        margin-bottom: 24px;
        position: relative;
        z-index: 2;
    }
    .xm-auth-brand-title {
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #FFFFFF !important;
        line-height: 1.25 !important;
        margin-bottom: 12px !important;
        position: relative;
        z-index: 2;
    }
    .xm-auth-brand-desc {
        color: #E5E7EB !important;
        font-size: 14px !important;
        line-height: 1.6 !important;
        margin-bottom: 32px !important;
        position: relative;
        z-index: 2;
    }
    .xm-feature-list {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 0 32px !important;
        display: flex;
        flex-direction: column;
        gap: 18px;
        position: relative;
        z-index: 2;
    }
    .xm-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }
    .xm-feature-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(255,255,255,0.12) !important;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FD6000 !important;
        font-size: 16px;
        flex-shrink: 0;
    }
    .xm-feature-text h4 {
        color: #FFFFFF !important;
        font-size: 14.5px !important;
        font-weight: 700 !important;
        margin: 0 0 2px !important;
    }
    .xm-feature-text p {
        color: #D1D5DB !important;
        font-size: 12.5px !important;
        margin: 0 !important;
        line-height: 1.4 !important;
    }
    .xm-auth-trust-box {
        background: rgba(255, 255, 255, 0.08) !important;
        border: 1px solid rgba(255, 255, 255, 0.16) !important;
        border-radius: 14px;
        padding: 14px 18px;
        display: flex;
        align-items: center;
        gap: 14px;
        margin-top: auto;
        position: relative;
        z-index: 2;
    }
    .xm-trust-stars {
        color: #FBBF24 !important;
        font-size: 14px;
        letter-spacing: 2px;
    }
    .xm-trust-info {
        font-size: 12px;
        color: #E5E7EB !important;
        line-height: 1.35;
    }
    .xm-trust-info strong {
        color: #FFFFFF !important;
        display: block;
        font-size: 13px;
    }
    .xm-trust-info span {
        color: #D1D5DB !important;
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
        font-size: 26px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin-bottom: 6px !important;
        line-height: 1.25 !important;
    }
    .xm-auth-subtitle {
        font-size: 14px !important;
        color: #6B7280 !important;
        margin: 0 !important;
    }
    .xm-auth-subtitle a {
        color: #FD6000 !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        transition: color 0.15s ease;
    }
    .xm-auth-subtitle a:hover {
        color: #E05500 !important;
        text-decoration: underline !important;
    }
    .xm-form-group {
        margin-bottom: 20px;
    }
    .xm-form-label {
        display: block !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        color: #374151 !important;
        margin-bottom: 7px !important;
    }
    .xm-input-wrap {
        position: relative !important;
        display: flex !important;
        align-items: center !important;
        width: 100% !important;
    }
    .xm-input-icon {
        position: absolute !important;
        left: 16px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        color: #9CA3AF !important;
        font-size: 16px !important;
        pointer-events: none !important;
        z-index: 5 !important;
        transition: color 0.2s ease;
    }
    .xm-form-control {
        width: 100% !important;
        border: 1.5px solid #E5E7EB !important;
        border-radius: 12px !important;
        padding-top: 12px !important;
        padding-bottom: 12px !important;
        padding-left: 48px !important;
        padding-right: 48px !important;
        font-size: 14px !important;
        color: #1F2937 !important;
        background: #FDFDFD !important;
        min-height: 48px !important;
        height: 48px !important;
        transition: all 0.2s ease !important;
        outline: none !important;
        font-family: inherit !important;
        box-sizing: border-box !important;
    }
    .xm-form-control:focus {
        border-color: #05341A !important;
        background: #ffffff !important;
        box-shadow: 0 0 0 4px rgba(5, 52, 26, 0.1) !important;
    }
    .xm-form-control.is-invalid {
        border-color: #EF4444 !important;
        background: #FEF2F2 !important;
    }
    .xm-input-wrap:focus-within .xm-input-icon {
        color: #05341A !important;
    }
    .xm-pwd-toggle {
        position: absolute !important;
        right: 14px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        background: none !important;
        border: none !important;
        color: #9CA3AF !important;
        cursor: pointer !important;
        padding: 6px !important;
        font-size: 15px !important;
        z-index: 5 !important;
        transition: color 0.15s ease;
    }
    .xm-pwd-toggle:hover {
        color: #374151 !important;
    }
    .xm-field-error {
        color: #DC2626 !important;
        font-size: 12px !important;
        font-weight: 600 !important;
        margin-top: 6px !important;
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
        font-size: 13px !important;
        color: #4B5563 !important;
        cursor: pointer;
        user-select: none;
    }
    .xm-remember-wrap input[type="checkbox"] {
        accent-color: #05341A !important;
        width: 16px;
        height: 16px;
        cursor: pointer;
    }
    .xm-forgot-link {
        font-size: 13px !important;
        font-weight: 700 !important;
        color: #FD6000 !important;
        text-decoration: none !important;
        transition: color 0.15s ease;
    }
    .xm-forgot-link:hover {
        color: #E05500 !important;
        text-decoration: underline !important;
    }
    .xm-btn-submit {
        width: 100% !important;
        background: #05341A !important;
        color: #ffffff !important;
        border: none !important;
        border-radius: 12px !important;
        padding: 14px 24px !important;
        font-size: 15px !important;
        font-weight: 800 !important;
        letter-spacing: 0.3px !important;
        cursor: pointer !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 10px !important;
        transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
        box-shadow: 0 8px 20px rgba(5, 52, 26, 0.2) !important;
    }
    .xm-btn-submit:hover {
        background: #084D27 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 12px 24px rgba(5, 52, 26, 0.28) !important;
    }
    .xm-btn-submit:active {
        transform: translateY(0) !important;
    }
    .xm-auth-footer-note {
        margin-top: 24px;
        padding-top: 20px;
        border-top: 1px solid #F3F4F6;
        text-align: center;
        font-size: 12px !important;
        color: #9CA3AF !important;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }
    .xm-auth-footer-note i {
        color: #10B981 !important;
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
