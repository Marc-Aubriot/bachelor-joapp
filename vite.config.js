import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                //  local env
                transformAssetUrls: {
                    base: null,               
                    includeAbsolute: false,     
                },
                //  production env
                /*transformAssetUrls: {
                    base: "test",               
                    includeAbsolute: true,     
                },*/
            },
        }),
        
    ],
});
