# Ciphera Dashboard Theme Style Guide

This document outlines the design principles, color palette, and component specifications for the Ciphera dashboard theme.

## Design Philosophy

The Ciphera theme is designed to create a futuristic, high-tech monitoring interface with cyberpunk influences. It combines a dark base palette with vibrant neon accents to create visual hierarchy and draw attention to important information. The design incorporates glassmorphism for depth and modern aesthetics while maintaining excellent readability.

## Color Palette

### Base Colors
- Primary Dark: `#111121` - Main background color
- Primary Background: `#1a1a2e` - Section backgrounds
- Secondary Background: `#212140` - Card backgrounds

### Accent Colors
- Neon Purple: `#9d4edd` - Primary accent color
- Neon Pink: `#ff2cf0` - Secondary accent color
- Neon Blue: `#00f6ff` - Tertiary accent color
- Neon Green: `#04e762` - Success states

### UI Colors
- Card Background: `rgba(33, 33, 64, 0.7)` - Translucent card background
- Card Border: `rgba(157, 78, 221, 0.3)` - Subtle border color
- Text Primary: `#f8f9fa` - Main text color
- Text Secondary: `#c9c9d3` - Secondary text color
- Text Muted: `#8b8b9e` - Less important text

## Typography

- Font Family: 'Manrope', sans-serif - A modern, clean sans-serif typeface
- Base Font Size: 16px
- Line Height: 1.5 (150%)

### Font Weights
- Regular: 400 - Regular body text
- Medium: 500 - Buttons, card titles
- Semibold: 600 - Section headings
- Bold: 700 - Page titles, brand elements

## Glassmorphism Effects

Glassmorphism is implemented through:
- Translucent backgrounds (`rgba` colors)
- Backdrop filter blur (12px)
- Subtle borders
- Soft shadows

## Neon Effects

Neon elements are created using:
- Vibrant accent colors
- Text shadows for text elements
- Box shadows for UI components
- Gradients for added dimension

## Component Specifications

### Cards
- Background: Translucent with blur effect
- Border Radius: 16px
- Padding: 24px
- Border: 1px solid with slight opacity
- Top Border: 2px gradient accent

### Buttons
- Border Radius: 8px
- Padding: 0.5rem 1rem (text buttons)
- Height: 36px (icon buttons)
- Hover Effect: Increased shadow and slight transform

### Tables
- Row Hover: Subtle background change
- Cell Padding: 8px 16px
- Border: 1px solid with low opacity

### Sidebar
- Width: 250px (expanded), 70px (collapsed)
- Item Hover: Slight background change and left border accent
- Active Item: Left border accent and different background

## Animations

The theme includes subtle animations to enhance the user experience:
- Hover state transitions
- Card loading animations
- Notification pulse effects
- Neon glow pulsing
- Subtle background gradient shifts

## Responsive Design

The theme is fully responsive with breakpoints at:
- 1200px: Slight adjustments to spacing and font size
- 992px: Layout changes for medium screens
- 768px: Mobile navigation and stacked layout
- 576px: Reduced padding and simplified elements

## Accessibility

- Color contrast ratios meet WCAG AA guidelines
- Interactive elements have clear focus states
- Font sizes are responsive and readable
- Icons include text labels or tooltips

## Best Practices

1. Maintain color consistency using CSS variables
2. Use the 8px spacing system throughout the interface
3. Limit animations to subtle effects that enhance usability
4. Ensure all interactive elements have appropriate hover/active states
5. Keep text readable by maintaining sufficient contrast against backgrounds
6. Use glassmorphism effects sparingly to avoid performance issues