@props(['rating'])

@php
    $fullStars = floor($rating);
    $halfStar = ceil($rating - $fullStars);
    $emptyStars = 5 - $fullStars - $halfStar;
@endphp

<div class="rating">
    @for ($i = 0; $i < $fullStars; $i++)
    <i class="fa-solid fa-star" style="color: gold"></i>
    @endfor
    @if ($halfStar)
        <i class="fa-solid fa-star-half"></i>
    @endif
    @for ($i = 0; $i < $emptyStars; $i++)
        <i class="fa-regular fa-star"></i>
    @endfor
</div>
