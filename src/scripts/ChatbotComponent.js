import React, { useEffect, useMemo, useRef, useState } from "react"

const PHONE_DISPLAY = "(858) 255-1498"
const PHONE_LINK = "tel:+18582551498"
const EMAIL_DISPLAY = "brilliantstarcleaning@gmail.com"
const EMAIL_LINK = "mailto:brilliantstarcleaning@gmail.com"

const QUOTE_LINK = "/contact-us/"
const ABOUT_LINK = "/about-us/"
const SERVICES_LINK = "/services/"
const LOCATIONS_LINK = "/locations/san-diego/"
const REGULAR_LINK = "/services/residential-cleaning/"
const DEEP_LINK = "/services/deep-cleaning/"
const MOVE_OUT_LINK = "/services/move-out-cleaning/"
const MOVE_IN_LINK = "/services/move-in-cleaning/"
const POST_CONSTRUCTION_LINK = "/services/post-construction-cleaning/"
const SPECIALTY_LINK = "/services/specialty-services/"
const YELP_LINK = "https://www.yelp.com/biz/brilliant-star-cleaning-san-diego"

function BotIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M12 3C8.134 3 5 6.134 5 10v2.2c0 .53-.21 1.04-.586 1.414L3 15h18l-1.414-1.386A2 2 0 0 1 19 12.2V10c0-3.866-3.134-7-7-7Z"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M9 18c.4 1.2 1.5 2 3 2s2.6-.8 3-2"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<circle cx="9.25" cy="10.25" r="1" fill="currentColor" />
			<circle cx="14.75" cy="10.25" r="1" fill="currentColor" />
		</svg>
	)
}

function CloseIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path d="M6 6L18 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
			<path d="M18 6L6 18" stroke="currentColor" strokeWidth="1.9" strokeLinecap="round" />
		</svg>
	)
}

function SendIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M21 3L10 14"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M21 3L14 21L10 14L3 10L21 3Z"
				stroke="currentColor"
				strokeWidth="1.8"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function PhoneIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M21 16.2V19a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5 3h2.8a2 2 0 0 1 2 1.72l.38 2.66a2 2 0 0 1-.58 1.72l-1.2 1.2a16 16 0 0 0 5.4 5.4l1.2-1.2a2 2 0 0 1 1.72-.58l2.66.38A2 2 0 0 1 21 16.2Z"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function ExternalLinkIcon({ className = "" }) {
	return (
		<svg className={className} viewBox="0 0 24 24" fill="none" aria-hidden="true">
			<path
				d="M14 5H19V10"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M10 14L19 5"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
			<path
				d="M19 14V18a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1H10"
				stroke="currentColor"
				strokeWidth="1.7"
				strokeLinecap="round"
				strokeLinejoin="round"
			/>
		</svg>
	)
}

function createBotMessage(text, links = []) {
	return {
		id: Date.now() + Math.random(),
		text,
		sender: "bot",
		timestamp: new Date(),
		links
	}
}

