@extends('layouts.laramart.master')

@section('title', 'Set New Password | ' . config('app.name', 'XuLu Mart'))

@section('content')
<style>
    .xm-auth-page {
        background: #FEF5EE;
        min-height: 75vh;
        padding: 48px 16px 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    .xm-auth-card {
        width: 100%;
        max-width: 520px;
        background: #ffffff;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(5, 52, 26, 0.08);
        border: 1px solid #F3E6D9;
        padding: 44px 36px;
    }
    .xm-auth-icon-badge {
        width: 56px;
        height: 56px;
        border-radius: 16px;
        background: #FEF5EE;
        border: 1px solid #F3E6D9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #05341A;
        margin-bottom: 20px;
    }
    .xm-auth-h1 {
        font-size: 24px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin-bottom: 8px !important;
    }
    .xm-auth-subtitle {
        font-size: 14px !important;
        color: #6B7280 !important;
        margin-bottom: 24px !important;
        line-height: 1.5 !important;
    }
    .xm-form-group {
        margin-bottom: 18px;
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
    }
    .xm-form-control {
        width: 100% !important;
        border: 1.5px solid #E5E7EB !important;
        border-radius: 12px !important;
        padding-top: 12px !important;
        padding-bottom: 12px !important;
        padding-left: 48px !important;
        padding-right: 16px !important;
        font-size: 14px !important;
        color: #1F2937 !important;
        background: #FDFDFD !important;
        min-height: 48px !important;
        height: 48px !important;
        outline: none !important;
        transition: all 0.2s ease !important;
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
    .xm-field-error {
        color: #DC2626 !important;
        font-size: 12px !important;
        font-weight: 600 !important;
        margin-top: 6px !important;
        display: flex;
        align-items: center;
        gap: 5px;
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
        cursor: pointer !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 10px !important;
        transition: all 0.2s ease !important;
        box-shadow: 0 8px 20px rgba(5, 52, 26, 0.2) !important;
        margin-top: 8px !important;
    }
    .xm-btn-submit:hover {
        background: #084D27 !important;
        transform: translateY(-2px) !important;
    }
</style>

<div class="xm-auth-page">
    <div class="container d-flex justify-content-center">
        <div class="xm-auth-card">
            <div class="xm-auth-icon-badge">
                <i class="fas fa-lock"></i>
            </div>
            
            <h1 class="xm-auth-h1">Create New Password</h1>
            <p class="xm-auth-subtitle">
                Enter your email address and choose a strong new password for your account.
            </p>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                {{-- Email --}}
                <div class="xm-form-group">
                    <label for="email" class="xm-form-label">Email Address *</label>
                    <div class="xm-input-wrap">
                        <i class="fas fa-envelope xm-input-icon"></i>
                        <input id="email" 
                               type="email" 
                               class="xm-form-control @error('email') is-invalid @enderror" 
                               name="email" 
                               value="{{ $email ?? old('email') }}" 
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

                {{-- New Password --}}
                <div class="xm-form-group">
                    <label for="password" class="xm-form-label">New Password * (Min 8 characters)</label>
                    <div class="xm-input-wrap">
                        <i class="fas fa-lock xm-input-icon"></i>
                        <input id="password" 
                               type="password" 
                               class="xm-form-control @error('password') is-invalid @enderror" 
                               name="password" 
                               placeholder="••••••••" 
                               required 
                               autocomplete="new-password">
                    </div>
                    @error('password')
                        <div class="xm-field-error">
                            <i class="fas fa-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Confirm New Password --}}
                <div class="xm-form-group">
                    <label for="password-confirm" class="xm-form-label">Confirm New Password *</label>
                    <div class="xm-input-wrap">
                        <i class="fas fa-lock xm-input-icon"></i>
                        <input id="password-confirm" 
                               type="password" 
                               class="xm-form-control" 
                               name="password_confirmation" 
                               placeholder="••••••••" 
                               required 
                               autocomplete="new-password">
                    </div>
                </div>

                <button type="submit" class="xm-btn-submit">
                    <span>Update Password &amp; Sign In</span>
                    <i class="fas fa-check-circle"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
