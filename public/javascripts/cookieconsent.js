! function(e) {
  if (!e.hasInitialised) {
    var t = {
      escapeRegExp: function(e) {
        return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
      },
      hasClass: function(e, t) {
        var i = " ";
        return 1 === e.nodeType && (i + e.className + i).replace(/[\n\t]/g, i).indexOf(i + t + i) >= 0
      },
      addClass: function(e, t) {
        e.className += " " + t
      },
      removeClass: function(e, t) {
        var i = new RegExp("\\b" + this.escapeRegExp(t) + "\\b");
        e.className = e.className.replace(i, "")
      },
      interpolateString: function(e, t) {
        var i = /{{([a-z][a-z0-9\-_]*)}}/gi;
        return e.replace(i, function(e) {
          return t(arguments[1]) || ""
        })
      },
      getCookie: function(e) {
        var t = "; " + document.cookie,
          i = t.split("; " + e + "=");
        return i.length < 2 ? void 0 : i.pop().split(";").shift()
      },
      setCookie: function(e, t, i, o, n) {
        var s = new Date;
        s.setDate(s.getDate() + (i || 365));
        var r = [e + "=" + t, "expires=" + s.toUTCString(), "path=" + (n || "/")];
        o && r.push("domain=" + o), document.cookie = r.join(";")
      },
      deepExtend: function(e, t) {
        for (var i in t) t.hasOwnProperty(i) && (i in e && this.isPlainObject(e[i]) && this.isPlainObject(t[i]) ? this.deepExtend(e[i], t[i]) : e[i] = t[i]);
        return e
      },
      throttle: function(e, t) {
        var i = !1;
        return function() {
          i || (e.apply(this, arguments), i = !0, setTimeout(function() {
            i = !1
          }, t))
        }
      },
      hash: function(e) {
        var t, i, o, n = 0;
        if (0 === e.length) return n;
        for (t = 0, o = e.length; t < o; ++t) i = e.charCodeAt(t), n = (n << 5) - n + i, n |= 0;
        return n
      },
      normaliseHex: function(e) {
        return "#" == e[0] && (e = e.substr(1)), 3 == e.length && (e = e[0] + e[0] + e[1] + e[1] + e[2] + e[2]), e
      },
      getContrast: function(e) {
        return e = this.normaliseHex(e), (299 * parseInt(e.substr(0, 2), 16) + 587 * parseInt(e.substr(2, 2), 16) + 114 * parseInt(e.substr(4, 2), 16)) / 1e3 >= 128 ? "#000" : "#fff"
      },
      getLuminance: function(e) {
        var t = parseInt(this.normaliseHex(e), 16),
          i = 38 + (t >> 16),
          o = 38 + (t >> 8 & 255),
          n = 38 + (255 & t);
        return "#" + (16777216 + 65536 * (i < 255 ? i < 1 ? 0 : i : 255) + 256 * (o < 255 ? o < 1 ? 0 : o : 255) + (n < 255 ? n < 1 ? 0 : n : 255)).toString(16).slice(1)
      },
      isMobile: function() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
      },
      isPlainObject: function(e) {
        return "object" == typeof e && null !== e && e.constructor == Object
      }
    };
    e.status = {
      deny: "deny",
      allow: "allow",
      dismiss: "dismiss"
    }, e.transitionEnd = function() {
      var e = document.createElement("div"),
        t = {
          t: "transitionend",
          OT: "oTransitionEnd",
          msT: "MSTransitionEnd",
          MozT: "transitionend",
          WebkitT: "webkitTransitionEnd"
        };
      for (var i in t)
        if (t.hasOwnProperty(i) && void 0 !== e.style[i + "ransition"]) return t[i];
      return ""
    }(), e.hasTransition = !!e.transitionEnd;
    var i = Object.keys(e.status).map(t.escapeRegExp);
    e.customStyles = {}, e.Popup = function() {
      function o() {
        this.initialise.apply(this, arguments)
      }

      function n(e) {
        this.openingTimeout = null, t.removeClass(e, "cc-invisible")
      }

      function s(t) {
        t.style.display = "none", t.removeEventListener(e.transitionEnd, this.afterTransition), this.afterTransition = null
      }

      function r() {
        var t = this.options.onInitialise.bind(this);
        if (!window.navigator.cookieEnabled) return t(e.status.deny), !0;
        if (window.CookiesOK || window.navigator.CookiesOK) return t(e.status.allow), !0;
        var i = Object.keys(e.status),
          o = this.getStatus(),
          n = i.indexOf(o) >= 0;
        return n && t(o), n
      }

      function a() {
        var e = this.options.position.split("-"),
          t = [];
        return e.forEach(function(e) {
          t.push("cc-" + e)
        }), t
      }

      function c() {
        var e = this.options,
          i = "top" == e.position || "bottom" == e.position ? "banner" : "floating";
        t.isMobile() && (i = "floating");
        var o = ["cc-" + i, "cc-type-" + e.type, "cc-theme-" + e.theme];
        e.static && o.push("cc-static"), o.push.apply(o, a.call(this));
        h.call(this, this.options.palette);
        return this.customStyleSelector && o.push(this.customStyleSelector), o
      }

      function l() {
        var e = {},
          i = this.options;
        i.showLink || (i.elements.link = "", i.elements.messagelink = i.elements.message), Object.keys(i.elements).forEach(function(o) {
          e[o] = t.interpolateString(i.elements[o], function(e) {
            var t = i.content[e];
            return e && "string" == typeof t && t.length ? t : ""
          })
        });
        var o = i.compliance[i.type];
        o || (o = i.compliance.info), e.compliance = t.interpolateString(o, function(t) {
          return e[t]
        });
        var n = i.layouts[i.layout];
        return n || (n = i.layouts.basic), t.interpolateString(n, function(t) {
          return e[t]
        })
      }

      function u(i) {
        var o = this.options,
          n = document.createElement("div"),
          s = o.container && 1 === o.container.nodeType ? o.container : document.body;
        n.innerHTML = i;
        var r = n.children[0];
        return r.style.display = "none", t.hasClass(r, "cc-window") && e.hasTransition && t.addClass(r, "cc-invisible"), this.onButtonClick = p.bind(this), r.addEventListener("click", this.onButtonClick), o.autoAttach && (s.firstChild ? s.insertBefore(r, s.firstChild) : s.appendChild(r)), r
      }

      function p(o) {
        var n = o.target;
        if (t.hasClass(n, "cc-btn")) {
          var s = n.className.match(new RegExp("\\bcc-(" + i.join("|") + ")\\b")),
            r = s && s[1] || !1;
          r && (this.setStatus(r), this.close(!0))
        }
        t.hasClass(n, "cc-close") && (this.setStatus(e.status.dismiss), this.close(!0)), t.hasClass(n, "cc-revoke") && this.revokeChoice()
      }

      function h(e) {
        var i = t.hash(JSON.stringify(e)),
          o = "cc-color-override-" + i,
          n = t.isPlainObject(e);
        return this.customStyleSelector = n ? o : null, n && d(i, e, "." + o), n
      }

      function d(i, o, n) {
        if (e.customStyles[i]) return void++e.customStyles[i].references;
        var s = {},
          r = o.popup,
          a = o.button,
          c = o.highlight;
        r && (r.text = r.text ? r.text : t.getContrast(r.background), r.link = r.link ? r.link : r.text, s[n + ".cc-window"] = ["color: " + r.text, "background-color: " + r.background], s[n + ".cc-revoke"] = ["color: " + r.text, "background-color: " + r.background], s[n + " .cc-link," + n + " .cc-link:active," + n + " .cc-link:visited"] = ["color: " + r.link], a && (a.text = a.text ? a.text : t.getContrast(a.background), a.border = a.border ? a.border : "transparent", s[n + " .cc-btn"] = ["color: " + a.text, "border-color: " + a.border, "background-color: " + a.background], "transparent" != a.background && (s[n + " .cc-btn:hover, " + n + " .cc-btn:focus"] = ["background-color: " + f(a.background)]), c ? (c.text = c.text ? c.text : t.getContrast(c.background), c.border = c.border ? c.border : "transparent", s[n + " .cc-highlight .cc-btn:first-child"] = ["color: " + c.text, "border-color: " + c.border, "background-color: " + c.background]) : s[n + " .cc-highlight .cc-btn:first-child"] = ["color: " + r.text]));
        var l = document.createElement("style");
        document.head.appendChild(l), e.customStyles[i] = {
          references: 1,
          element: l.sheet
        };
        var u = -1;
        for (var p in s) s.hasOwnProperty(p) && l.sheet.insertRule(p + "{" + s[p].join(";") + "}", ++u)
      }

      function f(e) {
        return e = t.normaliseHex(e), "000000" == e ? "#222" : t.getLuminance(e)
      }

      function v(i) {
        if (t.isPlainObject(i)) {
          var o = t.hash(JSON.stringify(i)),
            n = e.customStyles[o];
          if (n && !--n.references) {
            var s = n.element.ownerNode;
            s && s.parentNode && s.parentNode.removeChild(s), e.customStyles[o] = null
          }
        }
      }

      function m(e, t) {
        for (var i = 0, o = e.length; i < o; ++i) {
          var n = e[i];
          if (n instanceof RegExp && n.test(t) || "string" == typeof n && n.length && n === t) return !0
        }
        return !1
      }

      function b() {
        var t = this.setStatus.bind(this),
          i = this.options.dismissOnTimeout;
        "number" == typeof i && i >= 0 && (this.dismissTimeout = window.setTimeout(function() {
          t(e.status.dismiss)
        }, Math.floor(i)));
        var o = this.options.dismissOnScroll;
        if ("number" == typeof o && o >= 0) {
          var n = function(i) {
            window.pageYOffset > Math.floor(o) && (t(e.status.dismiss), window.removeEventListener("scroll", n), this.onWindowScroll = null)
          };
          this.onWindowScroll = n, window.addEventListener("scroll", n)
        }
      }

      function y() {
        if ("info" != this.options.type && (this.options.revokable = !0), t.isMobile() && (this.options.animateRevokable = !1), this.options.revokable) {
          var e = a.call(this);
          this.options.animateRevokable && e.push("cc-animate"), this.customStyleSelector && e.push(this.customStyleSelector);
          var i = this.options.revokeBtn.replace("{{classes}}", e.join(" "));
          this.revokeBtn = u.call(this, i);
          var o = this.revokeBtn;
          if (this.options.animateRevokable) {
            var n = t.throttle(function(e) {
              var i = !1,
                n = window.innerHeight - 20;
              t.hasClass(o, "cc-top") && e.clientY < 20 && (i = !0), t.hasClass(o, "cc-bottom") && e.clientY > n && (i = !0), i ? t.hasClass(o, "cc-active") || t.addClass(o, "cc-active") : t.hasClass(o, "cc-active") && t.removeClass(o, "cc-active")
            }, 200);
            this.onMouseMove = n, window.addEventListener("mousemove", n)
          }
        }
      }
      var g = {
        enabled: !0,
        container: null,
        cookie: {
          name: "cookieconsent_status",
          path: "/",
          domain: "",
          expiryDays: 365
        },
        onPopupOpen: function() {},
        onPopupClose: function() {},
        onInitialise: function(e) {},
        onStatusChange: function(e, t) {},
        onRevokeChoice: function() {},
        content: {
          header: "Cookies used on the website!",
          message: "This website uses cookies to ensure you get the best experience on our website.",
          dismiss: "Got it!",
          allow: "Allow cookies",
          deny: "Decline",
          link: "Learn more",
          href: "http://cookiesandyou.com",
          close: "&#x274c;"
        },
        elements: {
          header: '<span class="cc-header">{{header}}</span>&nbsp;',
          message: '<span id="cookieconsent:desc" class="cc-message">{{message}}</span>',
          messagelink: '<span id="cookieconsent:desc" class="cc-message">{{message}} <a aria-label="learn more about cookies" role=button tabindex="0" class="cc-link" href="{{href}}" rel="noopener noreferrer nofollow" target="_blank">{{link}}</a></span>',
          dismiss: '<a aria-label="dismiss cookie message" role=button tabindex="0" class="cc-btn cc-dismiss">{{dismiss}}</a>',
          allow: '<a aria-label="allow cookies" role=button tabindex="0"  class="cc-btn cc-allow">{{allow}}</a>',
          deny: '<a aria-label="deny cookies" role=button tabindex="0" class="cc-btn cc-deny">{{deny}}</a>',
          link: '<a aria-label="learn more about cookies" role=button tabindex="0" class="cc-link" href="{{href}}" target="_blank">{{link}}</a>',
          close: '<span aria-label="dismiss cookie message" role=button tabindex="0" class="cc-close">{{close}}</span>'
        },
        window: '<div role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window {{classes}}">\x3c!--googleoff: all--\x3e{{children}}\x3c!--googleon: all--\x3e</div>',
        revokeBtn: '<div class="cc-revoke {{classes}}">Cookie Policy</div>',
        compliance: {
          info: '<div class="cc-compliance">{{dismiss}}</div>',
          "opt-in": '<div class="cc-compliance cc-highlight">{{dismiss}}{{allow}}</div>',
          "opt-out": '<div class="cc-compliance cc-highlight">{{deny}}{{dismiss}}</div>'
        },
        type: "info",
        layouts: {
          basic: "{{messagelink}}{{compliance}}",
          "basic-close": "{{messagelink}}{{compliance}}{{close}}",
          "basic-header": "{{header}}{{message}}{{link}}{{compliance}}"
        },
        layout: "basic",
        position: "bottom",
        theme: "block",
        static: !1,
        palette: null,
        revokable: !1,
        animateRevokable: !0,
        showLink: !0,
        dismissOnScroll: !1,
        dismissOnTimeout: !1,
        autoOpen: !0,
        autoAttach: !0,
        whitelistPage: [],
        blacklistPage: [],
        overrideHTML: null
      };
      return o.prototype.initialise = function(e) {
        this.options && this.destroy(), t.deepExtend(this.options = {}, g), t.isPlainObject(e) && t.deepExtend(this.options, e), r.call(this) && (this.options.enabled = !1), m(this.options.blacklistPage, location.pathname) && (this.options.enabled = !1), m(this.options.whitelistPage, location.pathname) && (this.options.enabled = !0);
        var i = this.options.window.replace("{{classes}}", c.call(this).join(" ")).replace("{{children}}", l.call(this)),
          o = this.options.overrideHTML;
        if ("string" == typeof o && o.length && (i = o), this.options.static) {
          var n = u.call(this, '<div class="cc-grower">' + i + "</div>");
          n.style.display = "", this.element = n.firstChild, this.element.style.display = "none", t.addClass(this.element, "cc-invisible")
        } else this.element = u.call(this, i);
        b.call(this), y.call(this), this.options.autoOpen && this.autoOpen()
      }, o.prototype.destroy = function() {
        this.onButtonClick && this.element && (this.element.removeEventListener("click", this.onButtonClick), this.onButtonClick = null), this.dismissTimeout && (clearTimeout(this.dismissTimeout), this.dismissTimeout = null), this.onWindowScroll && (window.removeEventListener("scroll", this.onWindowScroll), this.onWindowScroll = null), this.onMouseMove && (window.removeEventListener("mousemove", this.onMouseMove), this.onMouseMove = null), this.element && this.element.parentNode && this.element.parentNode.removeChild(this.element), this.element = null, this.revokeBtn && this.revokeBtn.parentNode && this.revokeBtn.parentNode.removeChild(this.revokeBtn), this.revokeBtn = null, v(this.options.palette), this.options = null
      }, o.prototype.open = function(t) {
        if (this.element) return this.isOpen() || (e.hasTransition ? this.fadeIn() : this.element.style.display = "", this.options.revokable && this.toggleRevokeButton(), this.options.onPopupOpen.call(this)), this
      }, o.prototype.close = function(t) {
        if (this.element) return this.isOpen() && (e.hasTransition ? this.fadeOut() : this.element.style.display = "none", t && this.options.revokable && this.toggleRevokeButton(!0), this.options.onPopupClose.call(this)), this
      }, o.prototype.fadeIn = function() {
        var i = this.element;
        if (e.hasTransition && i && (this.afterTransition && s.call(this, i), t.hasClass(i, "cc-invisible"))) {
          if (i.style.display = "", this.options.static) {
            var o = this.element.clientHeight;
            this.element.parentNode.style.maxHeight = o + "px"
          }
          this.openingTimeout = setTimeout(n.bind(this, i), 20)
        }
      }, o.prototype.fadeOut = function() {
        var i = this.element;
        e.hasTransition && i && (this.openingTimeout && (clearTimeout(this.openingTimeout), n.bind(this, i)), t.hasClass(i, "cc-invisible") || (this.options.static && (this.element.parentNode.style.maxHeight = ""), this.afterTransition = s.bind(this, i), i.addEventListener(e.transitionEnd, this.afterTransition), t.addClass(i, "cc-invisible")))
      }, o.prototype.isOpen = function() {
        return this.element && "" == this.element.style.display && (!e.hasTransition || !t.hasClass(this.element, "cc-invisible"))
      }, o.prototype.toggleRevokeButton = function(e) {
        this.revokeBtn && (this.revokeBtn.style.display = e ? "" : "none")
      }, o.prototype.revokeChoice = function(e) {
        this.options.enabled = !0, this.clearStatus(), this.options.onRevokeChoice.call(this), e || this.autoOpen()
      }, o.prototype.hasAnswered = function(t) {
        return Object.keys(e.status).indexOf(this.getStatus()) >= 0
      }, o.prototype.hasConsented = function(t) {
        var i = this.getStatus();
        return i == e.status.allow || i == e.status.dismiss
      }, o.prototype.autoOpen = function(e) {
        !this.hasAnswered() && this.options.enabled && this.open()
      }, o.prototype.setStatus = function(i) {
        var o = this.options.cookie,
          n = t.getCookie(o.name),
          s = Object.keys(e.status).indexOf(n) >= 0;
        Object.keys(e.status).indexOf(i) >= 0 ? (t.setCookie(o.name, i, o.expiryDays, o.domain, o.path), this.options.onStatusChange.call(this, i, s)) : this.clearStatus()
      }, o.prototype.getStatus = function() {
        return t.getCookie(this.options.cookie.name)
      }, o.prototype.clearStatus = function() {
        var e = this.options.cookie;
        t.setCookie(e.name, "", -1, e.domain, e.path)
      }, o
    }(), e.Location = function() {
      function e(e) {
        t.deepExtend(this.options = {}, s), t.isPlainObject(e) && t.deepExtend(this.options, e), this.currentServiceIndex = -1
      }

      function i(e, t, i) {
        var o, n = document.createElement("script");
        n.type = "text/" + (e.type || "javascript"), n.src = e.src || e, n.async = !1, n.onreadystatechange = n.onload = function() {
          var e = n.readyState;
          clearTimeout(o), t.done || e && !/loaded|complete/.test(e) || (t.done = !0, t(), n.onreadystatechange = n.onload = null)
        }, document.body.appendChild(n), o = setTimeout(function() {
          t.done = !0, t(), n.onreadystatechange = n.onload = null
        }, i)
      }

      function o(e, t, i, o, n) {
        var s = new(window.XMLHttpRequest || window.ActiveXObject)("MSXML2.XMLHTTP.3.0");
        if (s.open(o ? "POST" : "GET", e, 1), s.setRequestHeader("X-Requested-With", "XMLHttpRequest"), s.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), Array.isArray(n))
          for (var r = 0, a = n.length; r < a; ++r) {
            var c = n[r].split(":", 2);
            s.setRequestHeader(c[0].replace(/^\s+|\s+$/g, ""), c[1].replace(/^\s+|\s+$/g, ""))
          }
        "function" == typeof t && (s.onreadystatechange = function() {
          s.readyState > 3 && t(s)
        }), s.send(o)
      }

      function n(e) {
        return new Error("Error [" + (e.code || "UNKNOWN") + "]: " + e.error)
      }
      var s = {
        timeout: 5e3,
        services: ["freegeoip", "ipinfo", "maxmind"],
        serviceDefinitions: {
          freegeoip: function() {
            return {
              url: "//freegeoip.net/json/?callback={callback}",
              isScript: !0,
              callback: function(e, t) {
                try {
                  var i = JSON.parse(t);
                  return i.error ? n(i) : {
                    code: i.country_code
                  }
                } catch (e) {
                  return n({
                    error: "Invalid response (" + e + ")"
                  })
                }
              }
            }
          },
          ipinfo: function() {
            return {
              url: "//ipinfo.io",
              headers: ["Accept: application/json"],
              callback: function(e, t) {
                try {
                  var i = JSON.parse(t);
                  return i.error ? n(i) : {
                    code: i.country
                  }
                } catch (e) {
                  return n({
                    error: "Invalid response (" + e + ")"
                  })
                }
              }
            }
          },
          ipinfodb: function(e) {
            return {
              url: "//api.ipinfodb.com/v3/ip-country/?key={api_key}&format=json&callback={callback}",
              isScript: !0,
              callback: function(e, t) {
                try {
                  var i = JSON.parse(t);
                  return "ERROR" == i.statusCode ? n({
                    error: i.statusMessage
                  }) : {
                    code: i.countryCode
                  }
                } catch (e) {
                  return n({
                    error: "Invalid response (" + e + ")"
                  })
                }
              }
            }
          },
          maxmind: function() {
            return {
              url: "//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js",
              isScript: !0,
              callback: function(e) {
                if (!window.geoip2) return void e(new Error("Unexpected response format. The downloaded script should have exported `geoip2` to the global scope"));
                geoip2.country(function(t) {
                  try {
                    e({
                      code: t.country.iso_code
                    })
                  } catch (t) {
                    e(n(t))
                  }
                }, function(t) {
                  e(n(t))
                })
              }
            }
          }
        }
      };
      return e.prototype.getNextService = function() {
        var e;
        do {
          e = this.getServiceByIdx(++this.currentServiceIndex)
        } while (this.currentServiceIndex < this.options.services.length && !e);
        return e
      }, e.prototype.getServiceByIdx = function(e) {
        var i = this.options.services[e];
        if ("function" == typeof i) {
          var o = i();
          return o.name && t.deepExtend(o, this.options.serviceDefinitions[o.name](o)), o
        }
        return "string" == typeof i ? this.options.serviceDefinitions[i]() : t.isPlainObject(i) ? this.options.serviceDefinitions[i.name](i) : null
      }, e.prototype.locate = function(e, t) {
        var i = this.getNextService();
        if (!i) return void t(new Error("No services to run"));
        this.callbackComplete = e, this.callbackError = t, this.runService(i, this.runNextServiceOnError.bind(this))
      }, e.prototype.setupUrl = function(e) {
        var t = this.getCurrentServiceOpts();
        return e.url.replace(/\{(.*?)\}/g, function(i, o) {
          if ("callback" === o) {
            var n = "callback" + Date.now();
            return window[n] = function(t) {
              e.__JSONP_DATA = JSON.stringify(t)
            }, n
          }
          if (o in t.interpolateUrl) return t.interpolateUrl[o]
        })
      }, e.prototype.runService = function(e, t) {
        var n = this;
        if (e && e.url && e.callback) {
          (e.isScript ? i : o)(this.setupUrl(e), function(i) {
            var o = i ? i.responseText : "";
            e.__JSONP_DATA && (o = e.__JSONP_DATA, delete e.__JSONP_DATA), n.runServiceCallback.call(n, t, e, o)
          }, this.options.timeout, e.data, e.headers)
        }
      }, e.prototype.runServiceCallback = function(e, t, i) {
        var o = this,
          n = function(t) {
            s || o.onServiceResult.call(o, e, t)
          },
          s = t.callback(n, i);
        s && this.onServiceResult.call(this, e, s)
      }, e.prototype.onServiceResult = function(e, t) {
        t instanceof Error || t && t.error ? e.call(this, t, null) : e.call(this, null, t)
      }, e.prototype.runNextServiceOnError = function(e, t) {
        if (e) {
          this.logError(e);
          var i = this.getNextService();
          i ? this.runService(i, this.runNextServiceOnError.bind(this)) : this.completeService.call(this, this.callbackError, new Error("All services failed"))
        } else this.completeService.call(this, this.callbackComplete, t)
      }, e.prototype.getCurrentServiceOpts = function() {
        var e = this.options.services[this.currentServiceIndex];
        return "string" == typeof e ? {
          name: e
        } : "function" == typeof e ? e() : t.isPlainObject(e) ? e : {}
      }, e.prototype.completeService = function(e, t) {
        this.currentServiceIndex = -1, e && e(t)
      }, e.prototype.logError = function(e) {
        var t = this.currentServiceIndex,
          i = this.getServiceByIdx(t);
        console.error("The service[" + t + "] (" + i.url + ") responded with the following error", e)
      }, e
    }(), e.Law = function() {
      function e(e) {
        this.initialise.apply(this, arguments)
      }
      var i = {
        regionalLaw: !0,
        hasLaw: ["AT", "BE", "BG", "HR", "CZ", "CY", "DK", "EE", "FI", "FR", "DE", "EL", "HU", "IE", "IT", "LV", "LT", "LU", "MT", "NL", "PL", "PT", "SK", "SI", "ES", "SE", "GB", "UK"],
        revokable: ["HR", "CY", "DK", "EE", "FR", "DE", "LV", "LT", "NL", "PT", "ES"],
        explicitAction: ["HR", "IT", "ES"]
      };
      return e.prototype.initialise = function(e) {
        t.deepExtend(this.options = {}, i), t.isPlainObject(e) && t.deepExtend(this.options, e)
      }, e.prototype.get = function(e) {
        var t = this.options;
        return {
          hasLaw: t.hasLaw.indexOf(e) >= 0,
          revokable: t.revokable.indexOf(e) >= 0,
          explicitAction: t.explicitAction.indexOf(e) >= 0
        }
      }, e.prototype.applyLaw = function(e, t) {
        var i = this.get(t);
        return i.hasLaw || (e.enabled = !1), this.options.regionalLaw && (i.revokable && (e.revokable = !0), i.explicitAction && (e.dismissOnScroll = !1, e.dismissOnTimeout = !1)), e
      }, e
    }(), e.initialise = function(t, i, o) {
      var n = new e.Law(t.law);
      i || (i = function() {}), o || (o = function() {}), e.getCountryCode(t, function(o) {
        delete t.law, delete t.location, o.code && (t = n.applyLaw(t, o.code)), i(new e.Popup(t))
      }, function(i) {
        delete t.law, delete t.location, o(i, new e.Popup(t))
      })
    }, e.getCountryCode = function(t, i, o) {
      if (t.law && t.law.countryCode) return void i({
        code: t.law.countryCode
      });
      if (t.location) {
        return void new e.Location(t.location).locate(function(e) {
          i(e || {})
        }, o)
      }
      i({})
    }, e.utils = t, e.hasInitialised = !0, window.cookieconsent = e
  }
}(window.cookieconsent || {}),  window.cookieconsent.init =  function(onStatusChangeCallback, onFinishedCallback) {
  window.cookieconsent.Popup.prototype.revokeChoice = function(e) {
    this.options.enabled = !0, this.options.onRevokeChoice.call(this), e || this.autoOpen(), this.open()
  }, window.cookieconsent.Popup.prototype.removeCookies = function() {
    for (var e = ["eclipse_cookieconsent_status", "has_js"], t = document.cookie.split(";"), i = 0; i < t.length; i++) {
      var o = t[i],
        n = o.indexOf("="),
        s = n > -1 ? o.substr(0, n) : o;
      s = s.trim(), void 0 !== e && 0 != e.length && -1 != e.indexOf(s) || (document.cookie = s + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/;")
    }
  }, window.cookieconsent.initialise({
    type: "opt-in",
    position: "bottom",
    revokable: !0,
    enabled: !0,
    cookie: {
      name: "eclipse_cookieconsent_status",
      expiryDays: 90,
      domain: "." + location.hostname.split(".").reverse()[1] + "." + location.hostname.split(".").reverse()[0]
    },
    compliance: {
      "opt-in": '<div class="cc-compliance cc-highlight">{{deny}}{{allow}}</div>'
    },
    onStatusChange: function(e, t) {
      document.cookie = "eclipse_cookieconsent_status=" + e + "; expires=0; path=/;", "allow" !== e && this.removeCookies()
      onStatusChangeCallback();
    },
    onInitialise: function(e, t) {
      setTimeout(function() {
        document.getElementsByClassName("cc-revoke")[0].style.display = "block"
      })
      onFinishedCallback();
    },
    revokeBtn: '<div class="cc-revoke {{classes}}">Cookie settings</div>',
    palette: {
      popup: {
        background: "#353434",
        text: "#ffffff"
      },
      highlight: {
        background: "#fff",
        text: "#000000"
      },
      button: {
        background: "#da7a08",
        text: "#ffffff"
      }
    },
    content: {
      href: "https://www.eclipse.org/legal/privacy.php",
      dismiss: "Dismiss",
      link: "click here.",
      message: "Some Eclipse Foundation pages use cookies to better serve you when you return to the site. You can set your browser to notify you before you receive a cookie or turn off cookies. If you do so, however, some areas of some sites may not function properly. To read Eclipse Foundation Privacy Policy"
    }
  })
};