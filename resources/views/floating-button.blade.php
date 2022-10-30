@php($settings = app(Astrogoat\Calcom\Settings\CalcomSettings::class))
@if($settings->enabled === true && $settings->floating_button_enabled === true)
    <!-- Cal floating-popup embed code begins -->
    <script type="text/javascript">
        (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
        Cal("init", {origin:"{{ $settings->origin }}"});

        Cal("floatingButton", {"calLink":"{{ $settings->floating_button_cal_link }}","buttonText":"{{ $settings->floating_button_text }}","buttonColor":"{{ $settings->floating_button_background_color }}","buttonTextColor":"{{ $settings->floating_button_text_color }}"});
        Cal("ui", {"styles":{"branding":{"brandColor":"{{ $settings->brand_color }}"}}});
    </script>
    <!-- Cal floating-popup embed code ends -->
@endif
