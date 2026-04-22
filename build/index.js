/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/ChatbotComponent.js"
/*!*****************************************!*\
  !*** ./src/scripts/ChatbotComponent.js ***!
  \*****************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const PHONE_DISPLAY = "(858) 255-1498";
const PHONE_LINK = "tel:+18582551498";
const EMAIL_DISPLAY = "brilliantstarcleaning@gmail.com";
const EMAIL_LINK = "mailto:brilliantstarcleaning@gmail.com";
const QUOTE_LINK = "/contact-us/";
const ABOUT_LINK = "/about-us/";
const SERVICES_LINK = "/services/";
const LOCATIONS_LINK = "/locations/san-diego/";
const REGULAR_LINK = "/services/residential-cleaning/";
const DEEP_LINK = "/services/deep-cleaning/";
const MOVE_OUT_LINK = "/services/move-out-cleaning/";
const MOVE_IN_LINK = "/services/move-in-cleaning/";
const POST_CONSTRUCTION_LINK = "/services/post-construction-cleaning/";
const SPECIALTY_LINK = "/services/specialty-services/";
const YELP_LINK = "https://www.yelp.com/biz/brilliant-star-cleaning-san-diego";
function BotIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "9.25",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
      cx: "14.75",
      cy: "10.25",
      r: "1",
      fill: "currentColor"
    })]
  });
}
function CloseIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M6 6L18 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M18 6L6 18",
      stroke: "currentColor",
      strokeWidth: "1.9",
      strokeLinecap: "round"
    })]
  });
}
function SendIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L10 14",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 3L14 21L10 14L3 10L21 3Z",
      stroke: "currentColor",
      strokeWidth: "1.8",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function PhoneIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })
  });
}
function ExternalLinkIcon({
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
    className: className,
    viewBox: "0 0 24 24",
    fill: "none",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M14 5H19V10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M10 14L19 5",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: "M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10",
      stroke: "currentColor",
      strokeWidth: "1.7",
      strokeLinecap: "round",
      strokeLinejoin: "round"
    })]
  });
}
function createBotMessage(text, links = []) {
  return {
    id: Date.now() + Math.random(),
    text,
    sender: "bot",
    timestamp: new Date(),
    links
  };
}
function getBotResponse(rawInput) {
  const input = rawInput.toLowerCase().trim();
  if (input.includes("regular") || input.includes("residential") || input.includes("weekly") || input.includes("biweekly") || input.includes("recurring")) {
    return createBotMessage("Regular residential cleaning is designed for busy households that want a consistently clean home without the effort. It covers dusting, vacuuming, mopping, kitchen surfaces, bathrooms, trash, and basic surface organization.", [{
      label: "Residential Cleaning",
      href: REGULAR_LINK
    }, {
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("deep") || input.includes("deep cleaning") || input.includes("seasonal") || input.includes("refresh")) {
    return createBotMessage("Deep cleaning goes beyond regular cleaning and is a great fit for a fresh start, a seasonal reset, or new clients. It can include the inside of the refrigerator, inside of the oven, window seals and sills, ceiling fans within safe reach, and small patios or balconies.", [{
      label: "Deep Cleaning",
      href: DEEP_LINK
    }, {
      label: "Request a Deep Cleaning Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("move out") || input.includes("move-out") || input.includes("deposit") || input.includes("vacant") || input.includes("empty drawers") || input.includes("cabinets empty")) {
    return createBotMessage("Move-out cleaning is designed to leave the home spotless and move-out ready. It can include appliances, cabinets, baseboards, hard water treatment, mold-related cleaning, and detailed wipe-downs throughout. Important: the property must be vacant and all drawers and cabinets must be empty before the team arrives.", [{
      label: "Move-Out Cleaning",
      href: MOVE_OUT_LINK
    }, {
      label: "Get a Move-Out Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("move in") || input.includes("move-in") || input.includes("new home") || input.includes("before unpacking")) {
    return createBotMessage("Move-in cleaning is meant to detail and disinfect the home before you settle in. The focus is on kitchens, bathrooms, floors, and high-contact surfaces so your space feels fresh before the boxes arrive.", [{
      label: "Move-In Cleaning",
      href: MOVE_IN_LINK
    }, {
      label: "Request a Move-In Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("post construction") || input.includes("post-construction") || input.includes("renovation") || input.includes("remodel") || input.includes("construction dust")) {
    return createBotMessage("Post-construction cleaning is built for homes coming out of small to mid-size renovation projects. Brilliant Star handles dust, debris, residue, paint splatter, and the cleanup needed to make the space feel livable again.", [{
      label: "Post-Construction Cleaning",
      href: POST_CONSTRUCTION_LINK
    }, {
      label: "Get a Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("specialty") || input.includes("special service") || input.includes("custom cleaning") || input.includes("unique situation")) {
    return createBotMessage("Specialty services are for cleaning needs that do not fit a standard package. You can share the situation and Brilliant Star can let you know what is possible and prepare a quote that makes sense for your home.", [{
      label: "Specialty Services",
      href: SPECIALTY_LINK
    }, {
      label: "Contact Us",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("quote") || input.includes("estimate") || input.includes("price") || input.includes("pricing") || input.includes("cost")) {
    return createBotMessage("Every quote is personalized. The team asks about your service type, number of bedrooms and bathrooms, when the home was last professionally cleaned, and any allergies, chemical preferences, or special requests. Pricing is transparent and based on your home’s real needs.", [{
      label: "Get Your Free Quote",
      href: QUOTE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]);
  }
  if (input.includes("allerg") || input.includes("baby") || input.includes("newborn") || input.includes("bleach") || input.includes("fragrance") || input.includes("eco") || input.includes("chemical")) {
    return createBotMessage("Yes — if you have allergies, a newborn, or specific product preferences, you can tell the team when booking. Brilliant Star adapts to the household and can work around requests like fragrance-free or no-bleach preferences.", [{
      label: "Get a Personalized Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("supplies") || input.includes("equipment") || input.includes("products") || input.includes("vacuum")) {
    return createBotMessage("Brilliant Star arrives with commercial-grade vacuums and professional cleaning products suited for surfaces like hardwood floors, tile, ceramic, stone countertops, and stainless steel appliances.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Request a Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("licensed") || input.includes("insured") || input.includes("insurance") || input.includes("license")) {
    return createBotMessage("Yes — Brilliant Star Cleaning Services presents itself as licensed and insured, and that is also part of the trust messaging throughout the site.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("yelp") || input.includes("reviews") || input.includes("rating") || input.includes("stars")) {
    return createBotMessage("Brilliant Star highlights a 4.5-star Yelp rating with 54 reviews. The site also features review copy about thorough cleanings, spotless results, and exceeded expectations.", [{
      label: "Read Yelp Reviews",
      href: YELP_LINK
    }, {
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("area") || input.includes("areas") || input.includes("service area") || input.includes("location") || input.includes("locations") || input.includes("san diego") || input.includes("hillcrest") || input.includes("north park") || input.includes("mission hills") || input.includes("del mar") || input.includes("mira mesa") || input.includes("mission valley") || input.includes("kearny mesa") || input.includes("mission beach") || input.includes("ocean beach") || input.includes("university heights") || input.includes("south park") || input.includes("otay mesa")) {
    return createBotMessage("Brilliant Star serves San Diego and surrounding neighborhoods, including Hillcrest, North Park, Mission Hills, Del Mar, Mira Mesa, Mission Valley, Kearny Mesa, Mission Beach, Ocean Beach, University Heights, South Park, and Otay Mesa.", [{
      label: "View Service Areas",
      href: LOCATIONS_LINK
    }, {
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("hours") || input.includes("open") || input.includes("available") || input.includes("friday")) {
    return createBotMessage("Brilliant Star is available Monday through Friday from 7:30 AM to 4:30 PM, with Fridays listed until 4:00 PM on the contact page copy.", [{
      label: "Call Now",
      href: PHONE_LINK
    }, {
      label: "Contact Us",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("contact") || input.includes("phone") || input.includes("email") || input.includes("call")) {
    return createBotMessage("You can reach Brilliant Star by phone at (858) 255-1498 or by email at brilliantstarcleaning@gmail.com. The contact page is also set up as the main quote request path.", [{
      label: PHONE_DISPLAY,
      href: PHONE_LINK
    }, {
      label: EMAIL_DISPLAY,
      href: EMAIL_LINK
    }, {
      label: "Contact Us",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("about") || input.includes("team") || input.includes("experience") || input.includes("15 years")) {
    return createBotMessage("Brilliant Star positions itself as a trusted local San Diego cleaning team with over 15 years of experience, focused on care, expertise, and attention to detail.", [{
      label: "About Us",
      href: ABOUT_LINK
    }, {
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }]);
  }
  if (input.includes("services") || input.includes("what do you do") || input.includes("what do they do") || input.includes("help")) {
    return createBotMessage("Brilliant Star offers regular residential cleaning, deep cleaning, move-out cleaning, move-in cleaning, post-construction clean-up, and specialty services. I can also help with quotes, service areas, contact info, Yelp reviews, and scheduling basics.", [{
      label: "View Services",
      href: SERVICES_LINK
    }, {
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }]);
  }
  return createBotMessage("Hi — I can help with regular cleaning, deep cleaning, move-out cleaning, move-in cleaning, post-construction clean-up, specialty services, pricing questions, service areas, Yelp reviews, and requesting a free quote.", [{
    label: "Get a Free Quote",
    href: QUOTE_LINK
  }, {
    label: "Call Now",
    href: PHONE_LINK
  }]);
}
function BrilliantStarChatbot() {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [inputMessage, setInputMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const [isTyping, setIsTyping] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [messages, setMessages] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)([{
    id: 1,
    text: "Hi, I’m the Brilliant Star assistant. I can help with cleaning services, personalized quotes, service areas, Yelp reviews, and contact information.",
    sender: "bot",
    timestamp: new Date(),
    links: [{
      label: "Get a Free Quote",
      href: QUOTE_LINK
    }, {
      label: "Call Now",
      href: PHONE_LINK
    }]
  }]);
  const messagesEndRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const quickActions = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => [{
    text: "Regular Cleaning",
    icon: "🧼"
  }, {
    text: "Deep Cleaning",
    icon: "✨"
  }, {
    text: "Move-Out Cleaning",
    icon: "📦"
  }, {
    text: "Move-In Cleaning",
    icon: "🏡"
  }, {
    text: "Post-Construction",
    icon: "🛠️"
  }, {
    text: "Free Quote",
    icon: "📋"
  }], []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    messagesEndRef.current?.scrollIntoView({
      behavior: "smooth"
    });
  }, [messages, isTyping]);
  function handleSendMessage(e) {
    e?.preventDefault?.();
    if (!inputMessage.trim()) return;
    const currentMessage = inputMessage.trim();
    const userMessage = {
      id: Date.now(),
      text: currentMessage,
      sender: "user",
      timestamp: new Date()
    };
    setMessages(prev => [...prev, userMessage]);
    setInputMessage("");
    setIsTyping(true);
    window.setTimeout(() => {
      const botResponse = getBotResponse(currentMessage);
      setMessages(prev => [...prev, botResponse]);
      setIsTyping(false);
    }, 700);
  }
  function handleQuickAction(action) {
    setInputMessage(action);
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5",
    children: [isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-[24px] border border-[var(--bs-primary)]/10 bg-[var(--bs-surface)] shadow-[0_22px_50px_rgba(11,37,56,0.16)] sm:h-[33rem]",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "relative overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_52%,var(--bs-accent)_160%)] px-4 py-3 text-white",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "absolute inset-0 opacity-[0.08] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:18px_18px]"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "relative flex items-start justify-between gap-3",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-3",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex h-10 w-10 items-center justify-center rounded-full border border-white/15 bg-white/10 backdrop-blur-sm",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
                className: "h-5 w-5"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "text-[11px] font-black uppercase tracking-[0.18em] text-white/70",
                children: "San Diego Cleaning Help"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                className: "mt-1 text-[0.92rem] font-black tracking-[-0.02em]",
                style: {
                  fontFamily: '"Inter", "Segoe UI", Arial, sans-serif'
                },
                children: "Brilliant Star Assistant"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "mt-0.5 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75",
                children: "Online now"
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            onClick: () => setIsOpen(false),
            className: "inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/15 bg-white/10 text-white transition hover:bg-white hover:text-[var(--bs-primary)]",
            "aria-label": "Close chat",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
              className: "h-4 w-4"
            })
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "flex-1 overflow-y-auto bg-[var(--bs-bg)] px-3 py-3",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "space-y-3",
          children: [messages.map(message => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `flex ${message.sender === "user" ? "justify-end" : "justify-start"}`,
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: `max-w-[88%] rounded-[18px] px-3.5 py-3 text-[0.9rem] leading-6 shadow-sm ${message.sender === "user" ? "rounded-br-md bg-[var(--bs-primary)] text-white" : "rounded-bl-md border border-[var(--bs-primary)]/10 bg-white text-[var(--bs-primary)]"}`,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                className: "m-0",
                children: message.text
              }), message.links?.length > 0 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "mt-3 flex flex-wrap gap-2",
                children: message.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: link.href,
                  target: link.href.startsWith("http") ? "_blank" : undefined,
                  rel: link.href.startsWith("http") ? "noreferrer" : undefined,
                  className: "inline-flex items-center gap-1.5 rounded-full border border-[var(--bs-primary)]/10 bg-[var(--bs-surface-2)] px-2.5 py-1.5 text-[11px] font-black text-[var(--bs-primary-2)] transition hover:border-[var(--bs-accent)] hover:text-[var(--bs-accent)]",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ExternalLinkIcon, {
                    className: "h-3.5 w-3.5"
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    children: link.label
                  })]
                }, `${message.id}-${link.href}-${link.label}`))
              })]
            })
          }, message.id)), isTyping && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex justify-start",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "rounded-[18px] rounded-bl-md border border-[var(--bs-primary)]/10 bg-white px-4 py-3 shadow-sm",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "flex gap-1.5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full bg-[var(--bs-primary-2)]"
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full bg-[var(--bs-accent)]",
                  style: {
                    animationDelay: "0.2s"
                  }
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  className: "h-2.5 w-2.5 animate-pulse rounded-full bg-[var(--bs-gold)]",
                  style: {
                    animationDelay: "0.4s"
                  }
                })]
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            ref: messagesEndRef
          })]
        })
      }), messages.length === 1 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t border-[var(--bs-primary)]/10 bg-white px-3 py-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "mb-2 text-[0.68rem] font-black uppercase tracking-[0.12em] text-[var(--bs-primary-2)]",
          children: "Quick help"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex flex-wrap gap-2",
          children: quickActions.map(action => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            type: "button",
            onClick: () => handleQuickAction(action.text),
            className: "rounded-full border border-[var(--bs-primary)]/10 bg-[var(--bs-surface-2)] px-2.5 py-1.5 text-[11px] font-black text-[var(--bs-primary)] transition hover:border-[var(--bs-accent)] hover:bg-white hover:text-[var(--bs-accent)]",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              className: "mr-1",
              children: action.icon
            }), action.text]
          }, action.text))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "border-t border-[var(--bs-primary)]/10 bg-white p-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
          onSubmit: handleSendMessage,
          className: "flex items-center gap-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            value: inputMessage,
            onChange: e => setInputMessage(e.target.value),
            placeholder: "Ask about cleaning services...",
            className: "min-w-0 flex-1 rounded-full border border-[var(--bs-primary)]/12 bg-[var(--bs-surface-2)] px-4 py-2.5 text-sm text-[var(--bs-primary)] outline-none transition placeholder:text-[var(--bs-primary)]/45 focus:border-[var(--bs-accent)] focus:bg-white focus:ring-4 focus:ring-[rgba(79,180,231,0.16)]"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "submit",
            disabled: !inputMessage.trim(),
            className: "inline-flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[var(--bs-accent)] text-white shadow-[0_14px_30px_rgba(79,180,231,0.28)] transition hover:scale-[1.03] hover:bg-[var(--bs-accent-hover)] disabled:cursor-not-allowed disabled:opacity-50",
            "aria-label": "Send message",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SendIcon, {
              className: "h-4 w-4"
            })
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "mt-3 flex flex-wrap items-center gap-3 text-[11px] font-semibold text-[var(--bs-primary)]/65",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: PHONE_LINK,
            className: "inline-flex items-center gap-1.5 transition hover:text-[var(--bs-accent)]",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {
              className: "h-3.5 w-3.5"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              children: PHONE_DISPLAY
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: EMAIL_LINK,
            className: "truncate transition hover:text-[var(--bs-accent)]",
            children: EMAIL_DISPLAY
          })]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      type: "button",
      onClick: () => setIsOpen(prev => !prev),
      className: `group relative flex h-14 w-14 items-center justify-center rounded-full text-white shadow-[0_18px_40px_rgba(11,37,56,0.24)] transition-all duration-300 hover:scale-[1.04] ${isOpen ? "bg-[var(--bs-primary)]" : "bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_58%,var(--bs-accent)_150%)]"}`,
      "aria-label": isOpen ? "Close chat" : "Open chat",
      children: [!isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        className: "absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "absolute inline-flex h-full w-full animate-ping rounded-full bg-[var(--bs-gold)] opacity-75"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "relative inline-flex h-3.5 w-3.5 rounded-full bg-[var(--bs-gold)]"
        })]
      }), isOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {
        className: "h-5.5 w-5.5"
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(BotIcon, {
        className: "h-6 w-6"
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (BrilliantStarChatbot);

/***/ },

