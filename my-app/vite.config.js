
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue(),
  ],
  server: {
    port: 8800,
    proxy: {
      '/api': 'http://localhost:8000', // Cambia esto según el puerto en el que se ejecute tu servidor Laravel
    },
  },
  resolve: {
    alias: {
      '@': '/src', // Ajusta esta ruta según tu estructura de carpetas
    },
  },
})