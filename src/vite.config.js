import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',    // <--- обязательно!
        port: 5173,
        strictPort: true     // тот же порт, что пробрасываешь в docker-compose
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/sass/app.scss'
            ],
            refresh: true,
        }),
    ],
});
