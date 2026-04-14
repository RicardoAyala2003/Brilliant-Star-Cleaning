/**
 * ctahome.js - Componente React para el formulario de cotización
 *
 * Mejorado para:
 * - verse más compacto en hero y final CTA
 * - mantener todos los campos exigidos por el brief
 * - mostrar Move-Out notice de forma más clara
 * - colapsar campos opcionales para reducir altura visual
 */

import React, { useMemo, useState } from 'react';

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

const SERVICE_OPTIONS = [
    { value: '', label: 'Select a service' },
    { value: 'regular', label: 'Regular Cleaning' },
    { value: 'deep', label: 'Deep Cleaning' },
    { value: 'move-out', label: 'Move-Out Cleaning' },
    { value: 'move-in', label: 'Move-In Cleaning' },
    { value: 'post-construction', label: 'Post-Construction Clean-Up' },
    { value: 'specialty', label: 'Specialty / Other' }
];

const CONTACT_METHOD_OPTIONS = [
    { value: '', label: 'Choose one' },
    { value: 'phone', label: 'Phone' },
    { value: 'email', label: 'Email' }
];

const CtaHome = () => {
    const [formData, setFormData] = useState(INITIAL_FORM);
    const [isSubmitting, setIsSubmitting] = useState(false);
    const [submitMessage, setSubmitMessage] = useState('');
    const [showOptionalFields, setShowOptionalFields] = useState(false);

    const showMoveOutNotice = useMemo(
        () => formData.service === 'move-out',
        [formData.service]
    );

    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;

        setFormData((prev) => ({
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

    const handleSubmit = async (e) => {
        e.preventDefault();

        if (!validateForm()) return;

        setIsSubmitting(true);
        setSubmitMessage('');

        try {
            const response = await fetch('/wp-json/brilliantstar/v1/submit-quote', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            if (response.ok) {
                setSubmitMessage("Thank you! We'll contact you shortly.");
                setFormData(INITIAL_FORM);
                setShowOptionalFields(false);
            } else {
                setSubmitMessage('Error: ' + (result.message || 'Please try again'));
            }
        } catch (error) {
            setSubmitMessage('Error submitting form. Please try again.');
        } finally {
            setIsSubmitting(false);
        }
    };

    return (
        <div className="bs-form-shell overflow-hidden border border-white/10 bg-white text-[var(--bs-text)] shadow-[var(--bs-shadow-hero-form)]">
            <div className="relative border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-5 py-5 md:px-6">
                <div className="absolute inset-y-0 left-0 w-1 bg-[var(--bs-accent)]"></div>

                <p className="text-[11px] font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">
                    Request a Quote
                </p>

                <h2 className="mt-2 text-[1.45rem] font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)] md:text-2xl">
                    Get a Free, Personalized Cleaning Quote
                </h2>

                <p className="mt-2 text-sm leading-6 text-[var(--bs-text-soft)]">
                    Tell us about your home and we&apos;ll follow up with a clear, honest estimate.
                </p>
            </div>

            <form onSubmit={handleSubmit} className="grid gap-4 px-5 py-5 md:px-6 md:py-6">
                <div className="grid gap-4 md:grid-cols-2">
                    <div>
                        <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                            Full Name *
                        </label>
                        <input
                            type="text"
                            name="full_name"
                            value={formData.full_name}
                            onChange={handleChange}
                            required
                            className="bs-input w-full"
                            placeholder="Your full name"
                        />
                    </div>

                    <div>
                        <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                            Phone Number *
                        </label>
                        <input
                            type="tel"
                            name="phone"
                            value={formData.phone}
                            onChange={handleChange}
                            required
                            className="bs-input w-full"
                            placeholder="(858) 000-0000"
                        />
                    </div>
                </div>

                <div>
                    <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                        Email Address *
                    </label>
                    <input
                        type="email"
                        name="email"
                        value={formData.email}
                        onChange={handleChange}
                        required
                        className="bs-input w-full"
                        placeholder="you@example.com"
                    />
                </div>

                <div className="grid gap-4 md:grid-cols-[1.2fr_0.8fr_0.8fr]">
                    <div>
                        <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                            Service Requested *
                        </label>
                        <select
                            name="service"
                            value={formData.service}
                            onChange={handleChange}
                            required
                            className="bs-input w-full"
                        >
                            {SERVICE_OPTIONS.map((option) => (
                                <option key={option.value || 'empty'} value={option.value}>
                                    {option.label}
                                </option>
                            ))}
                        </select>
                    </div>

                    <div>
                        <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                            Bedrooms *
                        </label>
                        <input
                            type="text"
                            name="bedrooms"
                            value={formData.bedrooms}
                            onChange={handleChange}
                            required
                            className="bs-input w-full"
                            placeholder="3"
                        />
                    </div>

                    <div>
                        <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                            Bathrooms *
                        </label>
                        <input
                            type="text"
                            name="bathrooms"
                            value={formData.bathrooms}
                            onChange={handleChange}
                            required
                            className="bs-input w-full"
                            placeholder="2"
                        />
                    </div>
                </div>

                {showMoveOutNotice && (
                    <div className="overflow-hidden border border-[var(--bs-gold)]/35 bg-[linear-gradient(180deg,rgba(244,197,66,0.16)_0%,rgba(244,197,66,0.08)_100%)] px-4 py-3">
                        <div className="flex items-start gap-3">
                            <span className="mt-[2px] inline-flex h-6 w-6 shrink-0 items-center justify-center border border-[var(--bs-gold)]/45 bg-white/60 text-xs font-black text-[var(--bs-primary)]">
                                !
                            </span>
                            <div>
                                <p className="text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                                    Move-Out Notice
                                </p>
                                <p className="mt-1 text-sm leading-6 text-[var(--bs-text-soft)]">
                                    For move-out cleanings, the property must be vacant and all drawers/cabinets must be empty before our team arrives.
                                </p>
                            </div>
                        </div>
                    </div>
                )}

                <div className="overflow-hidden border border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f8fbfd_100%)]">
                    <button
                        type="button"
                        onClick={() => setShowOptionalFields((prev) => !prev)}
                        className="flex w-full items-center justify-between gap-4 px-4 py-3 text-left transition hover:bg-[var(--bs-surface-2)]"
                        aria-expanded={showOptionalFields}
                    >
                        <div>
                            <p className="text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-accent)]">
                                Optional Details
                            </p>
                            <p className="mt-1 text-sm leading-6 text-[var(--bs-text-soft)]">
                                Add timing, preferences, notes, and contact preference.
                            </p>
                        </div>
                        <span className="text-xl font-light text-[var(--bs-primary)]">
                            {showOptionalFields ? '−' : '+'}
                        </span>
                    </button>

                    {showOptionalFields && (
                        <div className="grid gap-4 border-t border-[var(--bs-border)] px-4 py-4">
                            <div className="grid gap-4 md:grid-cols-2">
                                <div>
                                    <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                                        Date of Last Professional Cleaning
                                    </label>
                                    <input
                                        type="text"
                                        name="last_cleaning"
                                        value={formData.last_cleaning}
                                        onChange={handleChange}
                                        className="bs-input w-full"
                                        placeholder="Approximate date"
                                    />
                                </div>

                                <div>
                                    <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                                        Preferred Contact Method
                                    </label>
                                    <select
                                        name="contact_method"
                                        value={formData.contact_method}
                                        onChange={handleChange}
                                        className="bs-input w-full"
                                    >
                                        {CONTACT_METHOD_OPTIONS.map((option) => (
                                            <option key={option.value || 'empty'} value={option.value}>
                                                {option.label}
                                            </option>
                                        ))}
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                                    Allergies or Chemical Preferences
                                </label>
                                <input
                                    type="text"
                                    name="allergies"
                                    value={formData.allergies}
                                    onChange={handleChange}
                                    className="bs-input w-full"
                                    placeholder="No bleach, fragrance-free, eco-friendly, client will provide"
                                />
                            </div>

                            <div>
                                <label className="mb-2 block text-[11px] font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">
                                    Special Requests or Additional Notes
                                </label>
                                <textarea
                                    rows="3"
                                    name="notes"
                                    value={formData.notes}
                                    onChange={handleChange}
                                    className="bs-input w-full resize-none"
                                    placeholder="Tell us anything helpful about your home or cleaning needs"
                                />
                            </div>
                        </div>
                    )}
                </div>

                <label className="flex items-start gap-3 border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-3 text-sm leading-6 text-[var(--bs-text-soft)]">
                    <input
                        type="checkbox"
                        name="agree_terms"
                        checked={formData.agree_terms}
                        onChange={handleChange}
                        required
                        className="mt-1 h-4 w-4 rounded-none border-[var(--bs-border)] text-[var(--bs-accent)]"
                    />
                    <span>
                        I agree to the{' '}
                        <a href="/privacy-policy/" className="font-bold text-[var(--bs-primary)] underline">
                            Privacy Policy
                        </a>{' '}
                        and{' '}
                        <a href="/terms-and-conditions/" className="font-bold text-[var(--bs-primary)] underline">
                            Terms &amp; Conditions
                        </a>
                        . *
                    </span>
                </label>

                {submitMessage && (
                    <div
                        className={`px-4 py-3 text-sm ${
                            submitMessage.includes('Thank you')
                                ? 'bg-green-100 text-green-800'
                                : 'bg-red-100 text-red-800'
                        }`}
                    >
                        {submitMessage}
                    </div>
                )}

                <div className="grid gap-3">
                    <button
                        type="submit"
                        disabled={isSubmitting}
                        className="bs-btn bs-btn-primary inline-flex min-h-[56px] items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white disabled:cursor-not-allowed disabled:opacity-50"
                    >
                        {isSubmitting ? 'Sending...' : 'Request My Free Quote'}
                    </button>

                    <p className="text-center text-xs leading-6 text-[var(--bs-text-soft)]">
                        Prefer to call?{' '}
                        <a href="tel:+18582551498" className="font-bold text-[var(--bs-primary)] underline">
                            (858) 255-1498
                        </a>
                    </p>
                </div>
            </form>
        </div>
    );
};

export default CtaHome;