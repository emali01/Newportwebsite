<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Newport Minerals| Premium Dolomite, Calcite & Decorative Finishes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', system-ui, -apple-system, sans-serif; background-color: #fafafa; }
        .font-title { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
        .modal-tab.active { color: #1d4ed8; border-bottom: 2px solid #1d4ed8; font-weight: 600; }
        .modal-tab-panel { display: none; }
        .modal-tab-panel.active { display: block; }
        .thumbnail-active { border-color: #2563eb !important; opacity: 1 !important; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1)); }
        .zoom-container { overflow: hidden; cursor: zoom-in; background: #f8fafc; }
        .zoom-container img { transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
        .zoom-container:hover img { transform: scale(1.6); }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fadeIn { animation: fadeIn 0.35s ease-out; }
        img { image-rendering: auto; }
        .product-card {
            transition: all 0.25s ease;
            background: white;
            border: 1px solid #f0f0f0;
        }
        .product-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.05), 0 10px 10px -5px rgba(0,0,0,0.02);
            border-color: #e2e8f0;
        }
        .decorative-card-btn {
            background: #18181b;
            color: white;
            font-weight: 500;
            transition: all 0.2s ease;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }
        .decorative-card-btn:hover {
            background: #27272a;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        /* Custom scrollbar hider for horizontal ticker track */
        .scrollbar-none::-webkit-scrollbar { display: none; }
        .scrollbar-none { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="min-h-screen bg-white text-zinc-800 antialiased">

    <div class="hidden md:block border-b border-zinc-100 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="mx-auto max-w-[1200px] px-4 py-2 flex items-center justify-between text-[12px]">
            <div class="flex items-center gap-6">
                <a href="#home" class="flex items-center gap-2">
                    <img src="/images/logo.png" alt="Newport" class="h-8 w-auto" onerror="this.src='https://placehold.co/100x40?text=LOGO'">
                    <span class="font-title font-semibold tracking-tight text-[13px]">Newport Minerals Ltd</span>
                </a>
                <div class="hidden lg:flex items-center gap-5 text-zinc-600">
                    <a href="tel:+255712345678" class="flex items-center gap-1.5 hover:text-blue-700 transition-colors">
                        <i data-lucide="phone" class="h-3.5 w-3.5"></i> +255 712 345 678
                    </a>
                    <a href="mailto:sales@Newport.com" class="flex items-center gap-1.5 hover:text-blue-700 transition-colors">
                        <i data-lucide="mail" class="h-3.5 w-3.5"></i> sales@Newport.com
                    </a>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="relative">
                    <i data-lucide="search" class="absolute left-2.5 top-1/2 -translate-y-1/2 h-3.5 w-3.5 text-zinc-400"></i>
                    <input type="text" id="global-search-desktop" placeholder="Search products..." class="h-9 w-[220px] rounded-full border border-zinc-200 bg-white pl-8 pr-3 text-[12px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all">
                </div>
                <select id="lang-select" class="h-9 rounded-full border border-zinc-200 bg-white px-2.5 text-[12px] outline-none focus:border-blue-500">
                    <option>EN</option><option>SW</option><option>FR</option><option>AR</option>
                </select>
                <a href="https://wa.me/255712345678" target="_blank" class="inline-flex h-9 items-center gap-1.5 rounded-full bg-[#25D366] px-4 text-[12px] font-medium text-white hover:opacity-90 transition shadow-sm">
                    <i data-lucide="message-circle" class="h-3.5 w-3.5"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>

    <header id="main-header" class="sticky top-0 z-40 border-b bg-white/95 backdrop-blur-md border-zinc-100 transition-all duration-300 shadow-sm">
        <div class="mx-auto max-w-[1200px] px-4">
            <div class="flex h-14 items-center justify-between">
                <a href="#home" class="md:hidden flex items-center gap-2">
                    <img src="/images/logo.png" alt="" class="h-8 w-auto" onerror="this.src='https://placehold.co/100x40?text=LOGO'">
                    <span class="font-semibold text-[15px]">Newport</span>
                </a>
                <nav class="hidden md:flex items-center gap-6 text-[13px] font-medium text-zinc-700">
                    <a href="#home" class="hover:text-blue-700 transition-colors">Home</a>
                    <a href="about.html" class="hover:text-blue-700 transition-colors">About</a>
                    <a href="#products" class="hover:text-blue-700 transition-colors">Products</a>
                    <a href="#industries" class="hover:text-blue-700 transition-colors">Industries</a>
                    <a href="#technical" class="hover:text-blue-700 transition-colors">Technical</a>
                    <a href="#downloads" class="hover:text-blue-700 transition-colors">Downloads</a>
                    <a href="#projects" class="hover:text-blue-700 transition-colors">Projects</a>
                    <a href="#blog" class="hover:text-blue-700 transition-colors">Blog</a>
                    <a href="#careers" class="hover:text-blue-700 transition-colors">Careers</a>
                    <a href="#contact" class="hover:text-blue-700 transition-colors">Contact</a>
                </nav>
                <div class="flex items-center gap-2">
                    <a href="#quote" class="hidden sm:inline-flex h-10 items-center rounded-full bg-blue-600 px-5 text-[13px] font-semibold text-white hover:bg-blue-700 shadow-md transition">Request Quote</a>
                    <button id="menu-toggle" class="md:hidden inline-flex h-10 w-10 items-center justify-center rounded-lg border border-zinc-200 bg-white">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden border-t bg-white">
            <div class="px-4 py-3 space-y-3">
                <div class="relative">
                    <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-zinc-400"></i>
                    <input type="text" id="global-search-mobile" placeholder="Search..." class="h-10 w-full rounded-lg border border-zinc-200 pl-9 pr-3 text-[14px] outline-none focus:border-blue-500">
                </div>
                <div class="grid grid-cols-2 gap-2 text-[14px]">
                    <a href="#home" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Home</a>
                    <a href="about.html" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">About</a>
                    <a href="#products" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Products</a>
                    <a href="#industries" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Industries</a>
                    <a href="#technical" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Technical</a>
                    <a href="#downloads" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Downloads</a>
                    <a href="#projects" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Projects</a>
                    <a href="#blog" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Blog</a>
                    <a href="#careers" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Careers</a>
                    <a href="#contact" class="mobile-nav-link rounded-lg border border-zinc-200 px-3 py-2 hover:bg-zinc-50">Contact</a>
                </div>
                <a href="https://wa.me/255712345678" class="flex h-10 items-center justify-center gap-2 rounded-lg bg-[#25D366] text-white font-medium shadow">
                    <i data-lucide="message-circle" class="h-4 w-4"></i> WhatsApp Us
                </a>
            </div>
        </div>
    </header>

    <section id="home" class="relative isolate">
        <div class="absolute inset-0 -z-10">
            <img src="https://images.pexels.com/photos/37845016/pexels-photo-37845016.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=1200&w=2000" alt="" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-zinc-900/90 via-zinc-900/75 to-zinc-900/45"></div>
        </div>
        <div class="mx-auto max-w-[1200px] px-4 py-24 lg:py-32">
            <div class="max-w-2xl text-white">
                <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-[12px] font-medium backdrop-blur-md">
                    <span class="h-2 w-2 rounded-full bg-orange-400"></span> ISO 9001:2015 Certified Manufacturer
                </div>
                <h1 class="mt-6 text-[36px] lg:text-[48px] font-bold leading-[1.1] tracking-tight font-title">Dolomite, Calcite & Decorative Finishing Solutions</h1>
                <p class="mt-4 text-[16px] leading-relaxed text-zinc-200 max-w-xl">Supplying high-quality mineral products and decorative construction finishes for local and international markets.</p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#products" class="inline-flex h-12 items-center gap-2 rounded-full bg-orange-500 px-7 text-[14px] font-semibold text-white hover:bg-orange-600 shadow-lg transition">Explore Products <i data-lucide="arrow-up-right" class="h-4 w-4"></i></a>
                    <a href="#quote" class="inline-flex h-12 items-center gap-2 rounded-full border border-white/30 bg-white/10 px-7 text-[14px] font-semibold text-white backdrop-blur-md hover:bg-white/20 transition">Request Quote</a>
                </div>
                
            </div>
        </div>
    </section>

    <section id="about" class="border-y border-zinc-100 bg-zinc-50/80">
        <div class="mx-auto max-w-[1200px] px-4 py-16">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-[28px] font-bold tracking-tight font-title">Industrial Mineral Excellence Since 2007</h2>
                    <p class="mt-4 text-[15px] leading-relaxed text-zinc-600">Newport Mineralsis a leading manufacturer and exporter of dolomite, calcite and decorative finishing materials. Our integrated mining, processing and quality control facilities ensure consistent product performance for paint, plastics, construction and agriculture industries worldwide.</p>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="rounded-2xl border border-blue-200 bg-blue-50/60 p-6"><div class="flex items-center gap-2 text-blue-700"><i data-lucide="eye" class="h-5 w-5"></i><h3 class="text-[16px] font-bold font-title">Our Vision</h3></div><p class="mt-2 text-[13px] leading-relaxed text-zinc-700">To be the most trusted industrial mineral partner in Africa and the Middle East, setting the global benchmark for purity, consistency, and sustainable manufacturing by 2035.</p></div>
                        <div class="rounded-2xl border border-orange-200 bg-orange-50/60 p-6"><div class="flex items-center gap-2 text-orange-700"><i data-lucide="target" class="h-5 w-5"></i><h3 class="text-[16px] font-bold font-title">Our Mission</h3></div><p class="mt-2 text-[13px] leading-relaxed text-zinc-700">To empower the paint, plastics, and construction industries by delivering precisely engineered mineral solutions, backed by technical expertise, uncompromising quality control, and reliable supply chain logistics.</p></div>
                    </div>
                    <div class="mt-6 flex flex-wrap gap-2"><span class="rounded-full bg-white border border-zinc-200 px-4 py-1.5 text-[12px] font-medium text-zinc-600 shadow-sm">Integrity</span><span class="rounded-full bg-white border border-zinc-200 px-4 py-1.5 text-[12px] font-medium text-zinc-600 shadow-sm">Innovation</span><span class="rounded-full bg-white border border-zinc-200 px-4 py-1.5 text-[12px] font-medium text-zinc-600 shadow-sm">Sustainability</span><span class="rounded-full bg-white border border-zinc-200 px-4 py-1.5 text-[12px] font-medium text-zinc-600 shadow-sm">Customer Centricity</span></div>
                    <div id="stats-counter-grid" class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-5">
                        <div class="rounded-2xl border border-zinc-200 bg-white p-5 text-center shadow-sm"><div class="text-[32px] font-bold text-blue-700"><span id="count-years">0</span>+</div><div class="mt-1 text-[12px] uppercase tracking-wide text-zinc-500 font-medium">Years Experience</div></div>
                        <div class="rounded-2xl border border-zinc-200 bg-white p-5 text-center shadow-sm"><div class="text-[32px] font-bold text-blue-700"><span id="count-capacity">0</span>+</div><div class="mt-1 text-[12px] uppercase tracking-wide text-zinc-500 font-medium">Production Capacity (K MT)</div></div>
                        <div class="rounded-2xl border border-zinc-200 bg-white p-5 text-center shadow-sm"><div class="text-[32px] font-bold text-blue-700"><span id="count-countries">0</span>+</div><div class="mt-1 text-[12px] uppercase tracking-wide text-zinc-500 font-medium">Countries Served</div></div>
                        <div class="rounded-2xl border border-zinc-200 bg-white p-5 text-center shadow-sm"><div class="text-[32px] font-bold text-blue-700"><span id="count-categories">0</span>+</div><div class="mt-1 text-[12px] uppercase tracking-wide text-zinc-500 font-medium">Product Categories</div></div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.pexels.com/photos/37533379/pexels-photo-37533379.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="" class="h-56 w-full rounded-2xl object-cover shadow-lg">
                    <img src="https://images.pexels.com/photos/17146231/pexels-photo-17146231.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="" class="h-56 w-full rounded-2xl object-cover shadow-lg">
                    <img src="https://images.pexels.com/photos/11589239/pexels-photo-11589239.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="" class="h-56 w-full rounded-2xl object-cover shadow-lg">
                    <img src="https://images.pexels.com/photos/4487363/pexels-photo-4487363.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="" class="h-56 w-full rounded-2xl object-cover shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="mx-auto max-w-[1200px] px-4 py-20">
        <div class="flex items-end justify-between gap-4">
            <div><h2 class="text-[28px] font-bold tracking-tight font-title">PRODUCTS</h2><p class="mt-2 text-[15px] text-zinc-600 max-w-xl">Engineered minerals and decorative finishes manufactured to international standards.</p></div>
            <a href="#downloads" class="hidden sm:inline-flex items-center gap-1.5 text-[14px] font-medium text-blue-700 hover:underline">Download Catalog <i data-lucide="download" class="h-4 w-4"></i></a>
        </div>
        <div class="mt-12"><h3 class="text-[18px] font-semibold text-zinc-900">Mineral Products</h3><div id="mineral-products-grid" class="mt-5 grid sm:grid-cols-2 lg:grid-cols-3 gap-6"></div></div>
        <div class="mt-16"><h3 class="text-[18px] font-semibold text-zinc-900">Decorative Finishes</h3><div id="decorative-products-grid" class="mt-5 grid sm:grid-cols-2 lg:grid-cols-3 gap-6"></div></div>
    </section>

    <section id="industries" class="bg-zinc-900 text-white">
        <div class="mx-auto max-w-[1200px] px-4 py-20">
            <h2 class="text-[28px] font-bold tracking-tight font-title">Industries Served</h2>
            <p class="mt-2 text-[15px] text-zinc-300 max-w-xl">Trusted by manufacturers and contractors across diverse sectors.</p>
            <div class="mt-10 grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-5">
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="paint-bucket" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Paint Industry</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="building-2" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Construction</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="recycle" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Plastics</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="layers" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Ceramics</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="wrench" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Rubber</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="sprout" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Agriculture</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="beaker" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Glass</div></div>
                <div class="group rounded-2xl border border-white/10 bg-white/[0.05] p-5 text-center hover:bg-white/[0.1] transition backdrop-blur-sm"><i data-lucide="flask-conical" class="mx-auto h-7 w-7 text-orange-400"></i><div class="mt-3 text-[13px] font-medium">Chemical</div></div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-[1200px] px-4 py-20">
        <h2 class="text-[28px] font-bold tracking-tight font-title">Why Choose Newport</h2>
        <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="shield-check" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Consistent Quality</h3><p class="mt-2 text-[13px] text-zinc-600">ISO controlled processes & lab testing</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="factory" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Advanced Manufacturing</h3><p class="mt-2 text-[13px] text-zinc-600">Modern grinding & classification</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="flask-conical" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">QC Laboratory</h3><p class="mt-2 text-[13px] text-zinc-600">In-house testing & analysis</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="truck" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Reliable Supply Chain</h3><p class="mt-2 text-[13px] text-zinc-600">On-time delivery across regions</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="badge-check" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Competitive Pricing</h3><p class="mt-2 text-[13px] text-zinc-600">Direct from manufacturer</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="globe" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Export Capability</h3><p class="mt-2 text-[13px] text-zinc-600">Documentation & logistics support</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="wrench" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Technical Support</h3><p class="mt-2 text-[13px] text-zinc-600">Application guidance & trials</p></div>
            <div class="rounded-2xl border border-zinc-200 p-6 hover:shadow-lg transition-shadow bg-white"><i data-lucide="clock" class="h-6 w-6 text-blue-600"></i><h3 class="mt-4 text-[15px] font-semibold">Fast Delivery</h3><p class="mt-2 text-[13px] text-zinc-600">Strategic warehouse locations</p></div>
        </div>
    </section>

    <section class="border-y border-zinc-100 bg-zinc-50/80">
        <div class="mx-auto max-w-[1200px] px-4 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div><h2 class="text-[28px] font-bold tracking-tight font-title">Manufacturing Facility</h2><p class="mt-3 text-[15px] text-zinc-600">Integrated mining, grinding, classification, and packaging under one roof.</p><ul class="mt-8 space-y-4 text-[14px]"><li class="flex items-start gap-3"><i data-lucide="check" class="mt-0.5 h-5 w-5 text-green-600"></i><span>Jaw crushers & Raymond mills for fine grinding</span></li><li class="flex items-start gap-3"><i data-lucide="check" class="mt-0.5 h-5 w-5 text-green-600"></i><span>Air classifiers for precise particle size control</span></li><li class="flex items-start gap-3"><i data-lucide="check" class="mt-0.5 h-5 w-5 text-green-600"></i><span>Automated bagging lines with weight accuracy</span></li><li class="flex items-start gap-3"><i data-lucide="check" class="mt-0.5 h-5 w-5 text-green-600"></i><span>Dust collection & environmental compliance</span></li></ul></div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.pexels.com/photos/37533379/pexels-photo-37533379.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" class="rounded-2xl h-48 w-full object-cover shadow-lg" alt="">
                    <img src="https://images.pexels.com/photos/17146231/pexels-photo-17146231.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" class="rounded-2xl h-48 w-full object-cover shadow-lg" alt="">
                    <img src="https://images.pexels.com/photos/11589239/pexels-photo-11589239.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" class="rounded-2xl h-48 w-full object-cover col-span-2 shadow-lg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-[1200px] px-4 py-20">
        <div class="grid lg:grid-cols-2 gap-12">
            <div><h2 class="text-[28px] font-bold tracking-tight font-title">Quality Assurance</h2><p class="mt-3 text-[15px] text-zinc-600">Every batch tested for chemical, physical and performance parameters.</p><div class="mt-8 space-y-6"><div class="flex gap-4"><i data-lucide="shield-check" class="h-6 w-6 text-blue-600 mt-0.5"></i><div><div class="text-[15px] font-semibold">Raw Material Inspection</div><div class="text-[14px] text-zinc-600">Quarry sampling & XRF analysis</div></div></div><div class="flex gap-4"><i data-lucide="shield-check" class="h-6 w-6 text-blue-600 mt-0.5"></i><div><div class="text-[15px] font-semibold">Process Control</div><div class="text-[14px] text-zinc-600">Online particle size monitoring</div></div></div><div class="flex gap-4"><i data-lucide="shield-check" class="h-6 w-6 text-blue-600 mt-0.5"></i><div><div class="text-[15px] font-semibold">Finished Product Testing</div><div class="text-[14px] text-zinc-600">Whiteness, brightness, oil absorption</div></div></div></div></div>
            <div class="rounded-2xl border border-zinc-200 p-7 bg-white shadow-sm"><h3 class="text-[16px] font-semibold">Laboratory Capabilities</h3><div class="mt-5 grid grid-cols-2 gap-4 text-[13px]"><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">Whiteness Meter</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">Particle Size Analyzer</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">Moisture Analyzer</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">pH Meter</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">Bulk Density</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">Oil Absorption</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">XRF Spectrometer</div><div class="rounded-xl bg-zinc-50 px-4 py-3 font-medium">Sieve Analysis</div></div><img src="https://images.pexels.com/photos/11589239/pexels-photo-11589239.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="" class="mt-6 h-52 w-full rounded-2xl object-cover shadow-sm"></div>
        </div>
    </section>

    <section id="projects" class="bg-zinc-900 text-white overflow-hidden">
        <div class="mx-auto max-w-[1200px] px-4 py-20">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <h2 class="text-[28px] font-bold tracking-tight font-title">Decorative Finishes Showcase</h2>
                    <p class="mt-2 text-[15px] text-zinc-300">Grafiato, stone plaster and wall putty applications.</p>
                </div>
                <div id="gallery-filters" class="flex flex-wrap gap-2">
                    <button data-filter="All" class="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border bg-orange-500 border-orange-500 text-white shadow">All</button>
                    <button data-filter="Residential" class="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border border-white/20 hover:bg-white/10 transition">Residential</button>
                    <button data-filter="Commercial" class="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border border-white/20 hover:bg-white/10 transition">Commercial</button>
                    <button data-filter="Industrial" class="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border border-white/20 hover:bg-white/10 transition">Industrial</button>
                    <button data-filter="Interior" class="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border border-white/20 hover:bg-white/10 transition">Interior</button>
                    <button data-filter="Exterior" class="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border border-white/20 hover:bg-white/10 transition">Exterior</button>
                </div>
            </div>
            
            <div id="gallery-track" class="mt-10 flex gap-5 overflow-x-auto scrollbar-none py-2 select-none">
                
                <div class="gallery-item flex-shrink-0 w-[280px] sm:w-[320px] group overflow-hidden rounded-2xl shadow-md bg-zinc-800" data-category="Residential" data-type="Exterior">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.pexels.com/photos/3873846/pexels-photo-3873846.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Grafiato Linear - Residential" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-transparent"></div>
                        <div class="absolute bottom-0 p-5 whitespace-normal">
                            <div class="text-[15px] font-semibold text-white">Grafiato Linear - Residential</div>
                            <div class="text-[12px] text-zinc-300 mt-1">Residential • Exterior</div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item flex-shrink-0 w-[280px] sm:w-[320px] group overflow-hidden rounded-2xl shadow-md bg-zinc-800" data-category="Commercial" data-type="Exterior">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.pexels.com/photos/9756578/pexels-photo-9756578.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Stone Plaster - Commercial" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-transparent"></div>
                        <div class="absolute bottom-0 p-5 whitespace-normal">
                            <div class="text-[15px] font-semibold text-white">Stone Plaster - Commercial</div>
                            <div class="text-[12px] text-zinc-300 mt-1">Commercial • Exterior</div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item flex-shrink-0 w-[280px] sm:w-[320px] group overflow-hidden rounded-2xl shadow-md bg-zinc-800" data-category="Residential" data-type="Interior">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.pexels.com/photos/33991011/pexels-photo-33991011.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Wall Putty Smooth Finish" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-transparent"></div>
                        <div class="absolute bottom-0 p-5 whitespace-normal">
                            <div class="text-[15px] font-semibold text-white">Wall Putty Smooth Finish</div>
                            <div class="text-[12px] text-zinc-300 mt-1">Residential • Interior</div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item flex-shrink-0 w-[280px] sm:w-[320px] group overflow-hidden rounded-2xl shadow-md bg-zinc-800" data-category="Industrial" data-type="Interior">
                    <div class="relative aspect-[4/3]">
                        <img src="https://images.pexels.com/photos/10059336/pexels-photo-10059336.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200" alt="Grafiato Feature Wall" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-700 pointer-events-none">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/0 to-transparent"></div>
                        <div class="absolute bottom-0 p-5 whitespace-normal">
                            <div class="text-[15px] font-semibold text-white">Grafiato Feature Wall</div>
                            <div class="text-[12px] text-zinc-300 mt-1">Industrial • Interior</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="downloads" class="mx-auto max-w-[1200px] px-4 py-20">
        <h2 class="text-[28px] font-bold tracking-tight font-title">Technical Downloads Center</h2>
        <div id="downloads-grid" class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6"></div>
    </section>

    <section id="quote" class="border-y border-zinc-100 bg-zinc-50/80">
        <div class="mx-auto max-w-[1200px] px-4 py-20">
            <div class="grid lg:grid-cols-2 gap-12">
                <div><h2 class="text-[28px] font-bold tracking-tight font-title">Request a Quote</h2><p class="mt-3 text-[15px] text-zinc-600">Get competitive pricing and technical datasheets within 24 hours.</p><div class="mt-8 space-y-4 text-[14px]"><div class="flex items-center gap-3"><i data-lucide="phone" class="h-5 w-5 text-blue-600"></i> +255 712 345 678</div><div class="flex items-center gap-3"><i data-lucide="mail" class="h-5 w-5 text-blue-600"></i> sales@Newport.com</div><div class="flex items-center gap-3"><i data-lucide="map-pin" class="h-5 w-5 text-blue-600"></i> Plot 45, Industrial Area, Dar es Salaam, Tanzania</div></div></div>
                <form id="quote-form" class="rounded-2xl border border-zinc-200 bg-white p-7 shadow-sm">
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div><label class="text-[13px] font-medium text-zinc-700">Company Name</label><input required type="text" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition"></div>
                        <div><label class="text-[13px] font-medium text-zinc-700">Contact Person</label><input required type="text" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition"></div>
                        <div><label class="text-[13px] font-medium text-zinc-700">Country</label><input required type="text" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition"></div>
                        <div><label class="text-[13px] font-medium text-zinc-700">Phone</label><input required type="tel" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition"></div>
                        <div class="sm:col-span-2"><label class="text-[13px] font-medium text-zinc-700">Email</label><input required type="email" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition"></div>
                        <div><label class="text-[13px] font-medium text-zinc-700">Product</label><select id="quote-product-select" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 transition bg-white"><option value="">Select Product</option></select></div>
                        <div><label class="text-[13px] font-medium text-zinc-700">Quantity (MT)</label><input type="number" class="mt-1.5 h-11 w-full rounded-xl border border-zinc-300 px-4 text-[14px] outline-none focus:border-blue-500 transition"></div>
                        <div class="sm:col-span-2"><label class="text-[13px] font-medium text-zinc-700">Message</label><textarea rows="4" class="mt-1.5 w-full rounded-xl border border-zinc-300 px-4 py-3 text-[14px] outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition" placeholder="Packaging type, grade, delivery port..."></textarea></div>
                    </div>
                    <button type="submit" class="mt-6 h-12 w-full rounded-full bg-blue-600 text-white text-[14px] font-semibold hover:bg-blue-700 shadow-md transition">Submit Request</button>
                    <p class="mt-3 text-[12px] text-zinc-500 text-center">We respect your privacy. No spam.</p>
                </form>
            </div>
        </div>
    </section>

    <section id="blog" class="mx-auto max-w-[1200px] px-4 py-20">
    <h2 class="text-[28px] font-bold tracking-tight font-title">Resources & Insights</h2>
    <div class="mt-8 grid md:grid-cols-3 gap-6">
        <article class="rounded-2xl border border-zinc-200 overflow-hidden hover:shadow-lg transition bg-white">
            <div class="h-44 bg-gradient-to-br from-blue-100 to-orange-100 flex items-center justify-center text-blue-600"><i data-lucide="paint-bucket" class="h-12 w-12 opacity-40"></i></div>
            <div class="p-5">
                <span class="text-[11px] uppercase tracking-wide font-semibold text-blue-700">Technical</span>
                <h3 class="mt-2 text-[16px] font-semibold leading-snug">Choosing the Right Dolomite Mesh for Paints</h3>
                <a href="doloart.php" class="mt-3 inline-flex items-center gap-1 text-[13px] font-medium text-blue-700 hover:underline">Read Article <i data-lucide="chevron-right" class="h-4 w-4"></i></a>
            </div>
        </article>
        <article class="rounded-2xl border border-zinc-200 overflow-hidden hover:shadow-lg transition bg-white">
            <div class="h-44 bg-gradient-to-br from-orange-100 to-zinc-100 flex items-center justify-center text-orange-600"><i data-lucide="sun" class="h-12 w-12 opacity-40"></i></div>
            <div class="p-5">
                <span class="text-[11px] uppercase tracking-wide font-semibold text-blue-700">Application</span>
                <h3 class="mt-2 text-[16px] font-semibold leading-snug">Grafiato Application Guide for Tropical Climates</h3>
                <a href="grafart.php" class="mt-3 inline-flex items-center gap-1 text-[13px] font-medium text-blue-700 hover:underline">Read Article <i data-lucide="chevron-right" class="h-4 w-4"></i></a>
            </div>
        </article>
        <article class="rounded-2xl border border-zinc-200 overflow-hidden hover:shadow-lg transition bg-white">
            <div class="h-44 bg-gradient-to-br from-zinc-200 to-blue-50 flex items-center justify-center text-zinc-600"><i data-lucide="layers" class="h-12 w-12 opacity-40"></i></div>
            <div class="p-5">
                <span class="text-[11px] uppercase tracking-wide font-semibold text-blue-700">Industry</span>
                <h3 class="mt-2 text-[16px] font-semibold leading-snug">Calcite vs Dolomite in PVC Compounds</h3>
                <a href="calcart.php" class="mt-3 inline-flex items-center gap-1 text-[13px] font-medium text-blue-700 hover:underline">Read Article <i data-lucide="chevron-right" class="h-4 w-4"></i></a>
            </div>
        </article>
    </div>
</section>


    <section class="bg-zinc-50/80 border-y border-zinc-100">
        <div class="mx-auto max-w-[1200px] px-4 py-20">
            <h2 class="text-[28px] font-bold tracking-tight font-title">What Our Clients Say</h2>
            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="rounded-2xl border border-zinc-200 bg-white p-7 shadow-sm"><div class="flex gap-1 text-orange-500"><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i></div><p class="mt-4 text-[14px] leading-relaxed text-zinc-700">"Consistent dolomite powder quality has improved our paint opacity and reduced formulation costs. Reliable deliveries to Kenya."</p><div class="mt-5 text-[13px]"><div class="font-semibold">James Mwangi</div><div class="text-zinc-500">Procurement Manager, BuildTech Ltd</div></div></div>
                <div class="rounded-2xl border border-zinc-200 bg-white p-7 shadow-sm"><div class="flex gap-1 text-orange-500"><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i></div><p class="mt-4 text-[14px] leading-relaxed text-zinc-700">"Calcite 1250 mesh performs exceptionally in PVC compounds. Technical team is responsive and supportive."</p><div class="mt-5 text-[13px]"><div class="font-semibold">Priya Sharma</div><div class="text-zinc-500">Director, PolyMaster Industries</div></div></div>
                <div class="rounded-2xl border border-zinc-200 bg-white p-7 shadow-sm"><div class="flex gap-1 text-orange-500"><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i><i data-lucide="star" class="h-5 w-5 fill-current"></i></div><p class="mt-4 text-[14px] leading-relaxed text-zinc-700">"Export documentation and packaging are export-grade. Our customers love the grafiato finish durability."</p><div class="mt-5 text-[13px]"><div class="font-semibold">Ahmed Al Farsi</div><div class="text-zinc-500">Distributor, Oman</div></div></div>
            </div>
        </div>
    </section>

    <section id="contact" class="mx-auto max-w-[1200px] px-4 py-20">
        <div class="grid lg:grid-cols-2 gap-12">
            <div><h2 class="text-[28px] font-bold tracking-tight font-title">Get in Touch</h2><p class="mt-3 text-[15px] text-zinc-600">Head office and manufacturing plant visits by appointment.</p><div class="mt-8 space-y-5 text-[14px]"><div><div class="font-semibold">Factory Address</div><div class="text-zinc-600">Plot 45, Nyerere Industrial Area, P.O. Box 12345, Dar es Salaam, Tanzania</div></div><div><div class="font-semibold">Office Address</div><div class="text-zinc-600">Mikocheni, Dar es Salaam, Tanzania</div></div><div class="flex flex-wrap gap-3 pt-3"><a href="tel:+255712345678" class="inline-flex items-center gap-1.5 rounded-full border border-zinc-300 px-4 py-2 text-[13px] hover:bg-zinc-50 transition"><i data-lucide="phone" class="h-4 w-4"></i> Call</a><a href="mailto:sales@Newport.com" class="inline-flex items-center gap-1.5 rounded-full border border-zinc-300 px-4 py-2 text-[13px] hover:bg-zinc-50 transition"><i data-lucide="mail" class="h-4 w-4"></i> Email</a><a href="https://wa.me/255712345678" class="inline-flex items-center gap-1.5 rounded-full bg-[#25D366] px-4 py-2 text-[13px] font-medium text-white shadow"><i data-lucide="message-circle" class="h-4 w-4"></i> WhatsApp</a></div></div></div>
            <div class="rounded-2xl overflow-hidden border border-zinc-200 h-[340px] bg-zinc-100 shadow-sm"><iframe title="Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.278!2d39.199!3d-6.792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b0f!2sDar%20es%20Salaam!5e0!3m2!1sen!2stz!4v123456" class="h-full w-full border-0" loading="lazy"></iframe></div>
        </div>
    </section>

    <footer class="bg-zinc-950 text-zinc-300">
        <div class="mx-auto max-w-[1200px] px-4 py-16">
            <div class="grid md:grid-cols-5 gap-10">
                <div class="md:col-span-2"><div class="flex items-center gap-3"><img src="/images/logo.png" alt="" class="h-9 w-auto brightness-0 invert" onerror="this.src='https://placehold.co/100x40?text=LOGO'"><span class="font-semibold text-white text-lg">Newport Minerals Ltd</span></div><p class="mt-4 text-[14px] leading-relaxed text-zinc-400 max-w-sm">Manufacturer and exporter of premium dolomite, calcite and decorative finishes. ISO 9001:2015 certified. Serving Africa, Middle East & Asia.</p><div class="mt-5 flex gap-3"><span class="rounded-lg border border-white/15 px-3 py-1.5 text-[12px] font-medium">ISO</span><span class="rounded-lg border border-white/15 px-3 py-1.5 text-[12px] font-medium">SGS</span><span class="rounded-lg border border-white/15 px-3 py-1.5 text-[12px] font-medium">CE</span></div></div>
                <div><h4 class="text-[14px] font-semibold text-white">Products</h4><ul class="mt-4 space-y-3 text-[14px]"><li><a href="#" class="hover:text-white transition">Dolomite Powder</a></li><li><a href="#" class="hover:text-white transition">Dolomite Granules</a></li><li><a href="#" class="hover:text-white transition">Calcite Powder</a></li><li><a href="#" class="hover:text-white transition">Wall Putty</a></li><li><a href="#" class="hover:text-white transition">Grafiato</a></li><li><a href="#" class="hover:text-white transition">Stone Plaster</a></li></ul></div>
                <div><h4 class="text-[14px] font-semibold text-white">Quick Links</h4><ul class="mt-4 space-y-3 text-[14px]"><li><a href="#" class="hover:text-white transition">About Us</a></li><li><a href="#" class="hover:text-white transition">Industries</a></li><li><a href="#" class="hover:text-white transition">Technical Data</a></li><li><a href="#" class="hover:text-white transition">Downloads</a></li><li><a href="#" class="hover:text-white transition">Projects</a></li><li><a href="#" class="hover:text-white transition">Careers</a></li></ul></div>
                <div><h4 class="text-[14px] font-semibold text-white">Support</h4><ul class="mt-4 space-y-3 text-[14px]"><li><a href="#" class="hover:text-white transition">Contact</a></li><li><a href="#" class="hover:text-white transition">Request Quote</a></li><li><a href="#" class="hover:text-white transition">Distributor Portal</a></li><li><a href="#" class="hover:text-white transition">Customer Login</a></li><li><a href="#" class="hover:text-white transition">Privacy Policy</a></li><li><a href="#" class="hover:text-white transition">Terms</a></li></ul></div>
            </div>
            <div class="mt-12 flex flex-col md:flex-row items-center justify-between gap-5 border-t border-white/10 pt-8 text-[13px] text-zinc-500"><div>© 2026 Newport Minerals Ltd. All rights reserved.</div><div class="flex items-center gap-6"><a href="#" class="hover:text-zinc-300 transition">LinkedIn</a><a href="#" class="hover:text-zinc-300 transition">Facebook</a><a href="#" class="hover:text-zinc-300 transition">YouTube</a></div></div>
        </div>
    </footer>

    <div id="product-modal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-0 md:p-4">
        <div id="modal-overlay" class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
        <div class="relative w-full h-full md:h-auto md:max-h-[94vh] md:w-[96%] md:max-w-[1500px] overflow-hidden md:rounded-2xl bg-white shadow-2xl z-10 flex flex-col animate-fadeIn">
            
            <div class="flex items-center justify-between border-b border-zinc-200 px-4 md:px-6 py-4 flex-shrink-0">
                <div class="flex items-center gap-3">
                    <span id="modal-category-badge" class="inline-flex rounded-full px-3 py-1 text-[11px] font-semibold uppercase tracking-wide"></span>
                    <h3 id="modal-title" class="text-[18px] md:text-[22px] font-bold font-title text-zinc-900"></h3>
                </div>
                <div class="flex items-center gap-2">
                    <button id="modal-fullscreen-btn" class="hidden md:inline-flex h-9 w-9 items-center justify-center rounded-full hover:bg-zinc-100 text-zinc-500 transition" title="Fullscreen"><i data-lucide="maximize" class="h-5 w-5"></i></button>
                    <button id="modal-close" class="inline-flex h-9 w-9 items-center justify-center rounded-full hover:bg-zinc-100 text-zinc-500 transition"><i data-lucide="x" class="h-6 w-6"></i></button>
                </div>
            </div>

            <div class="flex-1 overflow-hidden flex flex-col lg:flex-row min-h-0">
                
                <div class="lg:w-[45%] flex-shrink-0 border-b lg:border-b-0 lg:border-r border-zinc-200 bg-zinc-50/80 p-5 flex flex-col">
                    <div class="relative flex-1 zoom-container rounded-2xl overflow-hidden bg-white border border-zinc-200 min-h-[280px] md:min-h-[400px] shadow-inner">
                        <img id="modal-main-img" src="" alt="" class="h-full w-full object-contain p-2">
                        <button id="gallery-prev" class="absolute left-4 top-1/2 -translate-y-1/2 h-10 w-10 rounded-full bg-white/95 shadow-md hover:bg-white flex items-center justify-center text-zinc-700 transition"><i data-lucide="chevron-left" class="h-5 w-5"></i></button>
                        <button id="gallery-next" class="absolute right-4 top-1/2 -translate-y-1/2 h-10 w-10 rounded-full bg-white/95 shadow-md hover:bg-white flex items-center justify-center text-zinc-700 transition"><i data-lucide="chevron-right" class="h-5 w-5"></i></button>
                        <button id="gallery-playpause" class="absolute bottom-4 right-4 h-9 w-9 rounded-full bg-white/95 shadow-md hover:bg-white flex items-center justify-center text-zinc-700 transition" title="Auto-scroll"><i data-lucide="pause" class="h-5 w-5"></i></button>
                        <div class="absolute bottom-4 left-4 rounded-full bg-black/60 backdrop-blur-md px-3 py-1 text-[12px] text-white font-medium"><span id="gallery-current">1</span> / <span id="gallery-total">5</span></div>
                    </div>
                    <div id="modal-thumbnails" class="mt-4 grid grid-cols-5 gap-3 flex-shrink-0"></div>
                </div>

                <div class="lg:w-[55%] flex flex-col overflow-hidden min-h-0">
                    <div class="flex border-b border-zinc-200 px-5 overflow-x-auto flex-shrink-0 sticky top-0 bg-white z-10">
                        <button class="modal-tab active px-4 py-4 text-[13px] md:text-[14px] font-medium text-zinc-600 border-b-2 border-transparent transition-colors whitespace-nowrap" data-tab="overview">Overview</button>
                        <button class="modal-tab px-4 py-4 text-[13px] md:text-[14px] font-medium text-zinc-600 border-b-2 border-transparent transition-colors whitespace-nowrap" data-tab="specs">Specifications</button>
                        <button class="modal-tab px-4 py-4 text-[13px] md:text-[14px] font-medium text-zinc-600 border-b-2 border-transparent transition-colors whitespace-nowrap" data-tab="applications">Applications</button>
                        <button class="modal-tab px-4 py-4 text-[13px] md:text-[14px] font-medium text-zinc-600 border-b-2 border-transparent transition-colors whitespace-nowrap" data-tab="packaging">Packaging</button>
                        <button class="modal-tab px-4 py-4 text-[13px] md:text-[14px] font-medium text-zinc-600 border-b-2 border-transparent transition-colors whitespace-nowrap" data-tab="order">How to Order</button>
                        <button class="modal-tab px-4 py-4 text-[13px] md:text-[14px] font-medium text-zinc-600 border-b-2 border-transparent transition-colors whitespace-nowrap" data-tab="downloads">Downloads</button>
                    </div>
                    <div class="flex-1 overflow-y-auto p-5 md:p-6 overscroll-contain">
                        <div id="tab-overview" class="modal-tab-panel active space-y-6">
                            <p id="modal-description" class="text-[14px] leading-relaxed text-zinc-600"></p>
                            <div><h4 class="text-[15px] font-semibold text-zinc-900">Available Grades</h4><ul id="modal-grades-list" class="mt-3 space-y-2"></ul></div>
                            <div><h4 class="text-[15px] font-semibold text-zinc-900">Key Properties</h4><div id="modal-key-props" class="mt-3 grid grid-cols-2 md:grid-cols-3 gap-4"></div></div>
                        </div>
                        <div id="tab-specs" class="modal-tab-panel"><h4 class="text-[16px] font-semibold">Technical Specifications</h4><p class="mt-1 text-[13px] text-zinc-500">Typical values. Custom specs available.</p><div id="modal-specs-container" class="mt-5 grid grid-cols-2 md:grid-cols-3 gap-4"></div></div>
                        <div id="tab-applications" class="modal-tab-panel space-y-6">
                            <div><h4 class="text-[16px] font-semibold">Industry Applications</h4><div id="modal-apps-container" class="mt-3 flex flex-wrap gap-2"></div></div>
                            <div id="modal-how-to-apply" class="rounded-2xl border border-emerald-200 bg-emerald-50/60 p-6 hidden">
                                <h4 class="text-[16px] font-semibold text-emerald-900 flex items-center gap-2"><i data-lucide="paintbrush" class="h-5 w-5"></i> How to Apply</h4>
                                <div id="modal-application-steps" class="mt-4 space-y-4"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-2xl border border-zinc-200 p-5"><h5 class="text-[14px] font-semibold">Recommended For</h5><p id="modal-recommended-for" class="mt-2 text-[13px] text-zinc-600"></p></div>
                                <div class="rounded-2xl border border-zinc-200 p-5"><h5 class="text-[14px] font-semibold">Processing Method</h5><p id="modal-processing-method" class="mt-2 text-[13px] text-zinc-600"></p></div>
                            </div>
                        </div>
                        <div id="tab-packaging" class="modal-tab-panel">
                            <div class="grid md:grid-cols-2 gap-8">
                                <div><h4 class="text-[16px] font-semibold">Packaging Options</h4><ul id="modal-packaging-list" class="mt-4 space-y-3"></ul></div>
                                <div><h4 class="text-[16px] font-semibold">Safety & Storage</h4><div class="mt-4 space-y-4 text-[14px] text-zinc-600"><div class="flex items-start gap-3"><i data-lucide="shield-alert" class="h-5 w-5 text-amber-600 mt-0.5"></i><p>Use appropriate dust mask during handling.</p></div><div class="flex items-start gap-3"><i data-lucide="warehouse" class="h-5 w-5 text-blue-600 mt-0.5"></i><p>Store in cool, dry place. Keep sealed.</p></div><div class="flex items-start gap-3"><i data-lucide="thermometer" class="h-5 w-5 text-blue-600 mt-0.5"></i><p>Storage: 5°C-40°C. Shelf life: 12 months.</p></div></div></div>
                            </div>
                        </div>
                        <div id="tab-order" class="modal-tab-panel">
                            <h4 class="text-[16px] font-semibold">How to Place an Order</h4>
                            <div class="mt-5 space-y-5">
                                <div class="flex gap-4"><div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-[13px] font-bold">1</div><div><h5 class="text-[14px] font-semibold">Submit Inquiry</h5><p class="text-[13px] text-zinc-600">Fill out our quote form with product, grade, quantity, and destination.</p></div></div>
                                <div class="flex gap-4"><div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-[13px] font-bold">2</div><div><h5 class="text-[14px] font-semibold">Receive Quotation</h5><p class="text-[13px] text-zinc-600">Our team responds within 24 hours with pricing and datasheets.</p></div></div>
                                <div class="flex gap-4"><div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-[13px] font-bold">3</div><div><h5 class="text-[14px] font-semibold">Confirm & Pay</h5><p class="text-[13px] text-zinc-600">Review proforma invoice, arrange payment via bank transfer or LC.</p></div></div>
                                <div class="flex gap-4"><div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-[13px] font-bold">4</div><div><h5 class="text-[14px] font-semibold">Production & Dispatch</h5><p class="text-[13px] text-zinc-600">Processed within 5-10 working days with full documentation.</p></div></div>
                            </div>
                            <button id="modal-quote-btn" class="mt-6 h-11 rounded-full bg-blue-600 px-7 text-[14px] font-semibold text-white hover:bg-blue-700 shadow-md transition">Request Quote Now</button>
                        </div>
                        <div id="tab-downloads" class="modal-tab-panel">
                            <h4 class="text-[16px] font-semibold">Download Resources</h4>
                            <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="rounded-2xl border border-zinc-200 p-5 hover:shadow-md cursor-pointer transition bg-white"><div class="flex items-center gap-4"><i data-lucide="file-text" class="h-6 w-6 text-red-600"></i><div><h5 class="text-[14px] font-semibold">TDS</h5><p class="text-[12px] text-zinc-500">PDF • 245 KB</p></div></div></div>
                                <div class="rounded-2xl border border-zinc-200 p-5 hover:shadow-md cursor-pointer transition bg-white"><div class="flex items-center gap-4"><i data-lucide="shield" class="h-6 w-6 text-amber-600"></i><div><h5 class="text-[14px] font-semibold">SDS</h5><p class="text-[12px] text-zinc-500">PDF • 180 KB</p></div></div></div>
                                <div class="rounded-2xl border border-zinc-200 p-5 hover:shadow-md cursor-pointer transition bg-white"><div class="flex items-center gap-4"><i data-lucide="award" class="h-6 w-6 text-green-600"></i><div><h5 class="text-[14px] font-semibold">ISO Certificate</h5><p class="text-[12px] text-zinc-500">PDF • 1.2 MB</p></div></div></div>
                                <div class="rounded-2xl border border-zinc-200 p-5 hover:shadow-md cursor-pointer transition bg-white"><div class="flex items-center gap-4"><i data-lucide="book-open" class="h-6 w-6 text-blue-600"></i><div><h5 class="text-[14px] font-semibold">Application Guide</h5><p class="text-[12px] text-zinc-500">PDF • 890 KB</p></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-zinc-200 px-5 md:px-6 py-4 flex items-center justify-between bg-white flex-shrink-0 flex-wrap gap-3">
                <div class="text-[12px] text-zinc-500 hidden sm:block">ISO 9001:2015 Certified • COA per batch</div>
                <div class="flex items-center gap-3 flex-wrap">
                    <button id="modal-whatsapp-btn" class="h-10 rounded-full bg-[#25D366] px-5 text-[13px] font-medium text-white hover:opacity-90 inline-flex items-center gap-2 shadow"><i data-lucide="message-circle" class="h-4 w-4"></i> WhatsApp</button>
                    <button onclick="document.getElementById('modal-quote-btn').click()" class="h-10 rounded-full bg-blue-600 px-5 text-[13px] font-semibold text-white hover:bg-blue-700 shadow">Request Quote</button>
                    <button onclick="document.getElementById('modal-close').click()" class="h-10 rounded-full border border-zinc-300 px-5 text-[13px] font-medium hover:bg-zinc-50 transition">Close</button>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/255712345678" target="_blank" class="fixed bottom-6 right-6 z-50 inline-flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] shadow-xl hover:scale-105 transition-all duration-300">
        <i data-lucide="message-circle" class="h-7 w-7 text-white"></i>
    </a>

    <script>
        const products = [
            { id: "dolomite-powder", name: "Dolomite Powder", category: "Mineral", image: "/images/products/dolo.jpg", short: "High purity CaMg(CO₃)₂ powder for industrial applications.", specs: [{label:"Whiteness",value:"≥ 94%"},{label:"Mesh Size",value:"200-1500"},{label:"CaO",value:"30-32%"},{label:"MgO",value:"20-22%"},{label:"Bulk Density",value:"1.2 g/cc"},{label:"Moisture",value:"< 0.5%"}], grades: ["200 Mesh (Coarse filler)","325 Mesh (General)","500 Mesh (Paint)","800 Mesh (Fine)","1250 Mesh (Premium)"], packaging: ["25kg HDPE Bags","50kg Jumbo Bags","1MT Big Bags"], description: "Premium dolomite powder with controlled particle size distribution. Ideal for cost-effective filler applications requiring opacity and weatherability.", applications: ["Paint & Coatings","Plastic masterbatch","Ceramic body","Rubber compounding"], recommendedFor: "Water-based paints, PVC compounds, ceramic glazes", processingMethod: "Dry grinding, air classification", howToApply: null },
            { id: "dolomite-granules", name: "Dolomite Granules", category: "Mineral", image: "/images/products/gran.jpg", short: "Coarse granules for construction and agriculture.", specs: [{label:"Size range",value:"1-5 mm"},{label:"Hardness",value:"3.5-4 Mohs"},{label:"Bulk Density",value:"1.45 g/cc"},{label:"Moisture",value:"< 0.5%"}], grades: ["1-2 mm (Fine)","2-4 mm (Standard)","3-5 mm (Coarse)"], packaging: ["50kg Bags","1MT Jumbo Bags","Bulk tipper"], description: "Hard, angular dolomite granules with excellent crushing strength for terrazzo, roofing, and soil conditioning.", applications: ["Terrazzo flooring","Roofing granules","Soil conditioner","Poultry grit"], recommendedFor: "Construction aggregates, agricultural amendment", processingMethod: "Crushing, screening, washing", howToApply: null },
            { id: "calcite-powder", name: "Calcite Powder", category: "Mineral", image: "/images/products/cal.jpg", short: "Ultra-white calcium carbonate powder.", specs: [{label:"Whiteness",value:"≥ 96%"},{label:"CaCO₃",value:"≥ 98.5%"},{label:"Mesh",value:"400-2500"},{label:"Oil Absorption",value:"18-22 g/100g"}], grades: ["400 Mesh","800 Mesh","1250 Mesh","2000 Mesh"], packaging: ["25kg Paper Bags","Jumbo Bags","Bulk tanker"], description: "Superfine calcite powder with high brightness and low impurities for premium coating applications.", applications: ["Premium paints","PVC pipes","Paper coating","Sealants"], recommendedFor: "High-gloss paints, masterbatch production", processingMethod: "Wet grinding, classification", howToApply: null },
            { id: "white-wall-putty", name: "White Cement Wall Putty", category: "Decorative", image: "/images/products/wp.jpg", short: "Smooth base coat for interior & exterior walls. Excellent coverage, high whiteness, and superior adhesion for a perfect paint finish.", specs: [{label:"Whiteness",value:"≥ 85%"},{label:"Coverage",value:"18-20 sqft/kg"},{label:"Pot Life",value:"3-4 hrs"},{label:"Water Resistance",value:"Excellent"}], grades: ["Interior (Smooth)","Exterior Premium","High Build"], packaging: ["20kg Bags","40kg Bags","Bulk silo"], description: "Polymer-modified white cement putty providing excellent adhesion and smooth finish.", applications: ["Interior walls","Exterior facades","Ceilings","Precast panels"], recommendedFor: "Residential & commercial projects", processingMethod: "Mix with water 35-40%, trowel apply", howToApply: [{step:"Surface Preparation",desc:"Ensure surface is clean, dry, and free from dust. Dampen before application."},{step:"Mixing",desc:"Mix 1 part water to 2.5-3 parts putty powder until smooth."},{step:"Application",desc:"Apply with trowel in thin layers (1-2mm). Allow first coat to dry."},{step:"Sanding",desc:"After 24 hours, sand with fine sandpaper before painting."}] },
            { id: "grafiato", name: "Grafiato Decorative Finish", category: "Decorative", image: "/images/products/sc.jpg", short: "Scratch texture decorative plaster. Creates elegant linear patterns, water-repellent, UV resistant, ideal for modern facades.", specs: [{label:"Grain Size",value:"1.5/2.0 mm"},{label:"Coverage",value:"2.2 kg/m²"},{label:"Water Repellent",value:"Yes"},{label:"UV Resistant",value:"Yes"}], grades: ["Acrylic Based","Silicone Enhanced","Fine Texture"], packaging: ["25kg Pails","5kg Sample"], description: "Ready-to-use acrylic decorative finish with distinctive scratch pattern.", applications: ["Exterior facades","Feature walls","Commercial buildings"], recommendedFor: "Modern architecture, commercial buildings", processingMethod: "Trowel apply, scratch with float", howToApply: [{step:"Primer",desc:"Apply suitable primer and allow to dry 4-6 hours."},{step:"Base Coat",desc:"Apply Grafiato paste with trowel at 2-3mm thickness."},{step:"Scratching",desc:"After 10-15 min, scratch with plastic float in desired pattern."},{step:"Curing",desc:"Allow 24 hours to cure. Keep dry during curing."}] },
            { id: "stone-plaster", name: "Stone Plaster Finish", category: "Decorative", image: "/images/products/sp.jpg", short: "Natural stone effect textured coating. Breathable, flexible, durable finish replicating rustic or fine stone aesthetics.", specs: [{label:"Texture",value:"Rustic/Fine"},{label:"Coverage",value:"2.5 kg/m²"},{label:"Breathable",value:"Yes"},{label:"Color",value:"Customizable"}], grades: ["Natural Stone","Marble Effect","Travertine Look"], packaging: ["25kg Pails","Bulk packs"], description: "Mineral-based decorative plaster replicating natural stone.", applications: ["Exterior cladding","Pillars","Resort projects","Luxury homes"], recommendedFor: "High-end residential, hotels, resorts", processingMethod: "Spray or trowel, texture with tools", howToApply: [{step:"Primer",desc:"Apply quartz primer for adhesion. Dry 6-8 hours."},{step:"Application",desc:"Apply stone plaster with trowel or spray in consistent layer."},{step:"Texturing",desc:"Use plastic trowel or sponge to create desired pattern while wet."},{step:"Sealing",desc:"After 48 hours curing, apply clear sealer for protection."}] }
        ];

        const modal = document.getElementById("product-modal");
        const closeBtn = document.getElementById("modal-close");
        const overlay = document.getElementById("modal-overlay");
        let galleryImages = [];
        let currentGalleryIndex = 0;
        let autoScrollInterval = null;
        let isAutoScrolling = true;
        let continuousScrollId = null; // Horizontal auto-scroll interval holder

        function renderProducts(items) {
            document.getElementById("mineral-products-grid").innerHTML = "";
            document.getElementById("decorative-products-grid").innerHTML = "";
            items.filter(p=>p.category==="Mineral").forEach(p=>{
                const specHtml = p.specs.slice(0,2).map(s=>`<div class="rounded-xl bg-zinc-50 px-3 py-2"><div class="text-[11px] text-zinc-500">${s.label}</div><div class="font-semibold text-zinc-800 text-[13px]">${s.value}</div></div>`).join('');
                const el=document.createElement("div");el.className="product-card group rounded-2xl border border-zinc-200 bg-white overflow-hidden";
                el.innerHTML=`<div class="relative aspect-[4/3] overflow-hidden bg-zinc-100"><img src="${p.image}" alt="${p.name}" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"><span class="absolute left-4 top-4 rounded-full bg-blue-600/90 px-3 py-1 text-[11px] font-semibold uppercase text-white backdrop-blur-sm">Mineral</span></div><div class="p-5"><h4 class="text-[16px] font-semibold">${p.name}</h4><p class="mt-2 text-[14px] text-zinc-600 line-clamp-2">${p.short}</p><div class="mt-4 grid grid-cols-2 gap-3">${specHtml}</div><div class="mt-5 flex items-center gap-3"><button onclick="openProductModal('${p.id}')" class="flex-1 h-10 rounded-full bg-zinc-900 text-white text-[13px] font-medium hover:bg-zinc-800 transition shadow-sm">View Details</button><button onclick="setQuoteProduct('${p.name}')" class="h-10 rounded-full border border-zinc-300 px-4 text-[13px] font-medium hover:bg-zinc-50 transition">Quote</button></div></div>`;
                document.getElementById("mineral-products-grid").appendChild(el);
            });
            items.filter(p=>p.category==="Decorative").forEach(p=>{
                const specHtml = p.specs.slice(0,2).map(s=>`<div class="rounded-xl bg-zinc-50 px-3 py-2"><div class="text-[11px] text-zinc-500">${s.label}</div><div class="font-semibold text-zinc-800 text-[13px]">${s.value}</div></div>`).join('');
                const el=document.createElement("div");el.className="product-card group rounded-2xl border border-zinc-200 bg-white overflow-hidden";
                el.innerHTML=`<div class="relative aspect-[4/3] overflow-hidden bg-zinc-100"><img src="${p.image}" alt="${p.name}" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"><span class="absolute left-4 top-4 rounded-full bg-orange-500/90 px-3 py-1 text-[11px] font-semibold uppercase text-white backdrop-blur-sm">Decorative</span></div><div class="p-5"><h4 class="text-[16px] font-semibold">${p.name}</h4><p class="mt-2 text-[14px] text-zinc-600 line-clamp-2">${p.short}</p><div class="mt-4 grid grid-cols-2 gap-3">${specHtml}</div><div class="mt-5 flex items-center gap-3"><button onclick="openProductModal('${p.id}')" class="flex-1 h-10 rounded-full bg-zinc-900 text-white text-[13px] font-medium hover:bg-zinc-800 transition shadow-sm decorative-card-btn">View Details</button><button onclick="setQuoteProduct('${p.name}')" class="h-10 rounded-full border border-zinc-300 px-4 text-[13px] font-medium hover:bg-zinc-50 transition">Quote</button></div></div>`;
                document.getElementById("decorative-products-grid").appendChild(el);
            });
            lucide.createIcons();
        }

        // Horizontal scrolling handler that builds a seamless infinite moving loop directly from HTML
        function setupHTMLGalleryScroll(filter = "All") {
            const track = document.getElementById("gallery-track");
            if (!track) return;

            // Stop any ongoing moving animation frame
            if (continuousScrollId) cancelAnimationFrame(continuousScrollId);

            // Clean up any previously appended duplicated clones
            const oldClones = track.querySelectorAll(".cloned-item");
            oldClones.forEach(c => c.remove());

            // Process existing visible original gallery elements
            const originalItems = track.querySelectorAll(".gallery-item");
            let activeItemsCount = 0;

            originalItems.forEach(item => {
                const category = item.getAttribute("data-category");
                const type = item.getAttribute("data-type");

                if (filter === "All" || category === filter || type === filter) {
                    item.style.display = "block";
                    activeItemsCount++;
                } else {
                    item.style.display = "none";
                }
            });

            // Return container scroll tracking back to start point
            track.scrollLeft = 0;

            // Clone elements to create an endless horizontal chain (if matching items exist)
            if (activeItemsCount > 0) {
                originalItems.forEach(item => {
                    if (item.style.display !== "none") {
                        const clone = item.cloneNode(true);
                        clone.classList.add("cloned-item");
                        track.appendChild(clone);
                    }
                });

                // Fire continuous pixel scroll update loop
                const scrollSpeed = 0.6; // Speed index adjustments
                function processMovement() {
                    if (!track.matches(':hover')) {
                        track.scrollLeft += scrollSpeed;
                        
                        // Wrap position smoothly back to start once half-track limit is cleared
                        if (track.scrollLeft >= track.scrollWidth / 2) {
                            track.scrollLeft = 0;
                        }
                    }
                    continuousScrollId = requestAnimationFrame(processMovement);
                }
                continuousScrollId = requestAnimationFrame(processMovement);
            }
        }

        function setQuoteProduct(name){document.getElementById('quote-product-select').value=name;document.getElementById('quote').scrollIntoView({behavior:'smooth'});}

        function startAutoScroll(){stopAutoScroll();if(!isAutoScrolling)return;autoScrollInterval=setInterval(()=>{currentGalleryIndex=(currentGalleryIndex+1)%galleryImages.length;updateMainImage(currentGalleryIndex);},3500);}
        function stopAutoScroll(){if(autoScrollInterval){clearInterval(autoScrollInterval);autoScrollInterval=null;}}
        function updateMainImage(index){currentGalleryIndex=index;document.getElementById("modal-main-img").src=galleryImages[index];document.getElementById("gallery-current").textContent=index+1;document.querySelectorAll("#modal-thumbnails img").forEach((t,i)=>{t.classList.toggle("thumbnail-active",i===index);t.classList.toggle("border-blue-500",i===index);t.classList.toggle("border-transparent",i!==index);t.classList.toggle("opacity-70",i!==index);});}

        function openProductModal(id) {
            const p = products.find(prod => prod.id === id); if (!p) return;
            stopAutoScroll(); isAutoScrolling = true;
            document.getElementById("modal-title").textContent = p.name;
            const badge = document.getElementById("modal-category-badge");
            badge.textContent = p.category;
            badge.className = `inline-flex rounded-full px-3 py-1 text-[11px] font-semibold uppercase tracking-wide ${p.category==='Mineral'?'bg-blue-100 text-blue-700':'bg-orange-100 text-orange-700'}`;
            document.getElementById("modal-description").textContent = p.description;

            galleryImages = [p.image,"https://images.pexels.com/photos/37533379/pexels-photo-37533379.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200","https://images.pexels.com/photos/11589239/pexels-photo-11589239.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200","https://images.pexels.com/photos/4487363/pexels-photo-4487363.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200","https://images.pexels.com/photos/17146231/pexels-photo-17146231.jpeg?auto=compress&cs=tinysrgb&fit=crop&h=800&w=1200"];
            document.getElementById("gallery-total").textContent = galleryImages.length;
            currentGalleryIndex = 0; updateMainImage(0);

            document.getElementById("modal-thumbnails").innerHTML = galleryImages.map((img,i)=>`<img src="${img}" class="h-16 md:h-20 w-full rounded-xl object-cover border-2 cursor-pointer transition-all duration-200 ${i===0?'thumbnail-active border-blue-500':'border-transparent opacity-70 hover:opacity-100'}" onclick="updateMainImage(${i});stopAutoScroll();isAutoScrolling=false;document.getElementById('gallery-playpause').innerHTML='<i data-lucide=\\'play\\' class=\\'h-5 w-5\\'></i>';lucide.createIcons();">`).join('');

            document.getElementById("modal-key-props").innerHTML = p.specs.slice(0,6).map(s=>`<div class="rounded-xl border border-zinc-200 px-4 py-3"><div class="text-[11px] text-zinc-500">${s.label}</div><div class="text-[14px] font-semibold">${s.value}</div></div>`).join('');
            document.getElementById("modal-specs-container").innerHTML = p.specs.map(s=>`<div class="rounded-xl border border-zinc-200 px-4 py-3"><div class="text-[12px] text-zinc-500">${s.label}</div><div class="text-[14px] font-semibold">${s.value}</div></div>`).join('');
            document.getElementById("modal-grades-list").innerHTML = p.grades.map(g=>`<li class="flex items-start gap-3 text-[14px]"><i data-lucide="check-circle" class="h-5 w-5 text-green-600 mt-0.5"></i><span>${g}</span></li>`).join('');
            document.getElementById("modal-packaging-list").innerHTML = p.packaging.map(pkg=>`<li class="flex items-start gap-3 text-[14px]"><i data-lucide="package" class="h-5 w-5 text-blue-600 mt-0.5"></i><span>${pkg}</span></li>`).join('');
            document.getElementById("modal-apps-container").innerHTML = p.applications.map(a=>`<span class="rounded-full bg-blue-50 border border-blue-200 px-4 py-2 text-[13px] text-blue-800 font-medium">${a}</span>`).join('');

            const howToSection = document.getElementById("modal-how-to-apply");
            const howToSteps = document.getElementById("modal-application-steps");
            if (p.howToApply && p.howToApply.length > 0) {
                howToSection.classList.remove("hidden");
                howToSteps.innerHTML = p.howToApply.map((s,i)=>`<div class="flex gap-4"><div class="flex-shrink-0 h-8 w-8 rounded-full bg-emerald-600 text-white flex items-center justify-center text-[12px] font-bold">${i+1}</div><div><h5 class="text-[14px] font-semibold text-emerald-900">${s.step}</h5><p class="text-[13px] text-zinc-600">${s.desc}</p></div></div>`).join('');
            } else { howToSection.classList.add("hidden"); }

            document.getElementById("modal-recommended-for").textContent = p.recommendedFor || "Various applications";
            document.getElementById("modal-processing-method").textContent = p.processingMethod || "Standard processing";
            document.getElementById("modal-quote-btn").onclick = () => { closeProductModal(); setQuoteProduct(p.name); };
            document.getElementById("modal-whatsapp-btn").onclick = () => { window.open(`https://wa.me/255712345678?text=Hello,%20I'm%20interested%20in%20${encodeURIComponent(p.name)}`, '_blank'); };

            document.querySelectorAll('.modal-tab').forEach(t=>t.classList.remove('active'));
            document.querySelectorAll('.modal-tab-panel').forEach(p=>p.classList.remove('active'));
            document.querySelector('.modal-tab[data-tab="overview"]').classList.add('active');
            document.getElementById('tab-overview').classList.add('active');

            modal.classList.remove("hidden"); document.body.classList.add("overflow-hidden");
            document.getElementById("gallery-playpause").innerHTML = '<i data-lucide="pause" class="h-5 w-5"></i>';
            startAutoScroll(); lucide.createIcons();
        }

        function closeProductModal(){stopAutoScroll();modal.classList.add("hidden");document.body.classList.remove("overflow-hidden");}

        document.getElementById("gallery-prev").addEventListener("click",()=>{stopAutoScroll();isAutoScrolling=false;document.getElementById("gallery-playpause").innerHTML='<i data-lucide="play" class="h-5 w-5"></i>';currentGalleryIndex=(currentGalleryIndex-1+galleryImages.length)%galleryImages.length;updateMainImage(currentGalleryIndex);lucide.createIcons();});
        document.getElementById("gallery-next").addEventListener("click",()=>{stopAutoScroll();isAutoScrolling=false;document.getElementById("gallery-playpause").innerHTML='<i data-lucide="play" class="h-5 w-5"></i>';currentGalleryIndex=(currentGalleryIndex+1)%galleryImages.length;updateMainImage(currentGalleryIndex);lucide.createIcons();});
        document.getElementById("gallery-playpause").addEventListener("click",()=>{isAutoScrolling=!isAutoScrolling;const btn=document.getElementById("gallery-playpause");if(isAutoScrolling){btn.innerHTML='<i data-lucide="pause" class="h-5 w-5"></i>';startAutoScroll();}else{btn.innerHTML='<i data-lucide="play" class="h-5 w-5"></i>';stopAutoScroll();}lucide.createIcons();});
        document.getElementById("modal-fullscreen-btn").addEventListener("click",()=>{const mc=modal.querySelector('.relative');if(document.fullscreenElement){document.exitFullscreen();}else{mc.requestFullscreen().catch(()=>{});}});

        document.querySelectorAll('.modal-tab').forEach(tab=>{tab.addEventListener('click',()=>{const target=tab.getAttribute('data-tab');document.querySelectorAll('.modal-tab').forEach(t=>t.classList.remove('active'));document.querySelectorAll('.modal-tab-panel').forEach(p=>p.classList.remove('active'));tab.classList.add('active');document.getElementById(`tab-${target}`).classList.add('active');});});
        closeBtn.addEventListener("click",closeProductModal);overlay.addEventListener("click",closeProductModal);

        document.querySelectorAll(".filter-btn").forEach(btn=>{btn.addEventListener("click",(e)=>{document.querySelectorAll(".filter-btn").forEach(b=>b.className="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border border-white/20 hover:bg-white/10 transition");e.target.className="filter-btn h-10 rounded-full px-5 text-[13px] font-medium border bg-orange-500 border-orange-500 text-white shadow";setupHTMLGalleryScroll(e.target.getAttribute("data-filter"));});});

        const header=document.getElementById("main-header"),menuToggle=document.getElementById("menu-toggle"),mobileMenu=document.getElementById("mobile-menu");
        window.addEventListener("scroll",()=>{if(window.scrollY>10){header.classList.add("shadow-md");header.classList.remove("border-zinc-100");}else{header.classList.remove("shadow-md");header.classList.add("border-zinc-100");}});
        menuToggle.addEventListener("click",()=>{mobileMenu.classList.toggle("hidden");const ih=mobileMenu.classList.contains("hidden");menuToggle.innerHTML=ih?'<i data-lucide="menu" class="h-5 w-5"></i>':'<i data-lucide="x" class="h-5 w-5"></i>';lucide.createIcons();});
        document.querySelectorAll('.mobile-nav-link').forEach(l=>{l.addEventListener('click',()=>{mobileMenu.classList.add("hidden");menuToggle.innerHTML='<i data-lucide="menu" class="h-5 w-5"></i>';lucide.createIcons();});});

        document.getElementById("quote-form").addEventListener("submit",(e)=>{e.preventDefault();alert('Quote request submitted! We will contact you shortly.');e.target.reset();});

        function populateQuoteDropdown(){products.forEach(p=>{const opt=document.createElement("option");opt.value=p.name;opt.textContent=p.name;document.getElementById("quote-product-select").appendChild(opt);});}
        function renderDownloads(){document.getElementById("downloads-grid").innerHTML="";products.slice(0,4).forEach(p=>{const el=document.createElement("div");el.className="rounded-2xl border border-zinc-200 p-6 hover:shadow-md transition bg-white";el.innerHTML=`<i data-lucide="file-text" class="h-6 w-6 text-blue-600"></i><h3 class="mt-3 text-[15px] font-semibold">${p.name}</h3><p class="text-[13px] text-zinc-600">TDS • MSDS • COA</p><button class="mt-4 inline-flex items-center gap-2 text-[13px] font-medium text-blue-700 hover:underline"><i data-lucide="download" class="h-4 w-4"></i> Download Pack</button>`;document.getElementById("downloads-grid").appendChild(el);});}

        function animateCounters(){const d=1800,s=performance.now(),t={years:4,capacity:120,countries:5,categories:7};function step(n){const p=Math.min((n-s)/d,1),e=1-Math.pow(1-p,3);document.getElementById("count-years").textContent=Math.floor(t.years*e);document.getElementById("count-capacity").textContent=Math.floor(t.capacity*e);document.getElementById("count-countries").textContent=Math.floor(t.countries*e);document.getElementById("count-categories").textContent=Math.floor(t.categories*e);if(p<1)requestAnimationFrame(step);}requestAnimationFrame(step);}
        function observeStats(){const g=document.getElementById("stats-counter-grid");new IntersectionObserver((e)=>{if(e[0].isIntersecting){animateCounters();this.disconnect();}},{threshold:0.4}).observe(g);}

        window.addEventListener("DOMContentLoaded",()=>{renderProducts(products);setupHTMLGalleryScroll("All");renderDownloads();populateQuoteDropdown();lucide.createIcons();observeStats();});
    </script>
</body>
</html>
