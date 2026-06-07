<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Newport Minerals Ltd - Tanzania's Trusted Industrial Minerals Processor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        .font-title { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
        .timeline-dot::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 28px;
            width: 2px;
            height: calc(100% - 28px);
            background: #e4e4e7;
        }
        .timeline-dot:last-child::before { display: none; }
    </style>
</head>
<body class="min-h-screen bg-white text-zinc-800 antialiased">

    <!-- Header (Simplified for subpage) -->
    <header class="sticky top-0 z-40 border-b bg-white/90 backdrop-blur border-zinc-100">
        <div class="mx-auto max-w-[1200px] px-4">
            <div class="flex h-14 items-center justify-between">
                <a href="#" class="flex items-center gap-2">
                    <div class="h-8 w-8 rounded-lg bg-gradient-to-br from-blue-600 to-emerald-500 flex items-center justify-center">
                        <span class="text-white font-bold text-[14px]">N</span>
                    </div>
                    <span class="font-title font-semibold tracking-tight text-[14px]">NEWPORT MINERALS LTD</span>
                </a>
                <div class="flex items-center gap-6 text-[13px] font-medium text-zinc-600">
                    <a href="index.php" class="hover:text-blue-700">Home</a>
                    <a href="index.php/#products" class="text-blue-700 font-semibold">About</a>
                    <a href="#" class="hover:text-blue-700">Products</a>
                    <a href="#" class="hover:text-blue-700">Industries</a>
                    <a href="#" class="hover:text-blue-700">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative isolate bg-zinc-900 overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <img src="https://images.pexels.com/photos/37533379/pexels-photo-37533379.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=1200&w=2000" alt="Mineral processing facility" class="h-full w-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-zinc-900/60 via-zinc-900/40 to-zinc-900/90"></div>
        <div class="mx-auto max-w-[1200px] px-4 py-20 lg:py-28 relative">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1 text-[11px] font-medium text-white backdrop-blur">
                    <i data-lucide="map-pin" class="h-3.5 w-3.5"></i>
                    Tanga, Tanzania
                </div>
                <h1 class="mt-5 text-[36px] lg:text-[48px] font-bold leading-[1.1] tracking-tight text-white font-title">
                    Powering Tanzania's Industrial Growth Through Quality Minerals
                </h1>
                <p class="mt-4 text-[15px] leading-relaxed text-zinc-300 max-w-xl">
                    Newport Minerals Ltd is a Tanzanian industrial minerals processing company dedicated to producing high-quality mineral products that support the growth of industry and manufacturing across the country.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#story" class="inline-flex h-11 items-center gap-2 rounded-full bg-blue-600 px-6 text-[13px] font-semibold text-white hover:bg-blue-700">
                        Our Story <i data-lucide="arrow-down" class="h-4 w-4"></i>
                    </a>
                    <a href="#values" class="inline-flex h-11 items-center gap-2 rounded-full border border-white/30 bg-white/10 px-6 text-[13px] font-semibold text-white backdrop-blur hover:bg-white/20">
                        Core Values
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section id="story" class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-[12px] font-semibold uppercase tracking-wider text-blue-600">Who We Are</span>
                <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title text-zinc-900">A Trusted Tanzanian Industrial Minerals Partner</h2>
                <div class="mt-6 space-y-4 text-[14px] leading-relaxed text-zinc-600">
                    <p>
                        Founded and based in <strong>Tanga, Tanzania</strong>, Newport Minerals Ltd is a specialized industrial minerals processing company committed to producing high-quality mineral products that fuel the growth of Tanzania's manufacturing and industrial sectors.
                    </p>
                    <p>
                        We specialize in the processing of <strong>dolomite, calcite, limestone, and other industrial minerals</strong>, delivering consistent, high-performance mineral solutions to a diverse range of industries including paint and coatings, plastics, glass manufacturing, agriculture, animal feed, construction, mining, and various other industrial applications.
                    </p>
                    <p>
                        Through advanced processing methods, strict quality control standards, and a commitment to operational excellence, we provide products that help our customers enhance performance, improve efficiency, and maintain product consistency.
                    </p>
                    <p>
                        As Tanzania's industrial sector continues to expand, Newport Minerals remains focused on delivering reliable mineral solutions, building long-term customer partnerships, and supporting the development of local manufacturing through quality, innovation, and dependable service.
                    </p>
                </div>
                <div class="mt-6 grid grid-cols-3 gap-4">
                    <div class="rounded-xl border border-zinc-200 bg-zinc-50 p-4 text-center">
                        <div class="text-[24px] font-bold text-blue-600">Tanga</div>
                        <div class="mt-1 text-[11px] uppercase tracking-wide text-zinc-500">Headquarters</div>
                    </div>
                    <div class="rounded-xl border border-zinc-200 bg-zinc-50 p-4 text-center">
                        <div class="text-[24px] font-bold text-blue-600">TZ</div>
                        <div class="mt-1 text-[11px] uppercase tracking-wide text-zinc-500">100% Tanzanian</div>
                    </div>
                    <div class="rounded-xl border border-zinc-200 bg-zinc-50 p-4 text-center">
                        <div class="text-[24px] font-bold text-blue-600">8+</div>
                        <div class="mt-1 text-[11px] uppercase tracking-wide text-zinc-500">Industries Served</div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <img src="https://images.pexels.com/photos/17146231/pexels-photo-17146231.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Mineral processing" class="h-56 w-full rounded-2xl object-cover">
                <img src="https://images.pexels.com/photos/11589239/pexels-photo-11589239.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Quality control lab" class="h-56 w-full rounded-2xl object-cover mt-8">
                <img src="https://images.pexels.com/photos/4487363/pexels-photo-4487363.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Industrial facility" class="h-56 w-full rounded-2xl object-cover -mt-8">
                <img src="https://images.pexels.com/photos/37533379/pexels-photo-37533379.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Minerals" class="h-56 w-full rounded-2xl object-cover">
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="border-y border-zinc-100 bg-gradient-to-b from-zinc-50 to-white">
        <div class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
            <div class="text-center mb-10">
                <span class="text-[12px] font-semibold uppercase tracking-wider text-blue-600">Our Direction</span>
                <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title text-zinc-900">Vision & Mission</h2>
                <p class="mt-2 text-[14px] text-zinc-500 max-w-xl mx-auto">Guiding principles that drive every decision we make.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="rounded-2xl border border-blue-200 bg-gradient-to-br from-blue-50 to-white p-8 relative overflow-hidden group hover:shadow-lg transition-shadow">
                    <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-blue-100/50 group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white">
                            <i data-lucide="eye" class="h-6 w-6"></i>
                        </div>
                        <h3 class="mt-4 text-[20px] font-bold font-title text-zinc-900">Our Vision</h3>
                        <p class="mt-3 text-[14px] leading-relaxed text-zinc-600">
                            To become <strong>East Africa's most trusted industrial minerals processing company</strong>, recognized for quality, reliability, and excellence in serving the region's growing industries.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-blue-100 px-3 py-1 text-[11px] font-medium text-blue-700">East Africa Focus</span>
                            <span class="rounded-full bg-blue-100 px-3 py-1 text-[11px] font-medium text-blue-700">Industry Leader</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-white p-8 relative overflow-hidden group hover:shadow-lg transition-shadow">
                    <div class="absolute -right-6 -top-6 h-24 w-24 rounded-full bg-emerald-100/50 group-hover:scale-150 transition-transform duration-500"></div>
                    <div class="relative">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white">
                            <i data-lucide="target" class="h-6 w-6"></i>
                        </div>
                        <h3 class="mt-4 text-[20px] font-bold font-title text-zinc-900">Our Mission</h3>
                        <p class="mt-3 text-[14px] leading-relaxed text-zinc-600">
                            To process and deliver <strong>high-quality industrial mineral products</strong> that empower manufacturers and industries to achieve superior performance, sustainable growth, and long-term success.
                        </p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-[11px] font-medium text-emerald-700">Manufacturing Support</span>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-[11px] font-medium text-emerald-700">Sustainable Growth</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
        <div class="text-center mb-10">
            <span class="text-[12px] font-semibold uppercase tracking-wider text-blue-600">Our Reach</span>
            <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title text-zinc-900">Industries We Serve</h2>
            <p class="mt-2 text-[14px] text-zinc-500 max-w-xl mx-auto">Delivering specialized mineral solutions across Tanzania's growing industrial landscape.</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="paint-bucket" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Paint & Coatings</h3>
                <p class="mt-1 text-[12px] text-zinc-500">High-purity fillers & extenders</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="recycle" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Plastics</h3>
                <p class="mt-1 text-[12px] text-zinc-500">Functional mineral additives</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="wine" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Glass Manufacturing</h3>
                <p class="mt-1 text-[12px] text-zinc-500">Silica & flux minerals</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="sprout" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Agriculture</h3>
                <p class="mt-1 text-[12px] text-zinc-500">Soil conditioning minerals</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="cow" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Animal Feed</h3>
                <p class="mt-1 text-[12px] text-zinc-500">Calcium & mineral supplements</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="building-2" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Construction</h3>
                <p class="mt-1 text-[12px] text-zinc-500">Aggregates & fillers</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="pickaxe" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Mining</h3>
                <p class="mt-1 text-[12px] text-zinc-500">Process minerals & reagents</p>
            </div>
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-md hover:border-blue-200 transition-all text-center">
                <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i data-lucide="factory" class="h-6 w-6"></i>
                </div>
                <h3 class="mt-3 text-[14px] font-semibold text-zinc-900">Industrial</h3>
                <p class="mt-1 text-[12px] text-zinc-500">General manufacturing</p>
            </div>
        </div>
    </section>

    <!-- Products Specialization -->
    <section class="border-y border-zinc-100 bg-zinc-50">
        <div class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-[12px] font-semibold uppercase tracking-wider text-blue-600">Our Specialization</span>
                    <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title text-zinc-900">Expert Mineral Processing</h2>
                    <p class="mt-4 text-[14px] leading-relaxed text-zinc-600">
                        We process a comprehensive range of industrial minerals using advanced grinding, classification, and quality control technologies. Our manufacturing facility in Tanga is equipped to deliver consistent, high-purity mineral products tailored to your specifications.
                    </p>
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div class="rounded-xl border border-zinc-200 bg-white p-4 flex items-center gap-3">
                            <i data-lucide="diamond" class="h-5 w-5 text-blue-600"></i>
                            <span class="text-[13px] font-medium">Dolomite</span>
                        </div>
                        <div class="rounded-xl border border-zinc-200 bg-white p-4 flex items-center gap-3">
                            <i data-lucide="gem" class="h-5 w-5 text-blue-600"></i>
                            <span class="text-[13px] font-medium">Calcite</span>
                        </div>
                        <div class="rounded-xl border border-zinc-200 bg-white p-4 flex items-center gap-3">
                            <i data-lucide="mountain" class="h-5 w-5 text-blue-600"></i>
                            <span class="text-[13px] font-medium">Limestone</span>
                        </div>
                        <div class="rounded-xl border border-zinc-200 bg-white p-4 flex items-center gap-3">
                            <i data-lucide="rocket" class="h-5 w-5 text-blue-600"></i>
                            <span class="text-[13px] font-medium">Other Minerals</span>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden border border-zinc-200">
                    <img src="https://images.pexels.com/photos/11589239/pexels-photo-11589239.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Mineral processing" class="h-80 w-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section id="values" class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
        <div class="text-center mb-10">
            <span class="text-[12px] font-semibold uppercase tracking-wider text-blue-600">What We Stand For</span>
            <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title text-zinc-900">Our Core Values</h2>
            <p class="mt-2 text-[14px] text-zinc-500 max-w-xl mx-auto">Eight guiding principles that define our culture, drive our decisions, and shape our relationships.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Value 1: Quality Excellence -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">1</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Quality Excellence</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We are committed to maintaining the highest standards in mineral processing, ensuring consistency, reliability, and customer satisfaction in every product we deliver.
                </p>
            </div>
            <!-- Value 2: Integrity -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-100 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">2</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Integrity</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We conduct our business with honesty, professionalism, transparency, and accountability in all our relationships.
                </p>
            </div>
            <!-- Value 3: Customer Focus -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-orange-100 text-orange-600 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">3</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Customer Focus</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We succeed when our customers succeed. We strive to understand their needs and provide solutions that create lasting value.
                </p>
            </div>
            <!-- Value 4: Reliability -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-purple-100 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">4</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Reliability</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We honour our commitments through dependable supply, consistent product quality, and responsive service.
                </p>
            </div>
            <!-- Value 5: Innovation -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-cyan-100 text-cyan-600 group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">5</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Innovation</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We continuously improve our processes, technologies, and products to meet the evolving demands of industry.
                </p>
            </div>
            <!-- Value 6: Safety -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-red-100 text-red-600 group-hover:bg-red-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">6</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Safety</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We prioritize the health and safety of our employees, contractors, visitors, and communities in every aspect of our operations.
                </p>
            </div>
            <!-- Value 7: Operational Excellence -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-amber-100 text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">7</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Operational Excellence</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We pursue efficiency, discipline, and continuous improvement to achieve superior performance across our business.
                </p>
            </div>
            <!-- Value 8: Teamwork -->
            <div class="group rounded-2xl border border-zinc-200 bg-white p-6 hover:shadow-lg hover:border-blue-300 transition-all">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-100 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                    <span class="text-[16px] font-bold">8</span>
                </div>
                <h3 class="mt-4 text-[15px] font-semibold text-zinc-900 font-title">Teamwork</h3>
                <p class="mt-2 text-[13px] leading-relaxed text-zinc-600">
                    We foster collaboration, respect, and shared responsibility to achieve common goals and drive sustainable success.
                </p>
            </div>
        </div>
    </section>

    <!-- Quality Commitment -->
    <section class="border-y border-zinc-100 bg-zinc-900 text-white">
        <div class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-[12px] font-semibold uppercase tracking-wider text-orange-400">Our Commitment</span>
                    <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title">Quality & Operational Excellence</h2>
                    <p class="mt-4 text-[14px] leading-relaxed text-zinc-300">
                        Our commitment to quality is embedded in every stage of our operation—from raw material selection through processing to final delivery. We employ rigorous quality control protocols to ensure every shipment meets or exceeds customer expectations.
                    </p>
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="h-5 w-5 text-green-400 mt-0.5"></i>
                            <div>
                                <h4 class="text-[13px] font-semibold text-white">Advanced Processing</h4>
                                <p class="text-[12px] text-zinc-400">Modern grinding & classification technology</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="h-5 w-5 text-green-400 mt-0.5"></i>
                            <div>
                                <h4 class="text-[13px] font-semibold text-white">Strict QC Standards</h4>
                                <p class="text-[12px] text-zinc-400">Laboratory testing & batch analysis</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="h-5 w-5 text-green-400 mt-0.5"></i>
                            <div>
                                <h4 class="text-[13px] font-semibold text-white">Consistent Supply</h4>
                                <p class="text-[12px] text-zinc-400">Reliable delivery & inventory management</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="check-circle" class="h-5 w-5 text-green-400 mt-0.5"></i>
                            <div>
                                <h4 class="text-[13px] font-semibold text-white">Customer Support</h4>
                                <p class="text-[12px] text-zinc-400">Technical guidance & responsive service</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl border border-white/10 bg-white/5 p-6">
                    <h3 class="text-[16px] font-semibold text-white">Our Quality Promise</h3>
                    <div class="mt-4 space-y-3 text-[13px] text-zinc-300">
                        <div class="flex items-start gap-3">
                            <i data-lucide="shield-check" class="h-4 w-4 text-blue-400 mt-0.5"></i>
                            <p>Raw material inspection & quarry sampling before processing</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="shield-check" class="h-4 w-4 text-blue-400 mt-0.5"></i>
                            <p>In-process quality monitoring throughout production</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="shield-check" class="h-4 w-4 text-blue-400 mt-0.5"></i>
                            <p>Finished product testing for chemical & physical properties</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="shield-check" class="h-4 w-4 text-blue-400 mt-0.5"></i>
                            <p>Certificates of Analysis (COA) provided with every shipment</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <i data-lucide="shield-check" class="h-4 w-4 text-blue-400 mt-0.5"></i>
                            <p>Continuous improvement through customer feedback & R&D</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Timeline / Journey -->
    <section class="mx-auto max-w-[1200px] px-4 py-16 lg:py-20">
        <div class="text-center mb-10">
            <span class="text-[12px] font-semibold uppercase tracking-wider text-blue-600">Our Journey</span>
            <h2 class="mt-2 text-[28px] font-bold tracking-tight font-title text-zinc-900">Building Tanzania's Industrial Future</h2>
            <p class="mt-2 text-[14px] text-zinc-500 max-w-xl mx-auto">A timeline of our commitment to quality, growth, and industrial development.</p>
        </div>
        <div class="grid grid-cols-4 gap-4 max-w-4xl mx-auto">
            <div class="timeline-dot relative text-center">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-white text-[12px] font-bold">1</div>
                <h4 class="mt-3 text-[13px] font-semibold text-zinc-900">Founded</h4>
                <p class="mt-1 text-[11px] text-zinc-500">Established in Tanga, Tanzania with a vision to serve local industries</p>
            </div>
            <div class="timeline-dot relative text-center">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-white text-[12px] font-bold">2</div>
                <h4 class="mt-3 text-[13px] font-semibold text-zinc-900">Processing Facility</h4>
                <p class="mt-1 text-[11px] text-zinc-500">Commissioned advanced mineral processing plant</p>
            </div>
            <div class="timeline-dot relative text-center">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 text-white text-[12px] font-bold">3</div>
                <h4 class="mt-3 text-[13px] font-semibold text-zinc-900">Market Growth</h4>
                <p class="mt-1 text-[11px] text-zinc-500">Expanded to serve 8+ industries across Tanzania</p>
            </div>
            <div class="timeline-dot relative text-center">
                <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-emerald-600 text-white text-[12px] font-bold">4</div>
                <h4 class="mt-3 text-[13px] font-semibold text-zinc-900">Future Vision</h4>
                <p class="mt-1 text-[11px] text-zinc-500">Scaling to become East Africa's most trusted processor</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="border-t border-zinc-100 bg-gradient-to-b from-zinc-50 to-white">
        <div class="mx-auto max-w-[1200px] px-4 py-16 text-center">
            <h2 class="text-[24px] font-bold tracking-tight font-title text-zinc-900">Partner with Newport Minerals</h2>
            <p class="mt-3 text-[14px] text-zinc-600 max-w-lg mx-auto">
                Let us provide the consistent, high-quality mineral products your business needs to thrive.
            </p>
            <div class="mt-6 flex flex-wrap justify-center gap-3">
                <a href="#" class="inline-flex h-11 items-center gap-2 rounded-full bg-blue-600 px-6 text-[13px] font-semibold text-white hover:bg-blue-700">
                    Request a Quote <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
                <a href="#" class="inline-flex h-11 items-center gap-2 rounded-full border border-zinc-300 bg-white px-6 text-[13px] font-semibold text-zinc-700 hover:bg-zinc-50">
                    Contact Us <i data-lucide="phone" class="h-4 w-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-zinc-950 text-zinc-300">
        <div class="mx-auto max-w-[1200px] px-4 py-14">
            <div class="grid md:grid-cols-4 gap-10">
                <div>
                    <div class="flex items-center gap-2">
                        <div class="h-7 w-7 rounded-md bg-gradient-to-br from-blue-600 to-emerald-500 flex items-center justify-center">
                            <span class="text-white font-bold text-[12px]">N</span>
                        </div>
                        <span class="font-semibold text-white text-[14px]">NEWPORT MINERALS</span>
                    </div>
                    <p class="mt-3 text-[12px] leading-relaxed text-zinc-400">
                        Tanzanian industrial minerals processing company based in Tanga, delivering quality mineral products to growing industries.
                    </p>
                </div>
                <div>
                    <h4 class="text-[12px] font-semibold text-white uppercase tracking-wider">Products</h4>
                    <ul class="mt-3 space-y-2 text-[13px]">
                        <li><a href="#" class="hover:text-white">Dolomite</a></li>
                        <li><a href="#" class="hover:text-white">Calcite</a></li>
                        <li><a href="#" class="hover:text-white">Limestone</a></li>
                        <li><a href="#" class="hover:text-white">Industrial Minerals</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[12px] font-semibold text-white uppercase tracking-wider">Company</h4>
                    <ul class="mt-3 space-y-2 text-[13px]">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Our Values</a></li>
                        <li><a href="#" class="hover:text-white">Industries</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[12px] font-semibold text-white uppercase tracking-wider">Contact</h4>
                    <ul class="mt-3 space-y-2 text-[13px]">
                        <li class="flex items-center gap-2"><i data-lucide="map-pin" class="h-3.5 w-3.5"></i> Tanga, Tanzania</li>
                        <li class="flex items-center gap-2"><i data-lucide="phone" class="h-3.5 w-3.5"></i> +255 712 345 678</li>
                        <li class="flex items-center gap-2"><i data-lucide="mail" class="h-3.5 w-3.5"></i> info@newportminerals.co.tz</li>
                    </ul>
                </div>
            </div>
            <div class="mt-10 flex flex-col md:flex-row items-center justify-between gap-4 border-t border-white/10 pt-6 text-[12px] text-zinc-500">
                <div>© 2026 Newport Minerals Ltd. All rights reserved.</div>
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-zinc-300">LinkedIn</a>
                    <a href="#" class="hover:text-zinc-300">Facebook</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>