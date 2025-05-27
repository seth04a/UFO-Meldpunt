<<<<<<< Updated upstream
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
=======
import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'
>>>>>>> Stashed changes

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
})
