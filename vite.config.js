import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // ADMIN
                'resources/css/admin/style.css',
                'resources/css/admin/satoshi.css',
                'resources/css/admin/simple-datatables.css',
                'resources/js/admin/index.js',
                // 'resources/js/admin/us-aea-en.js',
                // 'resources/js/admin/components/*.js',
            ],
            refresh: true,
        }),
    ],
});
