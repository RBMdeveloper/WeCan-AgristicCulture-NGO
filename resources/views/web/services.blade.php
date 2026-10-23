@extends('web.template.layout')
@section('content')

<!-- Services Page Start -->
<section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Services</h1>
            <ul class="page-breadcrumb">
                {{-- <li><a href="/">Home</a></li> --}}
                <li><a href="{{route('index')}}">Home</a></li>

                <li>Services</li>
            </ul>
        </div>
    </div>
</section>



<!-- =============================================
     ACDO — Focus Areas / Services Section
     Namespace prefix: acdo-
     ============================================= -->

<section class="acdo-services">

  <!-- Section Header -->
  <div class="acdo-header">
    <span class="acdo-eyebrow">Our Focus Areas</span>
    <h2 class="acdo-title">Building Sustainable Communities<br>Through Multi-Sector Development</h2>
    <p class="acdo-subtitle">We Can Organisation works across multiple sectors to empower communities, preserve cultural identity, support sustainable livelihoods, and promote inclusive social development across Assam and North-East India.</p>
  </div>

  <!-- Services Grid -->
  <div class="acdo-grid">

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-green">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </div>
      <div class="acdo-card-num">01</div>
      <h3 class="acdo-card-title">Rural Development</h3>
      <p class="acdo-card-text">Strengthening local development through awareness programs, community participation, sustainable initiatives, and grassroots empowerment to improve quality of life and long-term social progress.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-amber">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 10 10c0 5.52-4.48 10-10 10S2 17.52 2 12c0-2.76 1.12-5.26 2.93-7.07"/><path d="M12 6v6l4 2"/><path d="M5 3l2 2-2 2"/></svg>
      </div>
      <div class="acdo-card-num">02</div>
      <h3 class="acdo-card-title">Agriculture &amp; Farmer Welfare</h3>
      <p class="acdo-card-text">Supporting farmers through awareness programs, sustainable agricultural practices, capacity-building initiatives, and community-based farming support to improve livelihoods.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-blue">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
      </div>
      <div class="acdo-card-num">03</div>
      <h3 class="acdo-card-title">Education &amp; Skill Development</h3>
      <p class="acdo-card-text">Promoting education, literacy, vocational training, digital awareness, and skill development programs for youth and communities to enhance opportunities and self-reliance.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-pink">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </div>
      <div class="acdo-card-num">04</div>
      <h3 class="acdo-card-title">Women &amp; Child Empowerment</h3>
      <p class="acdo-card-text">Supporting initiatives focused on empowerment, safety, participation, and welfare of women and children through awareness drives, educational support, and leadership activities.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-purple">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/><path d="M3.05 11a9 9 0 0 1 1.8-4.3"/><path d="M20.95 11a9 9 0 0 0-1.8-4.3"/></svg>
      </div>
      <div class="acdo-card-num">05</div>
      <h3 class="acdo-card-title">Art &amp; Cultural Preservation</h3>
      <p class="acdo-card-text">Promoting and preserving traditional art, culture, indigenous heritage, folk traditions, and local identity through cultural events, workshops, and community participation.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-teal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8C8 10 5.9 16.17 3.82 19.18"/><path d="M9.04 12.52c2.27-2.63 5.56-4.04 9.96-4.52"/><path d="M3.82 19.18C2 16 2 12 2 12s4-8 10-8 10 8 10 8-2 4-5 6"/></svg>
      </div>
      <div class="acdo-card-num">06</div>
      <h3 class="acdo-card-title">Nature &amp; Environmental Conservation</h3>
      <p class="acdo-card-text">Organizing environmental awareness campaigns, plantation drives, conservation activities, and sustainability-focused initiatives to encourage ecological responsibility.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-coral">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
      </div>
      <div class="acdo-card-num">07</div>
      <h3 class="acdo-card-title">Health &amp; Social Awareness</h3>
      <p class="acdo-card-text">Conducting awareness programs related to public health, sanitation, social welfare, and anti-drug campaigns to promote healthier and more informed communities.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-green">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="3"/><path d="M12 11v4"/><path d="M8 21l4-6 4 6"/><circle cx="6" cy="17" r="2"/><circle cx="18" cy="17" r="2"/></svg>
      </div>
      <div class="acdo-card-num">08</div>
      <h3 class="acdo-card-title">Youth Development &amp; Sports</h3>
      <p class="acdo-card-text">Encouraging youth participation through leadership activities, sports initiatives, community engagement, and awareness campaigns that build confidence and social responsibility.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-blue">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
      </div>
      <div class="acdo-card-num">09</div>
      <h3 class="acdo-card-title">Science, Technology &amp; Innovation</h3>
      <p class="acdo-card-text">Promoting awareness and adoption of science, technology, and digital literacy to help communities adapt to modern development opportunities and improve access to information.</p>
    </div>

    <div class="acdo-card">
      <div class="acdo-card-icon acdo-icon-amber">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
      </div>
      <div class="acdo-card-num">10</div>
      <h3 class="acdo-card-title">Tourism &amp; Community Promotion</h3>
      <p class="acdo-card-text">Supporting initiatives that promote local tourism, cultural heritage, traditional practices, and regional identity to encourage sustainable community-based tourism and socio-economic growth.</p>
    </div>

  </div>

  <!-- Bottom Banner -->
  <div class="acdo-banner">
    <div class="acdo-banner-inner">
      <div class="acdo-banner-block">
        <div class="acdo-banner-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <div>
          <h4 class="acdo-banner-title">Community-Centered Approach</h4>
          <p class="acdo-banner-text">Our initiatives are designed to create sustainable and inclusive development by actively involving local communities, youth, women, farmers, and stakeholders in planning and implementation.</p>
        </div>
      </div>
      <div class="acdo-banner-divider"></div>
      <div class="acdo-banner-block">
        <div class="acdo-banner-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div>
          <h4 class="acdo-banner-title">Together For Sustainable Development</h4>
          <p class="acdo-banner-text">ACDO believes in collective action, cultural strength, environmental responsibility, and grassroots participation to build a more equitable, self-reliant, and sustainable future for all.</p>
        </div>
      </div>
    </div>
  </div>

