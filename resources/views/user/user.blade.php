    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevate - Premium Audio Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
        font-family: 'Inter', sans-serif;
        }
        
        .smooth-scroll {
        scroll-behavior: smooth;
        }
        
        .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
    </style>
    </head>
    <body class="antialiased bg-slate-50 text-slate-900 smooth-scroll">

    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-slate-900 rounded-lg"></div>
            <span class="text-xl font-semibold">Elevate</span>
            </div>
            
            <div class="hidden md:flex items-center gap-8">
            <a href="#products" class="text-sm text-slate-600 hover:text-slate-900 transition-colors">Products</a>
            <a href="#categories" class="text-sm text-slate-600 hover:text-slate-900 transition-colors">Categories</a>
            <a href="#about" class="text-sm text-slate-600 hover:text-slate-900 transition-colors">About</a>
            <a href="#contact" class="text-sm text-slate-600 hover:text-slate-900 transition-colors">Contact</a>
            </div>
            
            <div class="flex items-center gap-3">
            <a href="{{url('/auth/showLogin')}}" class="text-sm text-slate-600 hover:text-slate-900 transition-colors px-4 py-2">
                Login
            </a>
            <a href="{{url('/auth/register')}}" class="bg-slate-900 text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-slate-800 transition-colors">
                Sign Up
            </a>
            </div>
        </div>
        </div>
    </nav>

    <section class="pt-32 pb-16 px-6 bg-gradient-to-br from-slate-900 to-slate-800">
        <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
            Premium Audio Products
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto mb-8 leading-relaxed">
            Discover our collection of high-quality headphones, earbuds, and speakers designed for audiophiles.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="#products" class="bg-white text-slate-900 px-8 py-3 rounded-lg font-medium hover:bg-slate-100 transition-colors">
            Browse Products
            </a>
            <a href="#categories" class="border border-white/30 text-white px-8 py-3 rounded-lg font-medium hover:bg-white/10 transition-colors">
            View Categories
            </a>
        </div>
        </div>
    </section>
   <div class="max-w-7xl mx-auto py-16 px-6">
        <h1 class="text-4xl font-bold text-center mb-12">Our Products</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- ✅ Loop through products --}}
            @php
                $products = [
                    [
                        'name' => 'Elevate Pro',
                        'price' => 299,
                        'type' => 'Wireless Headphones',
                        'desc' => 'Premium over-ear headphones with active noise cancellation and 40-hour battery life.',
                        'image' => 'https://images.unsplash.com/photo-1619695860852-14e47e5dfc6c?auto=format&fit=crop&w=600&q=80'
                    ],
                    [
                        'name' => 'Elevate Buds',
                        'price' => 149,
                        'type' => 'True Wireless Earbuds',
                        'desc' => 'Compact earbuds with crystal-clear sound and seamless connectivity.',
                        'image' => 'https://images.unsplash.com/photo-1585386959984-a41552231693?auto=format&fit=crop&w=600&q=80'
                    ],
                    [
                        'name' => 'Elevate Wave',
                        'price' => 199,
                        'type' => 'Portable Speaker',
                        'desc' => 'Powerful portable speaker with 360° sound and waterproof design.',
                        'image' => 'https://images.unsplash.com/photo-1587202372775-98927b7e4a9b?auto=format&fit=crop&w=600&q=80'
                    ],
                    [
                        'name' => 'Elevate Lite',
                        'price' => 129,
                        'type' => 'On-Ear Headphones',
                        'desc' => 'Lightweight and comfortable on-ear headphones perfect for everyday listening.',
                        'image' => 'https://images.unsplash.com/photo-1598300058889-2f52c8b9b9ad?auto=format&fit=crop&w=600&q=80'
                    ],
                ];
            @endphp

            @foreach ($products as $product)
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200 hover-lift">
                    <div class="aspect-square bg-slate-100 flex items-center justify-center overflow-hidden">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-xl font-semibold text-slate-900">{{ $product['name'] }}</h3>
                            <span class="text-lg font-bold text-slate-900">${{ $product['price'] }}</span>
                        </div>
                        <p class="text-sm text-slate-500 mb-4">{{ $product['type'] }}</p>
                        <p class="text-slate-600 text-sm mb-4 leading-relaxed">{{ $product['desc'] }}</p>
                        <button class="w-full bg-slate-900 text-white py-3 rounded-lg font-medium hover:bg-slate-800 transition-colors">
                            Add to Cart
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <section id="about" class="py-24 px-6 bg-white">
        <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-slate-900 mb-6">Why Choose Elevate?</h2>
        <p class="text-lg text-slate-600 mb-12 leading-relaxed">
            We're committed to delivering exceptional audio experiences through innovative design and premium materials.
        </p>
        <div class="grid md:grid-cols-3 gap-8">
            <div>
            <div class="w-12 h-12 bg-slate-900 rounded-xl mx-auto mb-4 flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="font-semibold text-slate-900 mb-2">Premium Quality</h3>
            <p class="text-sm text-slate-600">Crafted with the finest materials for lasting durability</p>
            </div>
            <div>
            <div class="w-12 h-12 bg-slate-900 rounded-xl mx-auto mb-4 flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <h3 class="font-semibold text-slate-900 mb-2">Fast Shipping</h3>
            <p class="text-sm text-slate-600">Free delivery on all orders over $100</p>
            </div>
            <div>
            <div class="w-12 h-12 bg-slate-900 rounded-xl mx-auto mb-4 flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="font-semibold text-slate-900 mb-2">2-Year Warranty</h3>
            <p class="text-sm text-slate-600">Comprehensive coverage on all products</p>
            </div>
        </div>
        </div>
    </section>

    <footer id="contact" class="bg-slate-900 text-white py-16 px-6">
        <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div>
            <div class="flex items-center gap-2 mb-4">
                <div class="w-8 h-8 bg-white rounded-lg"></div>
                <span class="text-xl font-semibold">Elevate</span>
            </div>
            <p class="text-slate-400 text-sm leading-relaxed">
                Premium audio products designed for those who demand excellence.
            </p>
            </div>
            
            <div>
            <h4 class="font-semibold mb-4">Shop</h4>
            <ul class="space-y-2 text-sm text-slate-400">
                <li><a href="#" class="hover:text-white transition-colors">Headphones</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Earbuds</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Speakers</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Accessories</a></li>
            </ul>
            </div>
            
            <div>
            <h4 class="font-semibold mb-4">Company</h4>
            <ul class="space-y-2 text-sm text-slate-400">
                <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
            </ul>
            </div>
            
            <div>
            <h4 class="font-semibold mb-4">Support</h4>
            <ul class="space-y-2 text-sm text-slate-400">
                <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Shipping Info</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Returns</a></li>
                <li><a href="#" class="hover:text-white transition-colors">Warranty</a></li>
            </ul>
            </div>
        </div>
        
        <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-slate-400">© 2025 Elevate. All rights reserved.</p>
            <div class="flex gap-6 text-sm text-slate-400">
            <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
        </div>
    </footer>v

    </body>
    </html>
