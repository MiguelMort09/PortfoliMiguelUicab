<script setup lang="ts">
const backgroundPolygon = "assets/images/background-polygon.svg";
const profile =  "assets/images/IMG-1.jpg";
</script>

<template>
  <section
    class="relative min-h-screen flex flex-col items-center justify-center text-white overflow-hidden bg-gradient-to-b from-slate-950 via-slate-950 to-black py-10"
  >
    <!-- Background Image -->
    <img
      :src="backgroundPolygon"
      alt="Background"
      class="absolute inset-0 min-h-screen w-full object-cover opacity-30 animate-pulse"
    />

    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black"></div>

    <div class="relative z-20 w-full py-10">
      <div class="w-full md:max-w-6xl mx-auto container px-4 md:px-8">
        <div class="w-full flex flex-col lg:flex-row items-center gap-8">
          <!-- Profile Image Container with proper proportions -->
          <div class="md:w-1/3 mb-10 lg:mb-0 flex justify-center">
            <div class="relative">
              <div
                class="w-40 h-40 md:w-60 md:h-60 lg:w-80 lg:h-80 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg transform transition-transform duration-300 hover:scale-105"
              >
                <img
                  :src="profile"
                  alt="Profile Picture"
                  class="w-full h-full object-cover object-center"
                />
              </div>
              <!-- Optional: Add a subtle glow effect -->
              <div class="absolute inset-0 rounded-full bg-sky-500/20 blur-xl -z-10 animate-pulse"></div>
            </div>
          </div>

          <!-- Content Section -->
          <div class="md:w-2/3 px-2 space-y-6">
            <!-- Name -->
            <h1 class="font-extrabold text-2xl sm:text-4xl lg:text-6xl text-white mb-4 tracking-wide leading-tight">
              MIGUEL UICAB -
              <span class="text-sky-500 block sm:inline">MORT</span>
            </h1>

            <!-- Job Title -->
            <h2 class="sm:text-lg lg:text-4xl font-bold text-sky-500 mb-6 leading-relaxed">
              FULL STACK DEVELOPER
            </h2>

            <!-- Tagline -->
            <h3 class="sm:text-lg lg:text-3xl font-bold text-sky-300 mb-6 leading-relaxed uppercase">
              Beyond the lines of code, a vision of the future.
            </h3>

            <!-- Optional: Add some action buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mt-8">
              <button class="px-6 py-3 bg-sky-500 hover:bg-sky-600 text-white font-semibold rounded-lg transition-colors duration-300">
                View Portfolio
              </button>
              <button class="px-6 py-3 border-2 border-sky-500 text-sky-500 hover:bg-sky-500 hover:text-white font-semibold rounded-lg transition-all duration-300">
                Contact Me
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
/* Custom animations */
@keyframes zoomin {
  from {
    opacity: 0;
    transform: scale(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

.animate-zoomin {
  animation: zoomin 0.6s ease-out forwards;
}

/* Ensure proper aspect ratio for the profile image */
.profile-container {
  aspect-ratio: 1 / 1;
}

/* Add subtle text shadow for better readability */
h1, h2, h3 {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
</style>