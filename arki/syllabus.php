<!DOCTYPE html>
<html id="oberlin2020" class="no-js" lang="en" dir="ltr">
<!-- Mirrored from www.oberlin.edu/about-oberlin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2024 16:53:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <!-- FAVICON -->
  <meta name="theme-color" content="#ffffff" />

  <meta charset="utf-8" />
  <script type="text/javascript">
    (window.NREUM || (NREUM = {})).init = {
      privacy: {
        cookies_enabled: true
      },
      ajax: {
        deny_list: []
      },
      distributed_tracing: {
        enabled: true
      },
    };
    (window.NREUM || (NREUM = {})).loader_config = {
      agentID: "594371144",
      accountID: "3655979",
      trustKey: "66686",
      xpid: "VwACVF9UARAFVVlQAAkAVVw=",
      licenseKey: "NRJS-d4247257aea6225d681",
      applicationID: "518278738",
    }; /*! For license information please see nr-loader-full-1.258.0.min.js.LICENSE.txt */
    (() => {
      var e,
        t,
        r = {
          234: (e, t, r) => {
            "use strict";
            r.d(t, {
              P_: () => m,
              Mt: () => b,
              C5: () => s,
              DL: () => w,
              OP: () => N,
              lF: () => P,
              Yu: () => x,
              Dg: () => v,
              CX: () => c,
              GE: () => E,
              sU: () => O,
            });
            var n = r(8632),
              i = r(9567);
            const o = {
                beacon: n.ce.beacon,
                errorBeacon: n.ce.errorBeacon,
                licenseKey: void 0,
                applicationID: void 0,
                sa: void 0,
                queueTime: void 0,
                applicationTime: void 0,
                ttGuid: void 0,
                user: void 0,
                account: void 0,
                product: void 0,
                extra: void 0,
                jsAttributes: {},
                userAttributes: void 0,
                atts: void 0,
                transactionName: void 0,
                tNamePlain: void 0,
              },
              a = {};

            function s(e) {
              if (!e)
                throw new Error(
                  "All info objects require an agent identifier!"
                );
              if (!a[e])
                throw new Error("Info for ".concat(e, " was never set"));
              return a[e];
            }

            function c(e, t) {
              if (!e)
                throw new Error(
                  "All info objects require an agent identifier!"
                );
              a[e] = (0, i.D)(t, o);
              const r = (0, n.ek)(e);
              r && (r.info = a[e]);
            }
            const d = (e) => {
              if (!e || "string" != typeof e) return !1;
              try {
                document.createDocumentFragment().querySelector(e);
              } catch {
                return !1;
              }
              return !0;
            };
            var u = r(7056),
              l = r(50);
            const f = "[data-nr-mask]",
              h = () => {
                const e = {
                  mask_selector: "*",
                  block_selector: "[data-nr-block]",
                  mask_input_options: {
                    color: !1,
                    date: !1,
                    "datetime-local": !1,
                    email: !1,
                    month: !1,
                    number: !1,
                    range: !1,
                    search: !1,
                    tel: !1,
                    text: !1,
                    time: !1,
                    url: !1,
                    week: !1,
                    textarea: !1,
                    select: !1,
                    password: !0,
                  },
                };
                return {
                  feature_flags: [],
                  proxy: {
                    assets: void 0,
                    beacon: void 0
                  },
                  privacy: {
                    cookies_enabled: !0
                  },
                  ajax: {
                    deny_list: void 0,
                    block_internal: !0,
                    enabled: !0,
                    harvestTimeSeconds: 10,
                    autoStart: !0,
                  },
                  distributed_tracing: {
                    enabled: void 0,
                    exclude_newrelic_header: void 0,
                    cors_use_newrelic_header: void 0,
                    cors_use_tracecontext_headers: void 0,
                    allowed_origins: void 0,
                  },
                  session: {
                    expiresMs: u.oD,
                    inactiveMs: u.Hb
                  },
                  ssl: void 0,
                  obfuscate: void 0,
                  jserrors: {
                    enabled: !0,
                    harvestTimeSeconds: 10,
                    autoStart: !0,
                  },
                  metrics: {
                    enabled: !0,
                    autoStart: !0
                  },
                  page_action: {
                    enabled: !0,
                    harvestTimeSeconds: 30,
                    autoStart: !0,
                  },
                  page_view_event: {
                    enabled: !0,
                    autoStart: !0
                  },
                  page_view_timing: {
                    enabled: !0,
                    harvestTimeSeconds: 30,
                    long_task: !1,
                    autoStart: !0,
                  },
                  session_trace: {
                    enabled: !0,
                    harvestTimeSeconds: 10,
                    autoStart: !0,
                  },
                  harvest: {
                    tooManyRequestsDelay: 60
                  },
                  session_replay: {
                    autoStart: !0,
                    enabled: !1,
                    harvestTimeSeconds: 60,
                    preload: !1,
                    sampling_rate: 10,
                    error_sampling_rate: 100,
                    collect_fonts: !1,
                    inline_images: !1,
                    inline_stylesheet: !0,
                    mask_all_inputs: !0,
                    get mask_text_selector() {
                      return e.mask_selector;
                    },
                    set mask_text_selector(t) {
                      d(t) ?
                        (e.mask_selector = "".concat(t, ",").concat(f)) :
                        "" === t || null === t ?
                        (e.mask_selector = f) :
                        (0, l.Z)(
                          "An invalid session_replay.mask_selector was provided. '*' will be used.",
                          t
                        );
                    },
                    get block_class() {
                      return "nr-block";
                    },
                    get ignore_class() {
                      return "nr-ignore";
                    },
                    get mask_text_class() {
                      return "nr-mask";
                    },
                    get block_selector() {
                      return e.block_selector;
                    },
                    set block_selector(t) {
                      d(t) ?
                        (e.block_selector += ",".concat(t)) :
                        "" !== t &&
                        (0, l.Z)(
                          "An invalid session_replay.block_selector was provided and will not be used",
                          t
                        );
                    },
                    get mask_input_options() {
                      return e.mask_input_options;
                    },
                    set mask_input_options(t) {
                      t && "object" == typeof t ?
                        (e.mask_input_options = {
                          ...t,
                          password: !0
                        }) :
                        (0, l.Z)(
                          "An invalid session_replay.mask_input_option was provided and will not be used",
                          t
                        );
                    },
                  },
                  spa: {
                    enabled: !0,
                    harvestTimeSeconds: 10,
                    autoStart: !0
                  },
                  soft_navigations: {
                    enabled: !0,
                    harvestTimeSeconds: 10,
                    autoStart: !0,
                  },
                };
              },
              p = {},
              g = "All configuration objects require an agent identifier!";

            function m(e) {
              if (!e) throw new Error(g);
              if (!p[e])
                throw new Error(
                  "Configuration for ".concat(e, " was never set")
                );
              return p[e];
            }

            function v(e, t) {
              if (!e) throw new Error(g);
              p[e] = (0, i.D)(t, h());
              const r = (0, n.ek)(e);
              r && (r.init = p[e]);
            }

            function b(e, t) {
              if (!e) throw new Error(g);
              var r = m(e);
              if (r) {
                for (var n = t.split("."), i = 0; i < n.length - 1; i++)
                  if ("object" != typeof(r = r[n[i]])) return;
                r = r[n[n.length - 1]];
              }
              return r;
            }
            const y = {
                accountID: void 0,
                trustKey: void 0,
                agentID: void 0,
                licenseKey: void 0,
                applicationID: void 0,
                xpid: void 0,
              },
              A = {};

            function w(e) {
              if (!e)
                throw new Error(
                  "All loader-config objects require an agent identifier!"
                );
              if (!A[e])
                throw new Error(
                  "LoaderConfig for ".concat(e, " was never set")
                );
              return A[e];
            }

            function E(e, t) {
              if (!e)
                throw new Error(
                  "All loader-config objects require an agent identifier!"
                );
              A[e] = (0, i.D)(t, y);
              const r = (0, n.ek)(e);
              r && (r.loader_config = A[e]);
            }
            const x = (0, n.mF)().o;
            var _ = r(385),
              R = r(6818);
            const S = {
                buildEnv: R.Re,
                distMethod: R.gF,
                version: R.q4,
                originTime: _.sK,
              },
              T = {
                customTransaction: void 0,
                disabled: !1,
                isolatedBacklog: !1,
                loaderType: void 0,
                maxBytes: 3e4,
                onerror: void 0,
                origin: "" + _._A.location,
                ptid: void 0,
                releaseIds: {},
                appMetadata: {},
                session: void 0,
                denyList: void 0,
                harvestCount: 0,
                timeKeeper: void 0,
              },
              D = {};

            function N(e) {
              if (!e)
                throw new Error(
                  "All runtime objects require an agent identifier!"
                );
              if (!D[e])
                throw new Error("Runtime for ".concat(e, " was never set"));
              return D[e];
            }

            function O(e, t) {
              if (!e)
                throw new Error(
                  "All runtime objects require an agent identifier!"
                );
              D[e] = {
                ...(0, i.D)(t, T),
                ...S
              };
              const r = (0, n.ek)(e);
              r && (r.runtime = D[e]);
            }

            function P(e) {
              return (function(e) {
                try {
                  const t = s(e);
                  return (
                    !!t.licenseKey && !!t.errorBeacon && !!t.applicationID
                  );
                } catch (e) {
                  return !1;
                }
              })(e);
            }
          },
          9567: (e, t, r) => {
            "use strict";
            r.d(t, {
              D: () => i
            });
            var n = r(50);

            function i(e, t) {
              try {
                if (!e || "object" != typeof e)
                  return (0, n.Z)(
                    "Setting a Configurable requires an object as input"
                  );
                if (!t || "object" != typeof t)
                  return (0, n.Z)(
                    "Setting a Configurable requires a model to set its initial properties"
                  );
                const r = Object.create(
                    Object.getPrototypeOf(t),
                    Object.getOwnPropertyDescriptors(t)
                  ),
                  o = 0 === Object.keys(r).length ? e : r;
                for (let a in o)
                  if (void 0 !== e[a])
                    try {
                      if (null === e[a]) {
                        r[a] = null;
                        continue;
                      }
                      Array.isArray(e[a]) && Array.isArray(t[a]) ?
                        (r[a] = Array.from(new Set([...e[a], ...t[a]]))) :
                        "object" == typeof e[a] && "object" == typeof t[a] ?
                        (r[a] = i(e[a], t[a])) :
                        (r[a] = e[a]);
                    } catch (e) {
                      (0, n.Z)(
                        "An error occurred while setting a property of a Configurable",
                        e
                      );
                    }
                return r;
              } catch (e) {
                (0, n.Z)("An error occured while setting a Configurable", e);
              }
            }
          },
          6818: (e, t, r) => {
            "use strict";
            r.d(t, {
              Re: () => i,
              gF: () => o,
              lF: () => a,
              q4: () => n
            });
            const n = "1.258.0",
              i = "PROD",
              o = "CDN",
              a = "2.0.0-alpha.12";
          },
          385: (e, t, r) => {
            "use strict";
            r.d(t, {
              FN: () => s,
              IF: () => u,
              Nk: () => f,
              Tt: () => c,
              _A: () => o,
              iS: () => a,
              il: () => n,
              sK: () => h,
              ux: () => d,
              v6: () => i,
              w1: () => l,
            });
            const n = "undefined" != typeof window && !!window.document,
              i =
              "undefined" != typeof WorkerGlobalScope &&
              (("undefined" != typeof self &&
                  self instanceof WorkerGlobalScope &&
                  self.navigator instanceof WorkerNavigator) ||
                ("undefined" != typeof globalThis &&
                  globalThis instanceof WorkerGlobalScope &&
                  globalThis.navigator instanceof WorkerNavigator)),
              o = n ?
              window :
              "undefined" != typeof WorkerGlobalScope &&
              (("undefined" != typeof self &&
                  self instanceof WorkerGlobalScope &&
                  self) ||
                ("undefined" != typeof globalThis &&
                  globalThis instanceof WorkerGlobalScope &&
                  globalThis)),
              a = Boolean("hidden" === o?.document?.visibilityState),
              s = "" + o?.location,
              c = /iPad|iPhone|iPod/.test(o.navigator?.userAgent),
              d = c && "undefined" == typeof SharedWorker,
              u = (() => {
                const e = o.navigator?.userAgent?.match(
                  /Firefox[/\s](\d+\.\d+)/
                );
                return Array.isArray(e) && e.length >= 2 ? +e[1] : 0;
              })(),
              l = Boolean(n && window.document.documentMode),
              f = !!o.navigator?.sendBeacon,
              h = Math.floor(Date.now() - performance.now());
          },
          1117: (e, t, r) => {
            "use strict";
            r.d(t, {
              w: () => o
            });
            var n = r(50);
            const i = {
              agentIdentifier: "",
              ee: void 0
            };
            class o {
              constructor(e) {
                try {
                  if ("object" != typeof e)
                    return (0, n.Z)(
                      "shared context requires an object as input"
                    );
                  (this.sharedContext = {}),
                  Object.assign(this.sharedContext, i),
                    Object.entries(e).forEach((e) => {
                      let [t, r] = e;
                      Object.keys(i).includes(t) &&
                        (this.sharedContext[t] = r);
                    });
                } catch (e) {
                  (0, n.Z)(
                    "An error occurred while setting SharedContext",
                    e
                  );
                }
              }
            }
          },
          8e3: (e, t, r) => {
            "use strict";
            r.d(t, {
              LP: () => l,
              RP: () => c,
              o5: () => d
            });
            var n = r(8325),
              i = r(1284),
              o = r(4322),
              a = r(3325);
            const s = {};

            function c(e, t) {
              const r = {
                staged: !1,
                priority: a.p[t] || 0
              };
              u(e), s[e].get(t) || s[e].set(t, r);
            }

            function d(e, t) {
              u(e), s[e].get(t) && s[e].delete(t), s[e].size && f(e);
            }

            function u(e) {
              if (!e) throw new Error("agentIdentifier required");
              s[e] || (s[e] = new Map());
            }

            function l() {
              let e =
                arguments.length > 0 && void 0 !== arguments[0] ?
                arguments[0] :
                "",
                t =
                arguments.length > 1 && void 0 !== arguments[1] ?
                arguments[1] :
                "feature",
                r =
                arguments.length > 2 &&
                void 0 !== arguments[2] &&
                arguments[2];
              if ((u(e), !e || !s[e].get(t) || r)) return h(e, t);
              (s[e].get(t).staged = !0), f(e);
            }

            function f(e) {
              const t = [...s[e]];
              t.every((e) => {
                  let [t, r] = e;
                  return r.staged;
                }) &&
                (t.sort((e, t) => e[1].priority - t[1].priority),
                  t.forEach((t) => {
                    let [r] = t;
                    s[e].delete(r), h(e, r);
                  }));
            }

            function h(e, t) {
              const r = e ? n.ee.get(e) : n.ee,
                a = o.X.handlers;
              if (r.backlog && a) {
                var s = r.backlog[t],
                  c = a[t];
                if (c) {
                  for (var d = 0; s && d < s.length; ++d) p(s[d], c);
                  (0, i.D)(c, function(e, t) {
                    (0, i.D)(t, function(t, r) {
                      r[0].on(e, r[1]);
                    });
                  });
                }
                r.isolatedBacklog || delete a[t],
                  (r.backlog[t] = null),
                  r.emit("drain-" + t, []);
              }
            }

            function p(e, t) {
              var r = e[1];
              (0, i.D)(t[r], function(t, r) {
                var n = e[0];
                if (r[0] === n) {
                  var i = r[1],
                    o = e[3],
                    a = e[2];
                  i.apply(o, a);
                }
              });
            }
          },
          8325: (e, t, r) => {
            "use strict";
            r.d(t, {
              A: () => c,
              ee: () => d
            });
            var n = r(8632),
              i = r(2210),
              o = r(234);
            class a {
              constructor(e) {
                this.contextId = e;
              }
            }
            var s = r(3117);
            const c = "nr@context:".concat(s.a),
              d = (function e(t, r) {
                var n = {},
                  s = {},
                  u = {},
                  l = !1;
                try {
                  l = 16 === r.length && (0, o.OP)(r).isolatedBacklog;
                } catch (e) {}
                var f = {
                  on: p,
                  addEventListener: p,
                  removeEventListener: function(e, t) {
                    var r = n[e];
                    if (!r) return;
                    for (var i = 0; i < r.length; i++)
                      r[i] === t && r.splice(i, 1);
                  },
                  emit: function(e, r, n, i, o) {
                    !1 !== o && (o = !0);
                    if (d.aborted && !i) return;
                    t && o && t.emit(e, r, n);
                    for (
                      var a = h(n), c = g(e), u = c.length, l = 0; l < u; l++
                    )
                      c[l].apply(a, r);
                    var p = v()[s[e]];
                    p && p.push([f, e, r, a]);
                    return a;
                  },
                  get: m,
                  listeners: g,
                  context: h,
                  buffer: function(e, t) {
                    const r = v();
                    if (((t = t || "feature"), f.aborted)) return;
                    Object.entries(e || {}).forEach((e) => {
                      let [n, i] = e;
                      (s[i] = t), t in r || (r[t] = []);
                    });
                  },
                  abort: function() {
                    (f._aborted = !0),
                    Object.keys(f.backlog).forEach((e) => {
                      delete f.backlog[e];
                    });
                  },
                  isBuffering: function(e) {
                    return !!v()[s[e]];
                  },
                  debugId: r,
                  backlog: l ? {} : t && "object" == typeof t.backlog ?
                    t.backlog : {},
                  isolatedBacklog: l,
                };
                return (
                  Object.defineProperty(f, "aborted", {
                    get: () => {
                      let e = f._aborted || !1;
                      return e || (t && (e = t.aborted), e);
                    },
                  }),
                  f
                );

                function h(e) {
                  return e && e instanceof a ?
                    e :
                    e ?
                    (0, i.X)(e, c, () => new a(c)) :
                    new a(c);
                }

                function p(e, t) {
                  n[e] = g(e).concat(t);
                }

                function g(e) {
                  return n[e] || [];
                }

                function m(t) {
                  return (u[t] = u[t] || e(f, t));
                }

                function v() {
                  return f.backlog;
                }
              })(void 0, "globalEE"),
              u = (0, n.fP)();
            u.ee || (u.ee = d);
          },
          5546: (e, t, r) => {
            "use strict";
            r.d(t, {
              E: () => n,
              p: () => i
            });
            var n = r(8325).ee.get("handle");

            function i(e, t, r, i, o) {
              o
                ?
                (o.buffer([e], i), o.emit(e, t, r)) :
                (n.buffer([e], i), n.emit(e, t, r));
            }
          },
          4322: (e, t, r) => {
            "use strict";
            r.d(t, {
              X: () => o
            });
            var n = r(5546);
            o.on = a;
            var i = (o.handlers = {});

            function o(e, t, r, o) {
              a(o || n.E, i, e, t, r);
            }

            function a(e, t, r, i, o) {
              o || (o = "feature"), e || (e = n.E);
              var a = (t[o] = t[o] || {});
              (a[r] = a[r] || []).push([e, i]);
            }
          },
          3239: (e, t, r) => {
            "use strict";
            r.d(t, {
              bP: () => s,
              iz: () => c,
              m$: () => a
            });
            var n = r(385);
            let i = !1,
              o = !1;
            try {
              const e = {
                get passive() {
                  return (i = !0), !1;
                },
                get signal() {
                  return (o = !0), !1;
                },
              };
              n._A.addEventListener("test", null, e),
                n._A.removeEventListener("test", null, e);
            } catch (e) {}

            function a(e, t) {
              return i || o ? {
                capture: !!e,
                passive: i,
                signal: t
              } : !!e;
            }

            function s(e, t) {
              let r =
                arguments.length > 2 &&
                void 0 !== arguments[2] &&
                arguments[2],
                n = arguments.length > 3 ? arguments[3] : void 0;
              window.addEventListener(e, t, a(r, n));
            }

            function c(e, t) {
              let r =
                arguments.length > 2 &&
                void 0 !== arguments[2] &&
                arguments[2],
                n = arguments.length > 3 ? arguments[3] : void 0;
              document.addEventListener(e, t, a(r, n));
            }
          },
          3117: (e, t, r) => {
            "use strict";
            r.d(t, {
              a: () => n
            });
            const n = (0, r(4402).Rl)();
          },
          4402: (e, t, r) => {
            "use strict";
            r.d(t, {
              Ht: () => d,
              M: () => c,
              Rl: () => a,
              ky: () => s
            });
            var n = r(385);
            const i = "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";

            function o(e, t) {
              return e ? 15 & e[t] : (16 * Math.random()) | 0;
            }

            function a() {
              const e = n._A?.crypto || n._A?.msCrypto;
              let t,
                r = 0;
              return (
                e &&
                e.getRandomValues &&
                (t = e.getRandomValues(new Uint8Array(30))),
                i
                .split("")
                .map((e) =>
                  "x" === e ?
                  o(t, r++).toString(16) :
                  "y" === e ?
                  ((3 & o()) | 8).toString(16) :
                  e
                )
                .join("")
              );
            }

            function s(e) {
              const t = n._A?.crypto || n._A?.msCrypto;
              let r,
                i = 0;
              t &&
                t.getRandomValues &&
                (r = t.getRandomValues(new Uint8Array(e)));
              const a = [];
              for (var s = 0; s < e; s++) a.push(o(r, i++).toString(16));
              return a.join("");
            }

            function c() {
              return s(16);
            }

            function d() {
              return s(32);
            }
          },
          7056: (e, t, r) => {
            "use strict";
            r.d(t, {
              Bq: () => n,
              Hb: () => a,
              IK: () => d,
              K4: () => i,
              oD: () => o,
              uT: () => c,
              wO: () => s,
            });
            const n = "NRBA",
              i = "SESSION",
              o = 144e5,
              a = 18e5,
              s = {
                STARTED: "session-started",
                PAUSE: "session-pause",
                RESET: "session-reset",
                RESUME: "session-resume",
                UPDATE: "session-update",
              },
              c = {
                SAME_TAB: "same-tab",
                CROSS_TAB: "cross-tab"
              },
              d = {
                OFF: 0,
                FULL: 1,
                ERROR: 2
              };
          },
          7894: (e, t, r) => {
            "use strict";

            function n() {
              return Math.floor(performance.now());
            }
            r.d(t, {
              z: () => n
            });
          },
          7243: (e, t, r) => {
            "use strict";
            r.d(t, {
              e: () => i
            });
            var n = r(385);

            function i(e) {
              if (0 === (e || "").indexOf("data:"))
                return {
                  protocol: "data"
                };
              try {
                const t = new URL(e, location.href),
                  r = {
                    port: t.port,
                    hostname: t.hostname,
                    pathname: t.pathname,
                    search: t.search,
                    protocol: t.protocol.slice(0, t.protocol.indexOf(":")),
                    sameOrigin: t.protocol === n._A?.location?.protocol &&
                      t.host === n._A?.location?.host,
                  };
                return (
                  (r.port && "" !== r.port) ||
                  ("http:" === t.protocol && (r.port = "80"),
                    "https:" === t.protocol && (r.port = "443")),
                  r.pathname && "" !== r.pathname ?
                  r.pathname.startsWith("/") ||
                  (r.pathname = "/".concat(r.pathname)) :
                  (r.pathname = "/"),
                  r
                );
              } catch (e) {
                return {};
              }
            }
          },
          50: (e, t, r) => {
            "use strict";

            function n(e, t) {
              "function" == typeof console.warn &&
                (console.warn("New Relic: ".concat(e)), t && console.warn(t));
            }
            r.d(t, {
              Z: () => n
            });
          },
          2825: (e, t, r) => {
            "use strict";
            r.d(t, {
              N: () => c,
              T: () => s
            });
            var n = r(8325),
              i = r(385);
            const o = "newrelic";
            const a = new Set(),
              s = {};

            function c(e, t) {
              const r = n.ee.get(t);
              (s[t] ??= {}),
              e &&
                "object" == typeof e &&
                (a.has(t) ||
                  (r.emit("rumresp", [e]),
                    (s[t] = e),
                    a.add(t),
                    (function() {
                      let e =
                        arguments.length > 0 && void 0 !== arguments[0] ?
                        arguments[0] : {};
                      try {
                        i._A.dispatchEvent(new CustomEvent(o, {
                          detail: e
                        }));
                      } catch (e) {}
                    })({
                      loaded: !0
                    })));
            }
          },
          2210: (e, t, r) => {
            "use strict";
            r.d(t, {
              X: () => i
            });
            var n = Object.prototype.hasOwnProperty;

            function i(e, t, r) {
              if (n.call(e, t)) return e[t];
              var i = r();
              if (Object.defineProperty && Object.keys)
                try {
                  return (
                    Object.defineProperty(e, t, {
                      value: i,
                      writable: !0,
                      enumerable: !1,
                    }),
                    i
                  );
                } catch (e) {}
              return (e[t] = i), i;
            }
          },
          7872: (e, t, r) => {
            "use strict";

            function n(e) {
              var t = this;
              let r =
                arguments.length > 1 && void 0 !== arguments[1] ?
                arguments[1] :
                500,
                n =
                arguments.length > 2 && void 0 !== arguments[2] ?
                arguments[2] : {};
              const i = n?.leading || !1;
              let o;
              return function() {
                for (
                  var n = arguments.length, a = new Array(n), s = 0; s < n; s++
                )
                  a[s] = arguments[s];
                i &&
                  void 0 === o &&
                  (e.apply(t, a),
                    (o = setTimeout(() => {
                      o = clearTimeout(o);
                    }, r))),
                  i ||
                  (clearTimeout(o),
                    (o = setTimeout(() => {
                      e.apply(t, a);
                    }, r)));
              };
            }

            function i(e) {
              var t = this;
              let r = !1;
              return function() {
                if (!r) {
                  r = !0;
                  for (
                    var n = arguments.length, i = new Array(n), o = 0; o < n; o++
                  )
                    i[o] = arguments[o];
                  e.apply(t, i);
                }
              };
            }
            r.d(t, {
              D: () => n,
              Z: () => i
            });
          },
          1284: (e, t, r) => {
            "use strict";
            r.d(t, {
              D: () => n
            });
            const n = (e, t) =>
              Object.entries(e || {}).map((e) => {
                let [r, n] = e;
                return t(r, n);
              });
          },
          4351: (e, t, r) => {
            "use strict";
            r.d(t, {
              P: () => o
            });
            var n = r(8325);
            const i = () => {
              const e = new WeakSet();
              return (t, r) => {
                if ("object" == typeof r && null !== r) {
                  if (e.has(r)) return;
                  e.add(r);
                }
                return r;
              };
            };

            function o(e) {
              try {
                return JSON.stringify(e, i());
              } catch (e) {
                try {
                  n.ee.emit("internal-error", [e]);
                } catch (e) {}
              }
            }
          },
          3960: (e, t, r) => {
            "use strict";
            r.d(t, {
              KB: () => a,
              b2: () => o
            });
            var n = r(3239);

            function i() {
              return (
                "undefined" == typeof document ||
                "complete" === document.readyState
              );
            }

            function o(e, t) {
              if (i()) return e();
              (0, n.bP)("load", e, t);
            }

            function a(e) {
              if (i()) return e();
              (0, n.iz)("DOMContentLoaded", e);
            }
          },
          8632: (e, t, r) => {
            "use strict";
            r.d(t, {
              EZ: () => u,
              ce: () => o,
              ek: () => d,
              fP: () => a,
              gG: () => l,
              h5: () => c,
              mF: () => s,
            });
            var n = r(385),
              i = r(7894);
            const o = {
              beacon: "bam.nr-data.net",
              errorBeacon: "bam.nr-data.net",
            };

            function a() {
              return (
                n._A.NREUM || (n._A.NREUM = {}),
                void 0 === n._A.newrelic && (n._A.newrelic = n._A.NREUM),
                n._A.NREUM
              );
            }

            function s() {
              let e = a();
              return (
                e.o ||
                (e.o = {
                  ST: n._A.setTimeout,
                  SI: n._A.setImmediate,
                  CT: n._A.clearTimeout,
                  XHR: n._A.XMLHttpRequest,
                  REQ: n._A.Request,
                  EV: n._A.Event,
                  PR: n._A.Promise,
                  MO: n._A.MutationObserver,
                  FETCH: n._A.fetch,
                }),
                e
              );
            }

            function c(e, t) {
              let r = a();
              (r.initializedAgents ??= {}),
              (t.initializedAt = {
                ms: (0, i.z)(),
                date: new Date()
              }),
              (r.initializedAgents[e] = t);
            }

            function d(e) {
              let t = a();
              return t.initializedAgents?.[e];
            }

            function u(e, t) {
              a()[e] = t;
            }

            function l() {
              return (
                (function() {
                  let e = a();
                  const t = e.info || {};
                  e.info = {
                    beacon: o.beacon,
                    errorBeacon: o.errorBeacon,
                    ...t,
                  };
                })(),
                (function() {
                  let e = a();
                  const t = e.init || {};
                  e.init = {
                    ...t
                  };
                })(),
                s(),
                (function() {
                  let e = a();
                  const t = e.loader_config || {};
                  e.loader_config = {
                    ...t
                  };
                })(),
                a()
              );
            }
          },
          7956: (e, t, r) => {
            "use strict";
            r.d(t, {
              N: () => i
            });
            var n = r(3239);

            function i(e) {
              let t =
                arguments.length > 1 &&
                void 0 !== arguments[1] &&
                arguments[1],
                r = arguments.length > 2 ? arguments[2] : void 0,
                i = arguments.length > 3 ? arguments[3] : void 0;
              (0, n.iz)(
                "visibilitychange",
                function() {
                  if (t)
                    return void(
                      "hidden" === document.visibilityState && e()
                    );
                  e(document.visibilityState);
                },
                r,
                i
              );
            }
          },
          7806: (e, t, r) => {
            "use strict";
            r.d(t, {
              em: () => b,
              u5: () => T,
              QU: () => O,
              Kf: () => k
            });
            var n = r(8325),
              i = r(3117);
            const o = "nr@original:".concat(i.a);
            var a = Object.prototype.hasOwnProperty,
              s = !1;

            function c(e, t) {
              return (
                e || (e = n.ee),
                (r.inPlace = function(e, t, n, i, o) {
                  n || (n = "");
                  const a = "-" === n.charAt(0);
                  for (let s = 0; s < t.length; s++) {
                    const c = t[s],
                      d = e[c];
                    u(d) || (e[c] = r(d, a ? c + n : n, i, c, o));
                  }
                }),
                (r.flag = o),
                r
              );

              function r(t, r, n, s, c) {
                return u(t) ?
                  t :
                  (r || (r = ""),
                    (nrWrapper[o] = t),
                    (function(e, t, r) {
                      if (Object.defineProperty && Object.keys)
                        try {
                          return (
                            Object.keys(e).forEach(function(r) {
                              Object.defineProperty(t, r, {
                                get: function() {
                                  return e[r];
                                },
                                set: function(t) {
                                  return (e[r] = t), t;
                                },
                              });
                            }),
                            t
                          );
                        } catch (e) {
                          d([e], r);
                        }
                      for (var n in e) a.call(e, n) && (t[n] = e[n]);
                    })(t, nrWrapper, e),
                    nrWrapper);

                function nrWrapper() {
                  var o, a, u, l;
                  try {
                    (a = this),
                    (o = [...arguments]),
                    (u = "function" == typeof n ? n(o, a) : n || {});
                  } catch (t) {
                    d([t, "", [o, a, s], u], e);
                  }
                  i(r + "start", [o, a, s], u, c);
                  try {
                    return (l = t.apply(a, o));
                  } catch (e) {
                    throw (i(r + "err", [o, a, e], u, c), e);
                  } finally {
                    i(r + "end", [o, a, l], u, c);
                  }
                }
              }

              function i(r, n, i, o) {
                if (!s || t) {
                  var a = s;
                  s = !0;
                  try {
                    e.emit(r, n, i, t, o);
                  } catch (t) {
                    d([t, r, n, i], e);
                  }
                  s = a;
                }
              }
            }

            function d(e, t) {
              t || (t = n.ee);
              try {
                t.emit("internal-error", e);
              } catch (e) {}
            }

            function u(e) {
              return !(e && "function" == typeof e && e.apply && !e[o]);
            }
            var l = r(2210),
              f = r(385);
            const h = {},
              p = f._A.XMLHttpRequest,
              g = "addEventListener",
              m = "removeEventListener",
              v = "nr@wrapped:".concat(n.A);

            function b(e) {
              var t = (function(e) {
                return (e || n.ee).get("events");
              })(e);
              if (h[t.debugId]++) return t;
              h[t.debugId] = 1;
              var r = c(t, !0);

              function i(e) {
                r.inPlace(e, [g, m], "-", o);
              }

              function o(e, t) {
                return e[1];
              }
              return (
                "getPrototypeOf" in Object &&
                (f.il && y(document, i), y(f._A, i), y(p.prototype, i)),
                t.on(g + "-start", function(e, t) {
                  var n = e[1];
                  if (
                    null !== n &&
                    ("function" == typeof n || "object" == typeof n)
                  ) {
                    var i = (0, l.X)(n, v, function() {
                      var e = {
                        object: function() {
                          if ("function" != typeof n.handleEvent) return;
                          return n.handleEvent.apply(n, arguments);
                        },
                        function: n,
                      } [typeof n];
                      return e ? r(e, "fn-", null, e.name || "anonymous") : n;
                    });
                    this.wrapped = e[1] = i;
                  }
                }),
                t.on(m + "-start", function(e) {
                  e[1] = this.wrapped || e[1];
                }),
                t
              );
            }

            function y(e, t) {
              let r = e;
              for (;
                "object" == typeof r &&
                !Object.prototype.hasOwnProperty.call(r, g);

              )
                r = Object.getPrototypeOf(r);
              for (
                var n = arguments.length,
                  i = new Array(n > 2 ? n - 2 : 0),
                  o = 2; o < n; o++
              )
                i[o - 2] = arguments[o];
              r && t(r, ...i);
            }
            var A = "fetch-",
              w = A + "body-",
              E = ["arrayBuffer", "blob", "json", "text", "formData"],
              x = f._A.Request,
              _ = f._A.Response,
              R = "prototype";
            const S = {};

            function T(e) {
              const t = (function(e) {
                return (e || n.ee).get("fetch");
              })(e);
              if (!(x && _ && f._A.fetch)) return t;
              if (S[t.debugId]++) return t;

              function r(e, r, i) {
                var o = e[r];
                "function" == typeof o &&
                  (e[r] = function() {
                    var e,
                      r = [...arguments],
                      a = {};
                    t.emit(i + "before-start", [r], a),
                      a[n.A] && a[n.A].dt && (e = a[n.A].dt);
                    var s = o.apply(this, r);
                    return (
                      t.emit(i + "start", [r, e], s),
                      s.then(
                        function(e) {
                          return t.emit(i + "end", [null, e], s), e;
                        },
                        function(e) {
                          throw (t.emit(i + "end", [e], s), e);
                        }
                      )
                    );
                  });
              }
              return (
                (S[t.debugId] = 1),
                E.forEach((e) => {
                  r(x[R], e, w), r(_[R], e, w);
                }),
                r(f._A, "fetch", A),
                t.on(A + "end", function(e, r) {
                  var n = this;
                  if (r) {
                    var i = r.headers.get("content-length");
                    null !== i && (n.rxSize = i),
                      t.emit(A + "done", [null, r], n);
                  } else t.emit(A + "done", [e], n);
                }),
                t
              );
            }
            const D = {},
              N = ["pushState", "replaceState"];

            function O(e) {
              const t = (function(e) {
                return (e || n.ee).get("history");
              })(e);
              return (
                !f.il ||
                D[t.debugId]++ ||
                ((D[t.debugId] = 1), c(t).inPlace(window.history, N, "-")),
                t
              );
            }
            var P = r(3239);
            var I = r(50);
            const j = {},
              C = ["open", "send"];

            function k(e) {
              var t = e || n.ee;
              const r = (function(e) {
                return (e || n.ee).get("xhr");
              })(t);
              if (j[r.debugId]++) return r;
              (j[r.debugId] = 1), b(t);
              var i = c(r),
                o = f._A.XMLHttpRequest,
                a = f._A.MutationObserver,
                s = f._A.Promise,
                d = f._A.setInterval,
                u = "readystatechange",
                l = [
                  "onload",
                  "onerror",
                  "onabort",
                  "onloadstart",
                  "onloadend",
                  "onprogress",
                  "ontimeout",
                ],
                h = [],
                p = (f._A.XMLHttpRequest = function(e) {
                  const t = new o(e),
                    n = r.context(t);
                  try {
                    r.emit("new-xhr", [t], n),
                      t.addEventListener(
                        u,
                        ((a = n),
                          function() {
                            var e = this;
                            e.readyState > 3 &&
                              !a.resolved &&
                              ((a.resolved = !0),
                                r.emit("xhr-resolved", [], e)),
                              i.inPlace(e, l, "fn-", w);
                          }),
                        (0, P.m$)(!1)
                      );
                  } catch (e) {
                    (0, I.Z)("An error occurred while intercepting XHR", e);
                    try {
                      r.emit("internal-error", [e]);
                    } catch (e) {}
                  }
                  var a;
                  return t;
                });

              function g(e, t) {
                i.inPlace(t, ["onreadystatechange"], "fn-", w);
              }
              if (
                ((function(e, t) {
                    for (var r in e) t[r] = e[r];
                  })(o, p),
                  (p.prototype = o.prototype),
                  i.inPlace(p.prototype, C, "-xhr-", w),
                  r.on("send-xhr-start", function(e, t) {
                    g(e, t),
                      (function(e) {
                        h.push(e),
                          a &&
                          (m ?
                            m.then(A) :
                            d ?
                            d(A) :
                            ((v = -v), (y.data = v)));
                      })(t);
                  }),
                  r.on("open-xhr-start", g),
                  a)
              ) {
                var m = s && s.resolve();
                if (!d && !s) {
                  var v = 1,
                    y = document.createTextNode(v);
                  new a(A).observe(y, {
                    characterData: !0
                  });
                }
              } else
                t.on("fn-end", function(e) {
                  (e[0] && e[0].type === u) || A();
                });

              function A() {
                for (var e = 0; e < h.length; e++) g(0, h[e]);
                h.length && (h = []);
              }

              function w(e, t) {
                return t;
              }
              return r;
            }
          },
          7825: (e, t, r) => {
            "use strict";
            r.d(t, {
              t: () => n
            });
            const n = r(3325).D.ajax;
          },
          6660: (e, t, r) => {
            "use strict";
            r.d(t, {
              t: () => n
            });
            const n = r(3325).D.jserrors;
          },
          3081: (e, t, r) => {
            "use strict";
            r.d(t, {
              gF: () => o,
              mY: () => i,
              t9: () => n,
              vz: () => s,
              xS: () => a,
            });
            const n = r(3325).D.metrics,
              i = "sm",
              o = "cm",
              a = "storeSupportabilityMetrics",
              s = "storeEventMetrics";
          },
          4649: (e, t, r) => {
            "use strict";
            r.d(t, {
              t: () => n
            });
            const n = r(3325).D.pageAction;
          },
          7633: (e, t, r) => {
            "use strict";
            r.d(t, {
              t: () => n
            });
            const n = r(3325).D.pageViewEvent;
          },
          9251: (e, t, r) => {
            "use strict";
            r.d(t, {
              t: () => n
            });
            const n = r(3325).D.pageViewTiming;
          },
          7144: (e, t, r) => {
            "use strict";
            r.d(t, {
              Ef: () => o,
              J0: () => f,
              Mi: () => l,
              Vb: () => a,
              Ye: () => c,
              fm: () => d,
              i9: () => s,
              t9: () => i,
              u0: () => u,
            });
            var n = r(7056);
            const i = r(3325).D.sessionReplay,
              o = {
                RECORD: "recordReplay",
                PAUSE: "pauseReplay",
                REPLAY_RUNNING: "replayRunning",
                ERROR_DURING_REPLAY: "errorDuringReplay",
              },
              a = 0.12,
              s = {
                DomContentLoaded: 0,
                Load: 1,
                FullSnapshot: 2,
                IncrementalSnapshot: 3,
                Meta: 4,
                Custom: 5,
              },
              c = 1e6,
              d = 64e3,
              u = {
                [n.IK.ERROR]: 15e3,
                [n.IK.FULL]: 3e5,
                [n.IK.OFF]: 0
              },
              l = {
                RESET: {
                  message: "Session was reset",
                  sm: "Reset"
                },
                IMPORT: {
                  message: "Recorder failed to import",
                  sm: "Import",
                },
                TOO_MANY: {
                  message: "429: Too Many Requests",
                  sm: "Too-Many",
                },
                TOO_BIG: {
                  message: "Payload was too large",
                  sm: "Too-Big"
                },
                CROSS_TAB: {
                  message: "Session Entity was set to OFF on another tab",
                  sm: "Cross-Tab",
                },
                ENTITLEMENTS: {
                  message: "Session Replay is not allowed and will not be started",
                  sm: "Entitlement",
                },
              },
              f = 5e3;
          },
          3112: (e, t, r) => {
            "use strict";
            r.d(t, {
              HM: () => c,
              ev: () => o,
              rU: () => s,
              wi: () => d
            });
            var n = r(234),
              i = r(385);

            function o(e) {
              return i.il && !0 === (0, n.Mt)(e, "privacy.cookies_enabled");
            }

            function a(e) {
              return (
                !!n.Yu.MO &&
                o(e) &&
                !0 === (0, n.Mt)(e, "session_trace.enabled")
              );
            }

            function s(e) {
              return !0 === (0, n.Mt)(e, "session_replay.preload") && a(e);
            }

            function c(e, t) {
              return !!a(e) && (!!t?.isNew || !!t?.state.sessionReplayMode);
            }

            function d(e, t) {
              const r = t.correctAbsoluteTimestamp(e);
              return {
                originalTimestamp: e,
                correctedTimestamp: r,
                timestampDiff: e - r,
                originTime: i.sK,
                correctedOriginTime: t.correctedOriginTime,
                originTimeDiff: Math.floor(i.sK - t.correctedOriginTime),
              };
            }
          },
          3614: (e, t, r) => {
            "use strict";
            r.d(t, {
              BST_RESOURCE: () => i,
              END: () => s,
              FEATURE_NAME: () => n,
              FN_END: () => d,
              FN_START: () => c,
              PUSH_STATE: () => u,
              RESOURCE: () => o,
              START: () => a,
            });
            const n = r(3325).D.sessionTrace,
              i = "bstResource",
              o = "resource",
              a = "-start",
              s = "-end",
              c = "fn" + a,
              d = "fn" + s,
              u = "pushState";
          },
          5938: (e, t, r) => {
            "use strict";
            r.d(t, {
              W: () => i
            });
            var n = r(8325);
            class i {
              constructor(e, t, r) {
                (this.agentIdentifier = e),
                (this.aggregator = t),
                (this.ee = n.ee.get(e)),
                (this.featureName = r),
                (this.blocked = !1);
              }
            }
          },
          2758: (e, t, r) => {
            "use strict";
            r.d(t, {
              j: () => x
            });
            var n = r(3325),
              i = r(234),
              o = r(5546),
              a = r(8325),
              s = r(8e3),
              c = r(3960),
              d = r(385),
              u = r(50),
              l = r(3081),
              f = r(8632),
              h = r(7144);
            const p = [
                "setErrorHandler",
                "finished",
                "addToTrace",
                "addRelease",
                "addPageAction",
                "setCurrentRouteName",
                "setPageViewName",
                "setCustomAttribute",
                "interaction",
                "noticeError",
                "setUserId",
                "setApplicationVersion",
                "start",
                "recordReplay",
                "pauseReplay",
                h.Ef.RECORD,
                h.Ef.PAUSE,
              ],
              g = ["setErrorHandler", "finished", "addToTrace", "addRelease"];
            var m = r(7894),
              v = r(7056);

            function b() {
              const e = (0, f.gG)();
              p.forEach((t) => {
                e[t] = function() {
                  for (
                    var r = arguments.length, n = new Array(r), i = 0; i < r; i++
                  )
                    n[i] = arguments[i];
                  return (function(t) {
                    for (
                      var r = arguments.length,
                        n = new Array(r > 1 ? r - 1 : 0),
                        i = 1; i < r; i++
                    )
                      n[i - 1] = arguments[i];
                    let o = [];
                    return (
                      Object.values(e.initializedAgents).forEach((e) => {
                        e.exposed && e.api[t] && o.push(e.api[t](...n));
                      }),
                      o.length > 1 ? o : o[0]
                    );
                  })(t, ...n);
                };
              });
            }
            const y = {};
            var A = r(2825);
            const w = (e) => {
              const t = e.startsWith("http");
              (e += "/"), (r.p = t ? e : "https://" + e);
            };
            let E = !1;

            function x(e) {
              let t =
                arguments.length > 1 && void 0 !== arguments[1] ?
                arguments[1] : {},
                p = arguments.length > 2 ? arguments[2] : void 0,
                x = arguments.length > 3 ? arguments[3] : void 0,
                {
                  init: _,
                  info: R,
                  loader_config: S,
                  runtime: T = {
                    loaderType: p
                  },
                  exposed: D = !0,
                } = t;
              const N = (0, f.gG)();
              R || ((_ = N.init), (R = N.info), (S = N.loader_config)),
                (0, i.Dg)(e.agentIdentifier, _ || {}),
                (0, i.GE)(e.agentIdentifier, S || {}),
                (R.jsAttributes ??= {}),
                d.v6 && (R.jsAttributes.isWorker = !0),
                (0, i.CX)(e.agentIdentifier, R);
              const O = (0, i.P_)(e.agentIdentifier),
                P = [R.beacon, R.errorBeacon];
              E ||
                (O.proxy.assets &&
                  (w(O.proxy.assets), P.push(O.proxy.assets)),
                  O.proxy.beacon && P.push(O.proxy.beacon),
                  b(),
                  (0, f.EZ)("activatedFeatures", A.T),
                  (e.runSoftNavOverSpa &&=
                    !0 === O.soft_navigations.enabled &&
                    O.feature_flags.includes("soft_nav"))),
                (T.denyList = [
                  ...(O.ajax.deny_list || []),
                  ...(O.ajax.block_internal ? P : []),
                ]),
                (0, i.sU)(e.agentIdentifier, T),
                void 0 === e.api &&
                (e.api = (function(e, t) {
                  let f =
                    arguments.length > 2 &&
                    void 0 !== arguments[2] &&
                    arguments[2];
                  t || (0, s.RP)(e, "api");
                  const p = {};
                  var b = a.ee.get(e),
                    A = b.get("tracer");
                  (y[e] = v.IK.OFF),
                  b.on(h.Ef.REPLAY_RUNNING, (t) => {
                    y[e] = t;
                  });
                  var w = "api-",
                    E = w + "ixn-";

                  function x(t, r, n, o) {
                    const a = (0, i.C5)(e);
                    return (
                      null === r ?
                      delete a.jsAttributes[t] :
                      (0, i.CX)(e, {
                        ...a,
                        jsAttributes: {
                          ...a.jsAttributes,
                          [t]: r
                        },
                      }),
                      S(
                        w,
                        n,
                        !0,
                        o || null === r ? "session" : void 0
                      )(t, r)
                    );
                  }

                  function _() {}
                  g.forEach((e) => {
                      p[e] = S(w, e, !0, "api");
                    }),
                    (p.addPageAction = S(
                      w,
                      "addPageAction",
                      !0,
                      n.D.pageAction
                    )),
                    (p.setPageViewName = function(t, r) {
                      if ("string" == typeof t)
                        return (
                          "/" !== t.charAt(0) && (t = "/" + t),
                          ((0, i.OP)(e).customTransaction =
                            (r || "http://custom.transaction") + t),
                          S(w, "setPageViewName", !0)()
                        );
                    }),
                    (p.setCustomAttribute = function(e, t) {
                      let r =
                        arguments.length > 2 &&
                        void 0 !== arguments[2] &&
                        arguments[2];
                      if ("string" == typeof e) {
                        if (
                          ["string", "number", "boolean"].includes(
                            typeof t
                          ) ||
                          null === t
                        )
                          return x(e, t, "setCustomAttribute", r);
                        (0, u.Z)(
                          "Failed to execute setCustomAttribute.\nNon-null value must be a string, number or boolean type, but a type of <".concat(
                            typeof t,
                            "> was provided."
                          )
                        );
                      } else
                        (0, u.Z)(
                          "Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(
                            typeof e,
                            "> was provided."
                          )
                        );
                    }),
                    (p.setUserId = function(e) {
                      if ("string" == typeof e || null === e)
                        return x("enduser.id", e, "setUserId", !0);
                      (0, u.Z)(
                        "Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(
                          typeof e,
                          "> was provided."
                        )
                      );
                    }),
                    (p.setApplicationVersion = function(e) {
                      if ("string" == typeof e || null === e)
                        return x(
                          "application.version",
                          e,
                          "setApplicationVersion",
                          !1
                        );
                      (0, u.Z)(
                        "Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(
                          typeof e,
                          ">."
                        )
                      );
                    }),
                    (p.start = (e) => {
                      try {
                        const t = e ? "defined" : "undefined";
                        (0, o.p)(
                          l.xS,
                          ["API/start/".concat(t, "/called")],
                          void 0,
                          n.D.metrics,
                          b
                        );
                        const r = Object.values(n.D);
                        if (void 0 === e) e = r;
                        else {
                          if (
                            (e =
                              Array.isArray(e) && e.length ? e : [e]).some(
                              (e) => !r.includes(e)
                            )
                          )
                            return (0, u.Z)(
                              "Invalid feature name supplied. Acceptable feature names are: ".concat(
                                r
                              )
                            );
                          e.includes(n.D.pageViewEvent) ||
                            e.push(n.D.pageViewEvent);
                        }
                        e.forEach((e) => {
                          b.emit("".concat(e, "-opt-in"));
                        });
                      } catch (e) {
                        (0, u.Z)("An unexpected issue occurred", e);
                      }
                    }),
                    (p[h.Ef.RECORD] = function() {
                      (0, o.p)(
                        l.xS,
                        ["API/recordReplay/called"],
                        void 0,
                        n.D.metrics,
                        b
                      ),
                      (0, o.p)(
                        h.Ef.RECORD,
                        [],
                        void 0,
                        n.D.sessionReplay,
                        b
                      );
                    }),
                    (p[h.Ef.PAUSE] = function() {
                      (0, o.p)(
                        l.xS,
                        ["API/pauseReplay/called"],
                        void 0,
                        n.D.metrics,
                        b
                      ),
                      (0, o.p)(
                        h.Ef.PAUSE,
                        [],
                        void 0,
                        n.D.sessionReplay,
                        b
                      );
                    }),
                    (p.interaction = function(e) {
                      return new _().get("object" == typeof e ? e : {});
                    });
                  const R = (_.prototype = {
                    createTracer: function(e, t) {
                      var r = {},
                        i = this,
                        a = "function" == typeof t;
                      return (
                        (0, o.p)(
                          l.xS,
                          ["API/createTracer/called"],
                          void 0,
                          n.D.metrics,
                          b
                        ),
                        f ||
                        (0, o.p)(
                          E + "tracer",
                          [(0, m.z)(), e, r],
                          i,
                          n.D.spa,
                          b
                        ),
                        function() {
                          if (
                            (A.emit(
                                (a ? "" : "no-") + "fn-start",
                                [(0, m.z)(), i, a],
                                r
                              ),
                              a)
                          )
                            try {
                              return t.apply(this, arguments);
                            } catch (e) {
                              throw (
                                (A.emit("fn-err", [arguments, this, e], r),
                                  e)
                              );
                            } finally {
                              A.emit("fn-end", [(0, m.z)()], r);
                            }
                        }
                      );
                    },
                  });

                  function S(e, t, r, i) {
                    return function() {
                      return (
                        (0, o.p)(
                          l.xS,
                          ["API/" + t + "/called"],
                          void 0,
                          n.D.metrics,
                          b
                        ),
                        i &&
                        (0, o.p)(
                          e + t,
                          [(0, m.z)(), ...arguments],
                          r ? null : this,
                          i,
                          b
                        ),
                        r ? void 0 : this
                      );
                    };
                  }

                  function T() {
                    r.e(63)
                      .then(r.bind(r, 7438))
                      .then((t) => {
                        let {
                          setAPI: r
                        } = t;
                        r(e), (0, s.LP)(e, "api");
                      })
                      .catch(() => {
                        (0, u.Z)("Downloading runtime APIs failed..."),
                        b.abort();
                      });
                  }
                  return (
                    [
                      "actionText",
                      "setName",
                      "setAttribute",
                      "save",
                      "ignore",
                      "onEnd",
                      "getContext",
                      "end",
                      "get",
                    ].forEach((e) => {
                      R[e] = S(E, e, void 0, f ? n.D.softNav : n.D.spa);
                    }),
                    (p.setCurrentRouteName = f ?
                      S(E, "routeName", void 0, n.D.softNav) :
                      S(w, "routeName", !0, n.D.spa)),
                    (p.noticeError = function(t, r) {
                      "string" == typeof t && (t = new Error(t)),
                        (0, o.p)(
                          l.xS,
                          ["API/noticeError/called"],
                          void 0,
                          n.D.metrics,
                          b
                        ),
                        (0, o.p)(
                          "err",
                          [t, (0, m.z)(), !1, r, !!y[e]],
                          void 0,
                          n.D.jserrors,
                          b
                        );
                    }),
                    d.il ? (0, c.b2)(() => T(), !0) : T(),
                    p
                  );
                })(e.agentIdentifier, x, e.runSoftNavOverSpa)),
                void 0 === e.exposed && (e.exposed = D),
                (E = !0);
            }
          },
          8993: (e, t, r) => {
            r.nc = (() => {
              try {
                return document?.currentScript?.nonce;
              } catch (e) {}
              return "";
            })();
          },
          3325: (e, t, r) => {
            "use strict";
            r.d(t, {
              D: () => n,
              p: () => i
            });
            const n = {
                ajax: "ajax",
                jserrors: "jserrors",
                metrics: "metrics",
                pageAction: "page_action",
                pageViewEvent: "page_view_event",
                pageViewTiming: "page_view_timing",
                sessionReplay: "session_replay",
                sessionTrace: "session_trace",
                softNav: "soft_navigations",
                spa: "spa",
              },
              i = {
                [n.pageViewEvent]: 1,
                [n.pageViewTiming]: 2,
                [n.metrics]: 3,
                [n.jserrors]: 4,
                [n.ajax]: 5,
                [n.sessionTrace]: 6,
                [n.pageAction]: 7,
                [n.spa]: 8,
                [n.softNav]: 9,
                [n.sessionReplay]: 10,
              };
          },
        },
        n = {};

      function i(e) {
        var t = n[e];
        if (void 0 !== t) return t.exports;
        var o = (n[e] = {
          exports: {}
        });
        return r[e](o, o.exports, i), o.exports;
      }
      (i.m = r),
      (i.d = (e, t) => {
        for (var r in t)
          i.o(t, r) &&
          !i.o(e, r) &&
          Object.defineProperty(e, r, {
            enumerable: !0,
            get: t[r]
          });
      }),
      (i.f = {}),
      (i.e = (e) =>
        Promise.all(
          Object.keys(i.f).reduce((t, r) => (i.f[r](e, t), t), [])
        )),
      (i.u = (e) =>
        ({
          63: "nr-full",
          110: "nr-full-compressor",
          379: "nr-full-recorder",
        } [e] + "-1.258.0.min.js")),
      (i.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)),
      (e = {}),
      (t = "NRBA-1.258.0.PROD:"),
      (i.l = (r, n, o, a) => {
        if (e[r]) e[r].push(n);
        else {
          var s, c;
          if (void 0 !== o)
            for (
              var d = document.getElementsByTagName("script"), u = 0; u < d.length; u++
            ) {
              var l = d[u];
              if (
                l.getAttribute("src") == r ||
                l.getAttribute("data-webpack") == t + o
              ) {
                s = l;
                break;
              }
            }
          if (!s) {
            c = !0;
            var f = {
              63: "sha512-rzf2NRnT518OLMbXpcyxHEgNPlD9eWOhKR/TB+0gieTlPGIfaXOLc4oifadvQodgNZKcT0XfHnGjT+AvMIRkxg==",
              379: "sha512-rsuN/NbPCJGJYTrlYTMdshgTx2Ps3GJaQ5MbcGQ0abOCQ9zQobWIJrPJ1nzJppZP998KINPz+gY+5WvRuNHQ4A==",
              110: "sha512-JKNGtlbCo073EoeCpgMi6CZy3si9kajgcbtsd4fuY3XIjSoTwlogfc7DmXnqIT3ZEK3miVdNrglvAkotvYOBsQ==",
            };
            ((s = document.createElement("script")).charset = "utf-8"),
            (s.timeout = 120),
            i.nc && s.setAttribute("nonce", i.nc),
              s.setAttribute("data-webpack", t + o),
              (s.src = r),
              0 !== s.src.indexOf(window.location.origin + "/") &&
              (s.crossOrigin = "anonymous"),
              f[a] && (s.integrity = f[a]);
          }
          e[r] = [n];
          var h = (t, n) => {
              (s.onerror = s.onload = null), clearTimeout(p);
              var i = e[r];
              if (
                (delete e[r],
                  s.parentNode && s.parentNode.removeChild(s),
                  i && i.forEach((e) => e(n)),
                  t)
              )
                return t(n);
            },
            p = setTimeout(
              h.bind(null, void 0, {
                type: "timeout",
                target: s
              }),
              12e4
            );
          (s.onerror = h.bind(null, s.onerror)),
          (s.onload = h.bind(null, s.onload)),
          c && document.head.appendChild(s);
        }
      }),
      (i.r = (e) => {
        "undefined" != typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
          }),
          Object.defineProperty(e, "__esModule", {
            value: !0
          });
      }),
      (i.p = "https://js-agent.newrelic.com/"),
      (() => {
        var e = {
          29: 0,
          789: 0
        };
        i.f.j = (t, r) => {
          var n = i.o(e, t) ? e[t] : void 0;
          if (0 !== n)
            if (n) r.push(n[2]);
            else {
              var o = new Promise((r, i) => (n = e[t] = [r, i]));
              r.push((n[2] = o));
              var a = i.p + i.u(t),
                s = new Error();
              i.l(
                a,
                (r) => {
                  if (
                    i.o(e, t) &&
                    (0 !== (n = e[t]) && (e[t] = void 0), n)
                  ) {
                    var o = r && ("load" === r.type ? "missing" : r.type),
                      a = r && r.target && r.target.src;
                    (s.message =
                      "Loading chunk " +
                      t +
                      " failed.\n(" +
                      o +
                      ": " +
                      a +
                      ")"),
                    (s.name = "ChunkLoadError"),
                    (s.type = o),
                    (s.request = a),
                    n[1](s);
                  }
                },
                "chunk-" + t,
                t
              );
            }
        };
        var t = (t, r) => {
            var n,
              o,
              [a, s, c] = r,
              d = 0;
            if (a.some((t) => 0 !== e[t])) {
              for (n in s) i.o(s, n) && (i.m[n] = s[n]);
              if (c) c(i);
            }
            for (t && t(r); d < a.length; d++)
              (o = a[d]), i.o(e, o) && e[o] && e[o][0](), (e[o] = 0);
          },
          r = (self["webpackChunk:NRBA-1.258.0.PROD"] =
            self["webpackChunk:NRBA-1.258.0.PROD"] || []);
        r.forEach(t.bind(null, 0)), (r.push = t.bind(null, r.push.bind(r)));
      })(),
      (() => {
        "use strict";
        i(8993);
        var e = i(50),
          t = i(7144),
          r = i(4402);
        class n {
          agentIdentifier;
          constructor() {
            let e =
              arguments.length > 0 && void 0 !== arguments[0] ?
              arguments[0] :
              (0, r.ky)(16);
            this.agentIdentifier = e;
          }
          #e(t) {
            for (
              var r = arguments.length,
                n = new Array(r > 1 ? r - 1 : 0),
                i = 1; i < r; i++
            )
              n[i - 1] = arguments[i];
            if ("function" == typeof this.api?.[t])
              return this.api[t](...n);
            (0, e.Z)(
              "Call to agent api ".concat(
                t,
                " failed. The API is not currently initialized."
              )
            );
          }
          addPageAction(e, t) {
            return this.#e("addPageAction", e, t);
          }
          setPageViewName(e, t) {
            return this.#e("setPageViewName", e, t);
          }
          setCustomAttribute(e, t, r) {
            return this.#e("setCustomAttribute", e, t, r);
          }
          noticeError(e, t) {
            return this.#e("noticeError", e, t);
          }
          setUserId(e) {
            return this.#e("setUserId", e);
          }
          setApplicationVersion(e) {
            return this.#e("setApplicationVersion", e);
          }
          setErrorHandler(e) {
            return this.#e("setErrorHandler", e);
          }
          finished(e) {
            return this.#e("finished", e);
          }
          addRelease(e, t) {
            return this.#e("addRelease", e, t);
          }
          start(e) {
            return this.#e("start", e);
          }
          recordReplay() {
            return this.#e(t.Ef.RECORD);
          }
          pauseReplay() {
            return this.#e(t.Ef.PAUSE);
          }
          addToTrace(e) {
            return this.#e("addToTrace", e);
          }
          setCurrentRouteName(e) {
            return this.#e("setCurrentRouteName", e);
          }
          interaction() {
            return this.#e("interaction");
          }
        }
        var o = i(3325),
          a = i(234);
        const s = Object.values(o.D);

        function c(e) {
          const t = {};
          return (
            s.forEach((r) => {
              t[r] = (function(e, t) {
                return !0 === (0, a.Mt)(t, "".concat(e, ".enabled"));
              })(r, e);
            }),
            t
          );
        }
        var d = i(2758);
        var u = i(8e3),
          l = i(5938),
          f = i(3960),
          h = i(385),
          p = i(3112),
          g = i(7872);
        class m extends l.W {
          constructor(e, t, r) {
            let n = !(arguments.length > 3 && void 0 !== arguments[3]) ||
              arguments[3];
            super(e, t, r),
              (this.auto = n),
              (this.abortHandler = void 0),
              (this.featAggregate = void 0),
              (this.onAggregateImported = void 0),
              !1 ===
              (0, a.Mt)(
                this.agentIdentifier,
                "".concat(this.featureName, ".autoStart")
              ) && (this.auto = !1),
              this.auto ?
              (0, u.RP)(e, r) :
              this.ee.on(
                "".concat(this.featureName, "-opt-in"),
                (0, g.Z)(() => {
                  (0, u.RP)(this.agentIdentifier, this.featureName),
                  (this.auto = !0),
                  this.importAggregator();
                })
              );
          }
          importAggregator() {
            let t,
              r =
              arguments.length > 0 && void 0 !== arguments[0] ?
              arguments[0] : {};
            if (this.featAggregate || !this.auto) return;
            this.onAggregateImported = new Promise((e) => {
              t = e;
            });
            const n = async () => {
              let n;
              try {
                if ((0, p.ev)(this.agentIdentifier)) {
                  const {
                    setupAgentSession: e
                  } = await i
                    .e(63)
                    .then(i.bind(i, 9446));
                  n = e(this.agentIdentifier);
                }
              } catch (t) {
                (0, e.Z)(
                  "A problem occurred when starting up session manager. This page will not start or extend any session.",
                  t
                ),
                this.featureName === o.D.sessionReplay &&
                  this.abortHandler?.();
              }
              try {
                if (!this.#t(this.featureName, n))
                  return (
                    (0, u.LP)(this.agentIdentifier, this.featureName),
                    void t(!1)
                  );
                const {
                  lazyFeatureLoader: e
                } = await i
                  .e(63)
                  .then(i.bind(i, 8582)), {
                    Aggregate: o
                  } = await e(this.featureName, "aggregate");
                (this.featAggregate = new o(
                  this.agentIdentifier,
                  this.aggregator,
                  r
                )),
                t(!0);
              } catch (r) {
                (0, e.Z)(
                  "Downloading and initializing ".concat(
                    this.featureName,
                    " failed..."
                  ),
                  r
                ),
                this.abortHandler?.(),
                  (0, u.LP)(this.agentIdentifier, this.featureName, !0),
                  t(!1),
                  this.ee && this.ee.abort();
              }
            };
            h.il ? (0, f.b2)(() => n(), !0) : n();
          }
          #t(e, t) {
            return (
              e !== o.D.sessionReplay || (0, p.HM)(this.agentIdentifier, t)
            );
          }
        }
        var v = i(7633);
        class b extends m {
          static featureName = v.t;
          constructor(e, t) {
            let r = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, t, v.t, r), this.importAggregator();
          }
        }
        var y = i(1117),
          A = i(1284);
        class w extends y.w {
          constructor(e) {
            super(e), (this.aggregatedData = {});
          }
          store(e, t, r, n, i) {
            var o = this.getBucket(e, t, r, i);
            return (
              (o.metrics = (function(e, t) {
                t || (t = {
                  count: 0
                });
                return (
                  (t.count += 1),
                  (0, A.D)(e, function(e, r) {
                    t[e] = E(r, t[e]);
                  }),
                  t
                );
              })(n, o.metrics)),
              o
            );
          }
          merge(e, t, r, n, i) {
            var o = this.getBucket(e, t, n, i);
            if (o.metrics) {
              var a = o.metrics;
              (a.count += r.count),
              (0, A.D)(r, function(e, t) {
                if ("count" !== e) {
                  var n = a[e],
                    i = r[e];
                  i && !i.c ?
                    (a[e] = E(i.t, n)) :
                    (a[e] = (function(e, t) {
                      if (!t) return e;
                      t.c || (t = x(t.t));
                      return (
                        (t.min = Math.min(e.min, t.min)),
                        (t.max = Math.max(e.max, t.max)),
                        (t.t += e.t),
                        (t.sos += e.sos),
                        (t.c += e.c),
                        t
                      );
                    })(i, a[e]));
                }
              });
            } else o.metrics = r;
          }
          storeMetric(e, t, r, n) {
            var i = this.getBucket(e, t, r);
            return (i.stats = E(n, i.stats)), i;
          }
          getBucket(e, t, r, n) {
            this.aggregatedData[e] || (this.aggregatedData[e] = {});
            var i = this.aggregatedData[e][t];
            return (
              i ||
              ((i = this.aggregatedData[e][t] = {
                  params: r || {}
                }),
                n && (i.custom = n)),
              i
            );
          }
          get(e, t) {
            return t ?
              this.aggregatedData[e] && this.aggregatedData[e][t] :
              this.aggregatedData[e];
          }
          take(e) {
            for (var t = {}, r = "", n = !1, i = 0; i < e.length; i++)
              (t[(r = e[i])] = Object.values(this.aggregatedData[r] || {})),
              t[r].length && (n = !0),
              delete this.aggregatedData[r];
            return n ? t : null;
          }
        }

        function E(e, t) {
          return null == e ?
            (function(e) {
              e ? e.c++ : (e = {
                c: 1
              });
              return e;
            })(t) :
            t ?
            (t.c || (t = x(t.t)),
              (t.c += 1),
              (t.t += e),
              (t.sos += e * e),
              e > t.max && (t.max = e),
              e < t.min && (t.min = e),
              t) : {
              t: e
            };
        }

        function x(e) {
          return {
            t: e,
            min: e,
            max: e,
            sos: e * e,
            c: 1
          };
        }
        var _ = i(8632),
          R = i(4351);
        var S = i(5546),
          T = i(7956),
          D = i(3239),
          N = i(9251),
          O = i(7894);
        class P extends m {
          static featureName = N.t;
          constructor(e, t) {
            let r = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, t, N.t, r),
              h.il &&
              ((0, T.N)(
                  () =>
                  (0, S.p)(
                    "docHidden",
                    [(0, O.z)()],
                    void 0,
                    N.t,
                    this.ee
                  ),
                  !0
                ),
                (0, D.bP)("pagehide", () =>
                  (0, S.p)(
                    "winPagehide",
                    [(0, O.z)()],
                    void 0,
                    N.t,
                    this.ee
                  )
                ),
                this.importAggregator());
          }
        }
        var I = i(3081);
        class j extends m {
          static featureName = I.t9;
          constructor(e, t) {
            let r = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, t, I.t9, r), this.importAggregator();
          }
        }
        var C = i(6660);
        class k {
          constructor(e, t, r, n) {
            (this.name = "UncaughtError"),
            (this.message = e),
            (this.sourceURL = t),
            (this.line = r),
            (this.column = n);
          }
        }
        class H extends m {
          static featureName = C.t;
          #r = new Set();
          #n = !1;
          constructor(e, r) {
            let n = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, r, C.t, n);
            try {
              this.removeOnAbort = new AbortController();
            } catch (e) {}
            this.ee.on("fn-err", (e, t, r) => {
                this.abortHandler &&
                  !this.#r.has(r) &&
                  (this.#r.add(r),
                    (0, S.p)(
                      "err",
                      [this.#i(r), (0, O.z)()],
                      void 0,
                      o.D.jserrors,
                      this.ee
                    ));
              }),
              this.ee.on("internal-error", (e) => {
                this.abortHandler &&
                  (0, S.p)(
                    "ierr",
                    [this.#i(e), (0, O.z)(), !0, {}, this.#n],
                    void 0,
                    o.D.jserrors,
                    this.ee
                  );
              }),
              this.ee.on(t.Ef.REPLAY_RUNNING, (e) => {
                this.#n = e;
              }),
              h._A.addEventListener(
                "unhandledrejection",
                (e) => {
                  this.abortHandler &&
                    (0, S.p)(
                      "err",
                      [
                        this.#o(e),
                        (0, O.z)(),
                        !1,
                        {
                          unhandledPromiseRejection: 1
                        },
                        this.#n,
                      ],
                      void 0,
                      o.D.jserrors,
                      this.ee
                    );
                },
                (0, D.m$)(!1, this.removeOnAbort?.signal)
              ),
              h._A.addEventListener(
                "error",
                (e) => {
                  this.abortHandler &&
                    (this.#r.has(e.error) ?
                      this.#r.delete(e.error) :
                      (0, S.p)(
                        "err",
                        [this.#a(e), (0, O.z)(), !1, {}, this.#n],
                        void 0,
                        o.D.jserrors,
                        this.ee
                      ));
                },
                (0, D.m$)(!1, this.removeOnAbort?.signal)
              ),
              (this.abortHandler = this.#s),
              this.importAggregator();
          }
          #s() {
            this.removeOnAbort?.abort(),
              this.#r.clear(),
              (this.abortHandler = void 0);
          }
          #i(e) {
            return e instanceof Error ?
              e :
              void 0 !== e?.message ?
              new k(
                e.message,
                e.filename || e.sourceURL,
                e.lineno || e.line,
                e.colno || e.col
              ) :
              new k("string" == typeof e ? e : (0, R.P)(e));
          }
          #o(e) {
            let t = "Unhandled Promise Rejection: ";
            if (e?.reason instanceof Error)
              try {
                return (e.reason.message = t + e.reason.message), e.reason;
              } catch (t) {
                return e.reason;
              }
            if (void 0 === e.reason) return new k(t);
            const r = this.#i(e.reason);
            return (r.message = t + r.message), r;
          }
          #a(e) {
            if (
              e.error instanceof SyntaxError &&
              !/:\d+$/.test(e.error.stack?.trim())
            ) {
              const t = new k(e.message, e.filename, e.lineno, e.colno);
              return (t.name = SyntaxError.name), t;
            }
            return e.error instanceof Error ?
              e.error :
              new k(e.message, e.filename, e.lineno, e.colno);
          }
        }
        var M = i(2210);
        let z = 1;
        const L = "nr@id";

        function U(e) {
          const t = typeof e;
          return !e || ("object" !== t && "function" !== t) ?
            -1 :
            e === h._A ?
            0 :
            (0, M.X)(e, L, function() {
              return z++;
            });
        }

        function F(e) {
          if ("string" == typeof e && e.length) return e.length;
          if ("object" == typeof e) {
            if (
              "undefined" != typeof ArrayBuffer &&
              e instanceof ArrayBuffer &&
              e.byteLength
            )
              return e.byteLength;
            if ("undefined" != typeof Blob && e instanceof Blob && e.size)
              return e.size;
            if (!("undefined" != typeof FormData && e instanceof FormData))
              try {
                return (0, R.P)(e).length;
              } catch (e) {
                return;
              }
          }
        }
        var B = i(7806),
          q = i(7243);
        class G {
          constructor(e) {
            this.agentIdentifier = e;
          }
          generateTracePayload(e) {
            if (!this.shouldGenerateTrace(e)) return null;
            var t = (0, a.DL)(this.agentIdentifier);
            if (!t) return null;
            var n = (t.accountID || "").toString() || null,
              i = (t.agentID || "").toString() || null,
              o = (t.trustKey || "").toString() || null;
            if (!n || !i) return null;
            var s = (0, r.M)(),
              c = (0, r.Ht)(),
              d = Date.now(),
              u = {
                spanId: s,
                traceId: c,
                timestamp: d
              };
            return (
              (e.sameOrigin ||
                (this.isAllowedOrigin(e) &&
                  this.useTraceContextHeadersForCors())) &&
              ((u.traceContextParentHeader =
                  this.generateTraceContextParentHeader(s, c)),
                (u.traceContextStateHeader =
                  this.generateTraceContextStateHeader(s, d, n, i, o))),
              ((e.sameOrigin && !this.excludeNewrelicHeader()) ||
                (!e.sameOrigin &&
                  this.isAllowedOrigin(e) &&
                  this.useNewrelicHeaderForCors())) &&
              (u.newrelicHeader = this.generateTraceHeader(
                s,
                c,
                d,
                n,
                i,
                o
              )),
              u
            );
          }
          generateTraceContextParentHeader(e, t) {
            return "00-" + t + "-" + e + "-01";
          }
          generateTraceContextStateHeader(e, t, r, n, i) {
            return i + "@nr=0-1-" + r + "-" + n + "-" + e + "----" + t;
          }
          generateTraceHeader(e, t, r, n, i, o) {
            if (!("function" == typeof h._A?.btoa)) return null;
            var a = {
              v: [0, 1],
              d: {
                ty: "Browser",
                ac: n,
                ap: i,
                id: e,
                tr: t,
                ti: r
              },
            };
            return o && n !== o && (a.d.tk = o), btoa((0, R.P)(a));
          }
          shouldGenerateTrace(e) {
            return this.isDtEnabled() && this.isAllowedOrigin(e);
          }
          isAllowedOrigin(e) {
            var t = !1,
              r = {};
            if (
              ((0, a.Mt)(this.agentIdentifier, "distributed_tracing") &&
                (r = (0, a.P_)(this.agentIdentifier).distributed_tracing),
                e.sameOrigin)
            )
              t = !0;
            else if (r.allowed_origins instanceof Array)
              for (var n = 0; n < r.allowed_origins.length; n++) {
                var i = (0, q.e)(r.allowed_origins[n]);
                if (
                  e.hostname === i.hostname &&
                  e.protocol === i.protocol &&
                  e.port === i.port
                ) {
                  t = !0;
                  break;
                }
              }
            return t;
          }
          isDtEnabled() {
            var e = (0, a.Mt)(this.agentIdentifier, "distributed_tracing");
            return !!e && !!e.enabled;
          }
          excludeNewrelicHeader() {
            var e = (0, a.Mt)(this.agentIdentifier, "distributed_tracing");
            return !!e && !!e.exclude_newrelic_header;
          }
          useNewrelicHeaderForCors() {
            var e = (0, a.Mt)(this.agentIdentifier, "distributed_tracing");
            return !!e && !1 !== e.cors_use_newrelic_header;
          }
          useTraceContextHeadersForCors() {
            var e = (0, a.Mt)(this.agentIdentifier, "distributed_tracing");
            return !!e && !!e.cors_use_tracecontext_headers;
          }
        }
        var V = i(7825),
          Z = ["load", "error", "abort", "timeout"],
          K = Z.length,
          W = a.Yu.REQ,
          X = a.Yu.XHR;
        class Y extends m {
          static featureName = V.t;
          constructor(e, t) {
            let r = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, t, V.t, r),
              (this.dt = new G(e)),
              (this.handler = (e, t, r, n) =>
                (0, S.p)(e, t, r, n, this.ee));
            try {
              const e = {
                xmlhttprequest: "xhr",
                fetch: "fetch",
                beacon: "beacon",
              };
              h._A?.performance
                ?.getEntriesByType("resource")
                .forEach((t) => {
                  if (t.initiatorType in e && 0 !== t.responseStatus) {
                    const r = {
                        status: t.responseStatus
                      },
                      n = {
                        rxSize: t.transferSize,
                        duration: Math.floor(t.duration),
                        cbTime: 0,
                      };
                    Q(r, t.name),
                      this.handler(
                        "xhr",
                        [
                          r,
                          n,
                          t.startTime,
                          t.responseEnd,
                          e[t.initiatorType],
                        ],
                        void 0,
                        o.D.ajax
                      );
                  }
                });
            } catch (e) {}
            (0, B.u5)(this.ee),
            (0, B.Kf)(this.ee),
            (function(e, t, r, n) {
              function i(e) {
                var t = this;
                (t.totalCbs = 0),
                (t.called = 0),
                (t.cbTime = 0),
                (t.end = E),
                (t.ended = !1),
                (t.xhrGuids = {}),
                (t.lastSize = null),
                (t.loadCaptureCalled = !1),
                (t.params = this.params || {}),
                (t.metrics = this.metrics || {}),
                e.addEventListener(
                    "load",
                    function(r) {
                      x(t, e);
                    },
                    (0, D.m$)(!1)
                  ),
                  h.IF ||
                  e.addEventListener(
                    "progress",
                    function(e) {
                      t.lastSize = e.loaded;
                    },
                    (0, D.m$)(!1)
                  );
              }

              function s(e) {
                (this.params = {
                  method: e[0]
                }),
                Q(this, e[1]),
                  (this.metrics = {});
              }

              function c(t, r) {
                var i = (0, a.DL)(e);
                i.xpid &&
                  this.sameOrigin &&
                  r.setRequestHeader("X-NewRelic-ID", i.xpid);
                var o = n.generateTracePayload(this.parsedOrigin);
                if (o) {
                  var s = !1;
                  o.newrelicHeader &&
                    (r.setRequestHeader("newrelic", o.newrelicHeader),
                      (s = !0)),
                    o.traceContextParentHeader &&
                    (r.setRequestHeader(
                        "traceparent",
                        o.traceContextParentHeader
                      ),
                      o.traceContextStateHeader &&
                      r.setRequestHeader(
                        "tracestate",
                        o.traceContextStateHeader
                      ),
                      (s = !0)),
                    s && (this.dt = o);
                }
              }

              function d(e, r) {
                var n = this.metrics,
                  i = e[0],
                  o = this;
                if (n && i) {
                  var a = F(i);
                  a && (n.txSize = a);
                }
                (this.startTime = (0, O.z)()),
                (this.body = i),
                (this.listener = function(e) {
                  try {
                    "abort" !== e.type ||
                      o.loadCaptureCalled ||
                      (o.params.aborted = !0),
                      ("load" !== e.type ||
                        (o.called === o.totalCbs &&
                          (o.onloadCalled ||
                            "function" != typeof r.onload) &&
                          "function" == typeof o.end)) &&
                      o.end(r);
                  } catch (e) {
                    try {
                      t.emit("internal-error", [e]);
                    } catch (e) {}
                  }
                });
                for (var s = 0; s < K; s++)
                  r.addEventListener(Z[s], this.listener, (0, D.m$)(!1));
              }

              function u(e, t, r) {
                (this.cbTime += e),
                t ? (this.onloadCalled = !0) : (this.called += 1),
                  this.called !== this.totalCbs ||
                  (!this.onloadCalled &&
                    "function" == typeof r.onload) ||
                  "function" != typeof this.end ||
                  this.end(r);
              }

              function l(e, t) {
                var r = "" + U(e) + !!t;
                this.xhrGuids &&
                  !this.xhrGuids[r] &&
                  ((this.xhrGuids[r] = !0), (this.totalCbs += 1));
              }

              function f(e, t) {
                var r = "" + U(e) + !!t;
                this.xhrGuids &&
                  this.xhrGuids[r] &&
                  (delete this.xhrGuids[r], (this.totalCbs -= 1));
              }

              function p() {
                this.endTime = (0, O.z)();
              }

              function g(e, r) {
                r instanceof X &&
                  "load" === e[0] &&
                  t.emit("xhr-load-added", [e[1], e[2]], r);
              }

              function m(e, r) {
                r instanceof X &&
                  "load" === e[0] &&
                  t.emit("xhr-load-removed", [e[1], e[2]], r);
              }

              function v(e, t, r) {
                t instanceof X &&
                  ("onload" === r && (this.onload = !0),
                    ("load" === (e[0] && e[0].type) || this.onload) &&
                    (this.xhrCbStart = (0, O.z)()));
              }

              function b(e, r) {
                this.xhrCbStart &&
                  t.emit(
                    "xhr-cb-time",
                    [(0, O.z)() - this.xhrCbStart, this.onload, r],
                    r
                  );
              }

              function y(e) {
                var t,
                  r = e[1] || {};
                if (
                  ("string" == typeof e[0] ?
                    0 === (t = e[0]).length &&
                    h.il &&
                    (t = "" + h._A.location.href) :
                    e[0] && e[0].url ?
                    (t = e[0].url) :
                    h._A?.URL && e[0] && e[0] instanceof URL ?
                    (t = e[0].href) :
                    "function" == typeof e[0].toString &&
                    (t = e[0].toString()),
                    "string" == typeof t && 0 !== t.length)
                ) {
                  t &&
                    ((this.parsedOrigin = (0, q.e)(t)),
                      (this.sameOrigin = this.parsedOrigin.sameOrigin));
                  var i = n.generateTracePayload(this.parsedOrigin);
                  if (
                    i &&
                    (i.newrelicHeader || i.traceContextParentHeader)
                  )
                    if (e[0] && e[0].headers)
                      s(e[0].headers, i) && (this.dt = i);
                    else {
                      var o = {};
                      for (var a in r) o[a] = r[a];
                      (o.headers = new Headers(r.headers || {})),
                      s(o.headers, i) && (this.dt = i),
                        e.length > 1 ? (e[1] = o) : e.push(o);
                    }
                }

                function s(e, t) {
                  var r = !1;
                  return (
                    t.newrelicHeader &&
                    (e.set("newrelic", t.newrelicHeader), (r = !0)),
                    t.traceContextParentHeader &&
                    (e.set("traceparent", t.traceContextParentHeader),
                      t.traceContextStateHeader &&
                      e.set("tracestate", t.traceContextStateHeader),
                      (r = !0)),
                    r
                  );
                }
              }

              function A(e, t) {
                (this.params = {}),
                (this.metrics = {}),
                (this.startTime = (0, O.z)()),
                (this.dt = t),
                e.length >= 1 && (this.target = e[0]),
                  e.length >= 2 && (this.opts = e[1]);
                var r,
                  n = this.opts || {},
                  i = this.target;
                "string" == typeof i
                  ?
                  (r = i) :
                  "object" == typeof i && i instanceof W ?
                  (r = i.url) :
                  h._A?.URL &&
                  "object" == typeof i &&
                  i instanceof URL &&
                  (r = i.href),
                  Q(this, r);
                var o = (
                  "" +
                  ((i && i instanceof W && i.method) || n.method || "GET")
                ).toUpperCase();
                (this.params.method = o),
                (this.body = n.body),
                (this.txSize = F(n.body) || 0);
              }

              function w(e, t) {
                var n;
                (this.endTime = (0, O.z)()),
                this.params || (this.params = {}),
                  (this.params.status = t ? t.status : 0),
                  "string" == typeof this.rxSize &&
                  this.rxSize.length > 0 &&
                  (n = +this.rxSize);
                var i = {
                  txSize: this.txSize,
                  rxSize: n,
                  duration: (0, O.z)() - this.startTime,
                };
                r(
                  "xhr",
                  [this.params, i, this.startTime, this.endTime, "fetch"],
                  this,
                  o.D.ajax
                );
              }

              function E(e) {
                var t = this.params,
                  n = this.metrics;
                if (!this.ended) {
                  this.ended = !0;
                  for (var i = 0; i < K; i++)
                    e.removeEventListener(Z[i], this.listener, !1);
                  t.aborted ||
                    ((n.duration = (0, O.z)() - this.startTime),
                      this.loadCaptureCalled || 4 !== e.readyState ?
                      null == t.status && (t.status = 0) :
                      x(this, e),
                      (n.cbTime = this.cbTime),
                      r(
                        "xhr",
                        [t, n, this.startTime, this.endTime, "xhr"],
                        this,
                        o.D.ajax
                      ));
                }
              }

              function x(e, r) {
                e.params.status = r.status;
                var n = (function(e, t) {
                  var r = e.responseType;
                  return "json" === r && null !== t ?
                    t :
                    "arraybuffer" === r || "blob" === r || "json" === r ?
                    F(e.response) :
                    "text" === r || "" === r || void 0 === r ?
                    F(e.responseText) :
                    void 0;
                })(r, e.lastSize);
                if ((n && (e.metrics.rxSize = n), e.sameOrigin)) {
                  var i = r.getResponseHeader("X-NewRelic-App-Data");
                  i &&
                    ((0, S.p)(
                        I.mY,
                        ["Ajax/CrossApplicationTracing/Header/Seen"],
                        void 0,
                        o.D.metrics,
                        t
                      ),
                      (e.params.cat = i.split(", ").pop()));
                }
                e.loadCaptureCalled = !0;
              }
              t.on("new-xhr", i),
                t.on("open-xhr-start", s),
                t.on("open-xhr-end", c),
                t.on("send-xhr-start", d),
                t.on("xhr-cb-time", u),
                t.on("xhr-load-added", l),
                t.on("xhr-load-removed", f),
                t.on("xhr-resolved", p),
                t.on("addEventListener-end", g),
                t.on("removeEventListener-end", m),
                t.on("fn-end", b),
                t.on("fetch-before-start", y),
                t.on("fetch-start", A),
                t.on("fn-start", v),
                t.on("fetch-done", w);
            })(e, this.ee, this.handler, this.dt),
            this.importAggregator();
          }
        }

        function Q(e, t) {
          var r = (0, q.e)(t),
            n = e.params || e;
          (n.hostname = r.hostname),
          (n.port = r.port),
          (n.protocol = r.protocol),
          (n.host = r.hostname + ":" + r.port),
          (n.pathname = r.pathname),
          (e.parsedOrigin = r),
          (e.sameOrigin = r.sameOrigin);
        }
        var J = i(3614);
        const {
          BST_RESOURCE: ee,
          RESOURCE: te,
          START: re,
          END: ne,
          FEATURE_NAME: ie,
          FN_END: oe,
          FN_START: ae,
          PUSH_STATE: se,
        } = J;
        var ce = i(7056);
        class de extends m {
          static featureName = t.t9;
          constructor(e, r) {
            let n,
              i = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, r, t.t9, i), (this.replayRunning = !1);
            try {
              n = JSON.parse(
                localStorage.getItem("".concat(ce.Bq, "_").concat(ce.K4))
              );
            } catch (e) {}
            this.#c(n) ?
              this.#d(n?.sessionReplayMode) :
              this.importAggregator(),
              this.ee.on("err", (e) => {
                this.replayRunning &&
                  ((this.errorNoticed = !0),
                    (0, S.p)(
                      t.Ef.ERROR_DURING_REPLAY,
                      [e],
                      void 0,
                      this.featureName,
                      this.ee
                    ));
              }),
              this.ee.on(t.Ef.REPLAY_RUNNING, (e) => {
                this.replayRunning = e;
              });
          }
          #c(e) {
            return (
              (e &&
                (e.sessionReplayMode === ce.IK.FULL ||
                  e.sessionReplayMode === ce.IK.ERROR)) ||
              (0, p.rU)(this.agentIdentifier)
            );
          }
          async #d(e) {
            const {
              Recorder: t
            } = await Promise.all([
              i.e(63),
              i.e(379),
            ]).then(i.bind(i, 4345));
            (this.recorder = new t({
              mode: e,
              agentIdentifier: this.agentIdentifier,
              ee: this.ee,
            })),
            this.recorder.startRecording(),
              (this.abortHandler = this.recorder.stopRecording),
              this.importAggregator({
                recorder: this.recorder,
                errorNoticed: this.errorNoticed,
              });
          }
        }
        var ue = i(4649);
        class le extends m {
          static featureName = ue.t;
          constructor(e, t) {
            let r = !(arguments.length > 2 && void 0 !== arguments[2]) ||
              arguments[2];
            super(e, t, ue.t, r), this.importAggregator();
          }
        }
        new(class extends n {
          constructor(t, r) {
            super(r),
              h._A ?
              ((this.sharedAggregator = new w({
                  agentIdentifier: this.agentIdentifier,
                })),
                (this.features = {}),
                (0, _.h5)(this.agentIdentifier, this),
                (this.desiredFeatures = new Set(t.features || [])),
                this.desiredFeatures.add(b),
                (this.runSoftNavOverSpa = [...this.desiredFeatures].some(
                  (e) => e.featureName === o.D.softNav
                )),
                (0, d.j)(this, t, t.loaderType || "agent"),
                this.run()) :
              (0, e.Z)(
                "Failed to initialize the agent. Could not determine the runtime environment."
              );
          }
          get config() {
            return {
              info: this.info,
              init: this.init,
              loader_config: this.loader_config,
              runtime: this.runtime,
            };
          }
          run() {
            try {
              const t = c(this.agentIdentifier),
                r = [...this.desiredFeatures];
              r.sort((e, t) => o.p[e.featureName] - o.p[t.featureName]),
                r.forEach((r) => {
                  if (
                    !t[r.featureName] &&
                    r.featureName !== o.D.pageViewEvent
                  )
                    return;
                  if (this.runSoftNavOverSpa && r.featureName === o.D.spa)
                    return;
                  if (
                    !this.runSoftNavOverSpa &&
                    r.featureName === o.D.softNav
                  )
                    return;
                  const n = (function(e) {
                    switch (e) {
                      case o.D.ajax:
                        return [o.D.jserrors];
                      case o.D.sessionTrace:
                        return [o.D.ajax, o.D.pageViewEvent];
                      case o.D.sessionReplay:
                        return [o.D.sessionTrace];
                      case o.D.pageViewTiming:
                        return [o.D.pageViewEvent];
                      default:
                        return [];
                    }
                  })(r.featureName);
                  n.every((e) => e in this.features) ||
                    (0, e.Z)(
                      ""
                      .concat(
                        r.featureName,
                        " is enabled but one or more dependent features has not been initialized ("
                      )
                      .concat(
                        (0, R.P)(n),
                        "). This may cause unintended consequences or missing data..."
                      )
                    ),
                    (this.features[r.featureName] = new r(
                      this.agentIdentifier,
                      this.sharedAggregator
                    ));
                });
            } catch (t) {
              (0, e.Z)(
                "Failed to initialize all enabled instrument classes (agent aborted) -",
                t
              );
              for (const e in this.features)
                this.features[e].abortHandler?.();
              const r = (0, _.fP)();
              delete r.initializedAgents[this.agentIdentifier]?.api,
                delete r.initializedAgents[this.agentIdentifier]?.features,
                delete this.sharedAggregator;
              return r.ee.get(this.agentIdentifier).abort(), !1;
            }
          }
        })({
          features: [
            b,
            P,
            class extends m {
              static featureName = ie;
              constructor(e, t) {
                if (
                  (super(
                      e,
                      t,
                      ie,
                      !(arguments.length > 2 && void 0 !== arguments[2]) ||
                      arguments[2]
                    ),
                    !h.il)
                )
                  return;
                const r = this.ee;
                let n;
                (0, B.QU)(r),
                (this.eventsEE = (0, B.em)(r)),
                this.eventsEE.on(ae, function(e, t) {
                    this.bstStart = (0, O.z)();
                  }),
                  this.eventsEE.on(oe, function(e, t) {
                    (0,
                      S.p)("bst", [e[0], t, this.bstStart, (0, O.z)()], void 0, o.D.sessionTrace, r);
                  }),
                  r.on(se + re, function(e) {
                    (this.time = (0, O.z)()),
                    (this.startPath = location.pathname + location.hash);
                  }),
                  r.on(se + ne, function(e) {
                    (0,
                      S.p)("bstHist", [location.pathname + location.hash, this.startPath, this.time], void 0, o.D.sessionTrace, r);
                  });
                try {
                  (n = new PerformanceObserver((e) => {
                    const t = e.getEntries();
                    (0, S.p)(ee, [t], void 0, o.D.sessionTrace, r);
                  })),
                  n.observe({
                    type: te,
                    buffered: !0
                  });
                } catch (e) {}
                this.importAggregator({
                  resourceObserver: n
                });
              }
            },
            de,
            Y,
            j,
            le,
            H,
          ],
          loaderType: "pro",
        });
      })();
    })();
  </script>

  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/vnd.microsoft.icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="generator" content="Drupal 7 (https://www.drupal.org)" />

  <title>Syllabus | Government College Arki</title>

  <link rel="stylesheet" type="text/css" href="sites/all/themes/oberlin2020/assets/fonts/815672/AB942161BF6AF9379.css" />
  <script src="./assets/js/692278f1e7.js" crossorigin="anonymous"></script>

  <script src="../p492.oberlin.edu/script.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link type="text/css" rel="stylesheet" href="sites/default/files/css/css_rEI_5cK_B9hB4So2yZUtr5weuEV3heuAllCDE6XsIkI.css" media="all" />
  <link type="text/css" rel="stylesheet" href="sites/default/files/css/css_MH1vxowvPUlyPSpkssY8tzRN5_mZ4xp18ZFRD-e8_4s.css" media="all" />
  <link type="text/css" rel="stylesheet" href="sites/default/files/css/css_tV8eHLnpH3-ZD0H-wQHwY5SD2F9CGbFFyTGDQnhjIQ0.css" media="all" />
  <link type="text/css" rel="stylesheet" href="sites/default/files/css/css_W6UGwj9OX6sIb9Tfvk4OPxHFz1A6wTzlQ70WpzeCp8Y.css" media="all" />