/***/ "./src/scripts/ExampleReactComponent.js"
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ },

/***/ "./src/scripts/Person.js"
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ },

/***/ "./src/scripts/ctahome.js"
/*!********************************!*\
  !*** ./src/scripts/ctahome.js ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);
/**
 * ctahome.js - Componente React para el formulario de cotización
 *
 * Integrado con:
 * - EmailJS (service: service_snkyupn, template: template_j8m3lzw)
 * - Google reCAPTCHA v2
 */



const EMAILJS_PUBLIC_KEY = 'lpZS7WWTixCYb0GSo';
const EMAILJS_SERVICE_ID = 'service_snkyupn';
const EMAILJS_TEMPLATE_ID = 'template_j8m3lzw';
const RECAPTCHA_SITE_KEY = '6LegRcUsAAAAAOnFILz55nMWgx1mWfKLsjextJav';
const INITIAL_FORM = {
  full_name: '',
  phone: '',
  email: '',
  service: '',
  bedrooms: '',
  bathrooms: '',
  last_cleaning: '',
  allergies: '',
  notes: '',
  contact_method: '',
  agree_terms: false
};
const SERVICE_OPTIONS = [{
  value: '',
  label: 'Select a service'
}, {
  value: 'regular',
  label: 'Regular Cleaning'
}, {
  value: 'deep',
  label: 'Deep Cleaning'
}, {
  value: 'move-out',
  label: 'Move-Out Cleaning'
}, {
  value: 'move-in',
  label: 'Move-In Cleaning'
}, {
  value: 'post-construction',
  label: 'Post-Construction Clean-Up'
}, {
  value: 'specialty',
  label: 'Specialty / Other'
}];
const CONTACT_METHOD_OPTIONS = [{
  value: '',
  label: 'Choose one'
}, {
  value: 'phone',
  label: 'Phone'
}, {
  value: 'email',
  label: 'Email'
}];

