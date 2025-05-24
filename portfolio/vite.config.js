import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
    manifest: 'manifest.json', // Explicitly set manifest file name to avoid .vite/ subfolder
    outDir: 'public/build',
    assetsDir: 'assets',
    rollupOptions: {
      output: {
        manualChunks(id) {
          if (id.includes('node_modules')) {
            return 'vendor';
          }
        },
      },
    },
  },
  server: {
    host: '127.0.0.1',
    port: 5173,
    hmr: {
      host: '127.0.0.1',
    },
  },
});
