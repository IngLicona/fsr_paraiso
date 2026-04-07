@extends('layouts.app')

@section('title', 'Eventos - FSR PARAISO')

@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Eventos</h1>
            <p>Todos nuestros eventos y actividades</p>
        </div>
        
    </section>

    <section class="page-content">
        <div class="container">
            <h2>Próximos Eventos</h2>
            
            @if($posts->count() > 0)
                <div class="eventos-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    @foreach($posts as $post)
                        <div class="evento-card" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            @if($post->imagen)
                                <img src="{{ asset('storage/' . $post->imagen) }}" alt="{{ $post->titulo }}" style="width: 100%; height: 200px; object-fit: cover;">
                            @endif
                            
                            <div style="padding: 1.5rem;">
                                <h3 style="margin-top: 0; color: #333;">{{ $post->titulo }}</h3>
                                
                                <p style="color: #666; line-height: 1.6;">{{ Str::limit($post->descripcion, 150) }}</p>
                                
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid #eee;">
                                    <span style="color: #999; font-size: 0.9rem;">
                                        📅 {{ $post->fecha_publicacion->format('d/m/Y') }}
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p style="text-align: center; color: #999; padding: 2rem;">No hay eventos disponibles en este momento.</p>
            @endif
        </div>
    </section>

@endsection
