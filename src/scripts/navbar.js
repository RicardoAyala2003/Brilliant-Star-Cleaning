// src/scripts/navbar.js

export default function initNavbar() {
  const body = document.body
  const header = document.querySelector(".js-bs-header")
  const navToggle = document.querySelector(".js-bs-nav-toggle")
  const mobilePanel = document.querySelector(".js-bs-mobile-panel")
  const navWrap = document.querySelector(".js-bs-nav-wrap")
  const desktopDropdowns = document.querySelectorAll(".js-bs-dropdown")
  const desktopDropdownToggles = document.querySelectorAll(".js-bs-dropdown-toggle")
  const mobileGroups = document.querySelectorAll(".js-bs-mobile-group")
  const mobileGroupToggles = document.querySelectorAll(".js-bs-mobile-group-toggle")

  if (!header) return

  const closeDesktopDropdowns = () => {
    desktopDropdowns.forEach((item) => {
      item.classList.remove("is-open")
      const toggle = item.querySelector(".js-bs-dropdown-toggle")
      if (toggle) toggle.setAttribute("aria-expanded", "false")
    })
  }

  const closeMobileGroups = () => {
    mobileGroups.forEach((group) => {
      group.classList.remove("is-open")
      const toggle = group.querySelector(".js-bs-mobile-group-toggle")
      if (toggle) toggle.setAttribute("aria-expanded", "false")
    })
  }

  const closeMobileMenu = () => {
    if (!mobilePanel || !navToggle) return
    mobilePanel.setAttribute("hidden", "")
    navToggle.setAttribute("aria-expanded", "false")
    body.classList.remove("bs-mobile-open")
    closeMobileGroups()
  }

  const openMobileMenu = () => {
    if (!mobilePanel || !navToggle) return
    mobilePanel.removeAttribute("hidden")
    navToggle.setAttribute("aria-expanded", "true")
    body.classList.add("bs-mobile-open")
  }

  const toggleMobileMenu = () => {
    if (!mobilePanel || !navToggle) return
    const isExpanded = navToggle.getAttribute("aria-expanded") === "true"
    if (isExpanded) {
      closeMobileMenu()
    } else {
      openMobileMenu()
    }
  }

  const handleHeaderState = () => {
    const isScrolled = window.scrollY > 12

    header.classList.toggle("is-scrolled", isScrolled)

    if (navWrap) {
      navWrap.classList.toggle("is-scrolled", isScrolled)
    }
  }

  if (navToggle && mobilePanel) {
    navToggle.addEventListener("click", toggleMobileMenu)
  }

  desktopDropdownToggles.forEach((toggle) => {
    toggle.addEventListener("click", (event) => {
      event.preventDefault()

      const parent = toggle.closest(".js-bs-dropdown")
      if (!parent) return

      const isOpen = parent.classList.contains("is-open")
      closeDesktopDropdowns()

      if (!isOpen) {
        parent.classList.add("is-open")
        toggle.setAttribute("aria-expanded", "true")
      }
    })
  })

  mobileGroupToggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      const parent = toggle.closest(".js-bs-mobile-group")
      if (!parent) return

      const isOpen = parent.classList.contains("is-open")
      closeMobileGroups()

      if (!isOpen) {
        parent.classList.add("is-open")
        toggle.setAttribute("aria-expanded", "true")
      }
    })
  })

  document.addEventListener("click", (event) => {
    const clickedInsideDesktopDropdown = event.target.closest(".js-bs-dropdown")
    if (!clickedInsideDesktopDropdown) {
      closeDesktopDropdowns()
    }

    const clickedInsideMobilePanel = event.target.closest(".js-bs-mobile-panel")
    const clickedToggle = event.target.closest(".js-bs-nav-toggle")

    if (
      mobilePanel &&
      navToggle &&
      !mobilePanel.hasAttribute("hidden") &&
      !clickedInsideMobilePanel &&
      !clickedToggle
    ) {
      closeMobileMenu()
    }
  })

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeDesktopDropdowns()
      closeMobileMenu()
    }
  })

  window.addEventListener("resize", () => {
    if (window.innerWidth > 980) {
      closeMobileMenu()
    }
  })

  handleHeaderState()
  window.addEventListener("scroll", handleHeaderState, { passive: true })
}