function getBotResponse(rawInput) {
	const input = rawInput.toLowerCase().trim()

	if (
		input.includes("regular") ||
		input.includes("residential") ||
		input.includes("weekly") ||
		input.includes("biweekly") ||
		input.includes("recurring")
	) {
		return createBotMessage(
			"Regular residential cleaning is designed for busy households that want a consistently clean home without the effort. It covers dusting, vacuuming, mopping, kitchen surfaces, bathrooms, trash, and basic surface organization.",
			[
				{ label: "Residential Cleaning", href: REGULAR_LINK },
				{ label: "Get a Free Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("deep") ||
		input.includes("deep cleaning") ||
		input.includes("seasonal") ||
		input.includes("refresh")
	) {
		return createBotMessage(
			"Deep cleaning goes beyond regular cleaning and is a great fit for a fresh start, a seasonal reset, or new clients. It can include the inside of the refrigerator, inside of the oven, window seals and sills, ceiling fans within safe reach, and small patios or balconies.",
			[
				{ label: "Deep Cleaning", href: DEEP_LINK },
				{ label: "Request a Deep Cleaning Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("move out") ||
		input.includes("move-out") ||
		input.includes("deposit") ||
		input.includes("vacant") ||
		input.includes("empty drawers") ||
		input.includes("cabinets empty")
	) {
		return createBotMessage(
			"Move-out cleaning is designed to leave the home spotless and move-out ready. It can include appliances, cabinets, baseboards, hard water treatment, mold-related cleaning, and detailed wipe-downs throughout. Important: the property must be vacant and all drawers and cabinets must be empty before the team arrives.",
			[
				{ label: "Move-Out Cleaning", href: MOVE_OUT_LINK },
				{ label: "Get a Move-Out Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("move in") ||
		input.includes("move-in") ||
		input.includes("new home") ||
		input.includes("before unpacking")
	) {
		return createBotMessage(
			"Move-in cleaning is meant to detail and disinfect the home before you settle in. The focus is on kitchens, bathrooms, floors, and high-contact surfaces so your space feels fresh before the boxes arrive.",
			[
				{ label: "Move-In Cleaning", href: MOVE_IN_LINK },
				{ label: "Request a Move-In Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("post construction") ||
		input.includes("post-construction") ||
		input.includes("renovation") ||
		input.includes("remodel") ||
		input.includes("construction dust")
	) {
		return createBotMessage(
			"Post-construction cleaning is built for homes coming out of small to mid-size renovation projects. Brilliant Star handles dust, debris, residue, paint splatter, and the cleanup needed to make the space feel livable again.",
			[
				{ label: "Post-Construction Cleaning", href: POST_CONSTRUCTION_LINK },
				{ label: "Get a Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("specialty") ||
		input.includes("special service") ||
		input.includes("custom cleaning") ||
		input.includes("unique situation")
	) {
		return createBotMessage(
			"Specialty services are for cleaning needs that do not fit a standard package. You can share the situation and Brilliant Star can let you know what is possible and prepare a quote that makes sense for your home.",
			[
				{ label: "Specialty Services", href: SPECIALTY_LINK },
				{ label: "Contact Us", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("quote") ||
		input.includes("estimate") ||
		input.includes("price") ||
		input.includes("pricing") ||
		input.includes("cost")
	) {
		return createBotMessage(
			"Every quote is personalized. The team asks about your service type, number of bedrooms and bathrooms, when the home was last professionally cleaned, and any allergies, chemical preferences, or special requests. Pricing is transparent and based on your home’s real needs.",
			[
				{ label: "Get Your Free Quote", href: QUOTE_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		)
	}

	if (
		input.includes("allerg") ||
		input.includes("baby") ||
		input.includes("newborn") ||
		input.includes("bleach") ||
		input.includes("fragrance") ||
		input.includes("eco") ||
		input.includes("chemical")
	) {
		return createBotMessage(
			"Yes — if you have allergies, a newborn, or specific product preferences, you can tell the team when booking. Brilliant Star adapts to the household and can work around requests like fragrance-free or no-bleach preferences.",
			[
				{ label: "Get a Personalized Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("supplies") ||
		input.includes("equipment") ||
		input.includes("products") ||
		input.includes("vacuum")
	) {
		return createBotMessage(
			"Brilliant Star arrives with commercial-grade vacuums and professional cleaning products suited for surfaces like hardwood floors, tile, ceramic, stone countertops, and stainless steel appliances.",
			[
				{ label: "About Us", href: ABOUT_LINK },
				{ label: "Request a Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("licensed") ||
		input.includes("insured") ||
		input.includes("insurance") ||
		input.includes("license")
	) {
		return createBotMessage(
			"Yes — Brilliant Star Cleaning Services presents itself as licensed and insured, and that is also part of the trust messaging throughout the site.",
			[
				{ label: "About Us", href: ABOUT_LINK },
				{ label: "Get a Free Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("yelp") ||
		input.includes("reviews") ||
		input.includes("rating") ||
		input.includes("stars")
	) {
		return createBotMessage(
			"Brilliant Star highlights a 4.5-star Yelp rating with 54 reviews. The site also features review copy about thorough cleanings, spotless results, and exceeded expectations.",
			[
				{ label: "Read Yelp Reviews", href: YELP_LINK },
				{ label: "Get a Free Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("area") ||
		input.includes("areas") ||
		input.includes("service area") ||
		input.includes("location") ||
		input.includes("locations") ||
		input.includes("san diego") ||
		input.includes("hillcrest") ||
		input.includes("north park") ||
		input.includes("mission hills") ||
		input.includes("del mar") ||
		input.includes("mira mesa") ||
		input.includes("mission valley") ||
		input.includes("kearny mesa") ||
		input.includes("mission beach") ||
		input.includes("ocean beach") ||
		input.includes("university heights") ||
		input.includes("south park") ||
		input.includes("otay mesa")
	) {
		return createBotMessage(
			"Brilliant Star serves San Diego and surrounding neighborhoods, including Hillcrest, North Park, Mission Hills, Del Mar, Mira Mesa, Mission Valley, Kearny Mesa, Mission Beach, Ocean Beach, University Heights, South Park, and Otay Mesa.",
			[
				{ label: "View Service Areas", href: LOCATIONS_LINK },
				{ label: "Get a Free Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("hours") ||
		input.includes("open") ||
		input.includes("available") ||
		input.includes("friday")
	) {
		return createBotMessage(
			"Brilliant Star is available Monday through Friday from 7:30 AM to 4:30 PM, with Fridays listed until 4:00 PM on the contact page copy.",
			[
				{ label: "Call Now", href: PHONE_LINK },
				{ label: "Contact Us", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("contact") ||
		input.includes("phone") ||
		input.includes("email") ||
		input.includes("call")
	) {
		return createBotMessage(
			"You can reach Brilliant Star by phone at (858) 255-1498 or by email at brilliantstarcleaning@gmail.com. The contact page is also set up as the main quote request path.",
			[
				{ label: PHONE_DISPLAY, href: PHONE_LINK },
				{ label: EMAIL_DISPLAY, href: EMAIL_LINK },
				{ label: "Contact Us", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("about") ||
		input.includes("team") ||
		input.includes("experience") ||
		input.includes("15 years")
	) {
		return createBotMessage(
			"Brilliant Star positions itself as a trusted local San Diego cleaning team with over 15 years of experience, focused on care, expertise, and attention to detail.",
			[
				{ label: "About Us", href: ABOUT_LINK },
				{ label: "Get a Free Quote", href: QUOTE_LINK }
			]
		)
	}

	if (
		input.includes("services") ||
		input.includes("what do you do") ||
		input.includes("what do they do") ||
		input.includes("help")
	) {
		return createBotMessage(
			"Brilliant Star offers regular residential cleaning, deep cleaning, move-out cleaning, move-in cleaning, post-construction clean-up, and specialty services. I can also help with quotes, service areas, contact info, Yelp reviews, and scheduling basics.",
			[
				{ label: "View Services", href: SERVICES_LINK },
				{ label: "Get a Free Quote", href: QUOTE_LINK }
			]
		)
	}

	return createBotMessage(
		"Hi — I can help with regular cleaning, deep cleaning, move-out cleaning, move-in cleaning, post-construction clean-up, specialty services, pricing questions, service areas, Yelp reviews, and requesting a free quote.",
		[
			{ label: "Get a Free Quote", href: QUOTE_LINK },
			{ label: "Call Now", href: PHONE_LINK }
		]
	)
}

function BrilliantStarChatbot() {
	const [isOpen, setIsOpen] = useState(false)
	const [inputMessage, setInputMessage] = useState("")
	const [isTyping, setIsTyping] = useState(false)
	const [messages, setMessages] = useState([
		{
			id: 1,
			text: "Hi, I’m the Brilliant Star assistant. I can help with cleaning services, personalized quotes, service areas, Yelp reviews, and contact information.",
			sender: "bot",
			timestamp: new Date(),
			links: [
				{ label: "Get a Free Quote", href: QUOTE_LINK },
				{ label: "Call Now", href: PHONE_LINK }
			]
		}
	])

	const messagesEndRef = useRef(null)

	const quickActions = useMemo(
		() => [
			{ text: "Regular Cleaning", icon: "🧼" },
			{ text: "Deep Cleaning", icon: "✨" },
			{ text: "Move-Out Cleaning", icon: "📦" },
			{ text: "Move-In Cleaning", icon: "🏡" },
			{ text: "Post-Construction", icon: "🛠️" },
			{ text: "Free Quote", icon: "📋" }
		],
		[]
	)

	useEffect(() => {
		messagesEndRef.current?.scrollIntoView({ behavior: "smooth" })
	}, [messages, isTyping])

	function handleSendMessage(e) {
		e?.preventDefault?.()
		if (!inputMessage.trim()) return

		const currentMessage = inputMessage.trim()

		const userMessage = {
			id: Date.now(),
			text: currentMessage,
			sender: "user",
			timestamp: new Date()
		}

		setMessages(prev => [...prev, userMessage])
		setInputMessage("")
		setIsTyping(true)

		window.setTimeout(() => {
			const botResponse = getBotResponse(currentMessage)
			setMessages(prev => [...prev, botResponse])
			setIsTyping(false)
		}, 700)
	}

	function handleQuickAction(action) {
		setInputMessage(action)
	}

	return (
		<div className="fixed bottom-4 right-4 z-[9999] sm:bottom-5 sm:right-5">
			{isOpen && (
				<div className="mb-3 flex h-[31rem] w-[calc(100vw-1.25rem)] max-w-[22rem] flex-col overflow-hidden rounded-[24px] border border-[var(--bs-primary)]/10 bg-[var(--bs-surface)] shadow-[0_22px_50px_rgba(11,37,56,0.16)] sm:h-[33rem]">
					<div className="relative overflow-hidden border-b border-white/10 bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_52%,var(--bs-accent)_160%)] px-4 py-3 text-white">
						<div className="absolute inset-0 opacity-[0.08] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:18px_18px]"></div>

						<div className="relative flex items-start justify-between gap-3">
							<div className="flex items-center gap-3">
								<div className="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 bg-white/10 backdrop-blur-sm">
									<BotIcon className="h-5 w-5" />
								</div>

								<div>
									<p className="text-[11px] font-black uppercase tracking-[0.18em] text-white/70">
										San Diego Cleaning Help
									</p>
									<h3
										className="mt-1 text-[0.92rem] font-black tracking-[-0.02em]"
										style={{ fontFamily: '"Inter", "Segoe UI", Arial, sans-serif' }}
									>
										Brilliant Star Assistant
									</h3>
									<p className="mt-0.5 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">
										Online now
									</p>
								</div>
							</div>

							<button
								type="button"
								onClick={() => setIsOpen(false)}
								className="inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/15 bg-white/10 text-white transition hover:bg-white hover:text-[var(--bs-primary)]"
								aria-label="Close chat"
							>
								<CloseIcon className="h-4 w-4" />
							</button>
						</div>
					</div>

					<div className="flex-1 overflow-y-auto bg-[var(--bs-bg)] px-3 py-3">
						<div className="space-y-3">
							{messages.map(message => (
								<div
									key={message.id}
									className={`flex ${message.sender === "user" ? "justify-end" : "justify-start"}`}
								>
									<div
										className={`max-w-[88%] rounded-[18px] px-3.5 py-3 text-[0.9rem] leading-6 shadow-sm ${
											message.sender === "user"
												? "rounded-br-md bg-[var(--bs-primary)] text-white"
												: "rounded-bl-md border border-[var(--bs-primary)]/10 bg-white text-[var(--bs-primary)]"
										}`}
									>
										<p className="m-0">{message.text}</p>

										{message.links?.length > 0 && (
											<div className="mt-3 flex flex-wrap gap-2">
												{message.links.map(link => (
													<a
														key={`${message.id}-${link.href}-${link.label}`}
														href={link.href}
														target={link.href.startsWith("http") ? "_blank" : undefined}
														rel={link.href.startsWith("http") ? "noreferrer" : undefined}
														className="inline-flex items-center gap-1.5 rounded-full border border-[var(--bs-primary)]/10 bg-[var(--bs-surface-2)] px-2.5 py-1.5 text-[11px] font-black text-[var(--bs-primary-2)] transition hover:border-[var(--bs-accent)] hover:text-[var(--bs-accent)]"
													>
														<ExternalLinkIcon className="h-3.5 w-3.5" />
														<span>{link.label}</span>
													</a>
												))}
											</div>
										)}
									</div>
								</div>
							))}

							{isTyping && (
								<div className="flex justify-start">
									<div className="rounded-[18px] rounded-bl-md border border-[var(--bs-primary)]/10 bg-white px-4 py-3 shadow-sm">
										<div className="flex gap-1.5">
											<span className="h-2.5 w-2.5 animate-pulse rounded-full bg-[var(--bs-primary-2)]" />
											<span
												className="h-2.5 w-2.5 animate-pulse rounded-full bg-[var(--bs-accent)]"
												style={{ animationDelay: "0.2s" }}
											/>
											<span
												className="h-2.5 w-2.5 animate-pulse rounded-full bg-[var(--bs-gold)]"
												style={{ animationDelay: "0.4s" }}
											/>
										</div>
									</div>
								</div>
							)}

							<div ref={messagesEndRef} />
						</div>
					</div>

					{messages.length === 1 && (
						<div className="border-t border-[var(--bs-primary)]/10 bg-white px-3 py-3">
							<p className="mb-2 text-[0.68rem] font-black uppercase tracking-[0.12em] text-[var(--bs-primary-2)]">
								Quick help
							</p>

							<div className="flex flex-wrap gap-2">
								{quickActions.map(action => (
									<button
										key={action.text}
										type="button"
										onClick={() => handleQuickAction(action.text)}
										className="rounded-full border border-[var(--bs-primary)]/10 bg-[var(--bs-surface-2)] px-2.5 py-1.5 text-[11px] font-black text-[var(--bs-primary)] transition hover:border-[var(--bs-accent)] hover:bg-white hover:text-[var(--bs-accent)]"
									>
										<span className="mr-1">{action.icon}</span>
										{action.text}
									</button>
								))}
							</div>
						</div>
					)}

					<div className="border-t border-[var(--bs-primary)]/10 bg-white p-3">
						<form onSubmit={handleSendMessage} className="flex items-center gap-2">
							<input
								type="text"
								value={inputMessage}
								onChange={e => setInputMessage(e.target.value)}
								placeholder="Ask about cleaning services..."
								className="min-w-0 flex-1 rounded-full border border-[var(--bs-primary)]/12 bg-[var(--bs-surface-2)] px-4 py-2.5 text-sm text-[var(--bs-primary)] outline-none transition placeholder:text-[var(--bs-primary)]/45 focus:border-[var(--bs-accent)] focus:bg-white focus:ring-4 focus:ring-[rgba(79,180,231,0.16)]"
							/>

							<button
								type="submit"
								disabled={!inputMessage.trim()}
								className="inline-flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full bg-[var(--bs-accent)] text-white shadow-[0_14px_30px_rgba(79,180,231,0.28)] transition hover:scale-[1.03] hover:bg-[var(--bs-accent-hover)] disabled:cursor-not-allowed disabled:opacity-50"
								aria-label="Send message"
							>
								<SendIcon className="h-4 w-4" />
							</button>
						</form>

						<div className="mt-3 flex flex-wrap items-center gap-3 text-[11px] font-semibold text-[var(--bs-primary)]/65">
							<a
								href={PHONE_LINK}
								className="inline-flex items-center gap-1.5 transition hover:text-[var(--bs-accent)]"
							>
								<PhoneIcon className="h-3.5 w-3.5" />
								<span>{PHONE_DISPLAY}</span>
							</a>

							<a
								href={EMAIL_LINK}
								className="truncate transition hover:text-[var(--bs-accent)]"
							>
								{EMAIL_DISPLAY}
							</a>
						</div>
					</div>
				</div>
			)}

			<button
				type="button"
				onClick={() => setIsOpen(prev => !prev)}
				className={`group relative flex h-14 w-14 items-center justify-center rounded-full text-white shadow-[0_18px_40px_rgba(11,37,56,0.24)] transition-all duration-300 hover:scale-[1.04] ${
					isOpen
						? "bg-[var(--bs-primary)]"
						: "bg-[linear-gradient(135deg,var(--bs-primary)_0%,var(--bs-primary-2)_58%,var(--bs-accent)_150%)]"
				}`}
				aria-label={isOpen ? "Close chat" : "Open chat"}
			>
				{!isOpen && (
					<span className="absolute -right-0.5 -top-0.5 flex h-3.5 w-3.5">
						<span className="absolute inline-flex h-full w-full animate-ping rounded-full bg-[var(--bs-gold)] opacity-75" />
						<span className="relative inline-flex h-3.5 w-3.5 rounded-full bg-[var(--bs-gold)]" />
					</span>
				)}

				{isOpen ? (
					<CloseIcon className="h-5.5 w-5.5" />
				) : (
					<BotIcon className="h-6 w-6" />
				)}
			</button>
		</div>
	)
}

export default BrilliantStarChatbot