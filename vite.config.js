import { resolve } from "path";
import { defineConfig, loadEnv } from "vite";

/** @type {import('vite').UserConfig} */
export default defineConfig(({ mode }) => {
  const env = loadEnv(mode, process.cwd(), "");

  return {
    css: { devSourcemap: true },
    server: {
      host: "127.0.0.1",
    },
    build: {
      outDir: resolve(__dirname, "public"),
      emptyOutDir: false,
      rollupOptions: {
        input: {
          main: resolve(__dirname, "app/Views/assets/js/main.js"),
          admin: resolve(__dirname, "app/Views/assets/js/admin.js"),
        },
      },
      cssCodeSplit: true,
      manifest: true,
    },
  };
});
