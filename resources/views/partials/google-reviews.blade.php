<section id="testimonials" class="google-reviews-section" aria-labelledby="google-reviews-title">
    <div class="container">
        <div class="section-header">
            <h2 id="google-reviews-title">Our Patients Wall of Love</h2>
            <p>Patient experiences shared on Google.</p>
            <a class="btn btn-outline" href="{{ config('clinic.google_maps_url') }}" target="_blank" rel="noopener noreferrer">View all reviews on Google</a>
        </div>
        <div class="google-review-links google-review-cards">
            @foreach([
                ['name' => 'Shafni Shafeeck', 'initials' => 'S', 'text' => 'Super friendly and professional staff and doctor! Had the best first time experience.'],
                ['name' => 'Sahila Aseem', 'initials' => 'SA', 'text' => 'Good hospitality💗'],
                ['name' => 'Binsa Niyas', 'initials' => 'BN', 'text' => 'Iam extremely satisfied with their service especially Dr farhana who handled my daughter very well. They have very professional touch in dealing with patient and I strongly recommend them💗'],
                ['name' => 'Hiba Vahab', 'initials' => 'HV', 'text' => 'Good service💗hppy'],
                ['name' => 'Arshed Ak', 'initials' => 'AA', 'text' => 'Nice experience' . "\n\n" . 'I went there to get my cavities fixed. Dr.Farhana was very prompt , professional with the procedure. Got it done in like 10mins with great perfection. Highly recommended.'],
                ['name' => 'Fousiya Anes', 'initials' => 'FA', 'text' => 'Good experience. I\'m satisfied 💗'],
                ['name' => 'Ashiq Jumarashiq', 'initials' => 'AJ', 'text' => 'After my recent visit to the dental clinic, I was thoroughly impressed by the professional and friendly staff, as well as the exceptional level of care and attention to detail provided during my appointment.'],
                ['name' => 'Nesna Noushad', 'initials' => 'NN', 'text' => 'Great service and friendly 💫 ...'],
                ['name' => 'Samjad Mujeeb rahman', 'initials' => 'SM', 'rating' => 5, 'text' => ''],
                ['name' => 'Prageetha sunil', 'initials' => 'PS', 'rating' => 4, 'text' => ''],
            ] as $review)
                <article class="google-review-card">
                    <span class="google-review-source"><i class="fab fa-google" aria-hidden="true"></i><span class="sr-only">Google review</span></span>
                    <div class="google-review-stars" role="img" aria-label="{{ $review['rating'] ?? 5 }} out of 5 stars">
                        @for($star = 0; $star < 5; $star++)
                            <i class="fas fa-star{{ $star >= ($review['rating'] ?? 5) ? ' google-review-star-empty' : '' }}" aria-hidden="true"></i>
                        @endfor
                    </div>
                    @if($review['text'] !== '')
                        <blockquote class="google-review-text"><p>{{ $review['text'] }}</p></blockquote>
                    @else
                        <p class="google-review-rating-only">{{ $review['rating'] }} out of 5 stars on Google</p>
                    @endif
                    <h3 class="google-review-author">{{ $review['name'] }}</h3>
                    <span class="google-review-avatar" aria-hidden="true">{{ $review['initials'] }}</span>
                </article>
            @endforeach
        </div>
    </div>
</section>
