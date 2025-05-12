import { defineConfig, loadEnv } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default ({ mode }) => {
  // Load env file based on `mode` in the current working directory.
  const env = loadEnv(mode, process.cwd(), '')

  return defineConfig({
    plugins: [vue()],
    server: {
      host: true,
      port: env.PORT,
      watch: {
        usePolling: true
      },
      proxy: {
        '/api': {
          target: env.VITE_API_URL,
          changeOrigin: true,
          secure: false
        }
      }
    },
    base: '/',
    build: {
      outDir: 'dist',
      assetsDir: 'assets'
    }
  })
}
