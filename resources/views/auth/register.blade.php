@extends('layouts.laramart.master')

@section('title', 'Create Account | ' . config('app.name', 'XuLu Mart'))

@section('content')
<style>
    .xm-auth-page {
        background: #FEF5EE;
        min-height: 85vh;
        padding: 48px 16px 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    .xm-auth-wrapper {
        width: 100%;
        max-width: 1020px;
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(5, 52, 26, 0.08);
        border: 1px solid #F3E6D9;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1.25fr;
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
        width: 280px;
        height: 280px;
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
        padding: 44px 44px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: #ffffff;
    }
    .xm-auth-header {
        margin-bottom: 24px;
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
    .xm-form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }
    .xm-form-group {
        margin-bottom: 16px;
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
        padding: 11px 16px 11px 46px;
        font-size: 14px;
        color: #1F2937;
        background: #FDFDFD;
        min-height: 46px;
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
    .xm-terms-notice {
        font-size: 12.5px;
        color: #6B7280;
        line-height: 1.45;
        margin: 14px 0 20px;
    }
    .xm-terms-notice a {
        color: #05341A;
        font-weight: 700;
        text-decoration: underline;
    }
    .xm-btn-submit {
        width: 100%;
        background: #FD6000;
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
        box-shadow: 0 8px 20px rgba(253, 96, 0, 0.25);
    }
    .xm-btn-submit:hover {
        background: #E05500;
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(253, 96, 0, 0.35);
    }
    .xm-btn-submit:active {
        transform: translateY(0);
    }
    .xm-auth-footer-note {
        margin-top: 20px;
        padding-top: 16px;
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
        .xm-form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }
    }
</style>

<div class="xm-auth-page">
    <div class="container d-flex justify-content-center">
        <div class="xm-auth-wrapper">
            
            {{-- Left Column: VIP Membership Perks --}}
            <div class="xm-auth-sidebar">
                <div>
                    <span class="xm-auth-badge">
                        <i class="fas fa-crown"></i> Join XuLu Mart VIP
                    </span>
                    <h2 class="xm-auth-brand-title">Create your Free Account</h2>
                    <p class="xm-auth-brand-desc">Join thousands of shoppers and wholesale buyers. Unlock priority shipping, instant cashback & special discounts.</p>

                    <ul class="xm-feature-list">
                        <li class="xm-feature-item">
                            <div class="xm-feature-icon"><i class="fas fa-coins"></i></div>
                            <div class="xm-feature-text">
                                <h4>Instant Reward Points</h4>
                                <p>Earn points on every order to redeem for instant cart discounts.</p>
                            </div>
                        </li>
                        <li class="xm-feature-item">
                            <div class="xm-feature-icon"><i class="fas fa-bolt"></i></div>
                            <div class="xm-feature-text">
                                <h4>1-Click Fast Checkout</h4>
                                <p>Save multiple delivery addresses for smooth, lightning-fast ordering.</p>
                            </div>
                        </li>
                        <li class="xm-feature-item">
                            <div class="xm-feature-icon"><i class="fas fa-tags"></i></div>
                            <div class="xm-feature-text">
                                <h4>Wholesale Tier Pricing</h4>
                                <p>Automatic discount eligibility on bulk apparel, home & handicraft items.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="xm-auth-trust-box">
                    <div class="xm-trust-stars">★★★★★</div>
                    <div class="xm-trust-info">
                        <strong>100% Free Registration</strong>
                        <span>No hidden fees, cancel anytime</span>
                    </div>
                </div>
            </div>

            {{-- Right Column: Interactive Registration Form --}}
            <div class="xm-auth-main">
                <div class="xm-auth-header">
                    <h1 class="xm-auth-h1">Create Your Account</h1>
                    <p class="xm-auth-subtitle">
                        Already have an account? 
                        <a href="{{ route('login') }}">Sign in here &rarr;</a>
                    </p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Full Name --}}
                    <div class="xm-form-group">
                        <label for="name" class="xm-form-label">Full Name *</label>
                        <div class="xm-input-wrap">
                            <i class="fas fa-user xm-input-icon"></i>
                            <input id="name" 
                                   type="text" 
                                   class="xm-form-control @error('name') is-invalid @enderror" 
                                   name="name" 
                                   value="{{ old('name') }}" 
                                   placeholder="e.g. John Doe" 
                                   required 
                                   autocomplete="name" 
                                   autofocus>
                        </div>
                        @error('name')
                            <div class="xm-field-error">
                                <i class="fas fa-exclamation-circle"></i> {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Email & Phone in 2 Columns on Desktop --}}
                    <div class="xm-form-row">
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
                                       autocomplete="email">
                            </div>
                            @error('email')
                                <div class="xm-field-error">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="xm-form-group">
                            <label for="phone" class="xm-form-label">Phone / WhatsApp Number</label>
                            <div class="xm-input-wrap">
                                <i class="fas fa-phone-alt xm-input-icon"></i>
                                <input id="phone" 
                                       type="tel" 
                                       class="xm-form-control @error('phone') is-invalid @enderror" 
                                       name="phone" 
                                       value="{{ old('phone') }}" 
                                       placeholder="01XXXXXXXXX" 
                                       autocomplete="phone">
                            </div>
                            @error('phone')
                                <div class="xm-field-error">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- Password & Confirm Password in 2 Columns --}}
                    <div class="xm-form-row">
                        <div class="xm-form-group">
                            <label for="password" class="xm-form-label">Password * (Min 8 chars)</label>
                            <div class="xm-input-wrap">
                                <i class="fas fa-lock xm-input-icon"></i>
                                <input id="password" 
                                       type="password" 
                                       class="xm-form-control @error('password') is-invalid @enderror" 
                                       name="password" 
                                       placeholder="••••••••" 
                                       required 
                                       autocomplete="new-password">
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

                        <div class="xm-form-group">
                            <label for="password-confirm" class="xm-form-label">Confirm Password *</label>
                            <div class="xm-input-wrap">
                                <i class="fas fa-lock xm-input-icon"></i>
                                <input id="password-confirm" 
                                       type="password" 
                                       class="xm-form-control" 
                                       name="password_confirmation" 
                                       placeholder="••••••••" 
                                       required 
                                       autocomplete="new-password">
                                <button type="button" class="xm-pwd-toggle" onclick="togglePasswordVisibility('password-confirm', this)" aria-label="Toggle password confirmation visibility">
                                    <i class="far fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <p class="xm-terms-notice">
                        By registering, you agree to our 
                        <a href="{{ route('term.condition') }}" target="_blank">Terms of Service</a> and 
                        <a href="{{ route('privacy.policy') }}" target="_blank">Privacy Policy</a>.
                    </p>

                    {{-- Submit Button --}}
                    <button type="submit" class="xm-btn-submit">
                        <span>Create My Account</span>
                        <i class="fas fa-user-plus"></i>
                    </button>

                    <div class="xm-auth-footer-note">
                        <i class="fas fa-shield-alt"></i>
                        <span>Your data is 100% encrypted &amp; never shared.</span>
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
