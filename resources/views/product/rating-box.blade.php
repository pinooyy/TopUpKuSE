<div class="rating-box">
    <div class="rating-header">
        <img src="{{ $productImage ?? 'Assets SoftEng/lay.png' }}" alt="{{ $productName ?? 'Product' }}">
        <div class="rating-summary">
            <h2>TOP UP {{ strtoupper($productName ?? 'PRODUCT') }}</h2>
            <div style="display: flex; align-items: center; gap: 10px;">
                <div class="rating-score">{{ number_format($averageRating ?? 0, 1) }}</div>
                <div class="rating-stars">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= floor($averageRating ?? 0))
                            <i class="fa fa-star"></i>
                        @elseif ($i - ($averageRating ?? 0) < 1)
                            <i class="fa fa-star-half-alt"></i>
                        @else
                            <i class="fa fa-star" style="color: #ccc;"></i>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="rating-info">
                <div><i class="fa fa-star"></i> {{ number_format(($totalReviews ?? 0) / 1000, 1) }} rb Ulasan</div>
                <div><i class="fa fa-check-square"></i> {{ number_format(($totalSales ?? 0) / 1000, 0) }} rb Terjual</div>
                <div><i class="fa fa-headphones"></i> Pelayanan Cepat</div>
            </div>
        </div>
    </div>
    <div class="rating-distribution">
        @foreach (($ratingDistribution ?? []) as $star => $count)
            <div class="rating-bar">
                <div class="rating-bar-label">{{ $star }}</div>
                <div class="rating-bar-progress">
                    <div class="rating-bar-fill" style="width: {{ $maxRatingCount > 0 ? ($count / $maxRatingCount) * 100 : 0 }}%;"></div>
                </div>
                <div class="rating-bar-count">{{ number_format($count / 1000, 1) }} rb</div>
            </div>
        @endforeach
    </div>
    <div class="reviews-list">
        @foreach (($userReviews ?? []) as $review)
            <div class="review-item">
                <div class="review-avatar">
                    <i class="fa fa-user"></i>
                </div>
                <div class="review-content">
                    <div class="review-email">{{ $review['email'] }}</div>
                    <div class="review-stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review['rating'])
                                <i class="fa fa-star"></i>
                            @else
                                <i class="fa fa-star" style="color: #ccc;"></i>
                            @endif
                        @endfor
                    </div>
                    <div class="review-text">{{ $review['comment'] }}</div>
                    @if ($review['tag'])
                        <div class="review-tag">{{ $review['tag'] }}</div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
