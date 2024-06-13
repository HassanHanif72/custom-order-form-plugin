# Pricing Calculator For Student Order

## Introduction

This project provides a dynamic pricing calculator for academic papers. The calculator takes into account various parameters like the number of pages, paper quality, and delivery time to provide an accurate pricing estimate. It is designed to be integrated with the Contact Form 7 plugin for seamless use within a WordPress environment.

## Features

- **Base Pricing**: Starts with a base fee of $26 per page and assumes 250 words per page.
- **Dynamic Calculations**: Calculates word count and base price based on user input.
- **Discount Application**: Automatically applies a 50% discount to the base price.
- **Price Adjustments**:
  - Quality adjustments for "1st Class" papers (+25%).
  - Delivery time adjustments:
    - 4-5 Days: +10%
    - 3 Days: +15%
    - 2 Days: +20%
    - 24 Hours: +25%
- **Real-time Updates**: Updates prices, word counts, and discounts in real-time.
- **User Input Validation**: Ensures valid numerical input for page counts.
- **Final Price Calculation**: Combines all factors to display the final price.

## Integration with Contact Form 7

To use this pricing calculator with the Contact Form 7 plugin, follow these steps:

1. **Install Contact Form 7**:
   - Ensure that the Contact Form 7 plugin is installed and activated on your WordPress site.

2. **Include Shortcode**:
   - Create or edit a Contact Form 7 form.
   - Include the following shortcode where you want the calculator to appear:
     ```
     [contact-form-7 id="your_form_id" title="Your Form Title"]
     ```
   - Replace `your_form_id` with the actual ID of your form and `Your Form Title` with the actual title.

## Support

For any issues or questions, please contact [hassanhanif72@gmail.com].

Thank you for using our pricing calculator!
