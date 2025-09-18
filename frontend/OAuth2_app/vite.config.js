import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import vueDevTools from 'vite-plugin-vue-devtools'

// https://vite.dev/config/
export default defineConfig({
  plugins: [
    vue(),
    vueDevTools(),
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    },
    
  },
  server: {
        allowedHosts: [
          'localhost', // Keep localhost if you still use it directly
          'f0eafef192e7.ngrok-free.app' // Add your ngrok host here
        ]
      }
})