</section>


<style>
/* =============================================
   ACDO Services Section Styles
   All selectors prefixed with .acdo-
   ============================================= */

:root {
  --acdo-green:      #2d7a4f;
  --acdo-green-bg:   #eaf5ee;
  --acdo-green-mid:  #639922;
  --acdo-amber:      #b86b0c;
  --acdo-amber-bg:   #fef3e2;
  --acdo-blue:       #1a5fa8;
  --acdo-blue-bg:    #e6f1fb;
  --acdo-pink:       #c0426a;
  --acdo-pink-bg:    #fbeaf0;
  --acdo-purple:     #5340b8;
  --acdo-purple-bg:  #eeedfe;
  --acdo-teal:       #0f7a62;
  --acdo-teal-bg:    #e1f5ee;
  --acdo-coral:      #c04a20;
  --acdo-coral-bg:   #faece7;
  --acdo-neutral:    #f5f4f0;
  --acdo-text:       #1a1a18;
  --acdo-text-mid:   #4a4a48;
  --acdo-text-soft:  #7a7a78;
  --acdo-border:     #e2e0da;
  --acdo-white:      #ffffff;
  --acdo-accent:     #2d7a4f;
  --acdo-radius-sm:  8px;
  --acdo-radius-md:  14px;
  --acdo-radius-lg:  20px;
  --acdo-shadow:     0 2px 12px rgba(0,0,0,0.07);
  --acdo-shadow-hov: 0 6px 28px rgba(0,0,0,0.12);
  --acdo-font:       'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
}

.acdo-services {
  font-family: var(--acdo-font);
  background: var(--acdo-neutral);
  padding: 80px 20px 72px;
  box-sizing: border-box;
}

/* ---- Header ---- */
.acdo-header {
  max-width: 760px;
  margin: 0 auto 64px;
  text-align: center;
}

.acdo-eyebrow {
  display: inline-block;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--acdo-accent);
  background: rgba(45, 122, 79, 0.1);
  border: 1px solid rgba(45, 122, 79, 0.2);
  padding: 6px 16px;
  border-radius: 100px;
  margin-bottom: 20px;
}

.acdo-title {
  font-size: clamp(26px, 4vw, 40px);
  font-weight: 700;
  color: var(--acdo-text);
  line-height: 1.2;
  margin: 0 0 18px;
  letter-spacing: -0.02em;
}

.acdo-subtitle {
  font-size: 16px;
  color: var(--acdo-text-mid);
  line-height: 1.75;
  margin: 0;
  max-width: 680px;
  margin-inline: auto;
}

/* ---- Grid ---- */
.acdo-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 20px;
  max-width: 1180px;
  margin: 0 auto 56px;
}

