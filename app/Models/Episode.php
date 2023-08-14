<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Episode extends Model
{
    use Sushi;

    protected $casts = [
        'released_at' => 'datetime',
    ];

    protected $rows = [
        [
            'number' => 195,
            'title' => 'Queries, GPT, and sinking downloads',
            'notes' => '...',
            'audio' => 'https://media.transistor.fm/c28ad926/93e5fe7d.mp3',
            'image' => 'https://images.transistor.fm/file/transistor/images/show/6405/full_1646972621-artwork.jpg',
            'duration_in_seconds' => 2579,
            'released_at' => '2023-07-06 10:00:00',
        ],
        [
            'number' => 194,
            'title' => 'Squeezing lemons, punching cards, and bellowing forges',
            'notes' => '...',
            'audio' => 'https://media.transistor.fm/6d2d53fe/f70d9278.mp3',
            'image' => 'https://images.transistor.fm/file/transistor/images/show/6405/full_1646972621-artwork.jpg',
            'duration_in_seconds' => 2219,
            'released_at' => '2023-06-21 10:00:00',
        ],
        [
            'number' => 193,
            'title' => 'Precognition, faking Stripe, and debugging Blade',
            'notes' => '...',
            'audio' => 'https://media.transistor.fm/d434305e/975fbb28.mp3',
            'image' => 'https://images.transistor.fm/file/transistor/images/show/6405/full_1646972621-artwork.jpg',
            'duration_in_seconds' => 2146,
            'released_at' => '2023-06-06 10:00:00',
        ],
        [
            'number' => 192,
            'title' => 'High octane, sleepy code, and Aaron Francis',
            'notes' => '...',
            'audio' => 'https://media.transistor.fm/b5f81577/c58c90c8.mp3',
            'image' => 'https://images.transistor.fm/file/transistor/images/show/6405/full_1646972621-artwork.jpg',
            'duration_in_seconds' => 1865,
            'released_at' => '2023-05-24 10:00:00',
        ],
    ];
}
