@extends('layouts.laramart.master')

@section('title', 'XuLu Mart | Wholesale & Retail Online Shopping')
@section('meta_description', 'Shop quality products online at XuLu Mart. Fast delivery, great prices, and a wide range of categories.')

@section('content')
@php
    $heroSlide = $sliders->first();
    $dealCountdown = $dealOfDay && $dealOfDay->deal_of_day_count
        ? \Carbon\Carbon::parse($dealOfDay->deal_of_day_count)->format('Y/m/d H:i:s')
        : \Carbon\Carbon::now()->addHours(8)->addMinutes(12)->format('Y/m/d H:i:s');
@endphp

<style>
    /* ============================================================
       HOMEPAGE STYLES MATCHING THE PREMIUM DESIGN MOCKUP
       ============================================================ */
    .xm-home-container {
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 16px;
    }

    /* 1. HERO BANNER (LIGHT & FRESH THEME) */
    .xm-hero-section {
        padding: 24px 0 16px;
    }
    .xm-hero-card {
        background: linear-gradient(135deg, #F9FAF6 0%, #F1F8F3 45%, #FFF7ED 100%);
        border: 1px solid #E3EBE5;
        border-radius: 24px;
        padding: 44px 44px;
        color: #1F2937;
        position: relative;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        align-items: center;
        gap: 32px;
        box-shadow: 0 16px 40px rgba(5, 52, 26, 0.06);
    }
    .xm-hero-card::before {
        content: '';
        position: absolute;
        width: 380px;
        height: 380px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(253,96,0,0.1) 0%, rgba(253,96,0,0) 70%);
        top: -80px;
        right: 25%;
        pointer-events: none;
    }
    .xm-hero-card::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(16,185,129,0.1) 0%, rgba(16,185,129,0) 70%);
        bottom: -60px;
        left: -40px;
        pointer-events: none;
    }
    .xm-hero-badge-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #FEF5EE;
        border: 1px solid rgba(253, 96, 0, 0.35);
        color: #FD6000 !important;
        font-size: 11.5px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 5px 14px;
        border-radius: 30px;
        margin-bottom: 16px;
        box-shadow: 0 2px 6px rgba(253, 96, 0, 0.08);
    }
    .xm-hero-h1 {
        font-size: 46px !important;
        font-weight: 900 !important;
        color: #05341A !important;
        line-height: 1.15;
        margin-bottom: 14px;
        letter-spacing: -0.02em;
    }
    .xm-hero-h1 span {
        color: #FD6000 !important;
    }
    .xm-hero-desc {
        color: #4B5563 !important;
        font-size: 16px !important;
        line-height: 1.55;
        margin-bottom: 24px;
        max-width: 500px;
    }
    .xm-hero-trust-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 28px;
    }
    .xm-hero-trust-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #FFFFFF;
        border: 1px solid #E5E7EB;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 12.5px;
        color: #374151 !important;
        font-weight: 600;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
    }
    .xm-hero-trust-pill i {
        color: #FD6000;
        font-size: 13px;
    }
    .xm-btn-hero-explore {
        background: #FD6000 !important;
        color: #FFFFFF !important;
        padding: 14px 30px;
        border-radius: 30px;
        font-size: 14.5px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-decoration: none !important;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.25s ease;
        box-shadow: 0 10px 24px rgba(253, 96, 0, 0.35);
    }
    .xm-btn-hero-explore:hover {
        background: #E05500 !important;
        transform: translateY(-2px);
        box-shadow: 0 14px 28px rgba(253, 96, 0, 0.45);
    }
    .xm-hero-showcase {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .xm-hero-podium {
        position: relative;
        width: 100%;
        max-width: 440px;
        background: #FFFFFF;
        border: 1px solid #E8EFE9;
        border-radius: 20px;
        padding: 10px;
        box-shadow: 0 16px 36px rgba(5, 52, 26, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .xm-hero-podium img {
        width: 100%;
        height: auto;
        max-height: 330px;
        object-fit: cover;
        border-radius: 12px;
        transition: transform 0.4s ease;
    }
    .xm-hero-podium:hover img {
        transform: scale(1.03);
    }
    .xm-hero-discount-badge {
        position: absolute;
        top: 18px;
        right: 18px;
        background: #FD6000;
        color: #FFFFFF;
        width: 72px;
        height: 72px;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        line-height: 1.1;
        box-shadow: 0 10px 20px rgba(253, 96, 0, 0.4);
        border: 3px solid #ffffff;
        transform: rotate(8deg);
        z-index: 5;
    }
    .xm-hero-discount-badge span:first-child { font-size: 10px; letter-spacing: 0.5px; }
    .xm-hero-discount-badge span:nth-child(2) { font-size: 17px; }
    .xm-hero-discount-badge span:last-child { font-size: 9px; letter-spacing: 0.5px; }

    /* 2. TRUST / VALUE BAR */
    .xm-trust-bar {
        background: #FFFFFF;
        border: 1px solid #F3E6D9;
        border-radius: 18px;
        padding: 20px 24px;
        margin: 20px 0 36px;
        box-shadow: 0 8px 24px rgba(5, 52, 26, 0.04);
    }
    .xm-trust-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 6px 12px;
    }
    .xm-trust-icon-box {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: #FEF5EE;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #FD6000;
        flex-shrink: 0;
    }
    .xm-trust-item h4 {
        font-size: 14px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin: 0 0 2px !important;
    }
    .xm-trust-item p {
        font-size: 12px !important;
        color: #6B7280 !important;
        margin: 0 !important;
    }

    /* 3. SHOP BY CATEGORY 5-CARDS */
    .xm-section-header {
        text-align: center;
        margin-bottom: 28px;
    }
    .xm-section-title {
        font-size: 28px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin-bottom: 6px;
    }
    .xm-section-subtitle {
        font-size: 14px;
        color: #6B7280;
        margin: 0;
    }
    .xm-cat-5grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 18px;
        margin-bottom: 40px;
    }
    .xm-cat-pill-card {
        background: #FFFFFF;
        border: 1px solid #F3E6D9;
        border-radius: 18px;
        padding: 16px 14px 18px;
        text-align: center;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    }
    .xm-cat-pill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 32px rgba(5, 52, 26, 0.1);
        border-color: #FD6000;
    }
    .xm-cat-thumb-circle {
        width: 100%;
        aspect-ratio: 1;
        max-width: 140px;
        background: #FAF7F4;
        border-radius: 14px;
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .xm-cat-thumb-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .xm-cat-pill-card:hover .xm-cat-thumb-circle img {
        transform: scale(1.08);
    }
    .xm-cat-pill-card h3 {
        font-size: 14.5px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin: 0 0 4px !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
    }
    .xm-cat-pill-card .shop-now {
        font-size: 12.5px;
        font-weight: 700;
        color: #FD6000;
        transition: transform 0.2s ease;
    }
    .xm-cat-pill-card:hover .shop-now {
        color: #E05500;
    }

    /* 4. DEAL OF THE DAY CARD */
    .xm-deal-box {
        background: #FFFFFF;
        border: 1.5px solid #F3E6D9;
        border-radius: 22px;
        padding: 36px 40px;
        margin-bottom: 44px;
        box-shadow: 0 12px 36px rgba(5, 52, 26, 0.06);
        display: grid;
        grid-template-columns: 1.1fr 1fr 1.1fr;
        gap: 32px;
        align-items: center;
    }
    .xm-deal-badge {
        display: inline-block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #FD6000;
        margin-bottom: 8px;
    }
    .xm-deal-heading {
        font-size: 30px !important;
        font-weight: 900 !important;
        color: #05341A !important;
        line-height: 1.2;
        margin-bottom: 8px !important;
    }
    .xm-deal-sub {
        font-size: 13.5px;
        color: #6B7280;
        margin-bottom: 20px;
    }
    .xm-deal-btn {
        background: #FD6000 !important;
        color: #FFFFFF !important;
        padding: 12px 24px;
        border-radius: 24px;
        font-size: 13.5px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-decoration: none !important;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 8px 20px rgba(253, 96, 0, 0.3);
        transition: all 0.2s ease;
    }
    .xm-deal-btn:hover {
        background: #E05500 !important;
        transform: translateY(-2px);
    }
    .xm-deal-prod-center {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    .xm-deal-prod-img {
        max-height: 220px;
        max-width: 100%;
        object-fit: contain;
        filter: drop-shadow(0 10px 20px rgba(0,0,0,0.12));
    }
    .xm-deal-right {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .xm-deal-title {
        font-size: 18px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin-bottom: 4px !important;
    }
    .xm-deal-meta {
        font-size: 13px;
        color: #6B7280;
        margin-bottom: 12px;
    }
    .xm-deal-price-row {
        display: flex;
        align-items: baseline;
        gap: 12px;
        margin-bottom: 12px;
    }
    .xm-deal-cur-price {
        font-size: 28px;
        font-weight: 900;
        color: #FD6000;
    }
    .xm-deal-old-price {
        font-size: 16px;
        color: #9CA3AF;
        text-decoration: line-through;
        font-weight: 600;
    }
    .xm-deal-stock-urgency {
        font-size: 12.5px;
        font-weight: 700;
        color: #05341A;
        margin-bottom: 6px;
    }
    .xm-deal-stock-bar {
        height: 6px;
        background: #E5E7EB;
        border-radius: 4px;
        overflow: hidden;
        margin-bottom: 20px;
    }
    .xm-deal-stock-fill {
        height: 100%;
        background: linear-gradient(90deg, #FD6000, #E05500);
        border-radius: 4px;
    }
    .xm-live-timer {
        display: flex;
        gap: 8px;
    }
    .xm-timer-unit {
        background: #FEF5EE;
        border: 1px solid #F3E6D9;
        border-radius: 10px;
        padding: 8px 10px;
        min-width: 58px;
        text-align: center;
    }
    .xm-timer-num {
        font-size: 18px;
        font-weight: 900;
        color: #05341A;
        display: block;
        line-height: 1;
        font-family: monospace, sans-serif;
    }
    .xm-timer-lbl {
        font-size: 10px;
        font-weight: 700;
        color: #9CA3AF;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 4px;
        display: block;
    }

    /* 5. NEW ARRIVALS 4-GRID */
    .xm-section-row-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .xm-section-row-head h2 {
        font-size: 24px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin: 0 !important;
    }
    .xm-view-all-link {
        font-size: 14px;
        font-weight: 700;
        color: #FD6000 !important;
        text-decoration: none !important;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: color 0.15s ease;
    }
    .xm-view-all-link:hover { color: #E05500 !important; }

    .xm-prod-4grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 44px;
    }
    .xm-prod-card {
        background: #FFFFFF;
        border: 1px solid #F3E6D9;
        border-radius: 18px;
        overflow: hidden;
        position: relative;
        display: flex;
        flex-direction: column;
        transition: all 0.25s ease;
        box-shadow: 0 4px 16px rgba(0,0,0,0.03);
    }
    .xm-prod-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 32px rgba(5,52,26,0.09);
        border-color: #FD6000;
    }
    .xm-prod-badge-new {
        position: absolute;
        top: 12px;
        left: 12px;
        background: #05341A;
        color: #FFFFFF;
        font-size: 10.5px;
        font-weight: 800;
        padding: 3px 8px;
        border-radius: 4px;
        z-index: 3;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .xm-prod-wish-btn {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #FFFFFF;
        border: 1px solid #E5E7EB;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9CA3AF;
        font-size: 14px;
        cursor: pointer;
        z-index: 3;
        transition: all 0.2s ease;
    }
    .xm-prod-wish-btn:hover {
        color: #EF4444;
        border-color: #EF4444;
        background: #FEF2F2;
    }
    .xm-prod-thumb-wrap {
        background: #FAF7F4;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 16px;
    }
    .xm-prod-thumb-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    .xm-prod-card:hover .xm-prod-thumb-wrap img {
        transform: scale(1.06);
    }
    .xm-prod-body {
        padding: 14px 16px 16px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }
    .xm-prod-title {
        font-size: 14px !important;
        font-weight: 700 !important;
        color: #1F2937 !important;
        margin: 0 0 8px !important;
        line-height: 1.35;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-decoration: none !important;
    }
    .xm-prod-title:hover { color: #FD6000 !important; }
    .xm-prod-bottom-row {
        margin-top: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 4px;
    }
    .xm-prod-price {
        font-size: 17px;
        font-weight: 800;
        color: #05341A;
    }
    .xm-prod-price .old-price {
        font-size: 13px;
        color: #9CA3AF;
        text-decoration: line-through;
        font-weight: 500;
        margin-left: 4px;
    }
    .xm-prod-cart-btn {
        background: #FEF5EE;
        border: 1px solid #F3E6D9;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #05341A;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .xm-prod-cart-btn:hover {
        background: #FD6000;
        color: #FFFFFF;
        border-color: #FD6000;
        transform: scale(1.08);
    }

    /* 6. AMAZON-STYLE 4 CURATED DEPARTMENT QUADRANT CARDS */
    .xm-dept-4grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 44px;
    }
    .xm-dept-card {
        background: #FFFFFF;
        border: 1px solid #F3E6D9;
        border-radius: 18px;
        padding: 20px 18px 18px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 16px rgba(0,0,0,0.03);
        transition: box-shadow 0.2s ease;
    }
    .xm-dept-card:hover {
        box-shadow: 0 12px 28px rgba(5,52,26,0.08);
    }
    .xm-dept-card h3 {
        font-size: 17px !important;
        font-weight: 800 !important;
        color: #05341A !important;
        margin: 0 0 14px !important;
        line-height: 1.25;
    }
    .xm-dept-2x2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-bottom: 16px;
    }
    .xm-dept-tile {
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
    }
    .xm-dept-tile-img {
        background: #FAF7F4;
        border-radius: 10px;
        aspect-ratio: 1;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 6px;
    }
    .xm-dept-tile-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.25s ease;
    }
    .xm-dept-tile:hover .xm-dept-tile-img img {
        transform: scale(1.08);
    }
    .xm-dept-tile-lbl {
        font-size: 11.5px;
        font-weight: 600;
        color: #374151;
        line-height: 1.25;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .xm-dept-link {
        font-size: 13px;
        font-weight: 700;
        color: #FD6000 !important;
        text-decoration: none !important;
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: color 0.15s ease;
    }
    .xm-dept-link:hover { color: #E05500 !important; }

    /* 7. TOP SELLERS CAROUSEL / GRID WITH STAR RATINGS */
    .xm-top-sellers-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 16px;
        margin-bottom: 44px;
    }
    .xm-ts-card {
        background: #FFFFFF;
        border: 1px solid #F3E6D9;
        border-radius: 16px;
        padding: 12px;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
        transition: all 0.2s ease;
    }
    .xm-ts-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(5,52,26,0.08);
        border-color: #FD6000;
    }
    .xm-ts-thumb {
        background: #FAF7F4;
        border-radius: 10px;
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-bottom: 10px;
        padding: 8px;
    }
    .xm-ts-thumb img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    .xm-ts-title {
        font-size: 12.5px !important;
        font-weight: 700 !important;
        color: #1F2937 !important;
        margin: 0 0 4px !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .xm-ts-price {
        font-size: 14.5px;
        font-weight: 800;
        color: #05341A;
        margin-bottom: 4px;
    }
    .xm-ts-stars {
        color: #FBBF24;
        font-size: 11px;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    .xm-ts-stars span {
        color: #9CA3AF;
        font-size: 10.5px;
    }

    /* 8. NEWSLETTER / EXCLUSIVE OFFERS BANNER */
    .xm-news-strip {
        background: #05341A;
        border-radius: 20px;
        padding: 28px 36px;
        margin-bottom: 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        color: #FFFFFF;
        box-shadow: 0 14px 32px rgba(5,52,26,0.18);
    }
    .xm-news-left {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .xm-news-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(253, 96, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: #FD6000;
        flex-shrink: 0;
    }
    .xm-news-left h3 {
        font-size: 18px !important;
        font-weight: 800 !important;
        color: #FFFFFF !important;
        margin: 0 0 2px !important;
    }
    .xm-news-left p {
        font-size: 13px !important;
        color: #D1D5DB !important;
        margin: 0 !important;
    }
    .xm-news-form {
        display: flex;
        align-items: center;
        gap: 8px;
        max-width: 440px;
        width: 100%;
    }
    .xm-news-input {
        flex-grow: 1;
        background: #FFFFFF !important;
        border: none !important;
        border-radius: 24px !important;
        padding: 12px 20px !important;
        font-size: 13.5px !important;
        color: #1F2937 !important;
        outline: none !important;
        height: 46px !important;
    }
    .xm-news-btn {
        background: #FD6000 !important;
        color: #FFFFFF !important;
        border: none !important;
        border-radius: 24px !important;
        padding: 12px 24px !important;
        font-size: 13px !important;
        font-weight: 800 !important;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        cursor: pointer;
        height: 46px !important;
        transition: background 0.2s ease;
        white-space: nowrap;
    }
    .xm-news-btn:hover { background: #E05500 !important; }

    /* RESPONSIVE BREAKPOINTS */
    @media (max-width: 1100px) {
        .xm-cat-5grid { grid-template-columns: repeat(3, 1fr); }
        .xm-dept-4grid { grid-template-columns: repeat(2, 1fr); }
        .xm-top-sellers-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 900px) {
        .xm-hero-card { grid-template-columns: 1fr; padding: 36px 24px; }
        .xm-hero-h1 { font-size: 34px !important; }
        .xm-deal-box { grid-template-columns: 1fr; padding: 28px 20px; text-align: center; }
        .xm-deal-right { align-items: center; }
        .xm-prod-4grid { grid-template-columns: repeat(2, 1fr); }
        .xm-news-strip { flex-direction: column; text-align: center; }
        .xm-news-left { flex-direction: column; text-align: center; }
    }
    @media (max-width: 600px) {
        .xm-cat-5grid { grid-template-columns: repeat(2, 1fr); }
        .xm-dept-4grid { grid-template-columns: 1fr; }
        .xm-top-sellers-grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>

<div class="xm-home-container">

    {{-- 1. HERO BANNER --}}
    <section class="xm-hero-section">
        <div class="xm-hero-card">
            <div>
                <span class="xm-hero-badge-pill">
                    <i class="fas fa-sparkles"></i> Limited Time Only
                </span>
                <h1 class="xm-hero-h1">Shop More, <span>Save More!</span></h1>
                <p class="xm-hero-desc">Discover amazing deals on your favorite products — authentic handicrafts, trendy fashion, home decor & wholesale goods.</p>
                
                <div class="xm-hero-trust-row">
                    <span class="xm-hero-trust-pill"><i class="fas fa-tag"></i> Best Prices Guaranteed</span>
                    <span class="xm-hero-trust-pill"><i class="fas fa-shield-alt"></i> Secure Payments</span>
                    <span class="xm-hero-trust-pill"><i class="fas fa-shipping-fast"></i> Fast Delivery Worldwide</span>
                </div>

                <a href="{{ route('products') }}" class="xm-btn-hero-explore">
                    <span>Explore Collection</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="xm-hero-showcase">
                <div class="xm-hero-podium">
                    <img src="{{ asset('frontend/images/hero-artisan-showcase.jpg') }}" alt="XuLu Mart Collection - Authentic Handicrafts & Lifestyle">
                    <div class="xm-hero-discount-badge">
                        <span>UP TO</span>
                        <span>50%</span>
                        <span>OFF</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. VALUE / TRUST BAR --}}
    <section class="xm-trust-bar">
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="xm-trust-item">
                    <div class="xm-trust-icon-box"><i class="fas fa-shipping-fast"></i></div>
                    <div>
                        <h4>Free Shipping</h4>
                        <p>On wholesale & bulk orders</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="xm-trust-item">
                    <div class="xm-trust-icon-box"><i class="fas fa-undo"></i></div>
                    <div>
                        <h4>Easy Returns</h4>
                        <p>30-day money-back policy</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="xm-trust-item">
                    <div class="xm-trust-icon-box"><i class="fas fa-certificate"></i></div>
                    <div>
                        <h4>Premium Quality</h4>
                        <p>100% genuine verified items</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="xm-trust-item">
                    <div class="xm-trust-icon-box"><i class="fas fa-headset"></i></div>
                    <div>
                        <h4>24/7 Support</h4>
                        <p>Dedicated WhatsApp helpline</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. SHOP BY CATEGORY (5-CARDS) --}}
    <section>
        <div class="xm-section-header">
            <h2 class="xm-section-title">Shop By Category</h2>
            <p class="xm-section-subtitle">Explore our handpicked product collections</p>
        </div>

        <div class="xm-cat-5grid">
            @foreach($featured_categories as $category)
                <a class="xm-cat-pill-card" href="{{ route('category.products', [$category->id, Str::slug($category->title)]) }}">
                    <div class="xm-cat-thumb-circle">
                        <img src="{{ \App\Helpers\Media::url('category', $category->image, 'images/product/1676543573.jpg') }}" alt="{{ $category->title }}">
                    </div>
                    <h3>{{ $category->title }}</h3>
                    <span class="shop-now">Shop Now &rarr;</span>
                </a>
            @endforeach
        </div>
    </section>

    {{-- 4. DEAL OF THE DAY (HERO FLASH SALE BOX WITH LIVE COUNTDOWN) --}}
    @if($dealOfDay)
    <section>
        <div class="xm-deal-box">
            {{-- Left Info --}}
            <div>
                <span class="xm-deal-badge"><i class="fas fa-bolt"></i> Deal of the Day</span>
                <h2 class="xm-deal-heading">Grab It Before It's Gone!</h2>
                <p class="xm-deal-sub">Hurry! Limited stock available at direct factory wholesale rates.</p>
                <a href="{{ route('single.product', [$dealOfDay->id, Str::slug($dealOfDay->title)]) }}" class="xm-deal-btn">
                    <span>Shop the Deal</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            {{-- Center Product Photo --}}
            <div class="xm-deal-prod-center">
                <a href="{{ route('single.product', [$dealOfDay->id, Str::slug($dealOfDay->title)]) }}">
                    <img class="xm-deal-prod-img" src="{{ asset('images/product/' . $dealOfDay->image) }}" alt="{{ $dealOfDay->title }}">
                </a>
            </div>

            {{-- Right Pricing & Countdown Timer --}}
            <div class="xm-deal-right">
                <h3 class="xm-deal-title">{{ $dealOfDay->title }}</h3>
                <div class="xm-deal-meta">Verified authentic &bull; In Stock</div>
                
                <div class="xm-deal-price-row">
                    <span class="xm-deal-cur-price">৳{{ ($dealOfDay->is_sale && $dealOfDay->discount_price > 0) ? $dealOfDay->discount_price : $dealOfDay->price }}</span>
                    @if($dealOfDay->is_sale && $dealOfDay->discount_price > 0)
                        <span class="xm-deal-old-price">৳{{ $dealOfDay->price }}</span>
                    @endif
                </div>

                <div class="xm-deal-stock-urgency">
                    <i class="fas fa-fire" style="color:#FD6000;"></i> Only {{ $dealOfDay->qty ?? 18 }} items left in stock!
                </div>
                <div class="xm-deal-stock-bar">
                    <div class="xm-deal-stock-fill" style="width: {{ min(100, max(15, (int)($dealOfDay->qty ?? 18) * 3)) }}%;"></div>
                </div>

                {{-- Live Real-time Countdown Timer (HRS, MINS, SECS, MSECS) --}}
                <div class="xm-live-timer" id="xmDealCountdown">
                    <div class="xm-timer-unit">
                        <span class="xm-timer-num" id="xmH">08</span>
                        <span class="xm-timer-lbl">HRS</span>
                    </div>
                    <div class="xm-timer-unit">
                        <span class="xm-timer-num" id="xmM">12</span>
                        <span class="xm-timer-lbl">MINS</span>
                    </div>
                    <div class="xm-timer-unit">
                        <span class="xm-timer-num" id="xmS">45</span>
                        <span class="xm-timer-lbl">SECS</span>
                    </div>
                    <div class="xm-timer-unit">
                        <span class="xm-timer-num" id="xmMS">80</span>
                        <span class="xm-timer-lbl">MSEC</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    {{-- 5. NEW ARRIVALS 4-GRID --}}
    <section>
        <div class="xm-section-row-head">
            <h2>New Arrivals</h2>
            <a href="{{ route('products') }}" class="xm-view-all-link">View All &rarr;</a>
        </div>

        <div class="xm-prod-4grid">
            @foreach($newArrivalProducts->take(4) as $prod)
                <div class="xm-prod-card">
                    <span class="xm-prod-badge-new">NEW</span>
                    <button type="button" class="xm-prod-wish-btn" onclick="addToWishlist({{ $prod->id }})" title="Add to Wishlist">
                        <i class="far fa-heart"></i>
                    </button>

                    <a href="{{ route('single.product', [$prod->id, Str::slug($prod->title)]) }}" class="xm-prod-thumb-wrap">
                        <img src="{{ asset('images/product/' . $prod->image) }}" alt="{{ $prod->title }}">
                    </a>

                    <div class="xm-prod-body">
                        <a href="{{ route('single.product', [$prod->id, Str::slug($prod->title)]) }}" class="xm-prod-title">
                            {{ $prod->title }}
                        </a>

                        <div class="xm-prod-bottom-row">
                            <div class="xm-prod-price">
                                ৳{{ ($prod->is_sale && $prod->discount_price > 0) ? $prod->discount_price : $prod->price }}
                                @if($prod->is_sale && $prod->discount_price > 0)
                                    <span class="old-price">৳{{ $prod->price }}</span>
                                @endif
                            </div>
                            <button type="button" class="xm-prod-cart-btn" onclick="addToCart({{ $prod->id }})" title="Add to Cart">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- 6. AMAZON-STYLE 4 CURATED DEPARTMENT QUADRANT CARDS --}}
    @if(isset($departmentCards) && count($departmentCards))
    <section>
        <div class="xm-dept-4grid">
            @foreach($departmentCards as $dept)
                <div class="xm-dept-card">
                    <h3>{{ $dept['title'] }}</h3>
                    <div class="xm-dept-2x2">
                        @foreach($dept['tiles'] as $tile)
                            <a href="{{ route('search.result') }}?search={{ urlencode($tile['query']) }}" class="xm-dept-tile">
                                <div class="xm-dept-tile-img">
                                    <img src="{{ asset($tile['image']) }}" alt="{{ $tile['label'] }}" onerror="this.src='{{ asset('frontend/images/animation-banner-update.png') }}'">
                                </div>
                                <span class="xm-dept-tile-lbl">{{ $tile['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                    <a href="{{ $dept['link'] }}" class="xm-dept-link">{{ $dept['action_text'] }} &rarr;</a>
                </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- 7. TOP SELLERS IN STORE FOR YOU --}}
    <section>
        <div class="xm-section-row-head">
            <h2>Top Sellers in Store for you</h2>
            <a href="{{ route('products') }}" class="xm-view-all-link">Discover more &rarr;</a>
        </div>

        <div class="xm-top-sellers-grid">
            @foreach($top_sales->take(6) as $ts)
                <a href="{{ route('single.product', [$ts->id, Str::slug($ts->title)]) }}" class="xm-ts-card">
                    <div class="xm-ts-thumb">
                        <img src="{{ asset('images/product/' . $ts->image) }}" alt="{{ $ts->title }}">
                    </div>
                    <h4 class="xm-ts-title">{{ $ts->title }}</h4>
                    <div class="xm-ts-price">
                        ৳{{ ($ts->is_sale && $ts->discount_price > 0) ? $ts->discount_price : $ts->price }}
                    </div>
                    <div class="xm-ts-stars">
                        ★★★★★ <span>({{ rand(420, 1980) }})</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- 8. NEWSLETTER / EXCLUSIVE OFFERS STRIP --}}
    <section>
        <div class="xm-news-strip">
            <div class="xm-news-left">
                <div class="xm-news-icon"><i class="fas fa-envelope-open-text"></i></div>
                <div>
                    <h3>Get Exclusive Offers &amp; Updates</h3>
                    <p>Sign up now and get 10% OFF on your first wholesale or retail order!</p>
                </div>
            </div>

            <form class="xm-news-form" id="xmHomeNewsletterForm">
                @csrf
                <input type="email" name="email" class="xm-news-input" placeholder="Enter your email address..." required>
                <button type="submit" class="xm-news-btn">Subscribe</button>
            </form>
        </div>
    </section>

