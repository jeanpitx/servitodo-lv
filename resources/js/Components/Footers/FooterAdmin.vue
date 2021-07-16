<template>
  <footer class="block pt-4 pb-1">
    <div class="container mx-auto px-4">
      <!-- Linea separadora -->
      <hr class="mb-4 border-b-1 border-blueGray-200" />
      <!-- Contenedor Div Footer -->
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <!-- Copyright -->
        <div class="w-full md:w-4/12 px-4">
          <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
            Copyright © {{ date }}
            <a href="#" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
              Fuzzy Systems
            </a>
          </div>
        </div>
        <!-- Other Elements -->
        <div class="w-full md:w-8/12 px-4">
          <ul class="flex flex-wrap list-none md:justify-end justify-center">
            <li>
              <a href="https://www.creative-tim.com?ref=vn-footer-admin" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                Fuzzy System
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/presentation?ref=vn-footer-admin" class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                About Us
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  data() {
    return {
      date: new Date().getFullYear(),
    };
  },
};
</script>
