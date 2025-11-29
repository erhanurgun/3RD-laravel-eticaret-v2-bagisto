/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/Resources/**/*.blade.php", "./src/Resources/**/*.js"],

    theme: {
        container: {
            center: true,

            screens: {
                "2xl": "1440px",
            },

            padding: {
                DEFAULT: "90px",
            },
        },

        screens: {
            sm: "525px",
            md: "768px",
            lg: "1024px",
            xl: "1240px",
            "2xl": "1440px",
            1180: "1180px",
            1060: "1060px",
            991: "991px",
            868: "868px",
        },

        extend: {
            colors: {
                navyBlue: "#060C3B",
                lightOrange: "#F6F2EB",
                darkGreen: '#40994A',
                darkBlue: '#0044F2',
                darkPink: '#F85156',
            },

            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                dmserif: ["DM Serif Display", "serif"],
            },

            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        fontFamily: theme('fontFamily.poppins').join(', '),
                        color: theme('colors.navyBlue'),
                        maxWidth: 'none',
                        a: {
                            color: theme('colors.darkBlue'),
                            textDecoration: 'underline',
                            '&:hover': {
                                color: theme('colors.navyBlue'),
                            },
                        },
                        strong: {
                            color: theme('colors.navyBlue'),
                            fontWeight: '600',
                        },
                        h1: {
                            color: theme('colors.navyBlue'),
                            fontWeight: '700',
                        },
                        h2: {
                            color: theme('colors.navyBlue'),
                            fontWeight: '600',
                        },
                        h3: {
                            color: theme('colors.navyBlue'),
                            fontWeight: '600',
                        },
                        h4: {
                            color: theme('colors.navyBlue'),
                            fontWeight: '600',
                        },
                        'ul > li::marker': {
                            color: theme('colors.navyBlue'),
                        },
                        'ol > li::marker': {
                            color: theme('colors.navyBlue'),
                        },
                    },
                },
            }),
        }
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],

    safelist: [
        {
            pattern: /icon-/,
        },
        {
            pattern: /prose/,
        }
    ]
};
