// src/scripts/footer.js

export default function initFooter() {
  const footer = document.querySelector(".js-bs-footer")

  if (!footer) return

  const revealItems = footer.querySelectorAll(".js-bs-footer-reveal")
  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches

  const revealImmediately = () => {
    revealItems.forEach((item) => {
      item.classList.add("is-visible")
    })
  }

  if (prefersReducedMotion) {
    revealImmediately()
    return
  }

  if (!revealItems.length) return

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const delay = Number(entry.target.dataset.footerDelay || 0)

          window.setTimeout(() => {
            entry.target.classList.add("is-visible")
          }, delay)

          observer.unobserve(entry.target)
        }
      })
    },
    {
      threshold: 0.12,
      rootMargin: "0px 0px -20px 0px",
    }
  )

  revealItems.forEach((item, index) => {
    item.dataset.footerDelay = String(index * 90)
    observer.observe(item)
  })
}