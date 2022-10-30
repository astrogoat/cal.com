@php
    use Illuminate\Support\Str;
    $settings = app(Astrogoat\Calcom\Settings\CalcomSettings::class);
    $id = Str::random();
@endphp

@if($settings->enabled === true)
    <!-- Cal inline embed code begins -->
    <div style="width:100%;height:100%;overflow:scroll" id="calcom-{{ $id }}"></div>
    <script type="text/javascript">
        (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; typeof namespace === "string" ? (cal.ns[namespace] = api) && p(api, ar) : p(cal, ar); return; } p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
        Cal("init", {origin:"{{ $settings->origin }}"});

        Cal("inline", {
            elementOrSelector:"#calcom-{{ $id }}",
            calLink: "{{ $calLink }}"
        });

        Cal("ui", {"theme":"light","styles":{"branding":{"brandColor":"{{ $settings->brand_color }}"}}});
    </script>
    <!-- Cal inline embed code ends -->
@endif
