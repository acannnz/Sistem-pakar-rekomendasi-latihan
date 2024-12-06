import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            dropShadow:{
                kuning: '5px 5px 30px rgba(115,175,235, 1)',
            },
            keyframes: {
                typing: {
                    '0%, 100%': { width: '0%', left: '0' },
                    '50%': { width: '100%', left: '0' },
                    '75%': { width: '100%', left: '100%' },
                    '100%': { width: '0%', left: '100%' }
                    },
                cursor: {
                    '0%, 100%': { borderColor: 'transparent' },
                    '50%': { borderColor: 'blue' }
                },
                phraseRotation: {
                    '0%, 45%': { content: '"Sistem Pakar"' },
                    '55%, 100%': { content: '"Expert System"' }
                },
                smallBounce: {
                    '0%, 100%': { transform: 'translateY(0)' }, // Posisi awal dan akhir tetap
                    '50%': { transform: 'translateY(-15px)' }, // Mantul sedikit ke atas
                },
            },
            animation: {
                typing: 'typing 4s steps(30, end) infinite, cursor 0.7s step-end infinite alternate, phraseRotation 8s linear infinite',
                mantul: 'smallBounce 3s ease-in-out infinite',
                },

            colors: {
                primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
            },
            fontFamily: {
                punch: ['Punch', 'sans-serif'],
                'body': [
                'Inter',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
                ],
                    'sans': [
                'Inter',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ],

            },
        },
    },
    plugins: [],
};
