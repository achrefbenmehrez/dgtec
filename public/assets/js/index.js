/*! For license information please see index.js.LICENSE.txt */
(() => {
    var e = {
            1895: () => {
                "use strict";
                "function" != typeof Object.assign && (Object.assign = function (e, ...t) {
                    if (!e) throw TypeError("Cannot convert undefined or null to object");
                    for (const n of t) n && Object.keys(n).forEach((t => e[t] = n[t]));
                    return e
                })
            },
            401: function (e, t) {
                ! function (e) {
                    "use strict";
                    var t = "undefined" != typeof window && void 0 !== window.flatpickr ? window.flatpickr : {
                            l10ns: {}
                        },
                        n = {
                            firstDayOfWeek: 1,
                            weekdays: {
                                shorthand: ["dim", "lun", "mar", "mer", "jeu", "ven", "sam"],
                                longhand: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"]
                            },
                            months: {
                                shorthand: ["janv", "févr", "mars", "avr", "mai", "juin", "juil", "août", "sept", "oct", "nov", "déc"],
                                longhand: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"]
                            },
                            ordinal: function (e) {
                                return e > 1 ? "" : "er"
                            },
                            rangeSeparator: " au ",
                            weekAbbreviation: "Sem",
                            scrollTitle: "Défiler pour augmenter la valeur",
                            toggleTitle: "Cliquer pour basculer",
                            time_24hr: !0
                        };
                    t.l10ns.fr = n;
                    var o = t.l10ns;
                    e.French = n, e.default = o, Object.defineProperty(e, "__esModule", {
                        value: !0
                    })
                }(t)
            },
            592: function (e) {
                e.exports = function () {
                    "use strict";
                    var e = function () {
                            return e = Object.assign || function (e) {
                                for (var t, n = 1, o = arguments.length; n < o; n++)
                                    for (var a in t = arguments[n]) Object.prototype.hasOwnProperty.call(t, a) && (e[a] = t[a]);
                                return e
                            }, e.apply(this, arguments)
                        },
                        t = function (e, t, n) {
                            return n.months[t ? "shorthand" : "longhand"][e]
                        };

                    function n(e) {
                        try {
                            return "function" == typeof e.composedPath ? e.composedPath()[0] : e.target
                        } catch (t) {
                            return e.target
                        }
                    }
                    var o = {
                        shorthand: !1,
                        dateFormat: "F Y",
                        altFormat: "F Y",
                        theme: "light"
                    };

                    function a(a) {
                        var i = e(e({}, o), a);
                        return function (e) {
                            e.config.dateFormat = i.dateFormat, e.config.altFormat = i.altFormat;
                            var o = {
                                monthsContainer: null
                            };

                            function a() {
                                if (e.rContainer && e.daysContainer && e.weekdayContainer) {
                                    e.rContainer.removeChild(e.daysContainer), e.rContainer.removeChild(e.weekdayContainer);
                                    for (var t = 0; t < e.monthElements.length; t++) {
                                        var n = e.monthElements[t];
                                        n.parentNode && n.parentNode.removeChild(n)
                                    }
                                }
                            }

                            function r() {
                                e._bind(e.prevMonthNav, "click", (function (t) {
                                    t.preventDefault(), t.stopPropagation(), e.changeYear(e.currentYear - 1), c()
                                })), e._bind(e.nextMonthNav, "click", (function (t) {
                                    t.preventDefault(), t.stopPropagation(), e.changeYear(e.currentYear + 1), c()
                                }))
                            }

                            function s() {
                                if (e.rContainer) {
                                    o.monthsContainer = e._createElement("div", "flatpickr-monthSelect-months"), o.monthsContainer.tabIndex = -1, e.calendarContainer.classList.add("flatpickr-monthSelect-theme-" + i.theme);
                                    for (var n = 0; n < 12; n++) {
                                        var a = e._createElement("span", "flatpickr-monthSelect-month");
                                        a.dateObj = new Date(e.currentYear, n), a.$i = n, a.textContent = t(n, i.shorthand, e.l10n), a.tabIndex = -1, a.addEventListener("click", u), o.monthsContainer.appendChild(a), (e.config.minDate && a.dateObj < e.config.minDate || e.config.maxDate && a.dateObj > e.config.maxDate) && a.classList.add("disabled")
                                    }
                                    e.rContainer.appendChild(o.monthsContainer)
                                }
                            }

                            function l() {
                                if (e.rContainer) {
                                    for (var t = e.rContainer.querySelectorAll(".flatpickr-monthSelect-month.selected"), n = 0; n < t.length; n++) t[n].classList.remove("selected");
                                    var o = (e.selectedDates[0] || new Date).getMonth(),
                                        a = e.rContainer.querySelector(".flatpickr-monthSelect-month:nth-child(" + (o + 1) + ")");
                                    a && a.classList.add("selected")
                                }
                            }

                            function c() {
                                var t = e.selectedDates[0];
                                t && ((t = new Date(t)).setFullYear(e.currentYear), e.config.minDate && t < e.config.minDate && (t = e.config.minDate), e.config.maxDate && t > e.config.maxDate && (t = e.config.maxDate), e.currentYear = t.getFullYear()), e.currentYearElement.value = String(e.currentYear), e.rContainer && e.rContainer.querySelectorAll(".flatpickr-monthSelect-month").forEach((function (t) {
                                    t.dateObj.setFullYear(e.currentYear), e.config.minDate && t.dateObj < e.config.minDate || e.config.maxDate && t.dateObj > e.config.maxDate ? t.classList.add("disabled") : t.classList.remove("disabled")
                                })), l()
                            }

                            function u(t) {
                                t.preventDefault(), t.stopPropagation();
                                var o = n(t);
                                o instanceof Element && !o.classList.contains("disabled") && (d(o.dateObj), e.close())
                            }

                            function d(t) {
                                var n = new Date(t);
                                n.setFullYear(e.currentYear), e.setDate(n, !0), l()
                            }
                            var f = {
                                37: -1,
                                39: 1,
                                40: 3,
                                38: -3
                            };

                            function p(t, n, a, i) {
                                var r = void 0 !== f[i.keyCode];
                                if ((r || 13 === i.keyCode) && e.rContainer && o.monthsContainer) {
                                    var s = e.rContainer.querySelector(".flatpickr-monthSelect-month.selected"),
                                        l = Array.prototype.indexOf.call(o.monthsContainer.children, document.activeElement);
                                    if (-1 === l) {
                                        var c = s || o.monthsContainer.firstElementChild;
                                        c.focus(), l = c.$i
                                    }
                                    r ? o.monthsContainer.children[(12 + l + f[i.keyCode]) % 12].focus() : 13 === i.keyCode && o.monthsContainer.contains(document.activeElement) && d(document.activeElement.dateObj)
                                }
                            }

                            function m() {
                                if (null !== o.monthsContainer)
                                    for (var e = o.monthsContainer.querySelectorAll(".flatpickr-monthSelect-month"), t = 0; t < e.length; t++) e[t].removeEventListener("click", u)
                            }
                            return {
                                onParseConfig: function () {
                                    e.config.mode = "single", e.config.enableTime = !1
                                },
                                onValueUpdate: l,
                                onKeyDown: p,
                                onReady: [function () {
                                    e.currentMonth = 0
                                }, a, r, s, l, function () {
                                    e.loadedPlugins.push("monthSelect")
                                }],
                                onDestroy: m
                            }
                        }
                    }
                    return a
                }()
            },
            4211: function (e, t) {
                ! function (e) {
                    "use strict";

                    function t(e) {
                        return n(e) && "function" == typeof e.from
                    }

                    function n(e) {
                        return "object" == typeof e && "function" == typeof e.to
                    }

                    function o(e) {
                        e.parentElement.removeChild(e)
                    }

                    function a(e) {
                        return null != e
                    }

                    function i(e) {
                        e.preventDefault()
                    }

                    function r(e) {
                        return e.filter((function (e) {
                            return !this[e] && (this[e] = !0)
                        }), {})
                    }

                    function s(e, t) {
                        return Math.round(e / t) * t
                    }

                    function l(e, t) {
                        var n = e.getBoundingClientRect(),
                            o = e.ownerDocument,
                            a = o.documentElement,
                            i = v(o);
                        return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (i.x = 0), t ? n.top + i.y - a.clientTop : n.left + i.x - a.clientLeft
                    }

                    function c(e) {
                        return "number" == typeof e && !isNaN(e) && isFinite(e)
                    }

                    function u(e, t, n) {
                        n > 0 && (m(e, t), setTimeout((function () {
                            h(e, t)
                        }), n))
                    }

                    function d(e) {
                        return Math.max(Math.min(e, 100), 0)
                    }

                    function f(e) {
                        return Array.isArray(e) ? e : [e]
                    }

                    function p(e) {
                        var t = (e = String(e)).split(".");
                        return t.length > 1 ? t[1].length : 0
                    }

                    function m(e, t) {
                        e.classList && !/\s/.test(t) ? e.classList.add(t) : e.className += " " + t
                    }

                    function h(e, t) {
                        e.classList && !/\s/.test(t) ? e.classList.remove(t) : e.className = e.className.replace(new RegExp("(^|\\b)" + t.split(" ").join("|") + "(\\b|$)", "gi"), " ")
                    }

                    function g(e, t) {
                        return e.classList ? e.classList.contains(t) : new RegExp("\\b" + t + "\\b").test(e.className)
                    }

                    function v(e) {
                        var t = void 0 !== window.pageXOffset,
                            n = "CSS1Compat" === (e.compatMode || "");
                        return {
                            x: t ? window.pageXOffset : n ? e.documentElement.scrollLeft : e.body.scrollLeft,
                            y: t ? window.pageYOffset : n ? e.documentElement.scrollTop : e.body.scrollTop
                        }
                    }

                    function b() {
                        return window.navigator.pointerEnabled ? {
                            start: "pointerdown",
                            move: "pointermove",
                            end: "pointerup"
                        } : window.navigator.msPointerEnabled ? {
                            start: "MSPointerDown",
                            move: "MSPointerMove",
                            end: "MSPointerUp"
                        } : {
                            start: "mousedown touchstart",
                            move: "mousemove touchmove",
                            end: "mouseup touchend"
                        }
                    }

                    function w() {
                        var e = !1;
                        try {
                            var t = Object.defineProperty({}, "passive", {
                                get: function () {
                                    e = !0
                                }
                            });
                            window.addEventListener("test", null, t)
                        } catch (e) {}
                        return e
                    }

                    function y() {
                        return window.CSS && CSS.supports && CSS.supports("touch-action", "none")
                    }

                    function D(e, t) {
                        return 100 / (t - e)
                    }

                    function C(e, t, n) {
                        return 100 * t / (e[n + 1] - e[n])
                    }

                    function x(e, t) {
                        return C(e, e[0] < 0 ? t + Math.abs(e[0]) : t - e[0], 0)
                    }

                    function M(e, t) {
                        return t * (e[1] - e[0]) / 100 + e[0]
                    }

                    function S(e, t) {
                        for (var n = 1; e >= t[n];) n += 1;
                        return n
                    }

                    function E(e, t, n) {
                        if (n >= e.slice(-1)[0]) return 100;
                        var o = S(n, e),
                            a = e[o - 1],
                            i = e[o],
                            r = t[o - 1],
                            s = t[o];
                        return r + x([a, i], n) / D(r, s)
                    }

                    function k(e, t, n) {
                        if (n >= 100) return e.slice(-1)[0];
                        var o = S(n, t),
                            a = e[o - 1],
                            i = e[o],
                            r = t[o - 1];
                        return M([a, i], (n - r) * D(r, t[o]))
                    }

                    function P(e, t, n, o) {
                        if (100 === o) return o;
                        var a = S(o, e),
                            i = e[a - 1],
                            r = e[a];
                        return n ? o - i > (r - i) / 2 ? r : i : t[a - 1] ? e[a - 1] + s(o - e[a - 1], t[a - 1]) : o
                    }
                    var N, T;
                    e.PipsMode = void 0, (T = e.PipsMode || (e.PipsMode = {})).Range = "range", T.Steps = "steps", T.Positions = "positions", T.Count = "count", T.Values = "values", e.PipsType = void 0, (N = e.PipsType || (e.PipsType = {}))[N.None = -1] = "None", N[N.NoValue = 0] = "NoValue", N[N.LargeValue = 1] = "LargeValue", N[N.SmallValue = 2] = "SmallValue";
                    var O = function () {
                            function e(e, t, n) {
                                var o;
                                this.xPct = [], this.xVal = [], this.xSteps = [], this.xNumSteps = [], this.xHighestCompleteStep = [], this.xSteps = [n || !1], this.xNumSteps = [!1], this.snap = t;
                                var a = [];
                                for (Object.keys(e).forEach((function (t) {
                                        a.push([f(e[t]), t])
                                    })), a.sort((function (e, t) {
                                        return e[0][0] - t[0][0]
                                    })), o = 0; o < a.length; o++) this.handleEntryPoint(a[o][1], a[o][0]);
                                for (this.xNumSteps = this.xSteps.slice(0), o = 0; o < this.xNumSteps.length; o++) this.handleStepPoint(o, this.xNumSteps[o])
                            }
                            return e.prototype.getDistance = function (e) {
                                for (var t = [], n = 0; n < this.xNumSteps.length - 1; n++) t[n] = C(this.xVal, e, n);
                                return t
                            }, e.prototype.getAbsoluteDistance = function (e, t, n) {
                                var o, a = 0;
                                if (e < this.xPct[this.xPct.length - 1])
                                    for (; e > this.xPct[a + 1];) a++;
                                else e === this.xPct[this.xPct.length - 1] && (a = this.xPct.length - 2);
                                n || e !== this.xPct[a + 1] || a++, null === t && (t = []);
                                var i = 1,
                                    r = t[a],
                                    s = 0,
                                    l = 0,
                                    c = 0,
                                    u = 0;
                                for (o = n ? (e - this.xPct[a]) / (this.xPct[a + 1] - this.xPct[a]) : (this.xPct[a + 1] - e) / (this.xPct[a + 1] - this.xPct[a]); r > 0;) s = this.xPct[a + 1 + u] - this.xPct[a + u], t[a + u] * i + 100 - 100 * o > 100 ? (l = s * o, i = (r - 100 * o) / t[a + u], o = 1) : (l = t[a + u] * s / 100 * i, i = 0), n ? (c -= l, this.xPct.length + u >= 1 && u--) : (c += l, this.xPct.length - u >= 1 && u++), r = t[a + u] * i;
                                return e + c
                            }, e.prototype.toStepping = function (e) {
                                return e = E(this.xVal, this.xPct, e)
                            }, e.prototype.fromStepping = function (e) {
                                return k(this.xVal, this.xPct, e)
                            }, e.prototype.getStep = function (e) {
                                return e = P(this.xPct, this.xSteps, this.snap, e)
                            }, e.prototype.getDefaultStep = function (e, t, n) {
                                var o = S(e, this.xPct);
                                return (100 === e || t && e === this.xPct[o - 1]) && (o = Math.max(o - 1, 1)), (this.xVal[o] - this.xVal[o - 1]) / n
                            }, e.prototype.getNearbySteps = function (e) {
                                var t = S(e, this.xPct);
                                return {
                                    stepBefore: {
                                        startValue: this.xVal[t - 2],
                                        step: this.xNumSteps[t - 2],
                                        highestStep: this.xHighestCompleteStep[t - 2]
                                    },
                                    thisStep: {
                                        startValue: this.xVal[t - 1],
                                        step: this.xNumSteps[t - 1],
                                        highestStep: this.xHighestCompleteStep[t - 1]
                                    },
                                    stepAfter: {
                                        startValue: this.xVal[t],
                                        step: this.xNumSteps[t],
                                        highestStep: this.xHighestCompleteStep[t]
                                    }
                                }
                            }, e.prototype.countStepDecimals = function () {
                                var e = this.xNumSteps.map(p);
                                return Math.max.apply(null, e)
                            }, e.prototype.hasNoSize = function () {
                                return this.xVal[0] === this.xVal[this.xVal.length - 1]
                            }, e.prototype.convert = function (e) {
                                return this.getStep(this.toStepping(e))
                            }, e.prototype.handleEntryPoint = function (e, t) {
                                var n;
                                if (!c(n = "min" === e ? 0 : "max" === e ? 100 : parseFloat(e)) || !c(t[0])) throw new Error("noUiSlider: 'range' value isn't numeric.");
                                this.xPct.push(n), this.xVal.push(t[0]);
                                var o = Number(t[1]);
                                n ? this.xSteps.push(!isNaN(o) && o) : isNaN(o) || (this.xSteps[0] = o), this.xHighestCompleteStep.push(0)
                            }, e.prototype.handleStepPoint = function (e, t) {
                                if (t)
                                    if (this.xVal[e] !== this.xVal[e + 1]) {
                                        this.xSteps[e] = C([this.xVal[e], this.xVal[e + 1]], t, 0) / D(this.xPct[e], this.xPct[e + 1]);
                                        var n = (this.xVal[e + 1] - this.xVal[e]) / this.xNumSteps[e],
                                            o = Math.ceil(Number(n.toFixed(3)) - 1),
                                            a = this.xVal[e] + this.xNumSteps[e] * o;
                                        this.xHighestCompleteStep[e] = a
                                    } else this.xSteps[e] = this.xHighestCompleteStep[e] = this.xVal[e]
                            }, e
                        }(),
                        A = {
                            to: function (e) {
                                return void 0 === e ? "" : e.toFixed(2)
                            },
                            from: Number
                        },
                        F = {
                            target: "target",
                            base: "base",
                            origin: "origin",
                            handle: "handle",
                            handleLower: "handle-lower",
                            handleUpper: "handle-upper",
                            touchArea: "touch-area",
                            horizontal: "horizontal",
                            vertical: "vertical",
                            background: "background",
                            connect: "connect",
                            connects: "connects",
                            ltr: "ltr",
                            rtl: "rtl",
                            textDirectionLtr: "txt-dir-ltr",
                            textDirectionRtl: "txt-dir-rtl",
                            draggable: "draggable",
                            drag: "state-drag",
                            tap: "state-tap",
                            active: "active",
                            tooltip: "tooltip",
                            pips: "pips",
                            pipsHorizontal: "pips-horizontal",
                            pipsVertical: "pips-vertical",
                            marker: "marker",
                            markerHorizontal: "marker-horizontal",
                            markerVertical: "marker-vertical",
                            markerNormal: "marker-normal",
                            markerLarge: "marker-large",
                            markerSub: "marker-sub",
                            value: "value",
                            valueHorizontal: "value-horizontal",
                            valueVertical: "value-vertical",
                            valueNormal: "value-normal",
                            valueLarge: "value-large",
                            valueSub: "value-sub"
                        },
                        _ = {
                            tooltips: ".__tooltips",
                            aria: ".__aria"
                        };

                    function j(e, t) {
                        if (!c(t)) throw new Error("noUiSlider: 'step' is not numeric.");
                        e.singleStep = t
                    }

                    function I(e, t) {
                        if (!c(t)) throw new Error("noUiSlider: 'keyboardPageMultiplier' is not numeric.");
                        e.keyboardPageMultiplier = t
                    }

                    function Y(e, t) {
                        if (!c(t)) throw new Error("noUiSlider: 'keyboardMultiplier' is not numeric.");
                        e.keyboardMultiplier = t
                    }

                    function L(e, t) {
                        if (!c(t)) throw new Error("noUiSlider: 'keyboardDefaultStep' is not numeric.");
                        e.keyboardDefaultStep = t
                    }

                    function H(e, t) {
                        if ("object" != typeof t || Array.isArray(t)) throw new Error("noUiSlider: 'range' is not an object.");
                        if (void 0 === t.min || void 0 === t.max) throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
                        e.spectrum = new O(t, e.snap || !1, e.singleStep)
                    }

                    function V(e, t) {
                        if (t = f(t), !Array.isArray(t) || !t.length) throw new Error("noUiSlider: 'start' option is incorrect.");
                        e.handles = t.length, e.start = t
                    }

                    function U(e, t) {
                        if ("boolean" != typeof t) throw new Error("noUiSlider: 'snap' option must be a boolean.");
                        e.snap = t
                    }

                    function R(e, t) {
                        if ("boolean" != typeof t) throw new Error("noUiSlider: 'animate' option must be a boolean.");
                        e.animate = t
                    }

                    function $(e, t) {
                        if ("number" != typeof t) throw new Error("noUiSlider: 'animationDuration' option must be a number.");
                        e.animationDuration = t
                    }

                    function W(e, t) {
                        var n, o = [!1];
                        if ("lower" === t ? t = [!0, !1] : "upper" === t && (t = [!1, !0]), !0 === t || !1 === t) {
                            for (n = 1; n < e.handles; n++) o.push(t);
                            o.push(!1)
                        } else {
                            if (!Array.isArray(t) || !t.length || t.length !== e.handles + 1) throw new Error("noUiSlider: 'connect' option doesn't match handle count.");
                            o = t
                        }
                        e.connect = o
                    }

                    function z(e, t) {
                        switch (t) {
                            case "horizontal":
                                e.ort = 0;
                                break;
                            case "vertical":
                                e.ort = 1;
                                break;
                            default:
                                throw new Error("noUiSlider: 'orientation' option is invalid.")
                        }
                    }

                    function B(e, t) {
                        if (!c(t)) throw new Error("noUiSlider: 'margin' option must be numeric.");
                        0 !== t && (e.margin = e.spectrum.getDistance(t))
                    }

                    function q(e, t) {
                        if (!c(t)) throw new Error("noUiSlider: 'limit' option must be numeric.");
                        if (e.limit = e.spectrum.getDistance(t), !e.limit || e.handles < 2) throw new Error("noUiSlider: 'limit' option is only supported on linear sliders with 2 or more handles.")
                    }

                    function K(e, t) {
                        var n;
                        if (!c(t) && !Array.isArray(t)) throw new Error("noUiSlider: 'padding' option must be numeric or array of exactly 2 numbers.");
                        if (Array.isArray(t) && 2 !== t.length && !c(t[0]) && !c(t[1])) throw new Error("noUiSlider: 'padding' option must be numeric or array of exactly 2 numbers.");
                        if (0 !== t) {
                            for (Array.isArray(t) || (t = [t, t]), e.padding = [e.spectrum.getDistance(t[0]), e.spectrum.getDistance(t[1])], n = 0; n < e.spectrum.xNumSteps.length - 1; n++)
                                if (e.padding[0][n] < 0 || e.padding[1][n] < 0) throw new Error("noUiSlider: 'padding' option must be a positive number(s).");
                            var o = t[0] + t[1],
                                a = e.spectrum.xVal[0];
                            if (o / (e.spectrum.xVal[e.spectrum.xVal.length - 1] - a) > 1) throw new Error("noUiSlider: 'padding' option must not exceed 100% of the range.")
                        }
                    }

                    function J(e, t) {
                        switch (t) {
                            case "ltr":
                                e.dir = 0;
                                break;
                            case "rtl":
                                e.dir = 1;
                                break;
                            default:
                                throw new Error("noUiSlider: 'direction' option was not recognized.")
                        }
                    }

                    function X(e, t) {
                        if ("string" != typeof t) throw new Error("noUiSlider: 'behaviour' must be a string containing options.");
                        var n = t.indexOf("tap") >= 0,
                            o = t.indexOf("drag") >= 0,
                            a = t.indexOf("fixed") >= 0,
                            i = t.indexOf("snap") >= 0,
                            r = t.indexOf("hover") >= 0,
                            s = t.indexOf("unconstrained") >= 0,
                            l = t.indexOf("drag-all") >= 0;
                        if (a) {
                            if (2 !== e.handles) throw new Error("noUiSlider: 'fixed' behaviour must be used with 2 handles");
                            B(e, e.start[1] - e.start[0])
                        }
                        if (s && (e.margin || e.limit)) throw new Error("noUiSlider: 'unconstrained' behaviour cannot be used with margin or limit");
                        e.events = {
                            tap: n || i,
                            drag: o,
                            dragAll: l,
                            fixed: a,
                            snap: i,
                            hover: r,
                            unconstrained: s
                        }
                    }

                    function G(e, t) {
                        if (!1 !== t)
                            if (!0 === t || n(t)) {
                                e.tooltips = [];
                                for (var o = 0; o < e.handles; o++) e.tooltips.push(t)
                            } else {
                                if ((t = f(t)).length !== e.handles) throw new Error("noUiSlider: must pass a formatter for all handles.");
                                t.forEach((function (e) {
                                    if ("boolean" != typeof e && !n(e)) throw new Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.")
                                })), e.tooltips = t
                            }
                    }

                    function Z(e, t) {
                        if (t.length !== e.handles) throw new Error("noUiSlider: must pass a attributes for all handles.");
                        e.handleAttributes = t
                    }

                    function Q(e, t) {
                        if (!n(t)) throw new Error("noUiSlider: 'ariaFormat' requires 'to' method.");
                        e.ariaFormat = t
                    }

                    function ee(e, n) {
                        if (!t(n)) throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.");
                        e.format = n
                    }

                    function te(e, t) {
                        if ("boolean" != typeof t) throw new Error("noUiSlider: 'keyboardSupport' option must be a boolean.");
                        e.keyboardSupport = t
                    }

                    function ne(e, t) {
                        e.documentElement = t
                    }

                    function oe(e, t) {
                        if ("string" != typeof t && !1 !== t) throw new Error("noUiSlider: 'cssPrefix' must be a string or `false`.");
                        e.cssPrefix = t
                    }

                    function ae(e, t) {
                        if ("object" != typeof t) throw new Error("noUiSlider: 'cssClasses' must be an object.");
                        "string" == typeof e.cssPrefix ? (e.cssClasses = {}, Object.keys(t).forEach((function (n) {
                            e.cssClasses[n] = e.cssPrefix + t[n]
                        }))) : e.cssClasses = t
                    }

                    function ie(e) {
                        var t = {
                                margin: null,
                                limit: null,
                                padding: null,
                                animate: !0,
                                animationDuration: 300,
                                ariaFormat: A,
                                format: A
                            },
                            n = {
                                step: {
                                    r: !1,
                                    t: j
                                },
                                keyboardPageMultiplier: {
                                    r: !1,
                                    t: I
                                },
                                keyboardMultiplier: {
                                    r: !1,
                                    t: Y
                                },
                                keyboardDefaultStep: {
                                    r: !1,
                                    t: L
                                },
                                start: {
                                    r: !0,
                                    t: V
                                },
                                connect: {
                                    r: !0,
                                    t: W
                                },
                                direction: {
                                    r: !0,
                                    t: J
                                },
                                snap: {
                                    r: !1,
                                    t: U
                                },
                                animate: {
                                    r: !1,
                                    t: R
                                },
                                animationDuration: {
                                    r: !1,
                                    t: $
                                },
                                range: {
                                    r: !0,
                                    t: H
                                },
                                orientation: {
                                    r: !1,
                                    t: z
                                },
                                margin: {
                                    r: !1,
                                    t: B
                                },
                                limit: {
                                    r: !1,
                                    t: q
                                },
                                padding: {
                                    r: !1,
                                    t: K
                                },
                                behaviour: {
                                    r: !0,
                                    t: X
                                },
                                ariaFormat: {
                                    r: !1,
                                    t: Q
                                },
                                format: {
                                    r: !1,
                                    t: ee
                                },
                                tooltips: {
                                    r: !1,
                                    t: G
                                },
                                keyboardSupport: {
                                    r: !0,
                                    t: te
                                },
                                documentElement: {
                                    r: !1,
                                    t: ne
                                },
                                cssPrefix: {
                                    r: !0,
                                    t: oe
                                },
                                cssClasses: {
                                    r: !0,
                                    t: ae
                                },
                                handleAttributes: {
                                    r: !1,
                                    t: Z
                                }
                            },
                            o = {
                                connect: !1,
                                direction: "ltr",
                                behaviour: "tap",
                                orientation: "horizontal",
                                keyboardSupport: !0,
                                cssPrefix: "noUi-",
                                cssClasses: F,
                                keyboardPageMultiplier: 5,
                                keyboardMultiplier: 1,
                                keyboardDefaultStep: 10
                            };
                        e.format && !e.ariaFormat && (e.ariaFormat = e.format), Object.keys(n).forEach((function (i) {
                            if (a(e[i]) || void 0 !== o[i]) n[i].t(t, a(e[i]) ? e[i] : o[i]);
                            else if (n[i].r) throw new Error("noUiSlider: '" + i + "' is required.")
                        })), t.pips = e.pips;
                        var i = document.createElement("div"),
                            r = void 0 !== i.style.msTransform,
                            s = void 0 !== i.style.transform;
                        t.transformRule = s ? "transform" : r ? "msTransform" : "webkitTransform";
                        var l = [
                            ["left", "top"],
                            ["right", "bottom"]
                        ];
                        return t.style = l[t.dir][t.ort], t
                    }

                    function re(t, n, s) {
                        var c, p, D, C, x, M = b(),
                            S = y() && w(),
                            E = t,
                            k = n.spectrum,
                            P = [],
                            N = [],
                            T = [],
                            O = 0,
                            A = {},
                            F = t.ownerDocument,
                            j = n.documentElement || F.documentElement,
                            I = F.body,
                            Y = "rtl" === F.dir || 1 === n.ort ? 0 : 100;

                        function L(e, t) {
                            var n = F.createElement("div");
                            return t && m(n, t), e.appendChild(n), n
                        }

                        function H(e, t) {
                            var o = L(e, n.cssClasses.origin),
                                a = L(o, n.cssClasses.handle);
                            if (L(a, n.cssClasses.touchArea), a.setAttribute("data-handle", String(t)), n.keyboardSupport && (a.setAttribute("tabindex", "0"), a.addEventListener("keydown", (function (e) {
                                    return pe(e, t)
                                }))), void 0 !== n.handleAttributes) {
                                var i = n.handleAttributes[t];
                                Object.keys(i).forEach((function (e) {
                                    a.setAttribute(e, i[e])
                                }))
                            }
                            return a.setAttribute("role", "slider"), a.setAttribute("aria-orientation", n.ort ? "vertical" : "horizontal"), 0 === t ? m(a, n.cssClasses.handleLower) : t === n.handles - 1 && m(a, n.cssClasses.handleUpper), o
                        }

                        function V(e, t) {
                            return !!t && L(e, n.cssClasses.connect)
                        }

                        function U(e, t) {
                            var o = L(t, n.cssClasses.connects);
                            p = [], (D = []).push(V(o, e[0]));
                            for (var a = 0; a < n.handles; a++) p.push(H(t, a)), T[a] = a, D.push(V(o, e[a + 1]))
                        }

                        function R(e) {
                            return m(e, n.cssClasses.target), 0 === n.dir ? m(e, n.cssClasses.ltr) : m(e, n.cssClasses.rtl), 0 === n.ort ? m(e, n.cssClasses.horizontal) : m(e, n.cssClasses.vertical), m(e, "rtl" === getComputedStyle(e).direction ? n.cssClasses.textDirectionRtl : n.cssClasses.textDirectionLtr), L(e, n.cssClasses.base)
                        }

                        function $(e, t) {
                            return !(!n.tooltips || !n.tooltips[t]) && L(e.firstChild, n.cssClasses.tooltip)
                        }

                        function W() {
                            return E.hasAttribute("disabled")
                        }

                        function z(e) {
                            return p[e].hasAttribute("disabled")
                        }

                        function B() {
                            x && (ve("update" + _.tooltips), x.forEach((function (e) {
                                e && o(e)
                            })), x = null)
                        }

                        function q() {
                            B(), x = p.map($), he("update" + _.tooltips, (function (e, t, o) {
                                if (x && n.tooltips && !1 !== x[t]) {
                                    var a = e[t];
                                    !0 !== n.tooltips[t] && (a = n.tooltips[t].to(o[t])), x[t].innerHTML = a
                                }
                            }))
                        }

                        function K() {
                            ve("update" + _.aria), he("update" + _.aria, (function (e, t, o, a, i) {
                                T.forEach((function (e) {
                                    var t = p[e],
                                        a = we(N, e, 0, !0, !0, !0),
                                        r = we(N, e, 100, !0, !0, !0),
                                        s = i[e],
                                        l = String(n.ariaFormat.to(o[e]));
                                    a = k.fromStepping(a).toFixed(1), r = k.fromStepping(r).toFixed(1), s = k.fromStepping(s).toFixed(1), t.children[0].setAttribute("aria-valuemin", a), t.children[0].setAttribute("aria-valuemax", r), t.children[0].setAttribute("aria-valuenow", s), t.children[0].setAttribute("aria-valuetext", l)
                                }))
                            }))
                        }

                        function J(t) {
                            if (t.mode === e.PipsMode.Range || t.mode === e.PipsMode.Steps) return k.xVal;
                            if (t.mode === e.PipsMode.Count) {
                                if (t.values < 2) throw new Error("noUiSlider: 'values' (>= 2) required for mode 'count'.");
                                for (var n = t.values - 1, o = 100 / n, a = []; n--;) a[n] = n * o;
                                return a.push(100), X(a, t.stepped)
                            }
                            return t.mode === e.PipsMode.Positions ? X(t.values, t.stepped) : t.mode === e.PipsMode.Values ? t.stepped ? t.values.map((function (e) {
                                return k.fromStepping(k.getStep(k.toStepping(e)))
                            })) : t.values : []
                        }

                        function X(e, t) {
                            return e.map((function (e) {
                                return k.fromStepping(t ? k.getStep(e) : e)
                            }))
                        }

                        function G(t) {
                            function n(e, t) {
                                return Number((e + t).toFixed(7))
                            }
                            var o = J(t),
                                a = {},
                                i = k.xVal[0],
                                s = k.xVal[k.xVal.length - 1],
                                l = !1,
                                c = !1,
                                u = 0;
                            return (o = r(o.slice().sort((function (e, t) {
                                return e - t
                            }))))[0] !== i && (o.unshift(i), l = !0), o[o.length - 1] !== s && (o.push(s), c = !0), o.forEach((function (i, r) {
                                var s, d, f, p, m, h, g, v, b, w, y = i,
                                    D = o[r + 1],
                                    C = t.mode === e.PipsMode.Steps;
                                for (C && (s = k.xNumSteps[r]), s || (s = D - y), void 0 === D && (D = y), s = Math.max(s, 1e-7), d = y; d <= D; d = n(d, s)) {
                                    for (v = (m = (p = k.toStepping(d)) - u) / (t.density || 1), w = m / (b = Math.round(v)), f = 1; f <= b; f += 1) a[(h = u + f * w).toFixed(5)] = [k.fromStepping(h), 0];
                                    g = o.indexOf(d) > -1 ? e.PipsType.LargeValue : C ? e.PipsType.SmallValue : e.PipsType.NoValue, !r && l && d !== D && (g = 0), d === D && c || (a[p.toFixed(5)] = [d, g]), u = p
                                }
                            })), a
                        }

                        function Z(t, o, a) {
                            var i, r, s = F.createElement("div"),
                                l = ((i = {})[e.PipsType.None] = "", i[e.PipsType.NoValue] = n.cssClasses.valueNormal, i[e.PipsType.LargeValue] = n.cssClasses.valueLarge, i[e.PipsType.SmallValue] = n.cssClasses.valueSub, i),
                                c = ((r = {})[e.PipsType.None] = "", r[e.PipsType.NoValue] = n.cssClasses.markerNormal, r[e.PipsType.LargeValue] = n.cssClasses.markerLarge, r[e.PipsType.SmallValue] = n.cssClasses.markerSub, r),
                                u = [n.cssClasses.valueHorizontal, n.cssClasses.valueVertical],
                                d = [n.cssClasses.markerHorizontal, n.cssClasses.markerVertical];

                            function f(e, t) {
                                var o = t === n.cssClasses.value,
                                    a = o ? l : c;
                                return t + " " + (o ? u : d)[n.ort] + " " + a[e]
                            }

                            function p(t, i, r) {
                                if ((r = o ? o(i, r) : r) !== e.PipsType.None) {
                                    var l = L(s, !1);
                                    l.className = f(r, n.cssClasses.marker), l.style[n.style] = t + "%", r > e.PipsType.NoValue && ((l = L(s, !1)).className = f(r, n.cssClasses.value), l.setAttribute("data-value", String(i)), l.style[n.style] = t + "%", l.innerHTML = String(a.to(i)))
                                }
                            }
                            return m(s, n.cssClasses.pips), m(s, 0 === n.ort ? n.cssClasses.pipsHorizontal : n.cssClasses.pipsVertical), Object.keys(t).forEach((function (e) {
                                p(e, t[e][0], t[e][1])
                            })), s
                        }

                        function Q() {
                            C && (o(C), C = null)
                        }

                        function ee(e) {
                            Q();
                            var t = G(e),
                                n = e.filter,
                                o = e.format || {
                                    to: function (e) {
                                        return String(Math.round(e))
                                    }
                                };
                            return C = E.appendChild(Z(t, n, o))
                        }

                        function te() {
                            var e = c.getBoundingClientRect(),
                                t = "offset" + ["Width", "Height"][n.ort];
                            return 0 === n.ort ? e.width || c[t] : e.height || c[t]
                        }

                        function ne(e, t, o, a) {
                            var i = function (i) {
                                    var r = oe(i, a.pageOffset, a.target || t);
                                    return !!r && !(W() && !a.doNotReject) && !(g(E, n.cssClasses.tap) && !a.doNotReject) && !(e === M.start && void 0 !== r.buttons && r.buttons > 1) && (!a.hover || !r.buttons) && (S || r.preventDefault(), r.calcPoint = r.points[n.ort], void o(r, a))
                                },
                                r = [];
                            return e.split(" ").forEach((function (e) {
                                t.addEventListener(e, i, !!S && {
                                    passive: !0
                                }), r.push([e, i])
                            })), r
                        }

                        function oe(e, t, n) {
                            var o = 0 === e.type.indexOf("touch"),
                                a = 0 === e.type.indexOf("mouse"),
                                i = 0 === e.type.indexOf("pointer"),
                                r = 0,
                                s = 0;
                            if (0 === e.type.indexOf("MSPointer") && (i = !0), "mousedown" === e.type && !e.buttons && !e.touches) return !1;
                            if (o) {
                                var l = function (t) {
                                    var o = t.target;
                                    return o === n || n.contains(o) || e.composed && e.composedPath().shift() === n
                                };
                                if ("touchstart" === e.type) {
                                    var c = Array.prototype.filter.call(e.touches, l);
                                    if (c.length > 1) return !1;
                                    r = c[0].pageX, s = c[0].pageY
                                } else {
                                    var u = Array.prototype.find.call(e.changedTouches, l);
                                    if (!u) return !1;
                                    r = u.pageX, s = u.pageY
                                }
                            }
                            return t = t || v(F), (a || i) && (r = e.clientX + t.x, s = e.clientY + t.y), e.pageOffset = t, e.points = [r, s], e.cursor = a || i, e
                        }

                        function ae(e) {
                            var t = 100 * (e - l(c, n.ort)) / te();
                            return t = d(t), n.dir ? 100 - t : t
                        }

                        function re(e) {
                            var t = 100,
                                n = !1;
                            return p.forEach((function (o, a) {
                                if (!z(a)) {
                                    var i = N[a],
                                        r = Math.abs(i - e);
                                    (r < t || r <= t && e > i || 100 === r && 100 === t) && (n = a, t = r)
                                }
                            })), n
                        }

                        function se(e, t) {
                            "mouseout" === e.type && "HTML" === e.target.nodeName && null === e.relatedTarget && ce(e, t)
                        }

                        function le(e, t) {
                            if (-1 === navigator.appVersion.indexOf("MSIE 9") && 0 === e.buttons && 0 !== t.buttonsProperty) return ce(e, t);
                            var o = (n.dir ? -1 : 1) * (e.calcPoint - t.startCalcPoint);
                            De(o > 0, 100 * o / t.baseSize, t.locations, t.handleNumbers, t.connect)
                        }

                        function ce(e, t) {
                            t.handle && (h(t.handle, n.cssClasses.active), O -= 1), t.listeners.forEach((function (e) {
                                j.removeEventListener(e[0], e[1])
                            })), 0 === O && (h(E, n.cssClasses.drag), Me(), e.cursor && (I.style.cursor = "", I.removeEventListener("selectstart", i))), t.handleNumbers.forEach((function (e) {
                                be("change", e), be("set", e), be("end", e)
                            }))
                        }

                        function ue(e, t) {
                            if (!t.handleNumbers.some(z)) {
                                var o;
                                1 === t.handleNumbers.length && (o = p[t.handleNumbers[0]].children[0], O += 1, m(o, n.cssClasses.active)), e.stopPropagation();
                                var a = [],
                                    r = ne(M.move, j, le, {
                                        target: e.target,
                                        handle: o,
                                        connect: t.connect,
                                        listeners: a,
                                        startCalcPoint: e.calcPoint,
                                        baseSize: te(),
                                        pageOffset: e.pageOffset,
                                        handleNumbers: t.handleNumbers,
                                        buttonsProperty: e.buttons,
                                        locations: N.slice()
                                    }),
                                    s = ne(M.end, j, ce, {
                                        target: e.target,
                                        handle: o,
                                        listeners: a,
                                        doNotReject: !0,
                                        handleNumbers: t.handleNumbers
                                    }),
                                    l = ne("mouseout", j, se, {
                                        target: e.target,
                                        handle: o,
                                        listeners: a,
                                        doNotReject: !0,
                                        handleNumbers: t.handleNumbers
                                    });
                                a.push.apply(a, r.concat(s, l)), e.cursor && (I.style.cursor = getComputedStyle(e.target).cursor, p.length > 1 && m(E, n.cssClasses.drag), I.addEventListener("selectstart", i, !1)), t.handleNumbers.forEach((function (e) {
                                    be("start", e)
                                }))
                            }
                        }

                        function de(e) {
                            e.stopPropagation();
                            var t = ae(e.calcPoint),
                                o = re(t);
                            !1 !== o && (n.events.snap || u(E, n.cssClasses.tap, n.animationDuration), Se(o, t, !0, !0), Me(), be("slide", o, !0), be("update", o, !0), n.events.snap ? ue(e, {
                                handleNumbers: [o]
                            }) : (be("change", o, !0), be("set", o, !0)))
                        }

                        function fe(e) {
                            var t = ae(e.calcPoint),
                                n = k.getStep(t),
                                o = k.fromStepping(n);
                            Object.keys(A).forEach((function (e) {
                                "hover" === e.split(".")[0] && A[e].forEach((function (e) {
                                    e.call(Ye, o)
                                }))
                            }))
                        }

                        function pe(e, t) {
                            if (W() || z(t)) return !1;
                            var o = ["Left", "Right"],
                                a = ["Down", "Up"],
                                i = ["PageDown", "PageUp"],
                                r = ["Home", "End"];
                            n.dir && !n.ort ? o.reverse() : n.ort && !n.dir && (a.reverse(), i.reverse());
                            var s, l = e.key.replace("Arrow", ""),
                                c = l === i[0],
                                u = l === i[1],
                                d = l === a[0] || l === o[0] || c,
                                f = l === a[1] || l === o[1] || u,
                                p = l === r[0],
                                m = l === r[1];
                            if (!(d || f || p || m)) return !0;
                            if (e.preventDefault(), f || d) {
                                var h = d ? 0 : 1,
                                    g = Fe(t)[h];
                                if (null === g) return !1;
                                !1 === g && (g = k.getDefaultStep(N[t], d, n.keyboardDefaultStep)), g *= u || c ? n.keyboardPageMultiplier : n.keyboardMultiplier, g = Math.max(g, 1e-7), g *= d ? -1 : 1, s = P[t] + g
                            } else s = m ? n.spectrum.xVal[n.spectrum.xVal.length - 1] : n.spectrum.xVal[0];
                            return Se(t, k.toStepping(s), !0, !0), be("slide", t), be("update", t), be("change", t), be("set", t), !1
                        }

                        function me(e) {
                            e.fixed || p.forEach((function (e, t) {
                                ne(M.start, e.children[0], ue, {
                                    handleNumbers: [t]
                                })
                            })), e.tap && ne(M.start, c, de, {}), e.hover && ne(M.move, c, fe, {
                                hover: !0
                            }), e.drag && D.forEach((function (t, o) {
                                if (!1 !== t && 0 !== o && o !== D.length - 1) {
                                    var a = p[o - 1],
                                        i = p[o],
                                        r = [t],
                                        s = [a, i],
                                        l = [o - 1, o];
                                    m(t, n.cssClasses.draggable), e.fixed && (r.push(a.children[0]), r.push(i.children[0])), e.dragAll && (s = p, l = T), r.forEach((function (e) {
                                        ne(M.start, e, ue, {
                                            handles: s,
                                            handleNumbers: l,
                                            connect: t
                                        })
                                    }))
                                }
                            }))
                        }

                        function he(e, t) {
                            A[e] = A[e] || [], A[e].push(t), "update" === e.split(".")[0] && p.forEach((function (e, t) {
                                be("update", t)
                            }))
                        }

                        function ge(e) {
                            return e === _.aria || e === _.tooltips
                        }

                        function ve(e) {
                            var t = e && e.split(".")[0],
                                n = t ? e.substring(t.length) : e;
                            Object.keys(A).forEach((function (e) {
                                var o = e.split(".")[0],
                                    a = e.substring(o.length);
                                t && t !== o || n && n !== a || ge(a) && n !== a || delete A[e]
                            }))
                        }

                        function be(e, t, o) {
                            Object.keys(A).forEach((function (a) {
                                var i = a.split(".")[0];
                                e === i && A[a].forEach((function (e) {
                                    e.call(Ye, P.map(n.format.to), t, P.slice(), o || !1, N.slice(), Ye)
                                }))
                            }))
                        }

                        function we(e, t, o, a, i, r) {
                            var s;
                            return p.length > 1 && !n.events.unconstrained && (a && t > 0 && (s = k.getAbsoluteDistance(e[t - 1], n.margin, !1), o = Math.max(o, s)), i && t < p.length - 1 && (s = k.getAbsoluteDistance(e[t + 1], n.margin, !0), o = Math.min(o, s))), p.length > 1 && n.limit && (a && t > 0 && (s = k.getAbsoluteDistance(e[t - 1], n.limit, !1), o = Math.min(o, s)), i && t < p.length - 1 && (s = k.getAbsoluteDistance(e[t + 1], n.limit, !0), o = Math.max(o, s))), n.padding && (0 === t && (s = k.getAbsoluteDistance(0, n.padding[0], !1), o = Math.max(o, s)), t === p.length - 1 && (s = k.getAbsoluteDistance(100, n.padding[1], !0), o = Math.min(o, s))), !((o = d(o = k.getStep(o))) === e[t] && !r) && o
                        }

                        function ye(e, t) {
                            var o = n.ort;
                            return (o ? t : e) + ", " + (o ? e : t)
                        }

                        function De(e, t, n, o, a) {
                            var i = n.slice(),
                                r = o[0],
                                s = [!e, e],
                                l = [e, !e];
                            o = o.slice(), e && o.reverse(), o.length > 1 ? o.forEach((function (e, n) {
                                var o = we(i, e, i[e] + t, s[n], l[n], !1);
                                !1 === o ? t = 0 : (t = o - i[e], i[e] = o)
                            })) : s = l = [!0];
                            var c = !1;
                            o.forEach((function (e, o) {
                                c = Se(e, n[e] + t, s[o], l[o]) || c
                            })), c && (o.forEach((function (e) {
                                be("update", e), be("slide", e)
                            })), null != a && be("drag", r))
                        }

                        function Ce(e, t) {
                            return n.dir ? 100 - e - t : e
                        }

                        function xe(e, t) {
                            N[e] = t, P[e] = k.fromStepping(t);
                            var o = "translate(" + ye(Ce(t, 0) - Y + "%", "0") + ")";
                            p[e].style[n.transformRule] = o, Ee(e), Ee(e + 1)
                        }

                        function Me() {
                            T.forEach((function (e) {
                                var t = N[e] > 50 ? -1 : 1,
                                    n = 3 + (p.length + t * e);
                                p[e].style.zIndex = String(n)
                            }))
                        }

                        function Se(e, t, n, o, a) {
                            return a || (t = we(N, e, t, n, o, !1)), !1 !== t && (xe(e, t), !0)
                        }

                        function Ee(e) {
                            if (D[e]) {
                                var t = 0,
                                    o = 100;
                                0 !== e && (t = N[e - 1]), e !== D.length - 1 && (o = N[e]);
                                var a = o - t,
                                    i = "translate(" + ye(Ce(t, a) + "%", "0") + ")",
                                    r = "scale(" + ye(a / 100, "1") + ")";
                                D[e].style[n.transformRule] = i + " " + r
                            }
                        }

                        function ke(e, t) {
                            return null === e || !1 === e || void 0 === e ? N[t] : ("number" == typeof e && (e = String(e)), !1 !== (e = n.format.from(e)) && (e = k.toStepping(e)), !1 === e || isNaN(e) ? N[t] : e)
                        }

                        function Pe(e, t, o) {
                            var a = f(e),
                                i = void 0 === N[0];
                            t = void 0 === t || t, n.animate && !i && u(E, n.cssClasses.tap, n.animationDuration), T.forEach((function (e) {
                                Se(e, ke(a[e], e), !0, !1, o)
                            }));
                            var r = 1 === T.length ? 0 : 1;
                            if (i && k.hasNoSize() && (o = !0, N[0] = 0, T.length > 1)) {
                                var s = 100 / (T.length - 1);
                                T.forEach((function (e) {
                                    N[e] = e * s
                                }))
                            }
                            for (; r < T.length; ++r) T.forEach((function (e) {
                                Se(e, N[e], !0, !0, o)
                            }));
                            Me(), T.forEach((function (e) {
                                be("update", e), null !== a[e] && t && be("set", e)
                            }))
                        }

                        function Ne(e) {
                            Pe(n.start, e)
                        }

                        function Te(e, t, n, o) {
                            if (!((e = Number(e)) >= 0 && e < T.length)) throw new Error("noUiSlider: invalid handle number, got: " + e);
                            Se(e, ke(t, e), !0, !0, o), be("update", e), n && be("set", e)
                        }

                        function Oe(e) {
                            if (void 0 === e && (e = !1), e) return 1 === P.length ? P[0] : P.slice(0);
                            var t = P.map(n.format.to);
                            return 1 === t.length ? t[0] : t
                        }

                        function Ae() {
                            for (ve(_.aria), ve(_.tooltips), Object.keys(n.cssClasses).forEach((function (e) {
                                    h(E, n.cssClasses[e])
                                })); E.firstChild;) E.removeChild(E.firstChild);
                            delete E.noUiSlider
                        }

                        function Fe(e) {
                            var t = N[e],
                                o = k.getNearbySteps(t),
                                a = P[e],
                                i = o.thisStep.step,
                                r = null;
                            if (n.snap) return [a - o.stepBefore.startValue || null, o.stepAfter.startValue - a || null];
                            !1 !== i && a + i > o.stepAfter.startValue && (i = o.stepAfter.startValue - a), r = a > o.thisStep.startValue ? o.thisStep.step : !1 !== o.stepBefore.step && a - o.stepBefore.highestStep, 100 === t ? i = null : 0 === t && (r = null);
                            var s = k.countStepDecimals();
                            return null !== i && !1 !== i && (i = Number(i.toFixed(s))), null !== r && !1 !== r && (r = Number(r.toFixed(s))), [r, i]
                        }

                        function _e() {
                            return T.map(Fe)
                        }

                        function je(e, t) {
                            var o = Oe(),
                                i = ["margin", "limit", "padding", "range", "animate", "snap", "step", "format", "pips", "tooltips"];
                            i.forEach((function (t) {
                                void 0 !== e[t] && (s[t] = e[t])
                            }));
                            var r = ie(s);
                            i.forEach((function (t) {
                                void 0 !== e[t] && (n[t] = r[t])
                            })), k = r.spectrum, n.margin = r.margin, n.limit = r.limit, n.padding = r.padding, n.pips ? ee(n.pips) : Q(), n.tooltips ? q() : B(), N = [], Pe(a(e.start) ? e.start : o, t)
                        }

                        function Ie() {
                            c = R(E), U(n.connect, c), me(n.events), Pe(n.start), n.pips && ee(n.pips), n.tooltips && q(), K()
                        }
                        Ie();
                        var Ye = {
                            destroy: Ae,
                            steps: _e,
                            on: he,
                            off: ve,
                            get: Oe,
                            set: Pe,
                            setHandle: Te,
                            reset: Ne,
                            __moveHandles: function (e, t, n) {
                                De(e, t, N, n)
                            },
                            options: s,
                            updateOptions: je,
                            target: E,
                            removePips: Q,
                            removeTooltips: B,
                            getPositions: function () {
                                return N.slice()
                            },
                            getTooltips: function () {
                                return x
                            },
                            getOrigins: function () {
                                return p
                            },
                            pips: ee
                        };
                        return Ye
                    }

                    function se(e, t) {
                        if (!e || !e.nodeName) throw new Error("noUiSlider: create requires a single element, got: " + e);
                        if (e.noUiSlider) throw new Error("noUiSlider: Slider was already initialized.");
                        var n = re(e, ie(t), t);
                        return e.noUiSlider = n, n
                    }
                    var le = {
                        __spectrum: O,
                        cssClasses: F,
                        create: se
                    };
                    e.create = se, e.cssClasses = F, e.default = le, Object.defineProperty(e, "__esModule", {
                        value: !0
                    })
                }(t)
            }
        },
        t = {};

    function n(o) {
        var a = t[o];
        if (void 0 !== a) return a.exports;
        var i = t[o] = {
            exports: {}
        };
        return e[o].call(i.exports, i, i.exports, n), i.exports
    }
    n.n = e => {
        var t = e && e.__esModule ? () => e.default : () => e;
        return n.d(t, {
            a: t
        }), t
    }, n.d = (e, t) => {
        for (var o in t) n.o(t, o) && !n.o(e, o) && Object.defineProperty(e, o, {
            enumerable: !0,
            get: t[o]
        })
    }, n.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), (() => {
        "use strict";
        var e = n(4211),
            t = n.n(e);
        const o = ["onChange", "onClose", "onDayCreate", "onDestroy", "onKeyDown", "onMonthChange", "onOpen", "onParseConfig", "onReady", "onValueUpdate", "onYearChange", "onPreCalendarPosition"],
            a = {
                _disable: [],
                allowInput: !1,
                allowInvalidPreload: !1,
                altFormat: "F j, Y",
                altInput: !1,
                altInputClass: "form-control input",
                animate: "object" == typeof window && -1 === window.navigator.userAgent.indexOf("MSIE"),
                ariaDateFormat: "F j, Y",
                autoFillDefaultTime: !0,
                clickOpens: !0,
                closeOnSelect: !0,
                conjunction: ", ",
                dateFormat: "Y-m-d",
                defaultHour: 12,
                defaultMinute: 0,
                defaultSeconds: 0,
                disable: [],
                disableMobile: !1,
                enableSeconds: !1,
                enableTime: !1,
                errorHandler: e => "undefined" != typeof console && console.warn(e),
                getWeek: e => {
                    const t = new Date(e.getTime());
                    t.setHours(0, 0, 0, 0), t.setDate(t.getDate() + 3 - (t.getDay() + 6) % 7);
                    var n = new Date(t.getFullYear(), 0, 4);
                    return 1 + Math.round(((t.getTime() - n.getTime()) / 864e5 - 3 + (n.getDay() + 6) % 7) / 7)
                },
                hourIncrement: 1,
                ignoredFocusElements: [],
                inline: !1,
                locale: "default",
                minuteIncrement: 5,
                mode: "single",
                monthSelectorType: "dropdown",
                nextArrow: "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 17 17'><g></g><path d='M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z' /></svg>",
                noCalendar: !1,
                now: new Date,
                onChange: [],
                onClose: [],
                onDayCreate: [],
                onDestroy: [],
                onKeyDown: [],
                onMonthChange: [],
                onOpen: [],
                onParseConfig: [],
                onReady: [],
                onValueUpdate: [],
                onYearChange: [],
                onPreCalendarPosition: [],
                plugins: [],
                position: "auto",
                positionElement: void 0,
                prevArrow: "<svg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 17 17'><g></g><path d='M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z' /></svg>",
                shorthandCurrentMonth: !1,
                showMonths: 1,
                static: !1,
                time_24hr: !1,
                weekNumbers: !1,
                wrap: !1
            },
            i = {
                weekdays: {
                    shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    longhand: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
                },
                months: {
                    shorthand: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    longhand: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
                },
                daysInMonth: [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
                firstDayOfWeek: 0,
                ordinal: e => {
                    const t = e % 100;
                    if (t > 3 && t < 21) return "th";
                    switch (t % 10) {
                        case 1:
                            return "st";
                        case 2:
                            return "nd";
                        case 3:
                            return "rd";
                        default:
                            return "th"
                    }
                },
                rangeSeparator: " to ",
                weekAbbreviation: "Wk",
                scrollTitle: "Scroll to increment",
                toggleTitle: "Click to toggle",
                amPM: ["AM", "PM"],
                yearAriaLabel: "Year",
                monthAriaLabel: "Month",
                hourAriaLabel: "Hour",
                minuteAriaLabel: "Minute",
                time_24hr: !1
            },
            r = i,
            s = (e, t = 2) => `000${e}`.slice(-1 * t),
            l = e => !0 === e ? 1 : 0;

        function c(e, t) {
            let n;
            return function () {
                clearTimeout(n), n = setTimeout((() => e.apply(this, arguments)), t)
            }
        }
        const u = e => e instanceof Array ? e : [e];

        function d(e, t, n) {
            if (!0 === n) return e.classList.add(t);
            e.classList.remove(t)
        }

        function f(e, t, n) {
            const o = window.document.createElement(e);
            return t = t || "", n = n || "", o.className = t, void 0 !== n && (o.textContent = n), o
        }

        function p(e) {
            for (; e.firstChild;) e.removeChild(e.firstChild)
        }

        function m(e, t) {
            return t(e) ? e : e.parentNode ? m(e.parentNode, t) : void 0
        }

        function h(e, t) {
            const n = f("div", "numInputWrapper"),
                o = f("input", "numInput " + e),
                a = f("span", "arrowUp"),
                i = f("span", "arrowDown");
            if (-1 === navigator.userAgent.indexOf("MSIE 9.0") ? o.type = "number" : (o.type = "text", o.pattern = "\\d*"), void 0 !== t)
                for (const e in t) o.setAttribute(e, t[e]);
            return n.appendChild(o), n.appendChild(a), n.appendChild(i), n
        }

        function g(e) {
            try {
                if ("function" == typeof e.composedPath) {
                    return e.composedPath()[0]
                }
                return e.target
            } catch (t) {
                return e.target
            }
        }
        const v = () => {},
            b = (e, t, n) => n.months[t ? "shorthand" : "longhand"][e],
            w = {
                D: v,
                F: function (e, t, n) {
                    e.setMonth(n.months.longhand.indexOf(t))
                },
                G: (e, t) => {
                    e.setHours(parseFloat(t))
                },
                H: (e, t) => {
                    e.setHours(parseFloat(t))
                },
                J: (e, t) => {
                    e.setDate(parseFloat(t))
                },
                K: (e, t, n) => {
                    e.setHours(e.getHours() % 12 + 12 * l(new RegExp(n.amPM[1], "i").test(t)))
                },
                M: function (e, t, n) {
                    e.setMonth(n.months.shorthand.indexOf(t))
                },
                S: (e, t) => {
                    e.setSeconds(parseFloat(t))
                },
                U: (e, t) => new Date(1e3 * parseFloat(t)),
                W: function (e, t, n) {
                    const o = parseInt(t),
                        a = new Date(e.getFullYear(), 0, 2 + 7 * (o - 1), 0, 0, 0, 0);
                    return a.setDate(a.getDate() - a.getDay() + n.firstDayOfWeek), a
                },
                Y: (e, t) => {
                    e.setFullYear(parseFloat(t))
                },
                Z: (e, t) => new Date(t),
                d: (e, t) => {
                    e.setDate(parseFloat(t))
                },
                h: (e, t) => {
                    e.setHours(parseFloat(t))
                },
                i: (e, t) => {
                    e.setMinutes(parseFloat(t))
                },
                j: (e, t) => {
                    e.setDate(parseFloat(t))
                },
                l: v,
                m: (e, t) => {
                    e.setMonth(parseFloat(t) - 1)
                },
                n: (e, t) => {
                    e.setMonth(parseFloat(t) - 1)
                },
                s: (e, t) => {
                    e.setSeconds(parseFloat(t))
                },
                u: (e, t) => new Date(parseFloat(t)),
                w: v,
                y: (e, t) => {
                    e.setFullYear(2e3 + parseFloat(t))
                }
            },
            y = {
                D: "(\\w+)",
                F: "(\\w+)",
                G: "(\\d\\d|\\d)",
                H: "(\\d\\d|\\d)",
                J: "(\\d\\d|\\d)\\w+",
                K: "",
                M: "(\\w+)",
                S: "(\\d\\d|\\d)",
                U: "(.+)",
                W: "(\\d\\d|\\d)",
                Y: "(\\d{4})",
                Z: "(.+)",
                d: "(\\d\\d|\\d)",
                h: "(\\d\\d|\\d)",
                i: "(\\d\\d|\\d)",
                j: "(\\d\\d|\\d)",
                l: "(\\w+)",
                m: "(\\d\\d|\\d)",
                n: "(\\d\\d|\\d)",
                s: "(\\d\\d|\\d)",
                u: "(.+)",
                w: "(\\d\\d|\\d)",
                y: "(\\d{2})"
            },
            D = {
                Z: e => e.toISOString(),
                D: function (e, t, n) {
                    return t.weekdays.shorthand[D.w(e, t, n)]
                },
                F: function (e, t, n) {
                    return b(D.n(e, t, n) - 1, !1, t)
                },
                G: function (e, t, n) {
                    return s(D.h(e, t, n))
                },
                H: e => s(e.getHours()),
                J: function (e, t) {
                    return void 0 !== t.ordinal ? e.getDate() + t.ordinal(e.getDate()) : e.getDate()
                },
                K: (e, t) => t.amPM[l(e.getHours() > 11)],
                M: function (e, t) {
                    return b(e.getMonth(), !0, t)
                },
                S: e => s(e.getSeconds()),
                U: e => e.getTime() / 1e3,
                W: function (e, t, n) {
                    return n.getWeek(e)
                },
                Y: e => s(e.getFullYear(), 4),
                d: e => s(e.getDate()),
                h: e => e.getHours() % 12 ? e.getHours() % 12 : 12,
                i: e => s(e.getMinutes()),
                j: e => e.getDate(),
                l: function (e, t) {
                    return t.weekdays.longhand[e.getDay()]
                },
                m: e => s(e.getMonth() + 1),
                n: e => e.getMonth() + 1,
                s: e => e.getSeconds(),
                u: e => e.getTime(),
                w: e => e.getDay(),
                y: e => String(e.getFullYear()).substring(2)
            },
            C = ({
                config: e = a,
                l10n: t = i,
                isMobile: n = !1
            }) => (o, a, i) => {
                const r = i || t;
                return void 0 === e.formatDate || n ? a.split("").map(((t, n, a) => D[t] && "\\" !== a[n - 1] ? D[t](o, r, e) : "\\" !== t ? t : "")).join("") : e.formatDate(o, a, r)
            },
            x = ({
                config: e = a,
                l10n: t = i
            }) => (n, o, i, r) => {
                if (0 !== n && !n) return;
                const s = r || t;
                let l;
                const c = n;
                if (n instanceof Date) l = new Date(n.getTime());
                else if ("string" != typeof n && void 0 !== n.toFixed) l = new Date(n);
                else if ("string" == typeof n) {
                    const t = o || (e || a).dateFormat,
                        r = String(n).trim();
                    if ("today" === r) l = new Date, i = !0;
                    else if (/Z$/.test(r) || /GMT$/.test(r)) l = new Date(n);
                    else if (e && e.parseDate) l = e.parseDate(n, t);
                    else {
                        l = e && e.noCalendar ? new Date((new Date).setHours(0, 0, 0, 0)) : new Date((new Date).getFullYear(), 0, 1, 0, 0, 0, 0);
                        let o, a = [];
                        for (let e = 0, i = 0, r = ""; e < t.length; e++) {
                            const c = t[e],
                                u = "\\" === c,
                                d = "\\" === t[e - 1] || u;
                            if (y[c] && !d) {
                                r += y[c];
                                const e = new RegExp(r).exec(n);
                                e && (o = !0) && a["Y" !== c ? "push" : "unshift"]({
                                    fn: w[c],
                                    val: e[++i]
                                })
                            } else u || (r += ".");
                            a.forEach((({
                                fn: e,
                                val: t
                            }) => l = e(l, t, s) || l))
                        }
                        l = o ? l : void 0
                    }
                }
                if (l instanceof Date && !isNaN(l.getTime())) return !0 === i && l.setHours(0, 0, 0, 0), l;
                e.errorHandler(new Error(`Invalid date provided: ${c}`))
            };

        function M(e, t, n = !0) {
            return !1 !== n ? new Date(e.getTime()).setHours(0, 0, 0, 0) - new Date(t.getTime()).setHours(0, 0, 0, 0) : e.getTime() - t.getTime()
        }
        const S = 864e5;

        function E(e) {
            let t = e.defaultHour,
                n = e.defaultMinute,
                o = e.defaultSeconds;
            if (void 0 !== e.minDate) {
                const a = e.minDate.getHours(),
                    i = e.minDate.getMinutes(),
                    r = e.minDate.getSeconds();
                t < a && (t = a), t === a && n < i && (n = i), t === a && n === i && o < r && (o = e.minDate.getSeconds())
            }
            if (void 0 !== e.maxDate) {
                const a = e.maxDate.getHours(),
                    i = e.maxDate.getMinutes();
                t = Math.min(t, a), t === a && (n = Math.min(i, n)), t === a && n === i && (o = e.maxDate.getSeconds())
            }
            return {
                hours: t,
                minutes: n,
                seconds: o
            }
        }
        n(1895);

        function k(e, t) {
            const n = {
                config: Object.assign(Object.assign({}, a), N.defaultConfig),
                l10n: r
            };

            function i(e) {
                return e.bind(n)
            }

            function v() {
                const e = n.config;
                !1 === e.weekNumbers && 1 === e.showMonths || !0 !== e.noCalendar && window.requestAnimationFrame((function () {
                    if (void 0 !== n.calendarContainer && (n.calendarContainer.style.visibility = "hidden", n.calendarContainer.style.display = "block"), void 0 !== n.daysContainer) {
                        const t = (n.days.offsetWidth + 1) * e.showMonths;
                        n.daysContainer.style.width = t + "px", n.calendarContainer.style.width = t + (void 0 !== n.weekWrapper ? n.weekWrapper.offsetWidth : 0) + "px", n.calendarContainer.style.removeProperty("visibility"), n.calendarContainer.style.removeProperty("display")
                    }
                }))
            }

            function w(e) {
                if (0 === n.selectedDates.length) {
                    const e = void 0 === n.config.minDate || M(new Date, n.config.minDate) >= 0 ? new Date : new Date(n.config.minDate.getTime()),
                        t = E(n.config);
                    e.setHours(t.hours, t.minutes, t.seconds, e.getMilliseconds()), n.selectedDates = [e], n.latestSelectedDateObj = e
                }
                void 0 !== e && "blur" !== e.type && function (e) {
                    e.preventDefault();
                    const t = "keydown" === e.type,
                        o = g(e),
                        a = o;
                    void 0 !== n.amPM && o === n.amPM && (n.amPM.textContent = n.l10n.amPM[l(n.amPM.textContent === n.l10n.amPM[0])]);
                    const i = parseFloat(a.getAttribute("min")),
                        r = parseFloat(a.getAttribute("max")),
                        c = parseFloat(a.getAttribute("step")),
                        u = parseInt(a.value, 10),
                        d = e.delta || (t ? 38 === e.which ? 1 : -1 : 0);
                    let f = u + c * d;
                    if (void 0 !== a.value && 2 === a.value.length) {
                        const e = a === n.hourElement,
                            t = a === n.minuteElement;
                        f < i ? (f = r + f + l(!e) + (l(e) && l(!n.amPM)), t && j(void 0, -1, n.hourElement)) : f > r && (f = a === n.hourElement ? f - r - l(!n.amPM) : i, t && j(void 0, 1, n.hourElement)), n.amPM && e && (1 === c ? f + u === 23 : Math.abs(f - u) > c) && (n.amPM.textContent = n.l10n.amPM[l(n.amPM.textContent === n.l10n.amPM[0])]), a.value = s(f)
                    }
                }(e);
                const t = n._input.value;
                D(), be(), n._input.value !== t && n._debouncedChange()
            }

            function D() {
                if (void 0 === n.hourElement || void 0 === n.minuteElement) return;
                let e = (parseInt(n.hourElement.value.slice(-2), 10) || 0) % 24,
                    t = (parseInt(n.minuteElement.value, 10) || 0) % 60,
                    o = void 0 !== n.secondElement ? (parseInt(n.secondElement.value, 10) || 0) % 60 : 0;
                var a, i;
                void 0 !== n.amPM && (a = e, i = n.amPM.textContent, e = a % 12 + 12 * l(i === n.l10n.amPM[1]));
                const r = void 0 !== n.config.minTime || n.config.minDate && n.minDateHasTime && n.latestSelectedDateObj && 0 === M(n.latestSelectedDateObj, n.config.minDate, !0);
                if (void 0 !== n.config.maxTime || n.config.maxDate && n.maxDateHasTime && n.latestSelectedDateObj && 0 === M(n.latestSelectedDateObj, n.config.maxDate, !0)) {
                    const a = void 0 !== n.config.maxTime ? n.config.maxTime : n.config.maxDate;
                    e = Math.min(e, a.getHours()), e === a.getHours() && (t = Math.min(t, a.getMinutes())), t === a.getMinutes() && (o = Math.min(o, a.getSeconds()))
                }
                if (r) {
                    const a = void 0 !== n.config.minTime ? n.config.minTime : n.config.minDate;
                    e = Math.max(e, a.getHours()), e === a.getHours() && t < a.getMinutes() && (t = a.getMinutes()), t === a.getMinutes() && (o = Math.max(o, a.getSeconds()))
                }
                P(e, t, o)
            }

            function k(e) {
                const t = e || n.latestSelectedDateObj;
                t && P(t.getHours(), t.getMinutes(), t.getSeconds())
            }

            function P(e, t, o) {
                void 0 !== n.latestSelectedDateObj && n.latestSelectedDateObj.setHours(e % 24, t, o || 0, 0), n.hourElement && n.minuteElement && !n.isMobile && (n.hourElement.value = s(n.config.time_24hr ? e : (12 + e) % 12 + 12 * l(e % 12 == 0)), n.minuteElement.value = s(t), void 0 !== n.amPM && (n.amPM.textContent = n.l10n.amPM[l(e >= 12)]), void 0 !== n.secondElement && (n.secondElement.value = s(o)))
            }

            function T(e) {
                const t = g(e),
                    n = parseInt(t.value) + (e.delta || 0);
                (n / 1e3 > 1 || "Enter" === e.key && !/[^\d]/.test(n.toString())) && X(n)
            }

            function O(e, t, o, a) {
                return t instanceof Array ? t.forEach((t => O(e, t, o, a))) : e instanceof Array ? e.forEach((e => O(e, t, o, a))) : (e.addEventListener(t, o, a), void n._handlers.push({
                    remove: () => e.removeEventListener(t, o)
                }))
            }

            function A() {
                pe("onChange")
            }

            function F(e, t) {
                const o = void 0 !== e ? n.parseDate(e) : n.latestSelectedDateObj || (n.config.minDate && n.config.minDate > n.now ? n.config.minDate : n.config.maxDate && n.config.maxDate < n.now ? n.config.maxDate : n.now),
                    a = n.currentYear,
                    i = n.currentMonth;
                try {
                    void 0 !== o && (n.currentYear = o.getFullYear(), n.currentMonth = o.getMonth())
                } catch (e) {
                    e.message = "Invalid date supplied: " + o, n.config.errorHandler(e)
                }
                t && n.currentYear !== a && (pe("onYearChange"), R()), !t || n.currentYear === a && n.currentMonth === i || pe("onMonthChange"), n.redraw()
            }

            function _(e) {
                const t = g(e);
                ~t.className.indexOf("arrow") && j(e, t.classList.contains("arrowUp") ? 1 : -1)
            }

            function j(e, t, n) {
                const o = e && g(e),
                    a = n || o && o.parentNode && o.parentNode.firstChild,
                    i = me("increment");
                i.delta = t, a && a.dispatchEvent(i)
            }

            function I(e, t, o, a) {
                const i = G(t, !0),
                    r = f("span", "flatpickr-day " + e, t.getDate().toString());
                return r.dateObj = t, r.$i = a, r.setAttribute("aria-label", n.formatDate(t, n.config.ariaDateFormat)), -1 === e.indexOf("hidden") && 0 === M(t, n.now) && (n.todayDateElem = r, r.classList.add("today"), r.setAttribute("aria-current", "date")), i ? (r.tabIndex = -1, he(t) && (r.classList.add("selected"), n.selectedDateElem = r, "range" === n.config.mode && (d(r, "startRange", n.selectedDates[0] && 0 === M(t, n.selectedDates[0], !0)), d(r, "endRange", n.selectedDates[1] && 0 === M(t, n.selectedDates[1], !0)), "nextMonthDay" === e && r.classList.add("inRange")))) : r.classList.add("flatpickr-disabled"), "range" === n.config.mode && function (e) {
                    return !("range" !== n.config.mode || n.selectedDates.length < 2) && (M(e, n.selectedDates[0]) >= 0 && M(e, n.selectedDates[1]) <= 0)
                }(t) && !he(t) && r.classList.add("inRange"), n.weekNumbers && 1 === n.config.showMonths && "prevMonthDay" !== e && o % 7 == 1 && n.weekNumbers.insertAdjacentHTML("beforeend", "<span class='flatpickr-day'>" + n.config.getWeek(t) + "</span>"), pe("onDayCreate", r), r
            }

            function Y(e) {
                e.focus(), "range" === n.config.mode && te(e)
            }

            function L(e) {
                const t = e > 0 ? 0 : n.config.showMonths - 1,
                    o = e > 0 ? n.config.showMonths : -1;
                for (let a = t; a != o; a += e) {
                    const t = n.daysContainer.children[a],
                        o = e > 0 ? 0 : t.children.length - 1,
                        i = e > 0 ? t.children.length : -1;
                    for (let n = o; n != i; n += e) {
                        const e = t.children[n];
                        if (-1 === e.className.indexOf("hidden") && G(e.dateObj)) return e
                    }
                }
            }

            function H(e, t) {
                const o = Z(document.activeElement || document.body),
                    a = void 0 !== e ? e : o ? document.activeElement : void 0 !== n.selectedDateElem && Z(n.selectedDateElem) ? n.selectedDateElem : void 0 !== n.todayDateElem && Z(n.todayDateElem) ? n.todayDateElem : L(t > 0 ? 1 : -1);
                void 0 === a ? n._input.focus() : o ? function (e, t) {
                    const o = -1 === e.className.indexOf("Month") ? e.dateObj.getMonth() : n.currentMonth,
                        a = t > 0 ? n.config.showMonths : -1,
                        i = t > 0 ? 1 : -1;
                    for (let r = o - n.currentMonth; r != a; r += i) {
                        const a = n.daysContainer.children[r],
                            s = o - n.currentMonth === r ? e.$i + t : t < 0 ? a.children.length - 1 : 0,
                            l = a.children.length;
                        for (let n = s; n >= 0 && n < l && n != (t > 0 ? l : -1); n += i) {
                            const o = a.children[n];
                            if (-1 === o.className.indexOf("hidden") && G(o.dateObj) && Math.abs(e.$i - n) >= Math.abs(t)) return Y(o)
                        }
                    }
                    n.changeMonth(i), H(L(i), 0)
                }(a, t) : Y(a)
            }

            function V(e, t) {
                const o = (new Date(e, t, 1).getDay() - n.l10n.firstDayOfWeek + 7) % 7,
                    a = n.utils.getDaysInMonth((t - 1 + 12) % 12, e),
                    i = n.utils.getDaysInMonth(t, e),
                    r = window.document.createDocumentFragment(),
                    s = n.config.showMonths > 1,
                    l = s ? "prevMonthDay hidden" : "prevMonthDay",
                    c = s ? "nextMonthDay hidden" : "nextMonthDay";
                let u = a + 1 - o,
                    d = 0;
                for (; u <= a; u++, d++) r.appendChild(I(l, new Date(e, t - 1, u), u, d));
                for (u = 1; u <= i; u++, d++) r.appendChild(I("", new Date(e, t, u), u, d));
                for (let a = i + 1; a <= 42 - o && (1 === n.config.showMonths || d % 7 != 0); a++, d++) r.appendChild(I(c, new Date(e, t + 1, a % i), a, d));
                const p = f("div", "dayContainer");
                return p.appendChild(r), p
            }

            function U() {
                if (void 0 === n.daysContainer) return;
                p(n.daysContainer), n.weekNumbers && p(n.weekNumbers);
                const e = document.createDocumentFragment();
                for (let t = 0; t < n.config.showMonths; t++) {
                    const o = new Date(n.currentYear, n.currentMonth, 1);
                    o.setMonth(n.currentMonth + t), e.appendChild(V(o.getFullYear(), o.getMonth()))
                }
                n.daysContainer.appendChild(e), n.days = n.daysContainer.firstChild, "range" === n.config.mode && 1 === n.selectedDates.length && te()
            }

            function R() {
                if (n.config.showMonths > 1 || "dropdown" !== n.config.monthSelectorType) return;
                const e = function (e) {
                    return !(void 0 !== n.config.minDate && n.currentYear === n.config.minDate.getFullYear() && e < n.config.minDate.getMonth()) && !(void 0 !== n.config.maxDate && n.currentYear === n.config.maxDate.getFullYear() && e > n.config.maxDate.getMonth())
                };
                n.monthsDropdownContainer.tabIndex = -1, n.monthsDropdownContainer.innerHTML = "";
                for (let t = 0; t < 12; t++) {
                    if (!e(t)) continue;
                    const o = f("option", "flatpickr-monthDropdown-month");
                    o.value = new Date(n.currentYear, t).getMonth().toString(), o.textContent = b(t, n.config.shorthandCurrentMonth, n.l10n), o.tabIndex = -1, n.currentMonth === t && (o.selected = !0), n.monthsDropdownContainer.appendChild(o)
                }
            }

            function $() {
                const e = f("div", "flatpickr-month"),
                    t = window.document.createDocumentFragment();
                let o;
                n.config.showMonths > 1 || "static" === n.config.monthSelectorType ? o = f("span", "cur-month") : (n.monthsDropdownContainer = f("select", "flatpickr-monthDropdown-months"), n.monthsDropdownContainer.setAttribute("aria-label", n.l10n.monthAriaLabel), O(n.monthsDropdownContainer, "change", (e => {
                    const t = g(e),
                        o = parseInt(t.value, 10);
                    n.changeMonth(o - n.currentMonth), pe("onMonthChange")
                })), R(), o = n.monthsDropdownContainer);
                const a = h("cur-year", {
                        tabindex: "-1"
                    }),
                    i = a.getElementsByTagName("input")[0];
                i.setAttribute("aria-label", n.l10n.yearAriaLabel), n.config.minDate && i.setAttribute("min", n.config.minDate.getFullYear().toString()), n.config.maxDate && (i.setAttribute("max", n.config.maxDate.getFullYear().toString()), i.disabled = !!n.config.minDate && n.config.minDate.getFullYear() === n.config.maxDate.getFullYear());
                const r = f("div", "flatpickr-current-month");
                return r.appendChild(o), r.appendChild(a), t.appendChild(r), e.appendChild(t), {
                    container: e,
                    yearElement: i,
                    monthElement: o
                }
            }

            function W() {
                p(n.monthNav), n.monthNav.appendChild(n.prevMonthNav), n.config.showMonths && (n.yearElements = [], n.monthElements = []);
                for (let e = n.config.showMonths; e--;) {
                    const e = $();
                    n.yearElements.push(e.yearElement), n.monthElements.push(e.monthElement), n.monthNav.appendChild(e.container)
                }
                n.monthNav.appendChild(n.nextMonthNav)
            }

            function z() {
                n.weekdayContainer ? p(n.weekdayContainer) : n.weekdayContainer = f("div", "flatpickr-weekdays");
                for (let e = n.config.showMonths; e--;) {
                    const e = f("div", "flatpickr-weekdaycontainer");
                    n.weekdayContainer.appendChild(e)
                }
                return B(), n.weekdayContainer
            }

            function B() {
                if (!n.weekdayContainer) return;
                const e = n.l10n.firstDayOfWeek;
                let t = [...n.l10n.weekdays.shorthand];
                e > 0 && e < t.length && (t = [...t.splice(e, t.length), ...t.splice(0, e)]);
                for (let e = n.config.showMonths; e--;) n.weekdayContainer.children[e].innerHTML = `\n      <span class='flatpickr-weekday'>\n        ${t.join("</span><span class='flatpickr-weekday'>")}\n      </span>\n      `
            }

            function q(e, t = !0) {
                const o = t ? e : e - n.currentMonth;
                o < 0 && !0 === n._hidePrevMonthArrow || o > 0 && !0 === n._hideNextMonthArrow || (n.currentMonth += o, (n.currentMonth < 0 || n.currentMonth > 11) && (n.currentYear += n.currentMonth > 11 ? 1 : -1, n.currentMonth = (n.currentMonth + 12) % 12, pe("onYearChange"), R()), U(), pe("onMonthChange"), ge())
            }

            function K(e) {
                return !(!n.config.appendTo || !n.config.appendTo.contains(e)) || n.calendarContainer.contains(e)
            }

            function J(e) {
                if (n.isOpen && !n.config.inline) {
                    const t = g(e),
                        o = K(t),
                        a = t === n.input || t === n.altInput || n.element.contains(t) || e.path && e.path.indexOf && (~e.path.indexOf(n.input) || ~e.path.indexOf(n.altInput)),
                        i = "blur" === e.type ? a && e.relatedTarget && !K(e.relatedTarget) : !a && !o && !K(e.relatedTarget),
                        r = !n.config.ignoredFocusElements.some((e => e.contains(t)));
                    i && r && (void 0 !== n.timeContainer && void 0 !== n.minuteElement && void 0 !== n.hourElement && "" !== n.input.value && void 0 !== n.input.value && w(), n.close(), n.config && "range" === n.config.mode && 1 === n.selectedDates.length && (n.clear(!1), n.redraw()))
                }
            }

            function X(e) {
                if (!e || n.config.minDate && e < n.config.minDate.getFullYear() || n.config.maxDate && e > n.config.maxDate.getFullYear()) return;
                const t = e,
                    o = n.currentYear !== t;
                n.currentYear = t || n.currentYear, n.config.maxDate && n.currentYear === n.config.maxDate.getFullYear() ? n.currentMonth = Math.min(n.config.maxDate.getMonth(), n.currentMonth) : n.config.minDate && n.currentYear === n.config.minDate.getFullYear() && (n.currentMonth = Math.max(n.config.minDate.getMonth(), n.currentMonth)), o && (n.redraw(), pe("onYearChange"), R())
            }

            function G(e, t = !0) {
                var o;
                const a = n.parseDate(e, void 0, t);
                if (n.config.minDate && a && M(a, n.config.minDate, void 0 !== t ? t : !n.minDateHasTime) < 0 || n.config.maxDate && a && M(a, n.config.maxDate, void 0 !== t ? t : !n.maxDateHasTime) > 0) return !1;
                if (!n.config.enable && 0 === n.config.disable.length) return !0;
                if (void 0 === a) return !1;
                const i = !!n.config.enable,
                    r = null !== (o = n.config.enable) && void 0 !== o ? o : n.config.disable;
                for (let e, t = 0; t < r.length; t++) {
                    if (e = r[t], "function" == typeof e && e(a)) return i;
                    if (e instanceof Date && void 0 !== a && e.getTime() === a.getTime()) return i;
                    if ("string" == typeof e) {
                        const t = n.parseDate(e, void 0, !0);
                        return t && t.getTime() === a.getTime() ? i : !i
                    }
                    if ("object" == typeof e && void 0 !== a && e.from && e.to && a.getTime() >= e.from.getTime() && a.getTime() <= e.to.getTime()) return i
                }
                return !i
            }

            function Z(e) {
                return void 0 !== n.daysContainer && (-1 === e.className.indexOf("hidden") && -1 === e.className.indexOf("flatpickr-disabled") && n.daysContainer.contains(e))
            }

            function Q(e) {
                !(e.target === n._input) || !(n.selectedDates.length > 0 || n._input.value.length > 0) || e.relatedTarget && K(e.relatedTarget) || n.setDate(n._input.value, !0, e.target === n.altInput ? n.config.altFormat : n.config.dateFormat)
            }

            function ee(t) {
                const o = g(t),
                    a = n.config.wrap ? e.contains(o) : o === n._input,
                    i = n.config.allowInput,
                    r = n.isOpen && (!i || !a),
                    s = n.config.inline && a && !i;
                if (13 === t.keyCode && a) {
                    if (i) return n.setDate(n._input.value, !0, o === n.altInput ? n.config.altFormat : n.config.dateFormat), o.blur();
                    n.open()
                } else if (K(o) || r || s) {
                    const e = !!n.timeContainer && n.timeContainer.contains(o);
                    switch (t.keyCode) {
                        case 13:
                            e ? (t.preventDefault(), w(), le()) : ce(t);
                            break;
                        case 27:
                            t.preventDefault(), le();
                            break;
                        case 8:
                        case 46:
                            a && !n.config.allowInput && (t.preventDefault(), n.clear());
                            break;
                        case 37:
                        case 39:
                            if (e || a) n.hourElement && n.hourElement.focus();
                            else if (t.preventDefault(), void 0 !== n.daysContainer && (!1 === i || document.activeElement && Z(document.activeElement))) {
                                const e = 39 === t.keyCode ? 1 : -1;
                                t.ctrlKey ? (t.stopPropagation(), q(e), H(L(1), 0)) : H(void 0, e)
                            }
                            break;
                        case 38:
                        case 40:
                            t.preventDefault();
                            const r = 40 === t.keyCode ? 1 : -1;
                            n.daysContainer && void 0 !== o.$i || o === n.input || o === n.altInput ? t.ctrlKey ? (t.stopPropagation(), X(n.currentYear - r), H(L(1), 0)) : e || H(void 0, 7 * r) : o === n.currentYearElement ? X(n.currentYear - r) : n.config.enableTime && (!e && n.hourElement && n.hourElement.focus(), w(t), n._debouncedChange());
                            break;
                        case 9:
                            if (e) {
                                const e = [n.hourElement, n.minuteElement, n.secondElement, n.amPM].concat(n.pluginElements).filter((e => e)),
                                    a = e.indexOf(o);
                                if (-1 !== a) {
                                    const o = e[a + (t.shiftKey ? -1 : 1)];
                                    t.preventDefault(), (o || n._input).focus()
                                }
                            } else !n.config.noCalendar && n.daysContainer && n.daysContainer.contains(o) && t.shiftKey && (t.preventDefault(), n._input.focus())
                    }
                }
                if (void 0 !== n.amPM && o === n.amPM) switch (t.key) {
                    case n.l10n.amPM[0].charAt(0):
                    case n.l10n.amPM[0].charAt(0).toLowerCase():
                        n.amPM.textContent = n.l10n.amPM[0], D(), be();
                        break;
                    case n.l10n.amPM[1].charAt(0):
                    case n.l10n.amPM[1].charAt(0).toLowerCase():
                        n.amPM.textContent = n.l10n.amPM[1], D(), be()
                }(a || K(o)) && pe("onKeyDown", t)
            }

            function te(e) {
                if (1 !== n.selectedDates.length || e && (!e.classList.contains("flatpickr-day") || e.classList.contains("flatpickr-disabled"))) return;
                const t = e ? e.dateObj.getTime() : n.days.firstElementChild.dateObj.getTime(),
                    o = n.parseDate(n.selectedDates[0], void 0, !0).getTime(),
                    a = Math.min(t, n.selectedDates[0].getTime()),
                    i = Math.max(t, n.selectedDates[0].getTime());
                let r = !1,
                    s = 0,
                    l = 0;
                for (let e = a; e < i; e += S) G(new Date(e), !0) || (r = r || e > a && e < i, e < o && (!s || e > s) ? s = e : e > o && (!l || e < l) && (l = e));
                for (let a = 0; a < n.config.showMonths; a++) {
                    const i = n.daysContainer.children[a];
                    for (let a = 0, f = i.children.length; a < f; a++) {
                        const f = i.children[a],
                            p = f.dateObj.getTime(),
                            m = s > 0 && p < s || l > 0 && p > l;
                        m ? (f.classList.add("notAllowed"), ["inRange", "startRange", "endRange"].forEach((e => {
                            f.classList.remove(e)
                        }))) : r && !m || (["startRange", "inRange", "endRange", "notAllowed"].forEach((e => {
                            f.classList.remove(e)
                        })), void 0 !== e && (e.classList.add(t <= n.selectedDates[0].getTime() ? "startRange" : "endRange"), o < t && p === o ? f.classList.add("startRange") : o > t && p === o && f.classList.add("endRange"), p >= s && (0 === l || p <= l) && (u = o, d = t, (c = p) > Math.min(u, d) && c < Math.max(u, d)) && f.classList.add("inRange")))
                    }
                }
                var c, u, d
            }

            function ne() {
                !n.isOpen || n.config.static || n.config.inline || re()
            }

            function oe(e) {
                return t => {
                    const o = n.config[`_${e}Date`] = n.parseDate(t, n.config.dateFormat),
                        a = n.config[`_${"min"===e?"max":"min"}Date`];
                    void 0 !== o && (n["min" === e ? "minDateHasTime" : "maxDateHasTime"] = o.getHours() > 0 || o.getMinutes() > 0 || o.getSeconds() > 0), n.selectedDates && (n.selectedDates = n.selectedDates.filter((e => G(e))), n.selectedDates.length || "min" !== e || k(o), be()), n.daysContainer && (se(), void 0 !== o ? n.currentYearElement[e] = o.getFullYear().toString() : n.currentYearElement.removeAttribute(e), n.currentYearElement.disabled = !!a && void 0 !== o && a.getFullYear() === o.getFullYear())
                }
            }

            function ae() {
                return n.config.wrap ? e.querySelector("[data-input]") : e
            }

            function ie() {
                "object" != typeof n.config.locale && void 0 === N.l10ns[n.config.locale] && n.config.errorHandler(new Error(`flatpickr: invalid locale ${n.config.locale}`)), n.l10n = Object.assign(Object.assign({}, N.l10ns.default), "object" == typeof n.config.locale ? n.config.locale : "default" !== n.config.locale ? N.l10ns[n.config.locale] : void 0), y.K = `(${n.l10n.amPM[0]}|${n.l10n.amPM[1]}|${n.l10n.amPM[0].toLowerCase()}|${n.l10n.amPM[1].toLowerCase()})`;
                void 0 === Object.assign(Object.assign({}, t), JSON.parse(JSON.stringify(e.dataset || {}))).time_24hr && void 0 === N.defaultConfig.time_24hr && (n.config.time_24hr = n.l10n.time_24hr), n.formatDate = C(n), n.parseDate = x({
                    config: n.config,
                    l10n: n.l10n
                })
            }

            function re(e) {
                if ("function" == typeof n.config.position) return void n.config.position(n, e);
                if (void 0 === n.calendarContainer) return;
                pe("onPreCalendarPosition");
                const t = e || n._positionElement,
                    o = Array.prototype.reduce.call(n.calendarContainer.children, ((e, t) => e + t.offsetHeight), 0),
                    a = n.calendarContainer.offsetWidth,
                    i = n.config.position.split(" "),
                    r = i[0],
                    s = i.length > 1 ? i[1] : null,
                    l = t.getBoundingClientRect(),
                    c = window.innerHeight - l.bottom,
                    u = "above" === r || "below" !== r && c < o && l.top > o,
                    f = window.pageYOffset + l.top + (u ? -o - 2 : t.offsetHeight + 2);
                if (d(n.calendarContainer, "arrowTop", !u), d(n.calendarContainer, "arrowBottom", u), n.config.inline) return;
                let p = window.pageXOffset + l.left,
                    m = !1,
                    h = !1;
                "center" === s ? (p -= (a - l.width) / 2, m = !0) : "right" === s && (p -= a - l.width, h = !0), d(n.calendarContainer, "arrowLeft", !m && !h), d(n.calendarContainer, "arrowCenter", m), d(n.calendarContainer, "arrowRight", h);
                const g = window.document.body.offsetWidth - (window.pageXOffset + l.right),
                    v = p + a > window.document.body.offsetWidth,
                    b = g + a > window.document.body.offsetWidth;
                if (d(n.calendarContainer, "rightMost", v), !n.config.static)
                    if (n.calendarContainer.style.top = `${f}px`, v)
                        if (b) {
                            const e = function () {
                                let e = null;
                                for (let t = 0; t < document.styleSheets.length; t++) {
                                    const n = document.styleSheets[t];
                                    try {
                                        n.cssRules
                                    } catch (e) {
                                        continue
                                    }
                                    e = n;
                                    break
                                }
                                return null != e ? e : function () {
                                    const e = document.createElement("style");
                                    return document.head.appendChild(e), e.sheet
                                }()
                            }();
                            if (void 0 === e) return;
                            const t = window.document.body.offsetWidth,
                                o = Math.max(0, t / 2 - a / 2),
                                i = ".flatpickr-calendar.centerMost:before",
                                r = ".flatpickr-calendar.centerMost:after",
                                s = e.cssRules.length,
                                c = `{left:${l.left}px;right:auto;}`;
                            d(n.calendarContainer, "rightMost", !1), d(n.calendarContainer, "centerMost", !0), e.insertRule(`${i},${r}${c}`, s), n.calendarContainer.style.left = `${o}px`, n.calendarContainer.style.right = "auto"
                        } else n.calendarContainer.style.left = "auto", n.calendarContainer.style.right = `${g}px`;
                else n.calendarContainer.style.left = `${p}px`, n.calendarContainer.style.right = "auto"
            }

            function se() {
                n.config.noCalendar || n.isMobile || (R(), ge(), U())
            }

            function le() {
                n._input.focus(), -1 !== window.navigator.userAgent.indexOf("MSIE") || void 0 !== navigator.msMaxTouchPoints ? setTimeout(n.close, 0) : n.close()
            }

            function ce(e) {
                e.preventDefault(), e.stopPropagation();
                const t = m(g(e), (e => e.classList && e.classList.contains("flatpickr-day") && !e.classList.contains("flatpickr-disabled") && !e.classList.contains("notAllowed")));
                if (void 0 === t) return;
                const o = t,
                    a = n.latestSelectedDateObj = new Date(o.dateObj.getTime()),
                    i = (a.getMonth() < n.currentMonth || a.getMonth() > n.currentMonth + n.config.showMonths - 1) && "range" !== n.config.mode;
                if (n.selectedDateElem = o, "single" === n.config.mode) n.selectedDates = [a];
                else if ("multiple" === n.config.mode) {
                    const e = he(a);
                    e ? n.selectedDates.splice(parseInt(e), 1) : n.selectedDates.push(a)
                } else "range" === n.config.mode && (2 === n.selectedDates.length && n.clear(!1, !1), n.latestSelectedDateObj = a, n.selectedDates.push(a), 0 !== M(a, n.selectedDates[0], !0) && n.selectedDates.sort(((e, t) => e.getTime() - t.getTime())));
                if (D(), i) {
                    const e = n.currentYear !== a.getFullYear();
                    n.currentYear = a.getFullYear(), n.currentMonth = a.getMonth(), e && (pe("onYearChange"), R()), pe("onMonthChange")
                }
                if (ge(), U(), be(), i || "range" === n.config.mode || 1 !== n.config.showMonths ? void 0 !== n.selectedDateElem && void 0 === n.hourElement && n.selectedDateElem && n.selectedDateElem.focus() : Y(o), void 0 !== n.hourElement && void 0 !== n.hourElement && n.hourElement.focus(), n.config.closeOnSelect) {
                    const e = "single" === n.config.mode && !n.config.enableTime,
                        t = "range" === n.config.mode && 2 === n.selectedDates.length && !n.config.enableTime;
                    (e || t) && le()
                }
                A()
            }
            n.parseDate = x({
                config: n.config,
                l10n: n.l10n
            }), n._handlers = [], n.pluginElements = [], n.loadedPlugins = [], n._bind = O, n._setHoursFromDate = k, n._positionCalendar = re, n.changeMonth = q, n.changeYear = X, n.clear = function (e = !0, t = !0) {
                n.input.value = "", void 0 !== n.altInput && (n.altInput.value = "");
                void 0 !== n.mobileInput && (n.mobileInput.value = "");
                n.selectedDates = [], n.latestSelectedDateObj = void 0, !0 === t && (n.currentYear = n._initialDate.getFullYear(), n.currentMonth = n._initialDate.getMonth());
                if (!0 === n.config.enableTime) {
                    const {
                        hours: e,
                        minutes: t,
                        seconds: o
                    } = E(n.config);
                    P(e, t, o)
                }
                n.redraw(), e && pe("onChange")
            }, n.close = function () {
                n.isOpen = !1, n.isMobile || (void 0 !== n.calendarContainer && n.calendarContainer.classList.remove("open"), void 0 !== n._input && n._input.classList.remove("active"));
                pe("onClose")
            }, n._createElement = f, n.destroy = function () {
                void 0 !== n.config && pe("onDestroy");
                for (let e = n._handlers.length; e--;) n._handlers[e].remove();
                if (n._handlers = [], n.mobileInput) n.mobileInput.parentNode && n.mobileInput.parentNode.removeChild(n.mobileInput), n.mobileInput = void 0;
                else if (n.calendarContainer && n.calendarContainer.parentNode)
                    if (n.config.static && n.calendarContainer.parentNode) {
                        const e = n.calendarContainer.parentNode;
                        if (e.lastChild && e.removeChild(e.lastChild), e.parentNode) {
                            for (; e.firstChild;) e.parentNode.insertBefore(e.firstChild, e);
                            e.parentNode.removeChild(e)
                        }
                    } else n.calendarContainer.parentNode.removeChild(n.calendarContainer);
                n.altInput && (n.input.type = "text", n.altInput.parentNode && n.altInput.parentNode.removeChild(n.altInput), delete n.altInput);
                n.input && (n.input.type = n.input._type, n.input.classList.remove("flatpickr-input"), n.input.removeAttribute("readonly"));
                ["_showTimeInput", "latestSelectedDateObj", "_hideNextMonthArrow", "_hidePrevMonthArrow", "__hideNextMonthArrow", "__hidePrevMonthArrow", "isMobile", "isOpen", "selectedDateElem", "minDateHasTime", "maxDateHasTime", "days", "daysContainer", "_input", "_positionElement", "innerContainer", "rContainer", "monthNav", "todayDateElem", "calendarContainer", "weekdayContainer", "prevMonthNav", "nextMonthNav", "monthsDropdownContainer", "currentMonthElement", "currentYearElement", "navigationCurrentMonth", "selectedDateElem", "config"].forEach((e => {
                    try {
                        delete n[e]
                    } catch (e) {}
                }))
            }, n.isEnabled = G, n.jumpToDate = F, n.open = function (e, t = n._positionElement) {
                if (!0 === n.isMobile) {
                    if (e) {
                        e.preventDefault();
                        const t = g(e);
                        t && t.blur()
                    }
                    return void 0 !== n.mobileInput && (n.mobileInput.focus(), n.mobileInput.click()), void pe("onOpen")
                }
                if (n._input.disabled || n.config.inline) return;
                const o = n.isOpen;
                n.isOpen = !0, o || (n.calendarContainer.classList.add("open"), n._input.classList.add("active"), pe("onOpen"), re(t));
                !0 === n.config.enableTime && !0 === n.config.noCalendar && (!1 !== n.config.allowInput || void 0 !== e && n.timeContainer.contains(e.relatedTarget) || setTimeout((() => n.hourElement.select()), 50))
            }, n.redraw = se, n.set = function (e, t) {
                if (null !== e && "object" == typeof e) {
                    Object.assign(n.config, e);
                    for (const t in e) void 0 !== ue[t] && ue[t].forEach((e => e()))
                } else n.config[e] = t, void 0 !== ue[e] ? ue[e].forEach((e => e())) : o.indexOf(e) > -1 && (n.config[e] = u(t));
                n.redraw(), be(!0)
            }, n.setDate = function (e, t = !1, o = n.config.dateFormat) {
                if (0 !== e && !e || e instanceof Array && 0 === e.length) return n.clear(t);
                de(e, o), n.latestSelectedDateObj = n.selectedDates[n.selectedDates.length - 1], n.redraw(), F(void 0, t), k(), 0 === n.selectedDates.length && n.clear(!1);
                be(t), t && pe("onChange")
            }, n.toggle = function (e) {
                if (!0 === n.isOpen) return n.close();
                n.open(e)
            };
            const ue = {
                locale: [ie, B],
                showMonths: [W, v, z],
                minDate: [F],
                maxDate: [F],
                clickOpens: [() => {
                    !0 === n.config.clickOpens ? (O(n._input, "focus", n.open), O(n._input, "click", n.open)) : (n._input.removeEventListener("focus", n.open), n._input.removeEventListener("click", n.open))
                }]
            };

            function de(e, t) {
                let o = [];
                if (e instanceof Array) o = e.map((e => n.parseDate(e, t)));
                else if (e instanceof Date || "number" == typeof e) o = [n.parseDate(e, t)];
                else if ("string" == typeof e) switch (n.config.mode) {
                    case "single":
                    case "time":
                        o = [n.parseDate(e, t)];
                        break;
                    case "multiple":
                        o = e.split(n.config.conjunction).map((e => n.parseDate(e, t)));
                        break;
                    case "range":
                        o = e.split(n.l10n.rangeSeparator).map((e => n.parseDate(e, t)))
                } else n.config.errorHandler(new Error(`Invalid date supplied: ${JSON.stringify(e)}`));
                n.selectedDates = n.config.allowInvalidPreload ? o : o.filter((e => e instanceof Date && G(e, !1))), "range" === n.config.mode && n.selectedDates.sort(((e, t) => e.getTime() - t.getTime()))
            }

            function fe(e) {
                return e.slice().map((e => "string" == typeof e || "number" == typeof e || e instanceof Date ? n.parseDate(e, void 0, !0) : e && "object" == typeof e && e.from && e.to ? {
                    from: n.parseDate(e.from, void 0),
                    to: n.parseDate(e.to, void 0)
                } : e)).filter((e => e))
            }

            function pe(e, t) {
                if (void 0 === n.config) return;
                const o = n.config[e];
                if (void 0 !== o && o.length > 0)
                    for (let e = 0; o[e] && e < o.length; e++) o[e](n.selectedDates, n.input.value, n, t);
                "onChange" === e && (n.input.dispatchEvent(me("change")), n.input.dispatchEvent(me("input")))
            }

            function me(e) {
                const t = document.createEvent("Event");
                return t.initEvent(e, !0, !0), t
            }

            function he(e) {
                for (let t = 0; t < n.selectedDates.length; t++)
                    if (0 === M(n.selectedDates[t], e)) return "" + t;
                return !1
            }

            function ge() {
                n.config.noCalendar || n.isMobile || !n.monthNav || (n.yearElements.forEach(((e, t) => {
                    const o = new Date(n.currentYear, n.currentMonth, 1);
                    o.setMonth(n.currentMonth + t), n.config.showMonths > 1 || "static" === n.config.monthSelectorType ? n.monthElements[t].textContent = b(o.getMonth(), n.config.shorthandCurrentMonth, n.l10n) + " " : n.monthsDropdownContainer.value = o.getMonth().toString(), e.value = o.getFullYear().toString()
                })), n._hidePrevMonthArrow = void 0 !== n.config.minDate && (n.currentYear === n.config.minDate.getFullYear() ? n.currentMonth <= n.config.minDate.getMonth() : n.currentYear < n.config.minDate.getFullYear()), n._hideNextMonthArrow = void 0 !== n.config.maxDate && (n.currentYear === n.config.maxDate.getFullYear() ? n.currentMonth + 1 > n.config.maxDate.getMonth() : n.currentYear > n.config.maxDate.getFullYear()))
            }

            function ve(e) {
                return n.selectedDates.map((t => n.formatDate(t, e))).filter(((e, t, o) => "range" !== n.config.mode || n.config.enableTime || o.indexOf(e) === t)).join("range" !== n.config.mode ? n.config.conjunction : n.l10n.rangeSeparator)
            }

            function be(e = !0) {
                void 0 !== n.mobileInput && n.mobileFormatStr && (n.mobileInput.value = void 0 !== n.latestSelectedDateObj ? n.formatDate(n.latestSelectedDateObj, n.mobileFormatStr) : ""), n.input.value = ve(n.config.dateFormat), void 0 !== n.altInput && (n.altInput.value = ve(n.config.altFormat)), !1 !== e && pe("onValueUpdate")
            }

            function we(e) {
                const t = g(e),
                    o = n.prevMonthNav.contains(t),
                    a = n.nextMonthNav.contains(t);
                o || a ? q(o ? -1 : 1) : n.yearElements.indexOf(t) >= 0 ? t.select() : t.classList.contains("arrowUp") ? n.changeYear(n.currentYear + 1) : t.classList.contains("arrowDown") && n.changeYear(n.currentYear - 1)
            }
            return function () {
                n.element = n.input = e, n.isOpen = !1,
                    function () {
                        const r = ["wrap", "weekNumbers", "allowInput", "allowInvalidPreload", "clickOpens", "time_24hr", "enableTime", "noCalendar", "altInput", "shorthandCurrentMonth", "inline", "static", "enableSeconds", "disableMobile"],
                            s = Object.assign(Object.assign({}, JSON.parse(JSON.stringify(e.dataset || {}))), t),
                            l = {};
                        n.config.parseDate = s.parseDate, n.config.formatDate = s.formatDate, Object.defineProperty(n.config, "enable", {
                            get: () => n.config._enable,
                            set: e => {
                                n.config._enable = fe(e)
                            }
                        }), Object.defineProperty(n.config, "disable", {
                            get: () => n.config._disable,
                            set: e => {
                                n.config._disable = fe(e)
                            }
                        });
                        const c = "time" === s.mode;
                        if (!s.dateFormat && (s.enableTime || c)) {
                            const e = N.defaultConfig.dateFormat || a.dateFormat;
                            l.dateFormat = s.noCalendar || c ? "H:i" + (s.enableSeconds ? ":S" : "") : e + " H:i" + (s.enableSeconds ? ":S" : "")
                        }
                        if (s.altInput && (s.enableTime || c) && !s.altFormat) {
                            const e = N.defaultConfig.altFormat || a.altFormat;
                            l.altFormat = s.noCalendar || c ? "h:i" + (s.enableSeconds ? ":S K" : " K") : e + ` h:i${s.enableSeconds?":S":""} K`
                        }
                        Object.defineProperty(n.config, "minDate", {
                            get: () => n.config._minDate,
                            set: oe("min")
                        }), Object.defineProperty(n.config, "maxDate", {
                            get: () => n.config._maxDate,
                            set: oe("max")
                        });
                        const d = e => t => {
                            n.config["min" === e ? "_minTime" : "_maxTime"] = n.parseDate(t, "H:i:S")
                        };
                        Object.defineProperty(n.config, "minTime", {
                            get: () => n.config._minTime,
                            set: d("min")
                        }), Object.defineProperty(n.config, "maxTime", {
                            get: () => n.config._maxTime,
                            set: d("max")
                        }), "time" === s.mode && (n.config.noCalendar = !0, n.config.enableTime = !0);
                        Object.assign(n.config, l, s);
                        for (let e = 0; e < r.length; e++) n.config[r[e]] = !0 === n.config[r[e]] || "true" === n.config[r[e]];
                        o.filter((e => void 0 !== n.config[e])).forEach((e => {
                            n.config[e] = u(n.config[e] || []).map(i)
                        })), n.isMobile = !n.config.disableMobile && !n.config.inline && "single" === n.config.mode && !n.config.disable.length && !n.config.enable && !n.config.weekNumbers && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                        for (let e = 0; e < n.config.plugins.length; e++) {
                            const t = n.config.plugins[e](n) || {};
                            for (const e in t) o.indexOf(e) > -1 ? n.config[e] = u(t[e]).map(i).concat(n.config[e]) : void 0 === s[e] && (n.config[e] = t[e])
                        }
                        s.altInputClass || (n.config.altInputClass = ae().className + " " + n.config.altInputClass);
                        pe("onParseConfig")
                    }(), ie(),
                    function () {
                        if (n.input = ae(), !n.input) return void n.config.errorHandler(new Error("Invalid input element specified"));
                        n.input._type = n.input.type, n.input.type = "text", n.input.classList.add("flatpickr-input"), n._input = n.input, n.config.altInput && (n.altInput = f(n.input.nodeName, n.config.altInputClass), n._input = n.altInput, n.altInput.placeholder = n.input.placeholder, n.altInput.disabled = n.input.disabled, n.altInput.required = n.input.required, n.altInput.tabIndex = n.input.tabIndex, n.altInput.type = "text", n.input.setAttribute("type", "hidden"), !n.config.static && n.input.parentNode && n.input.parentNode.insertBefore(n.altInput, n.input.nextSibling));
                        n.config.allowInput || n._input.setAttribute("readonly", "readonly");
                        n._positionElement = n.config.positionElement || n._input
                    }(),
                    function () {
                        n.selectedDates = [], n.now = n.parseDate(n.config.now) || new Date;
                        const e = n.config.defaultDate || ("INPUT" !== n.input.nodeName && "TEXTAREA" !== n.input.nodeName || !n.input.placeholder || n.input.value !== n.input.placeholder ? n.input.value : null);
                        e && de(e, n.config.dateFormat);
                        n._initialDate = n.selectedDates.length > 0 ? n.selectedDates[0] : n.config.minDate && n.config.minDate.getTime() > n.now.getTime() ? n.config.minDate : n.config.maxDate && n.config.maxDate.getTime() < n.now.getTime() ? n.config.maxDate : n.now, n.currentYear = n._initialDate.getFullYear(), n.currentMonth = n._initialDate.getMonth(), n.selectedDates.length > 0 && (n.latestSelectedDateObj = n.selectedDates[0]);
                        void 0 !== n.config.minTime && (n.config.minTime = n.parseDate(n.config.minTime, "H:i"));
                        void 0 !== n.config.maxTime && (n.config.maxTime = n.parseDate(n.config.maxTime, "H:i"));
                        n.minDateHasTime = !!n.config.minDate && (n.config.minDate.getHours() > 0 || n.config.minDate.getMinutes() > 0 || n.config.minDate.getSeconds() > 0), n.maxDateHasTime = !!n.config.maxDate && (n.config.maxDate.getHours() > 0 || n.config.maxDate.getMinutes() > 0 || n.config.maxDate.getSeconds() > 0)
                    }(), n.utils = {
                        getDaysInMonth: (e = n.currentMonth, t = n.currentYear) => 1 === e && (t % 4 == 0 && t % 100 != 0 || t % 400 == 0) ? 29 : n.l10n.daysInMonth[e]
                    }, n.isMobile || function () {
                        const e = window.document.createDocumentFragment();
                        if (n.calendarContainer = f("div", "flatpickr-calendar"), n.calendarContainer.tabIndex = -1, !n.config.noCalendar) {
                            if (e.appendChild((n.monthNav = f("div", "flatpickr-months"), n.yearElements = [], n.monthElements = [], n.prevMonthNav = f("span", "flatpickr-prev-month"), n.prevMonthNav.innerHTML = n.config.prevArrow, n.nextMonthNav = f("span", "flatpickr-next-month"), n.nextMonthNav.innerHTML = n.config.nextArrow, W(), Object.defineProperty(n, "_hidePrevMonthArrow", {
                                    get: () => n.__hidePrevMonthArrow,
                                    set(e) {
                                        n.__hidePrevMonthArrow !== e && (d(n.prevMonthNav, "flatpickr-disabled", e), n.__hidePrevMonthArrow = e)
                                    }
                                }), Object.defineProperty(n, "_hideNextMonthArrow", {
                                    get: () => n.__hideNextMonthArrow,
                                    set(e) {
                                        n.__hideNextMonthArrow !== e && (d(n.nextMonthNav, "flatpickr-disabled", e), n.__hideNextMonthArrow = e)
                                    }
                                }), n.currentYearElement = n.yearElements[0], ge(), n.monthNav)), n.innerContainer = f("div", "flatpickr-innerContainer"), n.config.weekNumbers) {
                                const {
                                    weekWrapper: e,
                                    weekNumbers: t
                                } = function () {
                                    n.calendarContainer.classList.add("hasWeeks");
                                    const e = f("div", "flatpickr-weekwrapper");
                                    e.appendChild(f("span", "flatpickr-weekday", n.l10n.weekAbbreviation));
                                    const t = f("div", "flatpickr-weeks");
                                    return e.appendChild(t), {
                                        weekWrapper: e,
                                        weekNumbers: t
                                    }
                                }();
                                n.innerContainer.appendChild(e), n.weekNumbers = t, n.weekWrapper = e
                            }
                            n.rContainer = f("div", "flatpickr-rContainer"), n.rContainer.appendChild(z()), n.daysContainer || (n.daysContainer = f("div", "flatpickr-days"), n.daysContainer.tabIndex = -1), U(), n.rContainer.appendChild(n.daysContainer), n.innerContainer.appendChild(n.rContainer), e.appendChild(n.innerContainer)
                        }
                        n.config.enableTime && e.appendChild(function () {
                            n.calendarContainer.classList.add("hasTime"), n.config.noCalendar && n.calendarContainer.classList.add("noCalendar");
                            const e = E(n.config);
                            n.timeContainer = f("div", "flatpickr-time"), n.timeContainer.tabIndex = -1;
                            const t = f("span", "flatpickr-time-separator", ":"),
                                o = h("flatpickr-hour", {
                                    "aria-label": n.l10n.hourAriaLabel
                                });
                            n.hourElement = o.getElementsByTagName("input")[0];
                            const a = h("flatpickr-minute", {
                                "aria-label": n.l10n.minuteAriaLabel
                            });
                            n.minuteElement = a.getElementsByTagName("input")[0], n.hourElement.tabIndex = n.minuteElement.tabIndex = -1, n.hourElement.value = s(n.latestSelectedDateObj ? n.latestSelectedDateObj.getHours() : n.config.time_24hr ? e.hours : function (e) {
                                switch (e % 24) {
                                    case 0:
                                    case 12:
                                        return 12;
                                    default:
                                        return e % 12
                                }
                            }(e.hours)), n.minuteElement.value = s(n.latestSelectedDateObj ? n.latestSelectedDateObj.getMinutes() : e.minutes), n.hourElement.setAttribute("step", n.config.hourIncrement.toString()), n.minuteElement.setAttribute("step", n.config.minuteIncrement.toString()), n.hourElement.setAttribute("min", n.config.time_24hr ? "0" : "1"), n.hourElement.setAttribute("max", n.config.time_24hr ? "23" : "12"), n.hourElement.setAttribute("maxlength", "2"), n.minuteElement.setAttribute("min", "0"), n.minuteElement.setAttribute("max", "59"), n.minuteElement.setAttribute("maxlength", "2"), n.timeContainer.appendChild(o), n.timeContainer.appendChild(t), n.timeContainer.appendChild(a), n.config.time_24hr && n.timeContainer.classList.add("time24hr");
                            if (n.config.enableSeconds) {
                                n.timeContainer.classList.add("hasSeconds");
                                const t = h("flatpickr-second");
                                n.secondElement = t.getElementsByTagName("input")[0], n.secondElement.value = s(n.latestSelectedDateObj ? n.latestSelectedDateObj.getSeconds() : e.seconds), n.secondElement.setAttribute("step", n.minuteElement.getAttribute("step")), n.secondElement.setAttribute("min", "0"), n.secondElement.setAttribute("max", "59"), n.secondElement.setAttribute("maxlength", "2"), n.timeContainer.appendChild(f("span", "flatpickr-time-separator", ":")), n.timeContainer.appendChild(t)
                            }
                            n.config.time_24hr || (n.amPM = f("span", "flatpickr-am-pm", n.l10n.amPM[l((n.latestSelectedDateObj ? n.hourElement.value : n.config.defaultHour) > 11)]), n.amPM.title = n.l10n.toggleTitle, n.amPM.tabIndex = -1, n.timeContainer.appendChild(n.amPM));
                            return n.timeContainer
                        }());
                        d(n.calendarContainer, "rangeMode", "range" === n.config.mode), d(n.calendarContainer, "animate", !0 === n.config.animate), d(n.calendarContainer, "multiMonth", n.config.showMonths > 1), n.calendarContainer.appendChild(e);
                        const t = void 0 !== n.config.appendTo && void 0 !== n.config.appendTo.nodeType;
                        if ((n.config.inline || n.config.static) && (n.calendarContainer.classList.add(n.config.inline ? "inline" : "static"), n.config.inline && (!t && n.element.parentNode ? n.element.parentNode.insertBefore(n.calendarContainer, n._input.nextSibling) : void 0 !== n.config.appendTo && n.config.appendTo.appendChild(n.calendarContainer)), n.config.static)) {
                            const e = f("div", "flatpickr-wrapper");
                            n.element.parentNode && n.element.parentNode.insertBefore(e, n.element), e.appendChild(n.element), n.altInput && e.appendChild(n.altInput), e.appendChild(n.calendarContainer)
                        }
                        n.config.static || n.config.inline || (void 0 !== n.config.appendTo ? n.config.appendTo : window.document.body).appendChild(n.calendarContainer)
                    }(),
                    function () {
                        n.config.wrap && ["open", "close", "toggle", "clear"].forEach((e => {
                            Array.prototype.forEach.call(n.element.querySelectorAll(`[data-${e}]`), (t => O(t, "click", n[e])))
                        }));
                        if (n.isMobile) return void
                        function () {
                            const e = n.config.enableTime ? n.config.noCalendar ? "time" : "datetime-local" : "date";
                            n.mobileInput = f("input", n.input.className + " flatpickr-mobile"), n.mobileInput.tabIndex = 1, n.mobileInput.type = e, n.mobileInput.disabled = n.input.disabled, n.mobileInput.required = n.input.required, n.mobileInput.placeholder = n.input.placeholder, n.mobileFormatStr = "datetime-local" === e ? "Y-m-d\\TH:i:S" : "date" === e ? "Y-m-d" : "H:i:S", n.selectedDates.length > 0 && (n.mobileInput.defaultValue = n.mobileInput.value = n.formatDate(n.selectedDates[0], n.mobileFormatStr));
                            n.config.minDate && (n.mobileInput.min = n.formatDate(n.config.minDate, "Y-m-d"));
                            n.config.maxDate && (n.mobileInput.max = n.formatDate(n.config.maxDate, "Y-m-d"));
                            n.input.getAttribute("step") && (n.mobileInput.step = String(n.input.getAttribute("step")));
                            n.input.type = "hidden", void 0 !== n.altInput && (n.altInput.type = "hidden");
                            try {
                                n.input.parentNode && n.input.parentNode.insertBefore(n.mobileInput, n.input.nextSibling)
                            } catch (e) {}
                            O(n.mobileInput, "change", (e => {
                                n.setDate(g(e).value, !1, n.mobileFormatStr), pe("onChange"), pe("onClose")
                            }))
                        }();
                        const e = c(ne, 50);
                        n._debouncedChange = c(A, 300), n.daysContainer && !/iPhone|iPad|iPod/i.test(navigator.userAgent) && O(n.daysContainer, "mouseover", (e => {
                            "range" === n.config.mode && te(g(e))
                        }));
                        O(window.document.body, "keydown", ee), n.config.inline || n.config.static || O(window, "resize", e);
                        void 0 !== window.ontouchstart ? O(window.document, "touchstart", J) : O(window.document, "mousedown", J);
                        O(window.document, "focus", J, {
                            capture: !0
                        }), !0 === n.config.clickOpens && (O(n._input, "focus", n.open), O(n._input, "click", n.open));
                        void 0 !== n.daysContainer && (O(n.monthNav, "click", we), O(n.monthNav, ["keyup", "increment"], T), O(n.daysContainer, "click", ce));
                        if (void 0 !== n.timeContainer && void 0 !== n.minuteElement && void 0 !== n.hourElement) {
                            const e = e => g(e).select();
                            O(n.timeContainer, ["increment"], w), O(n.timeContainer, "blur", w, {
                                capture: !0
                            }), O(n.timeContainer, "click", _), O([n.hourElement, n.minuteElement], ["focus", "click"], e), void 0 !== n.secondElement && O(n.secondElement, "focus", (() => n.secondElement && n.secondElement.select())), void 0 !== n.amPM && O(n.amPM, "click", (e => {
                                w(e), A()
                            }))
                        }
                        n.config.allowInput && O(n._input, "blur", Q)
                    }(), (n.selectedDates.length || n.config.noCalendar) && (n.config.enableTime && k(n.config.noCalendar ? n.latestSelectedDateObj : void 0), be(!1)), v();
                const r = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
                !n.isMobile && r && re(), pe("onReady")
            }(), n
        }

        function P(e, t) {
            const n = Array.prototype.slice.call(e).filter((e => e instanceof HTMLElement)),
                o = [];
            for (let e = 0; e < n.length; e++) {
                const a = n[e];
                try {
                    if (null !== a.getAttribute("data-fp-omit")) continue;
                    void 0 !== a._flatpickr && (a._flatpickr.destroy(), a._flatpickr = void 0), a._flatpickr = k(a, t || {}), o.push(a._flatpickr)
                } catch (e) {
                    console.error(e)
                }
            }
            return 1 === o.length ? o[0] : o
        }
        "undefined" != typeof HTMLElement && "undefined" != typeof HTMLCollection && "undefined" != typeof NodeList && (HTMLCollection.prototype.flatpickr = NodeList.prototype.flatpickr = function (e) {
            return P(this, e)
        }, HTMLElement.prototype.flatpickr = function (e) {
            return P([this], e)
        });
        var N = function (e, t) {
            return "string" == typeof e ? P(window.document.querySelectorAll(e), t) : e instanceof Node ? P([e], t) : P(e, t)
        };
        N.defaultConfig = {}, N.l10ns = {
            en: Object.assign({}, r),
            default: Object.assign({}, r)
        }, N.localize = e => {
            N.l10ns.default = Object.assign(Object.assign({}, N.l10ns.default), e)
        }, N.setDefaults = e => {
            N.defaultConfig = Object.assign(Object.assign({}, N.defaultConfig), e)
        }, N.parseDate = x({}), N.formatDate = C({}), N.compareDates = M, "undefined" != typeof jQuery && void 0 !== jQuery.fn && (jQuery.fn.flatpickr = function (e) {
            return P(this, e)
        }), Date.prototype.fp_incr = function (e) {
            return new Date(this.getFullYear(), this.getMonth(), this.getDate() + ("string" == typeof e ? parseInt(e, 10) : e))
        }, "undefined" != typeof window && (window.flatpickr = N);
        const T = N;
        var O = n(592),
            A = n.n(O),
            F = n(401);
        window.noUiSlider = t(), document.addEventListener("alpine:init", (function () {
            window.Alpine.directive("monthpicker", (function (e) {
                T(e, {
                    maxDate: new Date,
                    locale: F.French,
                    plugins: [new(A())({
                        shorthand: !0,
                        dateFormat: "Y-m",
                        altFormat: "F Y",
                        theme: "dark"
                    })]
                })
            })), window.Alpine.directive("nouislider", (function (e, n, o) {
                var a = n.expression,
                    i = (0, o.evaluate)(a),
                    r = i.events || {};
                delete i.events;
                var s = t().create(e, i);
                Object.keys(r).forEach((function (e) {
                    s.on(e, r[e])
                }))
            })), window.Alpine.directive("animate-price", (function (e, t) {
                var n = t.expression,
                    o = 1e3 / 60,
                    a = Math.round(500 / o);
                ! function (e) {
                    var t = 0,
                        i = 100 * parseFloat(n, 2),
                        r = setInterval((function () {
                            t++;
                            var n, o = (n = t / a) * (2 - n),
                                s = Math.round(i * o);
                            100 * parseFloat(e.innerHTML, 2) !== s && (e.innerHTML = (s / 100).toFixed(Math.max(0, 2)).replace(".", ",").replace(new RegExp("\\d(?=(\\d{3})+\\D)", "g"), "$& ")), t === a && clearInterval(r)
                        }), o)
                }(e)
            }))
        }))
    })()
})();
