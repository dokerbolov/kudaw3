import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/js/map.js',
                'resources/js/modal.js',
            ],
            refresh: true,
        }),
    ],
    // build: {
    //     sourcemap: false,  // Disable source maps
    // },
});

