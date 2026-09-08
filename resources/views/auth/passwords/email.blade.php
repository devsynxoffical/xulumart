@extends('layouts.laramart.master')

@section('title', 'Reset Password | ' . config('app.name', 'XuLu Mart'))

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
        color: #FD6000;
        margin-bottom: 20px;
    }
    .xm-auth-h1 {
        font-size: 24px;
        font-weight: 800;
        color: #05341A;
        margin-bottom: 8px;
    }
    .xm-auth-subtitle {
        font-size: 14px;
        color: #6B7280;
        margin-bottom: 24px;
        line-height: 1.5;
    }
    .xm-form-group {
        margin-bottom: 20px;
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
        outline: none;
        transition: all 0.2s ease;
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
    .xm-field-error {
        color: #DC2626;
        font-size: 12px;
        font-weight: 600;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
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
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.2s ease;
        box-shadow: 0 8px 20px rgba(5, 52, 26, 0.2);
    }
    .xm-btn-submit:hover {
        background: #084D27;
        transform: translateY(-2px);
    }
    .xm-back-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        font-size: 13.5px;
        font-weight: 700;
        color: #6B7280;
        text-decoration: none;
        transition: color 0.15s ease;
    }
    .xm-back-link:hover {
        color: #FD6000;
    }
</style>

<div class="xm-auth-page">
    <div class="container d-flex justify-content-center">
        <div class="xm-auth-card">
            <div class="xm-auth-icon-badge">
                <i class="fas fa-key"></i>
            </div>
            
            <h1 class="xm-auth-h1">Forgot your password?</h1>
            <p class="xm-auth-subtitle">
                No worries! Enter your registered email address and we'll send you a secure link to reset your password.
            </p>

            @if (session('status'))
                <div class="alert alert-success" style="border-radius:12px;font-size:13px;font-weight:600;margin-bottom:20px;background:#D1FAE5;color:#065F46;border:none;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

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

                <button type="submit" class="xm-btn-submit">
                    <span>Send Reset Link</span>
                    <i class="fas fa-paper-plane"></i>
                </button>

                <a href="{{ route('login') }}" class="xm-back-link">
                    &larr; Back to Sign In
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
