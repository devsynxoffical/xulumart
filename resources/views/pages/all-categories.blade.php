@extends('layouts.laramart.master')

@section('title')
	{{ 'Menu' . ' | '. env('APP_NAME') }}
@endsection

@section('content')

    <style>
        .ac-wrap{ background: var(--brand-body-bg-1, #FAFAFA); padding: 40px 0 60px; }
        .ac-grid{ display:grid; grid-template-columns:repeat(3, 1fr); gap:22px; }
        @media (max-width: 991px){ .ac-grid{ grid-template-columns:repeat(2, 1fr); } }
        @media (max-width: 575px){ .ac-grid{ grid-template-columns:1fr; } }
        .ac-card{
            background:#fff; border:1px solid var(--brand-border, #ECECEC); border-radius:14px;
            padding:22px 24px; transition: box-shadow .2s ease, transform .2s ease;
        }
        .ac-card:hover{ box-shadow:0 12px 26px rgba(0,0,0,.08); transform:translateY(-3px); }
        .ac-card h3{
            font-size:17px; font-weight:800; color:#1B1B1B; margin:0 0 4px;
            padding-bottom:10px; border-bottom:2px solid var(--brand-secondary, #FD6000);
        }
        .ac-card .ac-desc{ color:#6B7280; font-size:13px; margin:10px 0 0; }
        .ac-card ul{ list-style:none; margin:12px 0 0; padding:0; display:flex; flex-wrap:wrap; gap:8px; }
        .ac-card ul li{
            background: var(--brand-body-bg-1, #FAFAFA); border:1px solid var(--brand-border, #ECECEC);
            border-radius:20px; padding:5px 13px; font-size:12.5px; font-weight:600; color:#1B1B1B;
        }
        .ac-empty{ text-align:center; padding:60px 20px; color:#6B7280; }
    </style>

    <div class="ac-wrap">
        <div class="container">
            <div class="section-title2 text-center mb-4" data-aos="fade-up">
                <h2 class="title title-icon-both">Menu</h2>
                <p>Browse everything we sell, organized by category</p>
            </div>

            @if($menus->count() > 0)
                <div class="ac-grid" data-aos="fade-up">
                    @foreach($menus as $menu)
                        <div class="ac-card">
                            <h3>{{ $menu->title }}</h3>

                            @if($menu->description)
                                <p class="ac-desc">{{ $menu->description }}</p>
                            @endif

                            @if($menu->child->count() > 0)
                                <ul>
                                    @foreach($menu->child as $sub)
                                        <li>{{ $sub->title }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="ac-empty">
                    <p>No menu items have been added yet. Add some from Admin &rarr; Menu.</p>
                </div>
            @endif
        </div>
    </div>

@endsection
