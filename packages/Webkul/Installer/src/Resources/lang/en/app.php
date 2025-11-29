<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'Default',
            ],

            'attribute-groups' => [
                'description'       => 'Description',
                'general'           => 'General',
                'inventories'       => 'Inventories',
                'meta-description'  => 'Meta Description',
                'price'             => 'Price',
                'settings'          => 'Settings',
                'shipping'          => 'Shipping',
            ],

            'attributes' => [
                'brand'                => 'Brand',
                'color'                => 'Color',
                'cost'                 => 'Cost',
                'description'          => 'Description',
                'featured'             => 'Featured',
                'guest-checkout'       => 'Guest Checkout',
                'height'               => 'Height',
                'length'               => 'Length',
                'manage-stock'         => 'Manage Stock',
                'meta-description'     => 'Meta Description',
                'meta-keywords'        => 'Meta Keywords',
                'meta-title'           => 'Meta Title',
                'name'                 => 'Name',
                'new'                  => 'New',
                'price'                => 'Price',
                'product-number'       => 'Product Number',
                'short-description'    => 'Short Description',
                'size'                 => 'Size',
                'sku'                  => 'SKU',
                'special-price'        => 'Special Price',
                'special-price-from'   => 'Special Price From',
                'special-price-to'     => 'Special Price To',
                'status'               => 'Status',
                'tax-category'         => 'Tax Category',
                'url-key'              => 'URL Key',
                'visible-individually' => 'Visible Individually',
                'weight'               => 'Weight',
                'width'                => 'Width',
            ],

            'attribute-options' => [
                'black'  => 'Black',
                'green'  => 'Green',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Red',
                's'      => 'S',
                'white'  => 'White',
                'xl'     => 'XL',
                'yellow' => 'Yellow',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'Root Category Description',
                'name'        => 'Root',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => '<h2>Who We Are?</h2>
<p>As one of the leading e-commerce platforms, we aim to offer our customers the highest quality products at the best prices. With years of experience, we have become a trusted brand in the industry.</p>

<h3>Our Mission</h3>
<p>To make online shopping accessible to everyone by providing our customers with a safe, fast, and easy shopping experience. We aim for quality in every product and excellence in every service.</p>

<h3>Our Vision</h3>
<p>To become the most trusted and preferred e-commerce platform. By continuously evolving with technological innovations, we strive to provide the best shopping experience for our customers.</p>

<h3>Our Values</h3>
<ul>
<li><strong>Reliability:</strong> Customer trust is more important to us than anything else.</li>
<li><strong>Quality:</strong> Every product we sell is carefully selected.</li>
<li><strong>Customer Focus:</strong> Customer satisfaction is our priority.</li>
<li><strong>Transparency:</strong> Open and honest communication in all our processes.</li>
<li><strong>Innovation:</strong> Continuous improvement and technological advancements.</li>
</ul>

<h3>Why Choose Us?</h3>
<ul>
<li>Wide product range and quality brands</li>
<li>Secure payment options</li>
<li>Fast and free shipping opportunities</li>
<li>24/7 customer support</li>
<li>Easy return and exchange</li>
<li>Regular campaigns and discounts</li>
</ul>',
                    'title'   => 'About Us',
                ],

                'contact-us' => [
                    'content' => '<h2>Get in Touch</h2>
<p>Don\'t hesitate to contact us for your questions, suggestions, or complaints. Our customer satisfaction team will be happy to assist you.</p>

<h3>Contact Information</h3>
<ul>
<li><strong>Email:</strong> support@ourstore.com</li>
<li><strong>Phone:</strong> +1 (800) XXX-XXXX</li>
<li><strong>WhatsApp:</strong> +1 (555) XXX-XXXX</li>
<li><strong>Working Hours:</strong> Monday - Saturday, 9:00 AM - 6:00 PM</li>
</ul>

<h3>Our Address</h3>
<p>123 Example Street<br>
New York, NY 10001<br>
United States</p>

<h3>Frequently Asked Questions</h3>
<ul>
<li><strong>Order tracking:</strong> You can track your order from your account or with your cargo tracking number.</li>
<li><strong>Return procedures:</strong> You can create return requests through your account.</li>
<li><strong>Payment issues:</strong> Contact our support team for payment-related issues.</li>
</ul>

<p>We respond to your messages within 24 hours at the latest. For urgent matters, please prefer our phone line.</p>',
                    'title'   => 'Contact Us',
                ],

                'customer-service' => [
                    'content' => '<h2>Customer Service</h2>
<p>We are here to make your shopping experience the best it can be. Our professional customer service team is ready to answer all your questions and solve your problems.</p>

<h3>How Can We Help You?</h3>

<h4>Order Operations</h4>
<ul>
<li>Order creation and confirmation processes</li>
<li>Order modification and cancellation</li>
<li>Order tracking and shipping information</li>
<li>Invoice requests and adjustments</li>
</ul>

<h4>Product Information</h4>
<ul>
<li>Product features and technical details</li>
<li>Stock availability inquiry</li>
<li>Product comparison support</li>
<li>Size and measurement guide</li>
</ul>

<h4>Payment and Finance</h4>
<ul>
<li>Information about payment methods</li>
<li>Installment options</li>
<li>Return and refund processes</li>
<li>Invoice and payment issues</li>
</ul>

<h4>Returns and Exchanges</h4>
<ul>
<li>Creating return requests</li>
<li>Exchange procedures</li>
<li>Warranty-covered transactions</li>
<li>Defective product reporting</li>
</ul>

<h3>Our Contact Channels</h3>
<p><strong>Phone:</strong> +1 (800) XXX-XXXX (Monday-Saturday 9:00 AM - 6:00 PM)<br>
<strong>Email:</strong> support@ourstore.com<br>
<strong>Live Support:</strong> 24/7 on our website<br>
<strong>WhatsApp:</strong> +1 (555) XXX-XXXX</p>

<p>Customer satisfaction is our priority. We are always here for you!</p>',
                    'title'   => 'Customer Service',
                ],

                'payment-policy' => [
                    'content' => '<h2>Payment Policy</h2>
<p>You can complete your purchase with secure and easy payment options. All your payment transactions are protected with SSL certificate encryption.</p>

<h3>Accepted Payment Methods</h3>

<h4>Credit Card / Debit Card</h4>
<ul>
<li>Payment with Visa, MasterCard, American Express cards</li>
<li>3D Secure payment infrastructure</li>
<li>Installment options (2, 3, 6, 9 and 12 installments)</li>
<li>Additional discount opportunities for single payments</li>
</ul>

<h4>Bank Transfer / Wire Transfer</h4>
<ul>
<li>Wire transfer option to major banks</li>
<li>Order confirmation within 24 hours after transfer</li>
<li>Don\'t forget to write your order number in the description</li>
</ul>

<h4>Cash on Delivery</h4>
<ul>
<li>Cash or credit card payment at delivery</li>
<li>Additional service fee may apply for cash on delivery</li>
<li>Cash on delivery may not be available for some products and regions</li>
</ul>

<h4>Digital Wallets</h4>
<ul>
<li>Instant payment and easy use</li>
<li>Fast payment with saved card information</li>
</ul>

<h3>Installment Options</h3>
<p>You can benefit from the following installment options for credit card payments:</p>
<ul>
<li>2 Installments - All banks</li>
<li>3 Installments - All banks</li>
<li>6 Installments - Partner banks</li>
<li>9 Installments - Partner banks</li>
<li>12 Installments - Partner banks</li>
</ul>
<p><em>Note: Installment options may vary depending on your bank and card type.</em></p>

<h3>Secure Payment</h3>
<p>Your payment information is protected with 256-bit SSL encryption. Your card information is not stored in our system and is not shared with third parties. Extra security is provided with the 3D Secure system.</p>

<h3>Invoice Information</h3>
<p>Invoices for your orders are sent with your products. Digital invoices are sent by email to customers who prefer e-invoices. For corporate invoice requests, it is enough to enter your company information during the order.</p>',
                    'title'   => 'Payment Policy',
                ],

                'privacy-policy' => [
                    'content' => '<h2>Privacy Policy</h2>
<p>This privacy policy explains how your personal data is collected, used, and protected when you use our website. Your rights are guaranteed under applicable data protection laws.</p>

<h3>Personal Data Collected</h3>
<p>We collect the following personal data to provide our services:</p>
<ul>
<li><strong>Identity Information:</strong> Name, surname</li>
<li><strong>Contact Information:</strong> Email address, phone number, address</li>
<li><strong>Financial Information:</strong> Billing information (card details are not stored)</li>
<li><strong>Transaction Information:</strong> Order history, payment records</li>
<li><strong>Technical Information:</strong> IP address, browser information, cookies</li>
</ul>

<h3>Purposes of Data Use</h3>
<p>Your personal data is used for the following purposes:</p>
<ul>
<li>Processing and delivering your orders</li>
<li>Providing customer service support</li>
<li>Fulfilling legal obligations</li>
<li>Ensuring account security</li>
<li>Improving service quality</li>
<li>Marketing communications with your consent</li>
</ul>

<h3>Data Sharing</h3>
<p>Your personal data will not be shared with third parties except in the following cases:</p>
<ul>
<li><strong>Shipping Companies:</strong> Necessary information for delivery</li>
<li><strong>Payment Institutions:</strong> Processing payment transactions</li>
<li><strong>Legal Authorities:</strong> In case of legal requirements</li>
<li><strong>Service Providers:</strong> Business partners necessary for service delivery (under confidentiality agreements)</li>
</ul>

<h3>Data Security</h3>
<p>We take the following measures for the security of your personal data:</p>
<ul>
<li>256-bit SSL encryption for data transmission</li>
<li>Firewalls and penetration tests</li>
<li>Access controls and authorization systems</li>
<li>Regular security updates</li>
<li>Staff privacy training</li>
</ul>

<h3>Cookie Policy</h3>
<p>Our website uses cookies to improve your experience:</p>
<ul>
<li><strong>Essential Cookies:</strong> Necessary for the site to function</li>
<li><strong>Analytics Cookies:</strong> To analyze site usage</li>
<li><strong>Functional Cookies:</strong> To remember your preferences</li>
<li><strong>Marketing Cookies:</strong> Advertising display with your consent</li>
</ul>
<p>You can manage your cookie preferences from your browser settings.</p>

<h3>Your Rights</h3>
<p>Under data protection laws, you have the following rights:</p>
<ul>
<li>Learning whether your personal data is being processed</li>
<li>Requesting information about your personal data</li>
<li>Learning the purpose of processing and whether it is used in accordance with its purpose</li>
<li>Knowing the third parties to whom data is transferred</li>
<li>Requesting correction of incorrect or incomplete data</li>
<li>Requesting deletion or destruction of data</li>
<li>Requesting notification of transactions to third parties</li>
<li>Objecting to a result against you through data analysis</li>
<li>Requesting compensation for damage caused by unlawful processing</li>
</ul>

<h3>Contact</h3>
<p>For questions about our privacy policy or your personal data:<br>
<strong>Email:</strong> privacy@ourstore.com<br>
<strong>Address:</strong> 123 Example Street, New York, NY 10001</p>

<p><em>This policy was last updated on [Date].</em></p>',
                    'title'   => 'Privacy Policy',
                ],

                'return-policy' => [
                    'content' => '<h2>Return and Exchange Policy</h2>
<p>If you are not satisfied with our products, you have the right to return and exchange under consumer protection laws.</p>

<h3>Right of Withdrawal</h3>
<p>Under distance selling regulations, you can exercise your right of withdrawal within <strong>14 days</strong> from the date you receive the product without giving any reason.</p>

<h3>Return Conditions</h3>
<p>For the return process, the product must:</p>
<ul>
<li>Be unused and untried</li>
<li>Be in its original packaging with tags attached</li>
<li>Be returned with all accessories and gifts</li>
<li>Have the invoice or delivery note included in the return package</li>
</ul>

<h3>Non-Returnable Products</h3>
<p>The following products are excluded from returns:</p>
<ul>
<li>Disposable products and opened hygiene products</li>
<li>Custom-made or personalized products</li>
<li>Perishable products or products that may expire</li>
<li>Downloadable software and digital content</li>
<li>Periodicals such as newspapers and magazines</li>
<li>Opened audio or video recordings</li>
</ul>

<h3>Return Process</h3>
<ol>
<li><strong>Create Request:</strong> Go to "My Orders" section in your account and create a return request or call our customer service.</li>
<li><strong>Approval:</strong> Your request will be reviewed and you will receive approval and shipping information.</li>
<li><strong>Packaging:</strong> Pack the product in its original packaging with the invoice.</li>
<li><strong>Shipping:</strong> Send the product with the specified shipping company. Return shipping costs are covered by us.</li>
<li><strong>Inspection:</strong> Quality control is performed when the product reaches us.</li>
<li><strong>Result:</strong> After approval, return or exchange is processed.</li>
</ol>

<h3>Exchange Procedures</h3>
<p>For size, color, or model changes:</p>
<ul>
<li>Specify the new product information when creating an exchange request</li>
<li>Exchange is made according to stock availability</li>
<li>If there is a price difference, payment or refund is applied</li>
</ul>

<h3>Damaged or Defective Product</h3>
<p>If your product arrived damaged or defective:</p>
<ul>
<li>Have a report prepared at the time of delivery</li>
<li>Photograph the product without opening it</li>
<li>Notify our customer service within 24 hours</li>
<li>Free exchange or refund will be processed</li>
</ul>

<h3>Return Shipping Information</h3>
<p>Our partner shipping companies: FedEx, UPS, DHL, USPS<br>
Return shipping costs for withdrawals are covered by us.</p>

<h3>Contact</h3>
<p>For your return and exchange transactions:<br>
<strong>Email:</strong> returns@ourstore.com<br>
<strong>Phone:</strong> +1 (800) XXX-XXXX<br>
<strong>Working Hours:</strong> Monday - Saturday, 9:00 AM - 6:00 PM</p>',
                    'title'   => 'Return and Exchange',
                ],

                'shipping-policy' => [
                    'content' => '<h2>Shipping and Delivery Policy</h2>
<p>We work with reliable shipping companies to deliver your orders in the fastest and safest way.</p>

<h3>Shipping Costs</h3>
<ul>
<li><strong>Free Shipping:</strong> Free shipping on orders of $50 and above</li>
<li><strong>Standard Shipping:</strong> Flat rate shipping fee for orders under $50</li>
<li><strong>Express Shipping:</strong> Same day or next day delivery for an additional fee</li>
</ul>

<h3>Delivery Times</h3>
<ul>
<li><strong>Local areas:</strong> 1-2 business days</li>
<li><strong>Major cities:</strong> 2-3 business days</li>
<li><strong>Other regions:</strong> 3-5 business days</li>
<li><strong>Remote areas:</strong> 5-7 business days</li>
</ul>
<p><em>Note: Delivery times are estimates and may be extended during promotional periods.</em></p>

<h3>Order Tracking</h3>
<p>To track your order:</p>
<ol>
<li>Log in to your account and go to "My Orders" section</li>
<li>Track with your cargo tracking number on the shipping company\'s website</li>
<li>Follow our notifications sent by SMS and email</li>
</ol>

<h3>Delivery Information</h3>
<ul>
<li>Deliveries are made on weekdays 9:00 AM - 7:00 PM, Saturdays 9:00 AM - 2:00 PM</li>
<li>ID verification may be required at delivery</li>
<li>If you are not at your address, the shipping company will try to reach you</li>
<li>After 3 failed delivery attempts, the order is returned</li>
</ul>

<h3>Cash on Delivery</h3>
<ul>
<li>You can pay by cash or credit card at delivery</li>
<li>Additional service fee may apply for cash on delivery</li>
<li>Cash on delivery option may not be available in some regions</li>
</ul>

<h3>Packaging</h3>
<p>Our products are carefully packaged:</p>
<ul>
<li>Fragile items are wrapped with extra protection</li>
<li>Product information is not written on packages for privacy</li>
<li>Eco-friendly packaging materials are used</li>
</ul>

<h3>Partner Shipping Companies</h3>
<p>FedEx, UPS, DHL, USPS</p>

<h3>Important Notes</h3>
<ul>
<li>Deliveries are not made on official holidays</li>
<li>Delays may occur in extreme weather conditions</li>
<li>Delivery times may be extended during busy periods (campaigns, holidays)</li>
<li>Contact us before the order is shipped for address changes</li>
</ul>

<h3>Contact</h3>
<p>For your questions about shipping and delivery:<br>
<strong>Email:</strong> shipping@ourstore.com<br>
<strong>Phone:</strong> +1 (800) XXX-XXXX</p>',
                    'title'   => 'Shipping and Delivery',
                ],

                'terms-conditions' => [
                    'content' => '<h2>Sales Agreement - Terms and Conditions</h2>
<p>These terms and conditions set out the rules that will apply to your purchases on our website. By using our site, you accept these terms.</p>

<h3>1. Parties</h3>
<p><strong>SELLER:</strong><br>
Company Name: [Company Name]<br>
Address: 123 Example Street, New York, NY 10001<br>
Phone: +1 (800) XXX-XXXX<br>
Email: info@ourstore.com<br>
Registration No: [Registration Number]</p>

<p><strong>BUYER:</strong> The person placing an order through the website</p>

<h3>2. Subject of the Contract</h3>
<p>This contract regulates the rights and obligations of the parties regarding the sale and delivery of products ordered electronically by the BUYER from the SELLER\'s website.</p>

<h3>3. Product Information and Prices</h3>
<ul>
<li>The basic features of the products are specified on the website</li>
<li>Prices are in US Dollars (USD) and include applicable taxes</li>
<li>The SELLER reserves the right to change prices without prior notice</li>
<li>Price changes do not affect existing orders</li>
</ul>

<h3>4. Order and Payment</h3>
<ul>
<li>The order becomes binding when confirmed by the BUYER through the website</li>
<li>The order is not confirmed until payment is completed</li>
<li>The SELLER reserves the right to cancel the order according to stock status</li>
<li>In case of cancellation, the payment is fully refunded</li>
</ul>

<h3>5. Delivery</h3>
<ul>
<li>Products are shipped to the address specified by the BUYER</li>
<li>Delivery time starts from order confirmation</li>
<li>Legal delivery period is 30 days</li>
<li>The period may be extended in case of force majeure</li>
</ul>

<h3>6. Right of Withdrawal</h3>
<ul>
<li>The BUYER can use the right of withdrawal within 14 days from the date of receiving the product</li>
<li>The product must be returned in its original condition and packaging when using the right of withdrawal</li>
<li>Return shipping cost is covered by the SELLER</li>
<li>Refund is made within 14 days from the date the product reaches the SELLER</li>
</ul>

<h3>7. Exceptions to Right of Withdrawal</h3>
<p>The right of withdrawal cannot be used for the following products:</p>
<ul>
<li>Products whose price depends on stock or financial markets</li>
<li>Products manufactured according to the BUYER\'s requests</li>
<li>Perishable products</li>
<li>Opened hygiene products</li>
<li>Digital content (after download has started)</li>
</ul>

<h3>8. Warranty</h3>
<ul>
<li>Products are covered by manufacturer warranty</li>
<li>Warranty periods vary by product</li>
<li>Warranty coverage is within the conditions specified in the warranty document</li>
</ul>

<h3>9. Protection of Personal Data</h3>
<p>The BUYER\'s personal data is protected under our Privacy Policy and applicable data protection laws.</p>

<h3>10. Dispute Resolution</h3>
<p>Consumer Protection Agencies and Consumer Courts are authorized for disputes arising from this contract. Current legal regulations apply for monetary limits.</p>

<h3>11. Enforcement</h3>
<p>This contract enters into force on the date it is electronically approved by the BUYER.</p>

<p><em>Last update: [Date]</em></p>',
                    'title'   => 'Terms & Conditions',
                ],

                'whats-new' => [
                    'content' => '<h2>What\'s New and Updates</h2>
<p>We are constantly improving ourselves to serve you better. Here are the recent innovations and updates we have made:</p>

<h3>New Features</h3>

<h4>Improved Shopping Experience</h4>
<ul>
<li>Faster page loading times</li>
<li>Improved product search and filtering</li>
<li>Smart product recommendations</li>
<li>Compare feature to view products side by side</li>
</ul>

<h4>Mobile Application</h4>
<ul>
<li>Optimized app for iOS and Android</li>
<li>Stay informed about campaigns with instant notifications</li>
<li>One-click payment convenience</li>
<li>Quick product finding with barcode scanner</li>
</ul>

<h4>Payment Options</h4>
<ul>
<li>New installment options added</li>
<li>Digital wallet integrations</li>
<li>More secure 3D Secure infrastructure</li>
</ul>

<h3>New Categories</h3>
<p>We continue to expand our product range:</p>
<ul>
<li>Home and living category</li>
<li>Sports and outdoor products</li>
<li>Organic and natural products</li>
<li>Technology accessories</li>
</ul>

<h3>Campaigns and Opportunities</h3>
<ul>
<li><strong>Weekly discounts:</strong> Special prices in different categories every week</li>
<li><strong>Loyalty program:</strong> Earn points on your purchases, get discounts</li>
<li><strong>First order discount:</strong> 10% discount for new members</li>
<li><strong>Refer a friend:</strong> Invite your friend, both of you win</li>
</ul>

<h3>Improved Customer Service</h3>
<ul>
<li>24/7 live support line</li>
<li>Communication via WhatsApp</li>
<li>Faster return and exchange processes</li>
<li>Expanded FAQ section</li>
</ul>

<h3>Sustainability Efforts</h3>
<ul>
<li>Eco-friendly packaging materials</li>
<li>Carbon footprint reduction projects</li>
<li>Recycling programs</li>
<li>Supporting local producers</li>
</ul>

<h3>Coming Soon</h3>
<ul>
<li>Virtual fitting room (AR technology)</li>
<li>Voice search feature</li>
<li>Live shopping broadcasts</li>
<li>Subscription system for regular delivery</li>
</ul>

<p>Subscribe to our email newsletter and follow our social media accounts to follow our developments!</p>',
                    'title'   => 'What\'s New',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'name'             => 'Default',
                'meta-title'       => 'Demo store',
                'meta-keywords'    => 'Demo store meta keyword',
                'meta-description' => 'Demo store meta description',
            ],

            'currencies' => [
                'EUR' => 'Euro',
                'TRY' => 'Turkish Lira',
                'USD' => 'United States Dollar',
            ],

            'header-offer' => [
                'title'             => 'Get UPTO 40% OFF on your 1st order',
                'redirection-title' => 'SHOP NOW',
            ],

            'locales'    => [
                'en' => 'English',
                'tr' => 'Turkish',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'general'   => 'General',
                'guest'     => 'Guest',
                'wholesale' => 'Wholesale',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'Default',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name' => 'All Products',

                    'options' => [
                        'title' => 'All Products',
                    ],
                ],

                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'View Collections',
                        'description' => 'Introducing Our New Bold Collections! Elevate your style with daring designs and vibrant statements. Explore striking patterns and bold colors that redefine your wardrobe. Get ready to embrace the extraordinary!',
                        'title'       => 'Get Ready for our new Bold Collections!',
                    ],

                    'name' => 'Bold Collections',
                ],

                'categories-collections' => [
                    'name' => 'Categories Collections',
                ],

                'featured-collections' => [
                    'name' => 'Featured Collections',

                    'options' => [
                        'title' => 'Featured Products',
                    ],
                ],

                'footer-links' => [
                    'name' => 'Footer Links',

                    'options' => [
                        'about-us'         => 'About Us',
                        'contact-us'       => 'Contact Us',
                        'customer-service' => 'Customer Service',
                        'payment-policy'   => 'Payment Policy',
                        'privacy-policy'   => 'Privacy Policy',
                        'return-policy'    => 'Return Policy',
                        'shipping-policy'  => 'Shipping Policy',
                        'terms-conditions' => 'Terms & Conditions',
                        'whats-new'        => 'What\'s New',
                    ],
                ],

                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Our Collections',
                        'sub-title-2' => 'Our Collections',
                        'title'       => 'The game with our new additions!',
                    ],

                    'name' => 'Game Container',
                ],

                'image-carousel' => [
                    'name' => 'Image Carousel',

                    'sliders' => [
                        'title' => 'Get Ready For New Collection',
                    ],
                ],

                'new-products' => [
                    'name' => 'New Products',

                    'options' => [
                        'title' => 'New Products',
                    ],
                ],

                'offer-information' => [
                    'content' => [
                        'title' => 'Get UPTO 40% OFF on your 1st order SHOP NOW',
                    ],

                    'name' => 'Offer Information',
                ],

                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'No cost EMI available on all major credit cards',
                        'free-shipping-info'   => 'Enjoy free shipping on all orders',
                        'product-replace-info' => 'Easy Product Replacement Available!',
                        'time-support-info'    => 'Dedicated 24/7 support via chat and email',
                    ],

                    'name' => 'Services Content',

                    'title' => [
                        'emi-available'   => 'Emi Available',
                        'free-shipping'   => 'Free Shipping',
                        'product-replace' => 'Product Replace',
                        'time-support'    => '24/7 Support',
                    ],
                ],

                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Our Collections',
                        'sub-title-2' => 'Our Collections',
                        'sub-title-3' => 'Our Collections',
                        'sub-title-4' => 'Our Collections',
                        'sub-title-5' => 'Our Collections',
                        'sub-title-6' => 'Our Collections',
                        'title'       => 'The game with our new additions!',
                    ],

                    'name' => 'Top Collections',
                ],
            ],
        ],

        'user' => [
            'roles' => [
                'description' => 'This role users will have all the access',
                'name'        => 'Administrator',
            ],

            'users' => [
                'name' => 'Example',
            ],
        ],

        'sample-categories' => [
            'category-translation' => [
                '2' => [
                    'description'      => 'Men Category Description',
                    'meta-description' => 'Men Category Meta Description',
                    'meta-keywords'    => 'Men Category Meta Keywords',
                    'meta-title'       => 'Men Category Meta Title',
                    'name'             => 'Men',
                    'slug'             => 'men',
                ],

                '3' => [
                    'description'      => 'Winter Wear Category Description',
                    'meta-description' => 'Winter Wear Category Meta Description',
                    'meta-keywords'    => 'Winter Wear Category Meta Keywords',
                    'meta-title'       => 'Winter Wear Category Meta Title',
                    'name'             => 'Winter Wear',
                    'slug'             => 'winter-wear',
                ],
            ],
        ],

        'sample-products' => [
            'product-flat' => [
                '1' => [
                    'description'       => 'The Arctic Cozy Knit Beanie is your go-to solution for staying warm, comfortable, and stylish during the colder months. Crafted from a soft and durable blend of acrylic knit, this beanie is designed to provide a cozy and snug fit. The classic design makes it suitable for both men and women, offering a versatile accessory that complements various styles. Whether you\'re heading out for a casual day in town or embracing the great outdoors, this beanie adds a touch of comfort and warmth to your ensemble. The soft and breathable material ensures that you stay cozy without sacrificing style. The Arctic Cozy Knit Beanie isn\'t just an accessory; it\'s a statement of winter fashion. Its simplicity makes it easy to pair with different outfits, making it a staple in your winter wardrobe. Ideal for gifting or as a treat for yourself, this beanie is a thoughtful addition to any winter ensemble. It\'s a versatile accessory that goes beyond functionality, adding a touch of warmth and style to your look. Embrace the essence of winter with the Arctic Cozy Knit Beanie. Whether you\'re enjoying a casual day out or facing the elements, let this beanie be your companion for comfort and style. Elevate your winter wardrobe with this classic accessory that effortlessly combines warmth with a timeless sense of fashion.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Cozy Knit Unisex Beanie',
                    'short-description' => 'Embrace the chilly days in style with our Arctic Cozy Knit Beanie. Crafted from a soft and durable blend of acrylic, this classic beanie offers warmth and versatility. Suitable for both men and women, it\'s the ideal accessory for casual or outdoor wear. Elevate your winter wardrobe or gift someone special with this essential beanie cap.',
                ],

                '2' => [
                    'description'       => 'The Arctic Bliss Winter Scarf is more than just a cold-weather accessory; it\'s a statement of warmth, comfort, and style for the winter season. Crafted with care from a luxurious blend of acrylic and wool, this scarf is designed to keep you cozy and snug even in the chilliest temperatures. The soft and plush texture not only provides insulation against the cold but also adds a touch of luxury to your winter wardrobe. The design of the Arctic Bliss Winter Scarf is both stylish and versatile, making it a perfect addition to a variety of winter outfits. Whether you\'re dressing up for a special occasion or adding a chic layer to your everyday look, this scarf complements your style effortlessly. The extra-long length of the scarf offers customizable styling options. Wrap it around for added warmth, drape it loosely for a casual look, or experiment with different knots to express your unique style. This versatility makes it a must-have accessory for the winter season. Looking for the perfect gift? The Arctic Bliss Winter Scarf is an ideal choice. Whether you\'re surprising a loved one or treating yourself, this scarf is a timeless and practical gift that will be cherished throughout the winter months. Embrace the winter with the Arctic Bliss Winter Scarf, where warmth meets style in perfect harmony. Elevate your winter wardrobe with this essential accessory that not only keeps you warm but also adds a touch of sophistication to your cold-weather ensemble.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Bliss Stylish Winter Scarf',
                    'short-description' => 'Experience the embrace of warmth and style with our Arctic Bliss Winter Scarf. Crafted from a luxurious blend of acrylic and wool, this cozy scarf is designed to keep you snug during the coldest days. Its stylish and versatile design, combined with an extra-long length, offers customizable styling options. Elevate your winter wardrobe or delight someone special with this essential winter accessory.',
                ],

                '3' => [
                    'description'       => 'Introducing the Arctic Touchscreen Winter Gloves – where warmth, style, and connectivity meet to enhance your winter experience. Crafted from high-quality acrylic, these gloves are designed to provide exceptional warmth and durability. The touchscreen-compatible fingertips allow you to stay connected without exposing your hands to the cold. Answer calls, send messages, and navigate your devices effortlessly, all while keeping your hands snug. The insulated lining adds an extra layer of coziness, making these gloves your go-to choice for facing the winter chill. Whether you\'re commuting, running errands, or enjoying outdoor activities, these gloves provide the warmth and protection you need. Elastic cuffs ensure a secure fit, preventing cold drafts and keeping the gloves in place during your daily activities. The stylish design adds a touch of flair to your winter ensemble, making these gloves as fashionable as they are functional. Ideal for gifting or as a treat for yourself, the Arctic Touchscreen Winter Gloves are a must-have accessory for the modern individual. Say goodbye to the inconvenience of removing your gloves to use your devices and embrace the seamless blend of warmth, style, and connectivity. Stay connected, stay warm, and stay stylish with the Arctic Touchscreen Winter Gloves – your reliable companion for conquering the winter season with confidence.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Touchscreen Winter Gloves',
                    'short-description' => 'Stay connected and warm with our Arctic Touchscreen Winter Gloves. These gloves are not only crafted from high-quality acrylic for warmth and durability but also feature a touchscreen-compatible design. With an insulated lining, elastic cuffs for a secure fit, and a stylish look, these gloves are perfect for daily wear in chilly conditions.',
                ],

                '4' => [
                    'description'       => 'Introducing the Arctic Warmth Wool Blend Socks – your essential companion for cozy and comfortable feet during the colder seasons. Crafted from a premium blend of Merino wool, acrylic, nylon, and spandex, these socks are designed to provide unparalleled warmth and comfort. The wool blend ensures that your feet stay toasty even in the coldest temperatures, making these socks the perfect choice for winter adventures or simply staying snug at home. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. Designed for durability, the socks feature a reinforced heel and toe, adding extra strength to high-wear areas. This ensures that your socks withstand the test of time, providing long-lasting comfort and coziness. The breathable nature of the material prevents overheating, allowing your feet to stay comfortable and dry throughout the day. Whether you\'re heading outdoors for a winter hike or relaxing indoors, these socks offer the perfect balance of warmth and breathability. Versatile and stylish, these wool blend socks are suitable for various occasions. Pair them with your favorite boots for a fashionable winter look or wear them around the house for ultimate comfort. Elevate your winter wardrobe and prioritize comfort with the Arctic Warmth Wool Blend Socks. Treat your feet to the luxury they deserve and step into a world of coziness that lasts all season long.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Warmth Wool Blend Socks',
                    'short-description' => 'Experience the unmatched warmth and comfort of our Arctic Warmth Wool Blend Socks. Crafted from a blend of Merino wool, acrylic, nylon, and spandex, these socks offer ultimate coziness for cold weather. With a reinforced heel and toe for durability, these versatile and stylish socks are perfect for various occasions.',
                ],

                '5' => [
                    'description'       => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Frost Winter Accessories',
                    'short-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '6' => [
                    'description'       => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Frost Winter Accessories Bundle',
                    'short-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '7' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '8' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-M',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '9' => [
                    'description'       => 'DescIntroducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.ription 9',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-L',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '10' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-M',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '11' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-L',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],
            ],

            'product-attribute-values' => [
                '1' => [
                    'description'      => 'The Arctic Cozy Knit Beanie is your go-to solution for staying warm, comfortable, and stylish during the colder months. Crafted from a soft and durable blend of acrylic knit, this beanie is designed to provide a cozy and snug fit. The classic design makes it suitable for both men and women, offering a versatile accessory that complements various styles. Whether you\'re heading out for a casual day in town or embracing the great outdoors, this beanie adds a touch of comfort and warmth to your ensemble. The soft and breathable material ensures that you stay cozy without sacrificing style. The Arctic Cozy Knit Beanie isn\'t just an accessory; it\'s a statement of winter fashion. Its simplicity makes it easy to pair with different outfits, making it a staple in your winter wardrobe. Ideal for gifting or as a treat for yourself, this beanie is a thoughtful addition to any winter ensemble. It\'s a versatile accessory that goes beyond functionality, adding a touch of warmth and style to your look. Embrace the essence of winter with the Arctic Cozy Knit Beanie. Whether you\'re enjoying a casual day out or facing the elements, let this beanie be your companion for comfort and style. Elevate your winter wardrobe with this classic accessory that effortlessly combines warmth with a timeless sense of fashion.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Cozy Knit Unisex Beanie',
                    'sort-description' => 'Embrace the chilly days in style with our Arctic Cozy Knit Beanie. Crafted from a soft and durable blend of acrylic, this classic beanie offers warmth and versatility. Suitable for both men and women, it\'s the ideal accessory for casual or outdoor wear. Elevate your winter wardrobe or gift someone special with this essential beanie cap.',
                ],

                '2' => [
                    'description'      => 'The Arctic Bliss Winter Scarf is more than just a cold-weather accessory; it\'s a statement of warmth, comfort, and style for the winter season. Crafted with care from a luxurious blend of acrylic and wool, this scarf is designed to keep you cozy and snug even in the chilliest temperatures. The soft and plush texture not only provides insulation against the cold but also adds a touch of luxury to your winter wardrobe. The design of the Arctic Bliss Winter Scarf is both stylish and versatile, making it a perfect addition to a variety of winter outfits. Whether you\'re dressing up for a special occasion or adding a chic layer to your everyday look, this scarf complements your style effortlessly. The extra-long length of the scarf offers customizable styling options. Wrap it around for added warmth, drape it loosely for a casual look, or experiment with different knots to express your unique style. This versatility makes it a must-have accessory for the winter season. Looking for the perfect gift? The Arctic Bliss Winter Scarf is an ideal choice. Whether you\'re surprising a loved one or treating yourself, this scarf is a timeless and practical gift that will be cherished throughout the winter months. Embrace the winter with the Arctic Bliss Winter Scarf, where warmth meets style in perfect harmony. Elevate your winter wardrobe with this essential accessory that not only keeps you warm but also adds a touch of sophistication to your cold-weather ensemble.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Bliss Stylish Winter Scarf',
                    'sort-description' => 'Experience the embrace of warmth and style with our Arctic Bliss Winter Scarf. Crafted from a luxurious blend of acrylic and wool, this cozy scarf is designed to keep you snug during the coldest days. Its stylish and versatile design, combined with an extra-long length, offers customizable styling options. Elevate your winter wardrobe or delight someone special with this essential winter accessory.',
                ],

                '3' => [
                    'description'      => 'Introducing the Arctic Touchscreen Winter Gloves – where warmth, style, and connectivity meet to enhance your winter experience. Crafted from high-quality acrylic, these gloves are designed to provide exceptional warmth and durability. The touchscreen-compatible fingertips allow you to stay connected without exposing your hands to the cold. Answer calls, send messages, and navigate your devices effortlessly, all while keeping your hands snug. The insulated lining adds an extra layer of coziness, making these gloves your go-to choice for facing the winter chill. Whether you\'re commuting, running errands, or enjoying outdoor activities, these gloves provide the warmth and protection you need. Elastic cuffs ensure a secure fit, preventing cold drafts and keeping the gloves in place during your daily activities. The stylish design adds a touch of flair to your winter ensemble, making these gloves as fashionable as they are functional. Ideal for gifting or as a treat for yourself, the Arctic Touchscreen Winter Gloves are a must-have accessory for the modern individual. Say goodbye to the inconvenience of removing your gloves to use your devices and embrace the seamless blend of warmth, style, and connectivity. Stay connected, stay warm, and stay stylish with the Arctic Touchscreen Winter Gloves – your reliable companion for conquering the winter season with confidence.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Touchscreen Winter Gloves',
                    'sort-description' => 'Stay connected and warm with our Arctic Touchscreen Winter Gloves. These gloves are not only crafted from high-quality acrylic for warmth and durability but also feature a touchscreen-compatible design. With an insulated lining, elastic cuffs for a secure fit, and a stylish look, these gloves are perfect for daily wear in chilly conditions.',
                ],

                '4' => [
                    'description'      => 'Introducing the Arctic Warmth Wool Blend Socks – your essential companion for cozy and comfortable feet during the colder seasons. Crafted from a premium blend of Merino wool, acrylic, nylon, and spandex, these socks are designed to provide unparalleled warmth and comfort. The wool blend ensures that your feet stay toasty even in the coldest temperatures, making these socks the perfect choice for winter adventures or simply staying snug at home. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. Designed for durability, the socks feature a reinforced heel and toe, adding extra strength to high-wear areas. This ensures that your socks withstand the test of time, providing long-lasting comfort and coziness. The breathable nature of the material prevents overheating, allowing your feet to stay comfortable and dry throughout the day. Whether you\'re heading outdoors for a winter hike or relaxing indoors, these socks offer the perfect balance of warmth and breathability. Versatile and stylish, these wool blend socks are suitable for various occasions. Pair them with your favorite boots for a fashionable winter look or wear them around the house for ultimate comfort. Elevate your winter wardrobe and prioritize comfort with the Arctic Warmth Wool Blend Socks. Treat your feet to the luxury they deserve and step into a world of coziness that lasts all season long.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Warmth Wool Blend Socks',
                    'sort-description' => 'Experience the unmatched warmth and comfort of our Arctic Warmth Wool Blend Socks. Crafted from a blend of Merino wool, acrylic, nylon, and spandex, these socks offer ultimate coziness for cold weather. With a reinforced heel and toe for durability, these versatile and stylish socks are perfect for various occasions.',
                ],

                '5' => [
                    'description'      => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Frost Winter Accessories',
                    'sort-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '6' => [
                    'description'      => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Frost Winter Accessories Bundle',
                    'sort-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '7' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '8' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-M',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '9' => [
                    'description'      => 'DescIntroducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.ription 9',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-L',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '10' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-M',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '11' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-L',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],
            ],

            'product-bundle-option-translations' => [
                '1' => [
                    'label' => 'Bundle Option 1',
                ],

                '2' => [
                    'label' => 'Bundle Option 1',
                ],

                '3' => [
                    'label' => 'Bundle Option 2',
                ],

                '4' => [
                    'label' => 'Bundle Option 2',
                ],
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Admin',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Confirm Password',
                'email'            => 'Email',
                'email-address'    => 'admin@erho.test',
                'password'         => 'Password',
                'title'            => 'Create Administrator',
            ],

            'environment-configuration' => [
                'allowed-currencies'   => 'Allowed Currencies',
                'allowed-locales'      => 'Allowed Locales',
                'application-name'     => 'Application Name',
                'bagisto'              => 'Bagisto',
                'database-connection'  => 'Database Connection',
                'database-hostname'    => 'Database Hostname',
                'database-name'        => 'Database Name',
                'database-password'    => 'Database Password',
                'database-port'        => 'Database Port',
                'database-prefix'      => 'Database Prefix',
                'database-prefix-help' => 'The prefix should be 4 characters long and can only contain letters, numbers, and underscores.',
                'database-username'    => 'Database Username',
                'default-currency'     => 'Default Currency',
                'default-locale'       => 'Default Locale',
                'default-timezone'     => 'Default Timezone',
                'default-url'          => 'Default URL',
                'default-url-link'     => 'https://localhost',
                'euro'                 => 'Euro (EUR)',
                'mysql'                => 'Mysql',
                'pgsql'                => 'pgSQL',
                'select-timezone'      => 'Select Timezone',
                'sqlsrv'               => 'SQLSRV',
                'title'                => 'Store Configuration',
                'turkish-lira'         => 'Turkish Lira (TRY)',
                'united-states-dollar' => 'United States Dollar (USD)',
                'warning-message'      => 'Beware! The settings for your default system language and default currency are permanent and cannot be changed once set.',
            ],

            'sample-products' => [
                'download-sample' => 'download-sample',
                'no'              => 'No',
                'sample-products' => 'Sample Products',
                'title'           => 'Sample Products',
                'yes'             => 'Yes',
            ],

            'installation-processing' => [
                'bagisto'      => 'Installation Bagisto',
                'bagisto-info' => 'Creating the database tables, this can take a few moments',
                'title'        => 'Installation',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Admin Panel',
                'bagisto-forums'             => 'Bagisto Forum',
                'customer-panel'             => 'Customer Panel',
                'explore-bagisto-extensions' => 'Explore Bagisto Extension',
                'title'                      => 'Installation Completed',
                'title-info'                 => 'Bagisto is Successfully installed on your system.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Create the database table',
                'install'                 => 'Installation',
                'install-info'            => 'Bagisto For Installation',
                'install-info-button'     => 'Click the button below to',
                'populate-database-table' => 'Populate the database tables',
                'start-installation'      => 'Start Installation',
                'title'                   => 'Ready for Installation',
            ],

            'start' => [
                'locale'        => 'Locale',
                'main'          => 'Start',
                'select-locale' => 'Select Locale',
                'title'         => 'Your Bagisto install',
                'welcome-title' => 'Welcome to Bagisto',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendar',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'fileInfo',
                'filter'      => 'Filter',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 or higher',
                'session'     => 'session',
                'title'       => 'System Requirements',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'back'                     => 'Back',
            'bagisto'                  => 'Bagisto',
            'bagisto-info'             => 'a Community Project by',
            'bagisto-logo'             => 'Bagisto Logo',
            'continue'                 => 'Continue',
            'english'                  => 'English',
            'installation-description' => 'Bagisto installation typically involves several steps. Here\'s a general outline of the installation process for Bagisto',
            'installation-info'        => 'We are happy to see you here!',
            'installation-title'       => 'Welcome to Installation',
            'title'                    => 'Bagisto Installer',
            'turkish'                  => 'Turkish',
            'webkul'                   => 'Webkul',
        ],
    ],
];