/* ---- Card ---- */
.acdo-card {
  background: var(--acdo-white);
  border: 1px solid var(--acdo-border);
  border-radius: var(--acdo-radius-md);
  padding: 28px 26px 26px;
  position: relative;
  box-shadow: var(--acdo-shadow);
  transition: transform 0.22s ease, box-shadow 0.22s ease, border-color 0.22s ease;
  overflow: hidden;
}

.acdo-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: transparent;
  transition: background 0.22s ease;
  border-radius: var(--acdo-radius-md) var(--acdo-radius-md) 0 0;
}

.acdo-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--acdo-shadow-hov);
  border-color: #ccc9c1;
}

.acdo-card:hover::before {
  background: var(--acdo-accent);
}

.acdo-card-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--acdo-radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 16px;
}

.acdo-card-icon svg {
  width: 22px;
  height: 22px;
}

.acdo-icon-green  { background: var(--acdo-green-bg);  color: var(--acdo-green); }
.acdo-icon-amber  { background: var(--acdo-amber-bg);  color: var(--acdo-amber); }
.acdo-icon-blue   { background: var(--acdo-blue-bg);   color: var(--acdo-blue); }
.acdo-icon-pink   { background: var(--acdo-pink-bg);   color: var(--acdo-pink); }
.acdo-icon-purple { background: var(--acdo-purple-bg); color: var(--acdo-purple); }
.acdo-icon-teal   { background: var(--acdo-teal-bg);   color: var(--acdo-teal); }
.acdo-icon-coral  { background: var(--acdo-coral-bg);  color: var(--acdo-coral); }

.acdo-card-num {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.1em;
  color: var(--acdo-text-soft);
  margin-bottom: 8px;
  font-variant-numeric: tabular-nums;
}

.acdo-card-title {
  font-size: 16px;
  font-weight: 700;
  color: var(--acdo-text);
  margin: 0 0 10px;
  line-height: 1.3;
  letter-spacing: -0.01em;
}

.acdo-card-text {
  font-size: 14px;
  color: var(--acdo-text-mid);
  line-height: 1.7;
  margin: 0;
}

/* ---- Bottom Banner ---- */
.acdo-banner {
  max-width: 1180px;
  margin: 0 auto;
  background: var(--acdo-white);
  border: 1px solid var(--acdo-border);
  border-radius: var(--acdo-radius-lg);
  box-shadow: var(--acdo-shadow);
  overflow: hidden;
}

.acdo-banner-inner {
  display: flex;
  align-items: stretch;
  gap: 0;
}

.acdo-banner-block {
  flex: 1;
  display: flex;
  align-items: flex-start;
  gap: 18px;
  padding: 36px 40px;
}

.acdo-banner-divider {
  width: 1px;
  background: var(--acdo-border);
  flex-shrink: 0;
  margin: 24px 0;
}

.acdo-banner-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--acdo-radius-sm);
  background: rgba(45, 122, 79, 0.1);
  color: var(--acdo-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  margin-top: 3px;
}

.acdo-banner-icon svg {
  width: 20px;
  height: 20px;
}

.acdo-banner-title {
  font-size: 16px;
  font-weight: 700;
  color: var(--acdo-text);
  margin: 0 0 8px;
  letter-spacing: -0.01em;
}

.acdo-banner-text {
  font-size: 14px;
  color: var(--acdo-text-mid);
  line-height: 1.72;
  margin: 0;
}

/* ---- Responsive ---- */
@media (max-width: 900px) {
  .acdo-services {
    padding: 60px 16px 56px;
  }

  .acdo-header {
    margin-bottom: 48px;
  }

  .acdo-grid {
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 16px;
  }

  .acdo-banner-inner {
    flex-direction: column;
  }

  .acdo-banner-divider {
    width: auto;
    height: 1px;
    margin: 0 24px;
  }

  .acdo-banner-block {
    padding: 28px 28px;
  }
}

@media (max-width: 600px) {
  .acdo-services {
    padding: 48px 14px 48px;
  }

  .acdo-title {
    font-size: 24px;
  }

  .acdo-subtitle {
    font-size: 15px;
  }

  .acdo-grid {
    grid-template-columns: 1fr;
    gap: 14px;
  }

  .acdo-card {
    padding: 22px 20px 20px;
  }

  .acdo-banner-block {
    padding: 22px 20px;
    gap: 14px;
  }

  .acdo-banner-title {
    font-size: 15px;
  }
}
</style>


@endsection