/* ─── Helpers ─── */

const injectScript = (src, id) => {
  if (document.getElementById(id)) return;
  const s = document.createElement('script');
  s.id = id;
  s.src = src;
  s.async = true;
  s.defer = true;
  document.head.appendChild(s);
};
const waitFor = (condition, interval = 100, timeout = 10000) => new Promise((resolve, reject) => {
  const start = Date.now();
  const id = setInterval(() => {
    if (condition()) {
      clearInterval(id);
      resolve();
    } else if (Date.now() - start > timeout) {
      clearInterval(id);
      reject();
    }
  }, interval);
});

/* ─── Component ─── */

const CtaHome = () => {
  const [formData, setFormData] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(INITIAL_FORM);
  const [isSubmitting, setIsSubmitting] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [submitMessage, setSubmitMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)('');
  const [submitSuccess, setSubmitSuccess] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [showOptionalFields, setShowOptional] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [captchaToken, setCaptchaToken] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)('');
  const [captchaError, setCaptchaError] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const recaptchaRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null); // div container
  const widgetIdRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null); // grecaptcha widget id
  const emailjsReadyRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(false);
  const showMoveOutNotice = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => formData.service === 'move-out', [formData.service]);

  /* ── Load EmailJS ── */
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    injectScript('https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js', 'emailjs-sdk');
    waitFor(() => !!window.emailjs).then(() => {
      if (!emailjsReadyRef.current) {
        window.emailjs.init({
          publicKey: EMAILJS_PUBLIC_KEY
        });
        emailjsReadyRef.current = true;
      }
    }).catch(() => console.error('EmailJS did not load in time'));
  }, []);

  /* ── Load reCAPTCHA with retry ── */
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    // Inject script without onload callback — we poll instead
    injectScript('https://www.google.com/recaptcha/api.js?render=explicit', 'recaptcha-sdk');

    // Wait until BOTH grecaptcha.render exists AND our container div is in the DOM
    waitFor(() => window.grecaptcha && typeof window.grecaptcha.render === 'function' && recaptchaRef.current instanceof HTMLElement).then(() => {
      if (widgetIdRef.current !== null) return; // already rendered
      widgetIdRef.current = window.grecaptcha.render(recaptchaRef.current, {
        sitekey: RECAPTCHA_SITE_KEY,
        callback: token => {
          setCaptchaToken(token);
          setCaptchaError(false);
        },
        'expired-callback': () => setCaptchaToken(''),
        'error-callback': () => setCaptchaToken('')
      });
    }).catch(() => console.error('reCAPTCHA did not initialise in time'));
  }, []);

  /* ── Handlers ── */
  const handleChange = e => {
    const {
      name,
      value,
      type,
      checked
    } = e.target;
    setFormData(prev => ({
      ...prev,
      [name]: type === 'checkbox' ? checked : value
    }));
  };
  const validateForm = () => {
    const required = ['full_name', 'phone', 'email', 'service', 'bedrooms', 'bathrooms'];
    for (const field of required) {
      if (!String(formData[field] || '').trim()) {
        alert(`Please fill in ${field.replace('_', ' ')}`);
        return false;
      }
    }
    if (!formData.agree_terms) {
      alert('Please agree to the Privacy Policy and Terms & Conditions');
      return false;
    }
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.email)) {
      alert('Please enter a valid email address');
      return false;
    }
    return true;
  };
  const handleSubmit = async e => {
    e.preventDefault();
    if (!validateForm()) return;
    if (!captchaToken) {
      setCaptchaError(true);
      return;
    }
    setIsSubmitting(true);
    setSubmitMessage('');
    try {
      if (!window.emailjs) throw new Error('EmailJS not loaded');
      const templateParams = {
        full_name: formData.full_name,
        phone: formData.phone,
        email: formData.email,
        service: SERVICE_OPTIONS.find(o => o.value === formData.service)?.label || formData.service,
        bedrooms: formData.bedrooms,
        bathrooms: formData.bathrooms,
        last_cleaning: formData.last_cleaning || 'Not provided',
        allergies: formData.allergies || 'None',
        notes: formData.notes || 'None',
        contact_method: formData.contact_method || 'No preference',
        'g-recaptcha-response': captchaToken
      };
      await window.emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, templateParams);
      setSubmitSuccess(true);
      setSubmitMessage("Thank you! We'll contact you shortly.");
      setFormData(INITIAL_FORM);
      setShowOptional(false);
      setCaptchaToken('');

      // Reset reCAPTCHA widget
      if (widgetIdRef.current !== null && window.grecaptcha) {
        window.grecaptcha.reset(widgetIdRef.current);
      }
    } catch (error) {
      setSubmitSuccess(false);
      setSubmitMessage('Error sending your message. Please try again or call us directly.');
      console.error('EmailJS error:', error);
    } finally {
      setIsSubmitting(false);
    }
  };

  /* ── Render ── */
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bs-form-shell overflow-hidden border border-white/10 bg-white text-[var(--bs-text)] shadow-[var(--bs-shadow-hero-form)]",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "relative border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-5 py-5 md:px-6",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "absolute inset-y-0 left-0 w-1 bg-[var(--bs-accent)]"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]",
        children: "Request a Quote"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h2", {
        className: "mt-2 text-[1.45rem] font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)] md:text-2xl",
        children: "Get a Free, Personalized Cleaning Quote"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "mt-2 text-sm leading-6 text-[var(--bs-text-soft)]",
        children: "Tell us about your home and we'll follow up with a clear, honest estimate."
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
      onSubmit: handleSubmit,
      className: "grid gap-4 px-5 py-5 md:px-6 md:py-6",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "grid gap-4 md:grid-cols-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
            className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
            children: "Full Name *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            name: "full_name",
            value: formData.full_name,
            onChange: handleChange,
            required: true,
            className: "bs-input w-full",
            placeholder: "Your full name"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
            className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
            children: "Phone Number *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "tel",
            name: "phone",
            value: formData.phone,
            onChange: handleChange,
            required: true,
            className: "bs-input w-full",
            placeholder: "(858) 000-0000"
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
          className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
          children: "Email Address *"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "email",
          name: "email",
          value: formData.email,
          onChange: handleChange,
          required: true,
          className: "bs-input w-full",
          placeholder: "you@example.com"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "grid gap-4 md:grid-cols-[1.2fr_0.8fr_0.8fr]",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
            className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
            children: "Service Requested *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
            name: "service",
            value: formData.service,
            onChange: handleChange,
            required: true,
            className: "bs-input w-full",
            children: SERVICE_OPTIONS.map(o => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: o.value,
              children: o.label
            }, o.value || 'empty'))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
            className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
            children: "Bedrooms *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            name: "bedrooms",
            value: formData.bedrooms,
            onChange: handleChange,
            required: true,
            className: "bs-input w-full",
            placeholder: "3"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
            className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
            children: "Bathrooms *"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            name: "bathrooms",
            value: formData.bathrooms,
            onChange: handleChange,
            required: true,
            className: "bs-input w-full",
            placeholder: "2"
          })]
        })]
      }), showMoveOutNotice && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "overflow-hidden border border-[var(--bs-gold)]/35 bg-[linear-gradient(180deg,rgba(244,197,66,0.16)_0%,rgba(244,197,66,0.08)_100%)] px-4 py-3",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-start gap-3",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "mt-[2px] inline-flex h-6 w-6 shrink-0 items-center justify-center border border-[var(--bs-gold)]/45 bg-white/60 text-xs font-black text-[var(--bs-primary)]",
            children: "!"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              className: "text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
              children: "Move-Out Notice"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              className: "mt-1 text-sm leading-6 text-[var(--bs-text-soft)]",
              children: "For move-out cleanings, the property must be vacant and all drawers/cabinets must be empty before our team arrives."
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)]",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
          type: "button",
          onClick: () => setShowOptional(prev => !prev),
          className: "flex w-full items-center justify-between gap-4 px-4 py-3 text-left transition hover:bg-[var(--bs-surface-2)]",
          "aria-expanded": showOptionalFields,
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              className: "text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-accent)]",
              children: "Optional Details"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              className: "mt-1 text-sm leading-6 text-[var(--bs-text-soft)]",
              children: "Add timing, preferences, notes, and contact preference."
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "text-xl font-light text-[var(--bs-primary)]",
            children: showOptionalFields ? '−' : '+'
          })]
        }), showOptionalFields && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "grid gap-4 border-t border-[var(--bs-border)] px-4 py-4",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "grid gap-4 md:grid-cols-2",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
                className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
                children: "Date of Last Professional Cleaning"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                type: "text",
                name: "last_cleaning",
                value: formData.last_cleaning,
                onChange: handleChange,
                className: "bs-input w-full",
                placeholder: "Approximate date"
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
                className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
                children: "Preferred Contact Method"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
                name: "contact_method",
                value: formData.contact_method,
                onChange: handleChange,
                className: "bs-input w-full",
                children: CONTACT_METHOD_OPTIONS.map(o => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
                  value: o.value,
                  children: o.label
                }, o.value || 'empty'))
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
              className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
              children: "Allergies or Chemical Preferences"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
              type: "text",
              name: "allergies",
              value: formData.allergies,
              onChange: handleChange,
              className: "bs-input w-full",
              placeholder: "No bleach, fragrance-free, eco-friendly, client will provide"
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("label", {
              className: "mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]",
              children: "Special Requests or Additional Notes"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
              rows: "3",
              name: "notes",
              value: formData.notes,
              onChange: handleChange,
              className: "bs-input w-full resize-none",
              placeholder: "Tell us anything helpful about your home or cleaning needs"
            })]
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
        className: "flex items-start gap-3 border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-3 text-sm leading-6 text-[var(--bs-text-soft)]",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "checkbox",
          name: "agree_terms",
          checked: formData.agree_terms,
          onChange: handleChange,
          required: true,
          className: "mt-1 h-4 w-4 rounded-none border-[var(--bs-border)] text-[var(--bs-accent)]"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
          children: ["I agree to the", ' ', /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/privacy-policy/",
            className: "font-bold text-[var(--bs-primary)] underline",
            children: "Privacy Policy"
          }), ' ', "and", ' ', /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/terms-and-conditions/",
            className: "font-bold text-[var(--bs-primary)] underline",
            children: "Terms & Conditions"
          }), ". *"]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          ref: recaptchaRef
        }), captchaError && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: "mt-2 text-xs text-red-600 font-semibold",
          children: "Please complete the CAPTCHA verification before submitting."
        })]
      }), submitMessage && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: `px-4 py-3 text-sm font-medium ${submitSuccess ? 'bg-green-50 text-green-800 border border-green-200' : 'bg-red-50 text-red-800 border border-red-200'}`,
        children: submitMessage
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "grid gap-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          type: "submit",
          disabled: isSubmitting,
          className: "bs-btn bs-btn-primary inline-flex min-h-[56px] items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white disabled:cursor-not-allowed disabled:opacity-50",
          children: isSubmitting ? 'Sending…' : 'Request My Free Quote'
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
          className: "text-center text-xs leading-6 text-[var(--bs-text-soft)]",
          children: ["Prefer to call?", ' ', /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "tel:+18582551498",
            className: "font-bold text-[var(--bs-primary)] underline",
            children: "(858) 255-1498"
          })]
        })]
      })]
    })]
  });
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (CtaHome);

