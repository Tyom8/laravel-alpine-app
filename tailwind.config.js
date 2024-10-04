/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            primary: "#1a202c",
            secondary: "#2d3748",
            secondaryButton: `rgba(254, 119, 98, 0.2)`,
            whiteBorder: `rgba(255,255,255,0.3)`,
            dark_gray: `rgba(29, 31, 36, 1)`,
            page_bg: `rgba(14, 14, 14)`,
            black_button: `#0E0E0E`,
            green: "#26DBDC",
        },
        fontFamily: {
            archivo: ["Archivo", "sans-serif"],
        },
        fontWeight: {
            regular: 400,
            medium: 500,
            semiBold: 600,
            bold: 700,
        },
        screens: {
            // sm: "640px",
            md: "768px",
            lg: "1024px",
            // xl: "1280px",
        },
    },
},
  plugins: [],
}

