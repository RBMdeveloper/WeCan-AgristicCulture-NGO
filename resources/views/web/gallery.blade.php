{{-- # ACDO Responsive Gallery Page

```php --}}
@extends('web.template.layout')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Gallery</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Gallery</li>
            </ul>
        </div>
    </div>
</section>

<!-- Gallery Section Start -->
<section class="acdo-gallery-section section-padding">

    <div class="container">

        <!-- Section Heading -->
        <div class="acdo-gallery-heading text-center">

            <span class="acdo-gallery-subtitle">
                Our Activities
            </span>

            <h2 class="acdo-gallery-title">
                Moments of Impact & Community Development
            </h2>

            <p class="acdo-gallery-description">
                Explore highlights from our cultural programs, awareness drives,
                community initiatives, environmental campaigns, youth engagement
                activities, and sustainable development projects.
            </p>

        </div>

        <!-- Gallery Grid -->
        <div class="row g-4 acdo-gallery-grid">

            @forelse($galleries as $gallery)

                <div class="col-xl-4 col-lg-4 col-md-6 acdo-gallery-item">

                    <div class="acdo-gallery-card">

                        {{-- Gallery Image --}}
                        <img src="{{ asset($gallery->image) }}"
                             alt="Gallery Image">

                        {{-- Overlay --}}
                        <div class="acdo-gallery-overlay">

                            <div class="acdo-gallery-overlay-content">

                                <button class="acdo-gallery-view-btn"
                                        data-image="{{ asset($gallery->image) }}">

                                    View Image

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="text-center">

                        <h4 class="mb-3">
                            No Gallery Images Available
                        </h4>

                        <p class="text-muted">
                            Gallery images will appear here once uploaded by admin.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>

<!-- Lightbox Modal -->
<div class="acdo-gallery-lightbox" id="acdoGalleryLightbox">

    <span class="acdo-gallery-close-btn">
        &times;
    </span>

    <img class="acdo-gallery-lightbox-image"
         id="acdoGalleryLightboxImage"
         src=""
         alt="Gallery Preview">

</div>


<script>

/* ===============================
   ACDO GALLERY FILTER JS
================================== */

const acdoFilterButtons = document.querySelectorAll('.acdo-gallery-filter-btn');
const acdoGalleryItems = document.querySelectorAll('.acdo-gallery-item');

acdoFilterButtons.forEach(button => {

    button.addEventListener('click', () => {

        acdoFilterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filterValue = button.getAttribute('data-filter');

        acdoGalleryItems.forEach(item => {

            if (filterValue === 'all' || item.dataset.category === filterValue) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }

        });

    });

});

/* ===============================
   ACDO LIGHTBOX JS
================================== */

const acdoGalleryLightbox = document.getElementById('acdoGalleryLightbox');
const acdoGalleryLightboxImage = document.getElementById('acdoGalleryLightboxImage');
const acdoGalleryButtons = document.querySelectorAll('.acdo-gallery-view-btn');
const acdoGalleryCloseBtn = document.querySelector('.acdo-gallery-close-btn');

acdoGalleryButtons.forEach(button => {

    button.addEventListener('click', () => {

        const imageSrc = button.getAttribute('data-image');

        acdoGalleryLightboxImage.src = imageSrc;
        acdoGalleryLightbox.classList.add('active');

    });

});

acdoGalleryCloseBtn.addEventListener('click', () => {
    acdoGalleryLightbox.classList.remove('active');
});

acdoGalleryLightbox.addEventListener('click', (e) => {

    if (e.target === acdoGalleryLightbox) {
        acdoGalleryLightbox.classList.remove('active');
    }

});

</script>

@endsection