/***/ },

/***/ "./src/scripts/footer.js"
/*!*******************************!*\
  !*** ./src/scripts/footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initFooter)
/* harmony export */ });
// src/scripts/footer.js

function initFooter() {
  const footer = document.querySelector(".js-bs-footer");
  if (!footer) return;
  const revealItems = footer.querySelectorAll(".js-bs-footer-reveal");
  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const revealImmediately = () => {
    revealItems.forEach(item => {
      item.classList.add("is-visible");
    });
  };
  if (prefersReducedMotion) {
    revealImmediately();
    return;
  }
  if (!revealItems.length) return;
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const delay = Number(entry.target.dataset.footerDelay || 0);
        window.setTimeout(() => {
          entry.target.classList.add("is-visible");
        }, delay);
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.12,
    rootMargin: "0px 0px -20px 0px"
  });
  revealItems.forEach((item, index) => {
    item.dataset.footerDelay = String(index * 90);
    observer.observe(item);
  });
}

/***/ },

/***/ "./src/scripts/navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initNavbar)
/* harmony export */ });
// src/scripts/navbar.js

function initNavbar() {
  const body = document.body;
  const header = document.querySelector(".js-bs-header");
  const navToggle = document.querySelector(".js-bs-nav-toggle");
  const mobilePanel = document.querySelector(".js-bs-mobile-panel");
  const navWrap = document.querySelector(".js-bs-nav-wrap");
  const desktopDropdowns = document.querySelectorAll(".js-bs-dropdown");
  const desktopDropdownToggles = document.querySelectorAll(".js-bs-dropdown-toggle");
  const mobileGroups = document.querySelectorAll(".js-bs-mobile-group");
  const mobileGroupToggles = document.querySelectorAll(".js-bs-mobile-group-toggle");
  if (!header) return;
  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach(item => {
      item.classList.remove("is-open");
      const toggle = item.querySelector(".js-bs-dropdown-toggle");
      if (toggle) toggle.setAttribute("aria-expanded", "false");
    });
  };
  const closeMobileGroups = () => {
    mobileGroups.forEach(group => {
      group.classList.remove("is-open");
      const toggle = group.querySelector(".js-bs-mobile-group-toggle");
      if (toggle) toggle.setAttribute("aria-expanded", "false");
    });
  };
  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.setAttribute("hidden", "");
    navToggle.setAttribute("aria-expanded", "false");
    body.classList.remove("bs-mobile-open");
    closeMobileGroups();
  };
  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    mobilePanel.removeAttribute("hidden");
    navToggle.setAttribute("aria-expanded", "true");
    body.classList.add("bs-mobile-open");
  };
  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return;
    const isExpanded = navToggle.getAttribute("aria-expanded") === "true";
    if (isExpanded) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  };
  const handleHeaderState = () => {
    const isScrolled = window.scrollY > 12;
    header.classList.toggle("is-scrolled", isScrolled);
    if (navWrap) {
      navWrap.classList.toggle("is-scrolled", isScrolled);
    }
  };
  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu);
  }
  desktopDropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", event => {
      event.preventDefault();
      const parent = toggle.closest(".js-bs-dropdown");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeDesktopDropdowns();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  mobileGroupToggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-bs-mobile-group");
      if (!parent) return;
      const isOpen = parent.classList.contains("is-open");
      closeMobileGroups();
      if (!isOpen) {
        parent.classList.add("is-open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
  document.addEventListener("click", event => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-bs-dropdown");
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns();
    }
    const clickedInsideMobilePanel = event.target.closest(".js-bs-mobile-panel");
    const clickedToggle = event.target.closest(".js-bs-nav-toggle");
    if (mobilePanel && navToggle && !mobilePanel.hasAttribute("hidden") && !clickedInsideMobilePanel && !clickedToggle) {
      closeMobileMenu();
    }
  });
  document.addEventListener("keydown", event => {
    if (event.key === "Escape") {
      closeDesktopDropdowns();
      closeMobileMenu();
    }
  });
  window.addEventListener("resize", () => {
    if (window.innerWidth > 980) {
      closeMobileMenu();
    }
  });
  handleHeaderState();
  window.addEventListener("scroll", handleHeaderState, {
    passive: true
  });
}

