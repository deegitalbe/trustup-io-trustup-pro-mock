import { defineConfig } from "vite"; // eslint-disable-line import/no-extraneous-dependencies
import laravel from "laravel-vite-plugin"; // eslint-disable-line import/no-extraneous-dependencies
import fs from "fs";
import { join } from "path";

const host = "monolith.trustup.io.test";
const sslPath = (extension) =>
    join(__dirname, "certs", `trustup.io.test.${extension}`);

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        // [!tl add]
        https: {
            // [!tl add]
            key: fs.readFileSync(sslPath(`key`)), // [!tl add]
            cert: fs.readFileSync(sslPath(`crt`)), // [!tl add]
        }, // [!tl add]
        host: "0.0.0.0", // [!tl add]
        hmr: { host }, // [!tl add]
    }, // [!tl add]
    resolve: {
        alias: {
            "@": "/resources/js",
        },
    },
});
