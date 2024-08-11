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
                //  LOCAL uncomment before local build
                transformAssetUrls: {
                    base: null,               
                    includeAbsolute: false,     
                },
                //  PROD uncomment before prod build
                // transformAssetUrls: {
                //     base: "test",               
                //     includeAbsolute: true,     
                // },
            },
        }),
        
    ],
});
