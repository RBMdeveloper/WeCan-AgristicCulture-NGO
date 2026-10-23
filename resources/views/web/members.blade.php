@extends('web.template.layout')

@section('content')

<!-- Page Title -->
<section class="page-title"
         style="background-image: url(images/resource/page-title.jpg);">

    <div class="auto-container">

        <div class="title-outer text-center">

            <h1 class="title">
                Our Team Members
            </h1>

            <ul class="page-breadcrumb">

                <li>
                    <a href="{{ route('index') }}">
                        Home
                    </a>
                </li>

                <li>
                    Members
                </li>

            </ul>

        </div>

    </div>

</section>



<!-- Members Section -->
<section class="acdo-members-section section-padding">

    <div class="container">

        {{-- Section Header --}}
        <div class="acdo-members-header text-center">

            <span class="acdo-members-subtitle">

                Dedicated Team

            </span>

            <h2 class="acdo-members-title">

                Meet Our Members

            </h2>

            <p class="acdo-members-description">

                Our organization is driven by passionate individuals committed
                to community empowerment, sustainable development,
                education, and social impact.

            </p>

        </div>


        {{-- Members Grid --}}
        <div class="row g-4">

            @forelse($members as $member)

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">

                    <div class="acdo-member-card">

                        {{-- Image --}}
                        <div class="acdo-member-image-wrapper">

                            <img src="{{ asset($member->photo) }}"
                                 alt="{{ $member->name }}"
                                 class="acdo-member-image">

                        </div>

                        {{-- Content --}}
                        <div class="acdo-member-content">

                            <h3 class="acdo-member-name">

                                {{ $member->name }}

                            </h3>

                            <p class="acdo-member-designation">

                                {{ $member->designation }}

                            </p>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="acdo-member-empty text-center">

                        <h4>
                            No members found.
                        </h4>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>



<style>

/* =========================================
   MEMBERS PAGE CSS
========================================= */

.acdo-members-section {
    background: #f8faf8;
    position: relative;
    overflow: hidden;
}


/* Header */
.acdo-members-header {
    max-width: 750px;
    margin: 0 auto 60px;
}

.acdo-members-subtitle {
    display: inline-block;
    font-size: 15px;
    font-weight: 600;
    color: #1F5E2E;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

.acdo-members-title {
    font-size: 46px;
    font-weight: 700;
    color: #1c1c1c;
    margin-bottom: 20px;
    line-height: 1.2;
}

.acdo-members-description {
    font-size: 16px;
    line-height: 1.9;
    color: #666;
}


/* Member Card */
.acdo-member-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    text-align: center;
    transition: all 0.4s ease;
    box-shadow: 0 10px 35px rgba(0,0,0,0.05);
    height: 100%;
    position: relative;
}

.acdo-member-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.10);
}


/* Image */
.acdo-member-image-wrapper {
    position: relative;
    overflow: hidden;
    height: 320px;
}

.acdo-member-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.acdo-member-card:hover .acdo-member-image {
    transform: scale(1.08);
}


/* Content */
.acdo-member-content {
    padding: 28px 20px;
}

.acdo-member-name {
    font-size: 24px;
    font-weight: 700;
    color: #1F5E2E;
    margin-bottom: 10px;
    line-height: 1.3;
}

.acdo-member-designation {
    font-size: 15px;
    color: #777;
    margin-bottom: 0;
    line-height: 1.6;
    font-weight: 500;
}


/* Empty */
.acdo-member-empty {
    background: #fff;
    padding: 60px 20px;
    border-radius: 18px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.04);
}

.acdo-member-empty h4 {
    color: #888;
    margin: 0;
}


/* Responsive */
@media (max-width: 1199px) {

    .acdo-member-image-wrapper {
        height: 280px;
    }

    .acdo-members-title {
        font-size: 40px;
    }

}


@media (max-width: 991px) {

    .acdo-member-image-wrapper {
        height: 260px;
    }

    .acdo-members-title {
        font-size: 36px;
    }

}


@media (max-width: 767px) {

    .acdo-members-section {
        padding: 70px 0;
    }

    .acdo-members-header {
        margin-bottom: 45px;
    }

    .acdo-members-title {
        font-size: 30px;
    }

    .acdo-members-description {
        font-size: 15px;
        line-height: 1.8;
    }

    .acdo-member-image-wrapper {
        height: 250px;
    }

    .acdo-member-content {
        padding: 24px 18px;
    }

    .acdo-member-name {
        font-size: 22px;
    }

}


@media (max-width: 575px) {

    .acdo-member-image-wrapper {
        height: 320px;
    }

}

</style>

@endsection