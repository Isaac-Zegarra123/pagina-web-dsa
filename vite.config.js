import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/routes.css',
                'resources/sass/route.js',
            ],
            refresh: true,
        }),
    ],
});
