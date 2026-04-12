/**
 * ctahome.js - Componente React para el formulario de cotización
 * 
 * Maneja:
 * - Formulario con todos los campos
 * - Move-out notice dinámico
 * - Validación de campos requeridos
 * - Envío del formulario
 */

import React, { useState, useEffect } from 'react';

const CtaHome = () => {
    // Estado del formulario
    const [formData, setFormData] = useState({
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
    });

    const [showMoveOutNotice, setShowMoveOutNotice] = useState(false);
    const [isSubmitting, setIsSubmitting] = useState(false);
    const [submitMessage, setSubmitMessage] = useState('');

    // Detectar cuando seleccionan Move-Out
    useEffect(() => {
        setShowMoveOutNotice(formData.service === 'move-out');
    }, [formData.service]);

    // Manejar cambios en inputs
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setFormData(prev => ({
            ...prev,
            [name]: type === 'checkbox' ? checked : value
        }));
    };

    // Validar formulario
    const validateForm = () => {
        const required = ['full_name', 'phone', 'email', 'service', 'bedrooms', 'bathrooms'];
        for (let field of required) {
            if (!formData[field]) {
                alert(`Please fill in ${field.replace('_', ' ')}`);
                return false;
            }
        }
        if (!formData.agree_terms) {
            alert('Please agree to the Privacy Policy and Terms & Conditions');
            return false;
        }
        // Validar email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(formData.email)) {
            alert('Please enter a valid email address');
            return false;
        }
        return true;
    };

    // Enviar formulario
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
                setSubmitMessage('Thank you! We\'ll contact you shortly.');
                setFormData({
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
                });
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
            <div className="relative border-b border-[var(--bs-border)] bg-[linear-gradient(180deg,#ffffff_0%,#f3f7fa_100%)] px-6 py-6 md:px-7">
                <div className="absolute inset-y-0 left-0 w-1 bg-[var(--bs-accent)]"></div>
                <p className="text-xs font-black uppercase tracking-[0.18em] text-[var(--bs-accent)]">Request a Quote</p>
                <h2 className="mt-2 text-2xl font-semibold leading-tight tracking-[-0.03em] text-[var(--bs-primary)]">Get a Free, Personalized Cleaning Quote</h2>
                <p className="mt-3 text-sm leading-7 text-[var(--bs-text-soft)]">Tell us about your home and we'll follow up with a clear, honest estimate.</p>
            </div>
            
            <form onSubmit={handleSubmit} className="grid gap-4 px-6 py-6 md:px-7">
                <div className="grid gap-4 md:grid-cols-2">
                    <div>
                        <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Full Name *</label>
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
                        <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Phone Number *</label>
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
                
                <div className="grid gap-4 md:grid-cols-2">
                    <div>
                        <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Email Address *</label>
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
                    <div>
                        <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Service Requested *</label>
                        <select 
                            name="service" 
                            value={formData.service}
                            onChange={handleChange}
                            required 
                            className="bs-input w-full"
                        >
                            <option value="">Select a service</option>
                            <option value="regular">Regular Cleaning</option>
                            <option value="deep">Deep Cleaning</option>
                            <option value="move-out">Move-Out Cleaning</option>
                            <option value="move-in">Move-In Cleaning</option>
                            <option value="post-construction">Post-Construction Clean-Up</option>
                            <option value="specialty">Specialty / Other</option>
                        </select>
                    </div>
                </div>
                
                <div className="grid gap-4 md:grid-cols-2">
                    <div>
                        <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Number of Bedrooms *</label>
                        <input 
                            type="text" 
                            name="bedrooms" 
                            value={formData.bedrooms}
                            onChange={handleChange}
                            required 
                            className="bs-input w-full" 
                            placeholder="e.g. 3"
                        />
                    </div>
                    <div>
                        <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Number of Bathrooms *</label>
                        <input 
                            type="text" 
                            name="bathrooms" 
                            value={formData.bathrooms}
                            onChange={handleChange}
                            required 
                            className="bs-input w-full" 
                            placeholder="e.g. 2"
                        />
                    </div>
                </div>
                
                <div>
                    <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Date of Last Professional Cleaning</label>
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
                    <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Allergies or Chemical Preferences</label>
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
                    <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Special Requests or Additional Notes</label>
                    <textarea 
                        rows="4" 
                        name="notes" 
                        value={formData.notes}
                        onChange={handleChange}
                        className="bs-input w-full resize-none" 
                        placeholder="Tell us anything helpful about your home or cleaning needs"
                    ></textarea>
                </div>
                
                <div>
                    <label className="mb-2 block text-xs font-black uppercase tracking-[0.14em] text-[var(--bs-primary)]">Preferred Contact Method</label>
                    <select 
                        name="contact_method" 
                        value={formData.contact_method}
                        onChange={handleChange}
                        className="bs-input w-full"
                    >
                        <option value="">Choose one</option>
                        <option value="phone">Phone</option>
                        <option value="email">Email</option>
                    </select>
                </div>
                
                {showMoveOutNotice && (
                    <div className="border border-[var(--bs-gold)]/35 bg-[var(--bs-gold)]/10 px-4 py-3 text-sm leading-7 text-[var(--bs-text-soft)]">
                        <strong className="text-[var(--bs-primary)]">Move-out notice:</strong>
                        For move-out cleanings, the property must be vacant and all drawers/cabinets must be empty before our team arrives.
                    </div>
                )}
                
                <label className="flex items-start gap-3 border border-[var(--bs-border)] bg-[var(--bs-surface-2)] px-4 py-3 text-sm leading-6 text-[var(--bs-text-soft)]">
                    <input 
                        type="checkbox" 
                        name="agree_terms"
                        checked={formData.agree_terms}
                        onChange={handleChange}
                        required 
                        className="mt-1 h-4 w-4 rounded-none border-[var(--bs-border)] text-[var(--bs-accent)]"
                    />
                    <span>I agree to the <a href="/privacy-policy/" className="font-bold text-[var(--bs-primary)] underline">Privacy Policy</a> and <a href="/terms-and-conditions/" className="font-bold text-[var(--bs-primary)] underline">Terms &amp; Conditions</a>. *</span>
                </label>
                
                {submitMessage && (
                    <div className={`px-4 py-3 text-sm ${submitMessage.includes('Thank you') ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}`}>
                        {submitMessage}
                    </div>
                )}
                
                <button 
                    type="submit" 
                    disabled={isSubmitting}
                    className="bs-btn bs-btn-primary mt-1 inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.15em] text-white disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    {isSubmitting ? 'Sending...' : 'Request My Free Quote'}
                </button>
            </form>
        </div>
    );
};

export default CtaHome;