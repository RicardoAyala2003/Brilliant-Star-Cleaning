import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import CtaHome from "./scripts/ctahome"
import initNavbar from "./scripts/navbar"
import initFooter from "./scripts/footer"
import BrilliantStarChatbot from "./scripts/ChatbotComponent"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")
void person1

if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

if (document.querySelector("#bs-cta-home-root")) {
  const root = ReactDOM.createRoot(document.querySelector("#bs-cta-home-root"))
  root.render(<CtaHome />)
}

let chatbotContainer = document.getElementById("bs-chatbot")

if (!chatbotContainer) {
  chatbotContainer = document.createElement("div")
  chatbotContainer.id = "bs-chatbot"
  document.body.appendChild(chatbotContainer)
}

if (chatbotContainer) {
  const root = ReactDOM.createRoot(chatbotContainer)
  root.render(<BrilliantStarChatbot />)
}

initNavbar()
initFooter()