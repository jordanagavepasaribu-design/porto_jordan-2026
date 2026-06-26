/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/**/*.php",
        "./vendor/filament/**/*.blade.php",
    ],

    darkMode: "class",

    theme: {
        extend: {
            colors: {
                secondary: "#edc15a",
                surface: "#121414",
                "on-surface": "#e3e2e2",
                "surface-container": "#1e2020",
                "surface-container-lowest": "#0d0e0f",
            },

            spacing: {
                "container-max": "1440px",
                "margin-desktop": "64px",
                "margin-mobile": "24px",
                "base": "8px",
                "gutter-desktop": "32px",
                "section-gap": "128px",
            },

            fontSize: {
                "body-lg": [
                    "18px",
                    {
                        lineHeight: "28px",
                        fontWeight: "400",
                    },
                ],

                "headline-lg": [
                    "32px",
                    {
                        lineHeight: "40px",
                        fontWeight: "700",
                    },
                ],

                "display-lg": [
                    "84px",
                    {
                        lineHeight: "92px",
                        letterSpacing: "-0.04em",
                        fontWeight: "800",
                    },
                ],

                "display-lg-mobile": [
                    "48px",
                    {
                        lineHeight: "52px",
                        letterSpacing: "-0.02em",
                        fontWeight: "800",
                    },
                ],

                "label-md": [
                    "12px",
                    {
                        lineHeight: "16px",
                        letterSpacing: "0.1em",
                        fontWeight: "600",
                    },
                ],

                "body-md": [
                    "16px",
                    {
                        lineHeight: "24px",
                        fontWeight: "400",
                    },
                ],

                "headline-xl": [
                    "48px",
                    {
                        lineHeight: "56px",
                        letterSpacing: "-0.02em",
                        fontWeight: "700",
                    },
                ],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};