</div>

{{-- Dynamic Countdown Timer Script --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    var targetDate = new Date();
    targetDate.setHours(targetDate.getHours() + 8);
    targetDate.setMinutes(targetDate.getMinutes() + 12);
    targetDate.setSeconds(targetDate.getSeconds() + 45);

    var elH = document.getElementById('xmH');
    var elM = document.getElementById('xmM');
    var elS = document.getElementById('xmS');
    var elMS = document.getElementById('xmMS');

    function updateTimer() {
        var now = new Date();
        var diff = targetDate - now;

        if (diff <= 0) {
            targetDate = new Date(Date.now() + 24 * 3600 * 1000);
            diff = targetDate - now;
        }

        var hrs = Math.floor(diff / (1000 * 60 * 60));
        var mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var secs = Math.floor((diff % (1000 * 60)) / 1000);
        var msec = Math.floor((diff % 1000) / 10);

        if (elH) elH.innerText = (hrs < 10 ? '0' : '') + hrs;
        if (elM) elM.innerText = (mins < 10 ? '0' : '') + mins;
        if (elS) elS.innerText = (secs < 10 ? '0' : '') + secs;
        if (elMS) elMS.innerText = (msec < 10 ? '0' : '') + msec;
    }

    setInterval(updateTimer, 45);
    updateTimer();

    // Home newsletter handler
    var newsForm = document.getElementById('xmHomeNewsletterForm');
    if (newsForm) {
        newsForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var btn = newsForm.querySelector('button');
            var input = newsForm.querySelector('input');
            btn.innerText = 'Subscribing...';
            btn.disabled = true;

            var fd = new FormData();
            fd.append('email', input.value);
            fd.append('name', 'Newsletter Subscriber');
            fd.append('phone', 'N/A');

            fetch('{{ route("popup.subscribe") }}', {
                method: 'POST',
                headers: { 'Accept': 'application/json' },
                body: fd
            }).then(function (r) { return r.json(); })
              .then(function (data) {
                  btn.innerText = 'Subscribed!';
                  if (window.toastr) {
                      toastr.success('Thank you! You will now receive exclusive discounts & updates.');
                  } else {
                      alert('Thank you! You have subscribed for exclusive discounts.');
                  }
                  input.value = '';
              }).catch(function () {
                  btn.disabled = false;
                  btn.innerText = 'Subscribe';
              });
        });
    }
});
</script>
@endsection
