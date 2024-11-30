import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/Anuncios/index.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Directorio de salida por defecto
    },
});