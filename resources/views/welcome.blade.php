<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Yummy Bites - Best Food in Town</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header class="bg-orange-600 text-white py-6 shadow-lg">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <h1 class="text-3xl font-bold">Yummy Bites</h1>
      <nav class="hidden md:flex space-x-8">
        <a href="#home" class="hover:text-orange-200">Home</a>
        <a href="#menu" class="hover:text-orange-200">Menu</a>
        <a href="#about" class="hover:text-orange-200">About</a>
        <a href="#contact" class="hover:text-orange-200">Contact</a>
      </nav>
      <button class="md:hidden text-3xl">Menu</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="bg-orange-500 text-white py-24 text-center">
    <div class="container mx-auto px-6">
      <h2 class="text-5xl md:text-6xl font-bold mb-4">Welcome to Yummy Bites</h2>
      <p class="text-xl mb-8">Delicious food made with love, served fresh daily</p>
      <a href="#menu" class="bg-white text-orange-600 px-10 py-4 rounded-full text-lg font-bold hover:bg-gray-100 transition inline-block">
        View Menu
      </a>
    </div>
  </section>

  <!-- Menu Section -->
  <section id="menu" class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center mb-12 text-orange-600">Our Popular Dishes</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Menu Item 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://images.pexels.com/photos/1639556/pexels-photo-1639556.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Burger" class="w-full h-56 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-2xl font-bold mb-2">Classic Cheese Burger</h3>
            <p class="text-gray-600 mb-4">Juicy beef patty with melted cheese, lettuce & special sauce</p>
            <div class="flex justify-between items-center px-4">
              <span class="text-2xl font-bold text-orange-600">$9.99</span>
              <button class="bg-orange-600 text-white px-6 py-2 rounded-full hover:bg-orange-700 transition font-medium">
                Order Now
              </button>
            </div>
          </div>
        </div>

        <!-- Menu Item 2 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Pizza" class="w-full h-56 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-2xl font-bold mb-2">Margherita Pizza</h3>
            <p class="text-gray-600 mb-4">Fresh mozzarella, tomato sauce & basil on thin crust</p>
            <div class="flex justify-between items-center px-4">
              <span class="text-2xl font-bold text-orange-600">$12.99</span>
              <button class="bg-orange-600 text-white px-6 py-2 rounded-full hover:bg-orange-700 transition font-medium">
                Order Now
              </button>
            </div>
          </div>
        </div>

        <!-- Menu Item 3 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Pasta" class="w-full h-56 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-2xl font-bold mb-2">Creamy Alfredo Pasta</h3>
            <p class="text-gray-600 mb-4">Rich creamy sauce with garlic and parmesan</p>
            <div class="flex justify-between items-center px-4">
              <span class="text-2xl font-bold text-orange-600">$10.99</span>
              <button class="bg-orange-600 text-white px-6 py-2 rounded-full hover:bg-orange-700 transition font-medium">
                Order Now
              </button>
            </div>
          </div>
        </div>

        <!-- Add more items as needed -->
      </div>

      <div class="text-center mt-12">
        <a href="tel:+1234567890" class="bg-green-600 text-white px-12 py-5 rounded-full text-xl font-bold hover:bg-green-700 transition inline-block">
          Call to Order: +1 (234) 567-890
        </a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-6 text-orange-600">Why Choose Us?</h2>
      <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
        <div class="bg-white p-8 rounded-lg shadow">
          <div class="text-5xl mb-4">Fresh Ingredients</div>
          <p class="text-gray-600">We use only the freshest and finest ingredients daily</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow">
          <div class="text-5xl mb-4">Fast Delivery</div>
          <p class="text-gray-600">Hot food delivered to your door in under 30 minutes</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow">
          <div class="text-5xl mb-4">Friendly Service</div>
          <p class="text-gray-600">Our team is always happy to serve you with a smile</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact & Footer -->
  <footer id="contact" class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-3xl font-bold mb-4">Visit Us Today!</h3>
      <p class="text-xl mb-6">123 Food Street, Tasty Town<br>Open Daily: 11:00 AM - 10:00 PM</p>
      <p class="text-lg">Phone: <a href="tel:+1234567890" class="underline">+1 (234) 567-890</a></p>
      <p class="mt-6 text-gray-400">© 2025 Yummy Bites. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>