/***/ },

/***/ "./node_modules/react-dom/client.js"
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
(__unused_webpack_module, exports, __webpack_require__) {



var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) // removed by dead control flow
{} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_ctahome__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/ctahome */ "./src/scripts/ctahome.js");
/* harmony import */ var _scripts_navbar__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/navbar */ "./src/scripts/navbar.js");
/* harmony import */ var _scripts_footer__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/footer */ "./src/scripts/footer.js");
/* harmony import */ var _scripts_ChatbotComponent__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/ChatbotComponent */ "./src/scripts/ChatbotComponent.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__);









const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_0__["default"]("Brad");
void person1;
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_7__.createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}
const ctaMountIds = ["#bs-cta-home-root", "#bs-cta-home-root-bottom"];
ctaMountIds.forEach(selector => {
  const el = document.querySelector(selector);
  if (el) {
    const root = react_dom_client__WEBPACK_IMPORTED_MODULE_7__.createRoot(el);
    root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ctahome__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
  }
});
let chatbotContainer = document.getElementById("bs-chatbot");
if (!chatbotContainer) {
  chatbotContainer = document.createElement("div");
  chatbotContainer.id = "bs-chatbot";
  document.body.appendChild(chatbotContainer);
}
if (chatbotContainer) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_7__.createRoot(chatbotContainer);
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ChatbotComponent__WEBPACK_IMPORTED_MODULE_5__["default"], {}));
}
(0,_scripts_navbar__WEBPACK_IMPORTED_MODULE_3__["default"])();
(0,_scripts_footer__WEBPACK_IMPORTED_MODULE_4__["default"])();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map