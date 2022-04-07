importScripts('https://cdn.jsdelivr.net/npm/workbox-cdn@5.1.3/workbox/workbox-sw.js')

// --------------------------------------------------
// Configure
// --------------------------------------------------

// Set workbox config
workbox.setConfig({
  "debug": false
})

// Start controlling any existing clients as soon as it activates
workbox.core.clientsClaim()

// Skip over the SW waiting lifecycle stage
workbox.core.skipWaiting()

workbox.precaching.cleanupOutdatedCaches()

// Enable offline Google Analytics tracking
workbox.googleAnalytics.initialize()

// --------------------------------------------------
// Precaches
// --------------------------------------------------

// Precache assets

// --------------------------------------------------
// Runtime Caching
// --------------------------------------------------

// Register route handlers for runtimeCaching
workbox.routing.registerRoute(new RegExp('https://www.mwonyaa.com/*'), new workbox.strategies.NetworkFirst ({"cacheableResponse":{"statuses":[0,200]},"cacheExpiration":{"maxAgeSeconds":172800,"maxEntries":500}}), 'GET')
workbox.routing.registerRoute(new RegExp('https://fonts.googleapis.com/.*'), new workbox.strategies.StaleWhileRevalidate ({"cacheableResponse":{"statuses":[0,200]},"cacheExpiration":{"maxAgeSeconds":2073600,"maxEntries":500}}), 'GET')
workbox.routing.registerRoute(new RegExp('https://d1k24pix9cv4di.cloudfront.net/assets/.*'), new workbox.strategies.StaleWhileRevalidate ({"cacheableResponse":{"statuses":[0,200]},"cacheExpiration":{"maxAgeSeconds":604800,"maxEntries":500}}), 'GET')
workbox.routing.registerRoute(new RegExp('/'), new workbox.strategies.NetworkFirst ({}), 'GET')
