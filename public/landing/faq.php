<?php require '_layout.php'; page_start('FAQ', 'Find answers to common questions about GecnoGuru services — resume building, profiles, sessions, and more.'); ?>

<div class="faq-intro" style="margin-bottom:2rem;">
    <p style="font-size:1.05rem;color:#475569;">
        Got questions? We've got answers. Browse through the most common questions about our services below.
        Can't find what you're looking for? <a href="<?= WHATSAPP ?>" target="_blank" rel="noopener" style="color:#2563eb;font-weight:600;">Chat with us on WhatsApp</a>.
    </p>
</div>

<?php
$faqs = [
    [
        'q' => '1. What services does GecnoGuru offer?',
        'a' => 'We specialize in resume building, LinkedIn, Naukri, and Indeed profile optimization, and personal portfolio setup. We also help improve GitHub profiles for job seekers in technical fields. Our services are designed to help students, fresh graduates, freelancers, and professionals increase their chances of getting hired.',
    ],
    [
        'q' => '2. How can I get started?',
        'a' => 'You can get started by registering on our website. Once logged in, you can enter your resume details and choose the package or service you need. Our team will then process your information and deliver the optimized resume or profile based on your requirements.',
    ],
    [
        'q' => '3. Are the resumes ATS-friendly?',
        'a' => 'Yes, all our resumes are crafted to be Applicant Tracking System (ATS) friendly. We use proper formatting, industry-relevant keywords, and structure to ensure your resume passes through resume screening software effectively.',
    ],
    [
        'q' => '4. Can I request changes after receiving my resume or profile?',
        'a' => 'Absolutely! If you need revisions or updates, you can request them within the revision window mentioned in your service package. We offer personalized support to make sure you\'re fully satisfied with the final result.',
    ],
    [
        'q' => '5. Do you offer discounts for college students?',
        'a' => 'Yes, we offer special discounted packages for college students. We also partner with colleges to provide bulk coupon codes for final-year students, along with webinars and workshops on job readiness and resume writing.',
    ],
    [
        'q' => '6. How long does it take to deliver the completed resume or optimized profile?',
        'a' => 'Depending on the service selected, delivery typically takes between 2 to 5 business days. For Premium packages or portfolio website setups, it may take slightly longer. You\'ll be notified via email once the service is complete.',
    ],
    [
        'q' => '7. Will my data be safe?',
        'a' => 'Yes, we take user privacy and data security seriously. All information you provide is stored securely, and we never share your personal details with third-party advertisers. You can read our full Privacy Policy for more information.',
    ],
    [
        'q' => '8. Do you help with interview preparation?',
        'a' => 'While our core focus is resume and profile optimization, we plan to introduce interview coaching and job readiness training in the near future. Stay tuned for updates as we expand our service offerings.',
    ],
    [
        'q' => '9. What if I face technical issues while using the platform?',
        'a' => 'If you encounter any technical issues, you can reach out to our support team at <strong>teamgecnoguru@gmail.com</strong> or call us at <strong>+91 85474 70675</strong> or <strong>+91 8547349691</strong>. We are here to assist you promptly.',
    ],
    [
        'q' => '10. Can I cancel my subscription?',
        'a' => 'Yes, you can cancel your subscription anytime from your account dashboard. Your access will continue until the end of the current billing cycle. Please note that as per our policy, cancellations do not qualify for refunds unless stated in our Refund &amp; Cancellation Policy.',
    ],
];

foreach ($faqs as $i => $faq): ?>
<div class="faq-item">
    <button class="faq-question" onclick="toggleFaq(this)" aria-expanded="false">
        <?= htmlspecialchars($faq['q']) ?>
        <i class="fas fa-chevron-down faq-icon"></i>
    </button>
    <div class="faq-answer">
        <p><?= $faq['a'] ?></p>
    </div>
</div>
<?php endforeach; ?>

<script>
function toggleFaq(btn) {
    const answer = btn.nextElementSibling;
    const isOpen = btn.classList.contains('open');
    // Close all
    document.querySelectorAll('.faq-question.open').forEach(b => {
        b.classList.remove('open');
        b.nextElementSibling.classList.remove('open');
        b.setAttribute('aria-expanded', 'false');
    });
    // Open clicked if it was closed
    if (!isOpen) {
        btn.classList.add('open');
        answer.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
    }
}
</script>

<?php page_end(); ?>