</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-16 node-type-landing-page slid-closed">
  <noscript aria-hidden="true"><iframe title="Hidden frame for Google Tag Manager." src="../www.googletagmanager.com/ns7e0b.html?id=GTM-P537WVQ" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>

  <!-- Header Start -->
  <?php include "elements/header.php"; ?>
  <!-- Header End -->
  
  <div class="container-fluid" style="background-color:#A6192E; padding: 7rem 0;">
        <h1 style="color:#fff; text-align:center;">Syllabus<h1>
      </div>

  <main id="main-content">
    <div class="vertical-spacing--basic page-content-wrapper--basic">
      <div id="block-system-main" class="block block-system">
        <div class="content">
          <div class="vertical-spacing--more">
            <section class="max-width-layout" aria-labelledby="features-title">
              <div class="items-row">
                <div class="items-row__header" style="padding-top: 30px;">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No.</th>
                          <th>Course</th>
                          <th>Title</th>
                          <th>Syllabus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01.</td>
                          <td>B.Com. (Commerce)</td>
                          <td>B.Com. (Commerce)</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-bcom.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>02.</td>
                          <td>B.C.A.</td>
                          <td>B.C.A.</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-bca.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>03.</td>
                          <td>Botany</td>
                          <td>Botany</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-botany.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>04.</td>
                          <td>Chemistry</td>
                          <td>Chemistry</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-chem.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>05.</td>
                          <td>Economics</td>
                          <td>Economics</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-economics.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>06.</td>
                          <td>English</td>
                          <td>English</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-eng.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>07.</td>
                          <td>Geography</td>
                          <td>Geography</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-geo.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>08.</td>
                          <td>Hindi</td>
                          <td>Hindi</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-hin.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>09.</td>
                          <td>History</td>
                          <td>History</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-history.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>10.</td>
                          <td>M.A. English</td>
                          <td>M.A. English</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-ma-eng.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>11.</td>
                          <td>M.A. History</td>
                          <td>M.A. History</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-ma-history.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>12.</td>
                          <td>Mathematics</td>
                          <td>Mathematics</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-math.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>13.</td>
                          <td>Music (Vocal) & (Instrumental)</td>
                          <td>Music (Vocal) & (Instrumental)</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-music.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>14.</td>
                          <td>PGDCA</td>
                          <td>PGDCA</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-pgdca.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>15.</td>
                          <td>Physics</td>
                          <td>Physics</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-physics.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>16.</td>
                          <td>Political Science</td>
                          <td>Political Science</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-pol-sci.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>17.</td>
                          <td>Public Administration</td>
                          <td>Public Administration</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-pub-admin.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>18.</td>
                          <td>Sanskrit</td>
                          <td>Sanskrit</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-sanskrit.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>19.</td>
                          <td>Sociology</td>
                          <td>Sociology</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-socio.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>20.</td>
                          <td>Zoology</td>
                          <td>Zoology</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-zoo.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>21.</td>
                          <td>Add-On</td>
                          <td>Add-On</td>
                          <td style="text-align: center;"><a href="./assets/documents/syllabus/syllabus-add-on.pdf">
                              <h4><i class="fa-regular fa-file-pdf"></i></h4>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Bottom -->
  </main>

  <!-- Footer Start -->
  <?php include "elements/footer.php"; ?>
  <!-- Footer End -->

  <script type="text/javascript">
    <!--//
    -->
  <![CDATA[//><!--
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0];
        var j = d.createElement(s);
        var dl = l != "dataLayer" ? "&l=" + l : "";
        j.src = "../www.googletagmanager.com/gtm5445.html?id=" + i + dl + "";
        j.async = true;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-P537WVQ");
      //--><!]]>
  </script>
  <script type="text/javascript" src="sites/default/files/js/js_Pt6OpwTd6jcHLRIjrE-eSPLWMxWDkcyYrPTIrXDSON0.js"></script>
  <script type="text/javascript" src="sites/default/files/js/js_iXkU7XwDYs0fPMQo2hV5RiYO5DLAH5qsxc7q67mcNcY.js"></script>
  <script type="text/javascript" src="sites/default/files/js/js_OogS7WXqNwWTZECjhM4QEEkl6m473kyQwc6Nc1D3mXY.js"></script>
  <script type="text/javascript">
    <!--//
    -->
  <![CDATA[//><!--
      window.CKEDITOR_BASEPATH = "sites/all/libraries/ckeditor/index.html";
      //--><!]]>
  </script>
  <script type="text/javascript" src="sites/default/files/js/js_Wj6WBVQ3sYd3cT5_VtVWGAq-ej-04qnggVTqGwgKG-A.js"></script>
  <script type="text/javascript">
    <!--//
    -->
  <![CDATA[//><!--
      jQuery.extend(Drupal.settings, {
        basePath: "\/",
        pathPrefix: "",
        setHasJsCookie: 0,
        ajaxPageState: {
          theme: "oberlin2020",
          theme_token: "a-cS2CI0txbKoqPm4dfvs_XyUfZVh_0dz_LPFQGDs2I",
          js: {
            0: 1,
            "sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.12\/jquery.min.js": 1,
            "misc\/jquery-extend-3.4.0.js": 1,
            "misc\/jquery-html-prefilter-3.5.0-backport.js": 1,
            "misc\/jquery.once.js": 1,
            "misc\/drupal.js": 1,
            "sites\/all\/modules\/contrib\/jquery_update\/js\/jquery_browser.js": 1,
            "sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.effect.min.js": 1,
            "misc\/form-single-submit.js": 1,
            "sites\/all\/modules\/contrib\/entityreference\/js\/entityreference.js": 1,
            "sites\/all\/modules\/contrib\/google_cse\/google_cse.js": 1,
            1: 1,
            "sites\/all\/themes\/oberlin2020\/assets\/js\/oberlin2020.min.js": 1,
            "sites\/all\/themes\/oberlin2020\/assets\/js\/vendor\/tablesaw.stackonly.3.1.2.min.js": 1,
          },
          css: {
            "modules\/system\/system.base.css": 1,
            "modules\/system\/system.messages.css": 1,
            "modules\/field\/theme\/field.css": 1,
            "sites\/all\/modules\/contrib\/google_cse\/google_cse.css": 1,
            "modules\/node\/node.css": 1,
            "sites\/all\/modules\/custom\/oho_date_block\/css\/oho_date_block.css": 1,
            "modules\/search\/search.css": 1,
            "modules\/user\/user.css": 1,
            "sites\/all\/modules\/contrib\/flickr\/flickr.css": 1,
            "sites\/all\/modules\/contrib\/flickr\/flickr_cc_icons_on_hover.css": 1,
            "sites\/all\/modules\/contrib\/flickr\/flickr_cc_icons.css": 1,
            "sites\/all\/modules\/contrib\/ctools\/css\/ctools.css": 1,
            "sites\/all\/themes\/oberlin2020\/assets\/css\/oberlin2020.css": 1,
          },
        },
        googleCSE: {
          cx: "012655646479220034846:wzsof3g_nke",
          resultsWidth: 600,
          domain: "www.google.com",
          showWaterMark: 0,
        },
        urlIsAjaxTrusted: { "\/about-oberlin": true },
      });
      //--><!]]>
  </script>
  <script type="text/javascript">
    window.NREUM || (NREUM = {});
    NREUM.info = {
      beacon: "bam.nr-data.net",
      licenseKey: "NRJS-d4247257aea6225d681",
      applicationID: "518278738",
      transactionName: "Z1RaMENTC0JXUBUKXV4ebRZYHUpYWFcEGxxAWUg=",
      queueTime: 0,
      applicationTime: 516,
      atts: "SxNZRgtJGEw=",
      errorBeacon: "bam.nr-data.net",
      agent: "",
    };
  </script>
</body>

<!-- Mirrored from www.oberlin.edu/about-oberlin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 May 2024 16:53:40 GMT -->

</html>