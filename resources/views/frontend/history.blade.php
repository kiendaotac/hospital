@extends('frontend.layout.layout')
@section('content')
    <div class="history-wrapper">
        <h2 class="history-title">Lịch sử khám bệnh</h2>
        <ul class="timeline">
            @foreach($appointments as $appointment)
                <!-- Item -->
                <li>
                    <div class="direction-{{ $loop->odd ? 'l' : 'r' }}">
                        <div class="flag-wrapper">
                            <span class="flag">{{ $appointment->time->format('d/m/Y H:i') }}</span>
                        </div>
                        <div class="desc">{{ $appointment->service }}</div>
                    </div>
                </li>
                <!-- End Item -->
            @endforeach
        </ul>
    </div>

@endsection