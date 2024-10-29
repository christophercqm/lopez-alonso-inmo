<template>
  <div class="video-container" @mouseover="onMouseOver" @mouseleave="onMouseLeave">
    <iframe
      class="video-embed"
      frameborder="0"
      allowfullscreen
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin"
      :title="videoTitle"
      :src="`https://www.youtube.com/embed/${videoId}?controls=0&rel=0&playsinline=1&autoplay=1&loop=1&playlist=${videoId}&mute=1`"
      id="widget2"
      style="width: 1903px; height: 1070.44px;"
    ></iframe>
    <div class="overlay" :style="{ opacity: overlayOpacity }"></div>
  </div>
</template>

<script setup>
import { defineProps, ref } from 'vue';

const props = defineProps({
  videoId: {
    type: String,
    required: true,
  },
  videoTitle: {
    type: String,
    required: true,
  },
});


</script>

<style scoped>
.video-container {
  position: relative;
  width: 100%;
  height: 100vh; /* Ajusta según lo necesites */
  overflow: hidden;
}

.video-embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none; /* Elimina el borde del iframe */
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #FF3A3A;
  opacity: 0.55; /* This will be overridden by the dynamic style */
  pointer-events: none; 
  transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}
</style>
