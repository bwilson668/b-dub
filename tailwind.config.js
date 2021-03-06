module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: [
          '"Source Sans Pro"',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'sans-serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
        serif: [
          'Georgia',
          'Cambria',
          '"Times New Roman"',
          'Times',
          'serif',
        ],
        mono: [
          '"Roboto Mono"',
          'Menlo',
          'Monaco',
          'Consolas',
          '"Liberation Mono"',
          '"Courier New"',
          'monospace',
        ],
        display: [
          'Bungee',
        ],
      },
      colors: // Palette 15
      {
        // Brand
        "bw-dark": "#1a202c",
        "bw-dark-transparent": "rgba(26, 32, 44, 0.75)",
        "bw-light-transparent": "rgba(255, 255, 255,.06)",

        // Primary
        "blue-050": "#DCEEFB",
        "blue-100": "#B6E0FE",
        "blue-200": "#84C5F4",
        "blue-300": "#62B0E8",
        "blue-400": "#4098D7",
        "blue-500": "#2680C2",
        "blue-600": "#186FAF",
        "blue-700": "#0F609B",
        "blue-800": "#0A558C",
        "blue-900": "#003E6B",  
      
        // Neutrals
        "blue-gray-050": "#F0F4F8",
        "blue-gray-100": "#D9E2EC",
        "blue-gray-200": "#BCCCDC",
        "blue-gray-300": "#9FB3C8",
        "blue-gray-400": "#829AB1",
        "blue-gray-500": "#627D98",
        "blue-gray-600": "#486581",
        "blue-gray-700": "#334E68",
        "blue-gray-800": "#243B53",
        "blue-gray-900": "#102A43", 
      
        // Supporting
        "teal-vivid-050": "#F0FCF9",
        "teal-vivid-100": "#C6F7E9",
        "teal-vivid-200": "#8EEDD1",
        "teal-vivid-300": "#5FE3C0",
        "teal-vivid-400": "#2DCCA7",
        "teal-vivid-500": "#17B897",
        "teal-vivid-600": "#079A82",
        "teal-vivid-700": "#048271",
        "teal-vivid-800": "#016457",
        "teal-vivid-900": "#004440",  
      
        "red-050": "#FFEEEE",
        "red-100": "#FACDCD",
        "red-200": "#F29B9B",
        "red-300": "#E66A6A",
        "red-400": "#D64545",
        "red-500": "#BA2525",
        "red-600": "#A61B1B",
        "red-700": "#911111",
        "red-800": "#780A0A",
        "red-900": "#610404",  
      
        "yellow-050": "#FFFAEB",
        "yellow-100": "#FCEFC7",
        "yellow-200": "#F8E3A3",
        "yellow-300": "#F9DA8B",
        "yellow-400": "#F7D070",
        "yellow-500": "#E9B949",
        "yellow-600": "#C99A2E",
        "yellow-700": "#A27C1A",
        "yellow-800": "#7C5E10",
        "yellow-900": "#513C06",  

        // Grey / Gray
        "grey-100": '#f7fafc',
        "grey-200": '#edf2f7',
        "grey-300": '#e2e8f0',
        "grey-400": '#cbd5e0',
        "grey-500": '#a0aec0',
        "grey-600": '#718096',
        "grey-700": '#4a5568',
        "grey-800": '#2d3748',
        "grey-900": '#1a202c',
        // Gray / Grey
        "gray-100": '#f7fafc',
        "gray-200": '#edf2f7',
        "gray-300": '#e2e8f0',
        "gray-400": '#cbd5e0',
        "gray-500": '#a0aec0',
        "gray-600": '#718096',
        "gray-700": '#4a5568',
        "gray-800": '#2d3748',
        "gray-900": '#1a202c',
      },
      spacing: {
        px: '1px',
        '0': '0',
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '8': '2rem',
        '10': '2.5rem',
        '12': '3rem',
        '16': '4rem',
        '20': '5rem',
        '24': '6rem',
        '28': '7rem',
        '32': '8rem',
        '40': '10rem',
        '48': '12rem',
        '56': '14rem',
        '64': '16rem',
      },
    }
  },
  variants: {
    borderColor: ['responsive', 'hover', 'focus'],
    borderWidth: ['responsive', 'hover', 'focus'],
  },
  plugins: []
}
