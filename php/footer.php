<script>
  var termsConditions;
  var privacyPolicy;
  $(document).ready(function () {
    termsConditions = $("#terms-conditions").dialog({
      autoOpen: false,
      resizable: false,
      draggable: false,
      width: '750px',
      height: 'auto',
      modal: true,
      show: {
        effect: "fadeIn", duration: 300
      },
      hide: {
        effect: "fadeOut", duration: 300
      },
    });

    privacyPolicy = $("#privacy-policy").dialog({
      autoOpen: false,
      resizable: false,
      draggable: false,
      width: '750px',
      height: 'auto',
      modal: true,
      show: {
        effect: "fadeIn", duration: 300
      },
      hide: {
        effect: "fadeOut", duration: 300
      },
    });

    $('#footer-terms').click(function() {
      termsConditions.dialog('open');
    });

    $('#footer-privacy').click(function() {
      privacyPolicy.dialog('open');
    });

    $('#terms-conditions .close').click(function() {
      $('#terms-conditions').dialog('close');
    });

    $('#privacy-policy .close').click(function() {
      $('#privacy-policy').dialog('close');
    });
  });
</script>
<div id="terms-conditions" class="document">
  <div class="body">
    <div class="title">Terms and Conditions</div>
    <div class="close">X</div>
    <div class="text">
      <div class="paragraph">Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using the website of Globuzzer Local Guides (the "Service") operated by Globuzzer Local Guide Ltd ("us", "we", or "our").</div>
      <div class="paragraph">Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</div>
      <div class="paragraph important">You must read this Agreement before using the Site and booking a Tour. Use of the Site constitutes an agreement to all terms and conditions in this Agreement and you warrant that you understand, agree to and accept all terms and conditions contained here.</div>
      <div class="paragraph important">By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</div>
      <div class="subtitle">Purchases</div>
      <div class="paragraph">If you wish to purchase any product or service made available through the Service ("Purchase"), you may be asked to supply certain information relevant to your Purchase including, without limitation, your credit card number, the expiration date of your credit card, your billing address, and your shipping information.</div>
      <div class="paragraph">You represent and warrant that: (i) you have the legal right to use any credit card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete.</div>
      <div class="paragraph">By submitting such information, you grant us the right to provide the information to third parties for purposes of facilitating the completion of Purchases.</div>
      <div class="paragraph">We reserve the right to refuse or cancel your order at any time for certain reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.</div>
      <div class="paragraph">We reserve the right to refuse or cancel your order if fraud or an unauthorised or illegal transaction is suspected.</div>
      <div class="subtitle">Availability, Errors and Inaccuracies</div>
      <div class="paragraph">We are constantly updating our offerings of products and services on the Service. The products or services available on our Service may be mispriced, described inaccurately, or unavailable, and we may experience delays in updating information on the Service and in our advertising on other web sites.</div>
      <div class="paragraph">We cannot and do not guarantee the accuracy or completeness of any information, including prices, product images, specifications, availability, and services. We reserve the right to change or update information and to correct errors, inaccuracies, or omissions at any time without prior notice.</div>
      <div class="subtitle">Copyright Policy</div>
      <div class="paragraph">We respect the intellectual property rights of others. It is our policy to respond to any claim that Content posted on the Service infringes the copyright or other intellectual property infringement ("Infringement") of any person.</div>
      <div class="paragraph">If you are a copyright owner, or authorized on behalf of one, and you believe that the copyrighted work has been copied in a way that constitutes copyright infringement that is taking place through the Service, you must submit your notice in writing to the attention of "Copyright Infringement" of info@globuzzer.com and include in your notice a detailed description of the alleged Infringement.</div>
      <div class="paragraph">You may be held accountable for damages (including costs and attorneys\' fees) for misrepresenting that any Content is infringing your copyright.</div>
      <div class="subtitle">Refunds</div>
      <div class="paragraph">Any cancellation by You must be made by telephone or email and acknowledged by ToursByLocals. The date on which the request to cancel is received by Globuzzer Local Guide will determine the refund due as follows:Cancellation 60 days or more before departure: Amount paid less upfront costs. These upfront costs are disclosed to you when you use the Site to complete the transaction and may represent out of pocket expenses of the Tour Guide for tickets, transportation deposits and other ancillary expenses.</div>
      <div class="paragraph">Cancellation 59 to 31 days before departure: deposit paid or 80% of tour price if paid in full.</div>
      <div class="paragraph">Cancellation less than 30 days before departure: no refund.</div>
      <div class="paragraph">You are strongly encouraged to obtain cancellation insurance. In certain circumstances, this will cover the cost of cancellation. Globuzzer Local Guide is not responsible for any incidental expenses You may have incurred in reliance on the tour or travel services booked on the Site, including, without limitation, expenses arising from the purchase of visas, vaccinations, non-refundable flights, or of any loss of enjoyment.</div>
      <div class="subtitle">ACCEPTANCE OF RISK AND WAIVER OF LIABILITY</div>
      <div class="paragraph">You acknowledge that all travel involves an element of risk and that some tours offered on the Site may be adventurous in nature and may involve a significant amount of personal risk. You hereby assume all such risk and You, your estate, your family, heirs and assigns hereby release Globuzzer Local Guide and the Tour Guide from all claims and causes of action whatsoever arising from any injury, death or other damages, both pecuniary and non-pecuniary, to You that may occur as a result of your participation in the tours offered on the Site or as a result of the negligence of any party, including the Tour Guide or any employee, officer, agent, contractor or assign of Globuzzer Local Guide, whether such negligence is passive or active.</div>
      <div class="paragraph">You are strongly encouraged to obtain suitable medical insurance prior to booking a tour.We urge you to exercise caution if you purchase any goods during your tour. Neither Globuzzer Local Guide or the Tour Guide make any claims about the quality, source or other provenance of any goods which may be available for purchase.</div>
      <div class="subtitle">Information Provided by You</div>
      <div class="paragraph">You are responsible for providing accurate, timely and complete information in connection with Your registration for and use of the Site. Globuzzer Local Guide is not responsible for any claims relating to any inaccurate, untimely or incomplete information provided to us by You.</div>
      <div class="paragraph">Globuzzer Local Guide will only use your information in accordance with our Privacy Policy.  Globuzzer Local Guide will use its best efforts to ensure the privacy of all other personal information, however we expressly disclaim any liability for any damage that may result should any information be released to any third parties. You hereby agree to hold  Globuzzer Local Guide harmless for any damages that may result.</div>
      <div class="paragraph">Globuzzer Local Guide uses a third party service to process your credit card information, therefore we have no access to your credit card information. For further information, please contact  Globuzzer Local Guide credit card processing company www.PayPal.com.</div>
      <div class="subtitle">Intellectual Property</div>
      <div class="paragraph">The Service and its original content (excluding Content provided by users), features and functionality are and will remain the exclusive property of Globuzzer Local Guide Ltd and its licensors. The Service is protected by copyright, trademark, and other laws of both the Sweden and foreign countries. Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of Globuzzer Local Guide Ltd.</div>
      <div class="subtitle">Prohibited Use</div>
      <div class="paragraph">The Site may not be used to recruit, solicit, or contact Tour Guides for employment or contracting for a business not affiliated with Globuzzer Local Guide  unless you first obtain express written permission from Globuzzer Local Guide.</div>
      <div class="subtitle">Links To Other Websites</div>
      <div class="paragraph">Our Service may contain links to third-party web sites or services that are not owned or controlled Globuzzer Local Guide Ltd.</div>
      <div class="paragraph">Globuzzer Local Guide Ltd has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Globuzzer Local Guide Ltd shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such websites or services.</div>
      <div class="paragraph">We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</div>
      <div class="subtitle">Limitation Of Liability</div>
      <div class="paragraph">In no event shall Globuzzer Local Guide Ltd, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content</div> obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damage, and even if a remedy set forth herein is found to have failed of its essential purpose.
      <div class="subtitle">Disclaimer of Warranties</div>
      <div class="paragraph">YOU EXPRESSLY AGREE THAT THE USE OF THIS SITE IS AT YOUR SOLE RISK. GLOBUZZER LOCAL GUIDE  DOES NOT WARRANT THAT THE SITE WILL BE UNINTERRUPTED OR ERROR-FREE; NOR DO WE MAKE ANY WARRANTY AS TO THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SITE, OR AS TO THE ACCURACY, RELIABILITY OR CONTENT OF ANY INFORMATION, SERVICE OR MERCHANDISE PROVIDED THROUGH THE SITE. THE SITE IS PROVIDED ON AN "AS IS" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF TITLE OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.</div>
      <div class="paragraph">Globuzzer Local Guide Ltd its subsidiaries, affiliates, and its licensors do not warrant that a) the Service will function uninterrupted, secure or available at any particular time or location; b) any errors or defects will be corrected; c) the Service is free of viruses or other harmful components; or d) the results of using the Service will meet your requirements.</div>
      <div class="subtitle">Governing Law</div>
      <div class="paragraph">These Terms shall be governed and construed in accordance with the laws of Sweden, without regard to its conflict of law provisions.</div>
      <div class="paragraph">Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</div>
      <div class="subtitle">Changes</div>
      <div class="paragraph">We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</div>
      <div class="paragraph">By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</div>
      <div class="subtitle">Contact Us</div>
      <div class="paragraph">If you have any questions about these Terms, please contact us.</div>
    </div>
  </div>
</div>
<div id="privacy-policy" class="document">
  <div class="body">
    <div class="title">Privacy Policy</div>
    <div class="close">X</div>
    <div class="text">
      <div class="subtitle">Globuzer Local Tour Guide Privacy Policy</div>
      <div class="paragraph">This privacy policy has been compiled to better serve those who are concerned with how their ‘Personally Identifiable Information’ (PII) is being used online. PII, as described in Swedish privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.</div>
      <div class="subtitle">1. Personal information we collect</div>
      <div class="paragraph">There are the following general categories of personal information that we collect:</div>
      <div class="paragraph">Purchase & payment information</div>
      <div class="paragraph">If you purchase or sell a product via the Services, we may collect and process information regarding the transaction, which may include: records of purchases and prices, records of product details, bank account information, invoice records, payment records, billing information, contact information, and payment transaction details.</div>
      <div class="paragraph">Second-party information</div>
      <div class="paragraph">We may collect and store your precise geographic location, if you give us permission to do so. We only share this location information with others as approved by you.</div>
      <div class="paragraph">Automatically collected information</div>
      <div class="paragraph">We automatically collect basic logging data and device information when you use the Services Such information may include: information about how you use the Services, IP address, access times, hardware/software information, device information, unique identifiers, cookie data, and the pages that referred you to the Services.</div>
      <div class="paragraph">What personal information do we collect from the people that visit our blog, website or app?</div>
      <div class="paragraph">When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address or other details to help you with your experience.</div>
      <div class="paragraph">When do we collect information?</div>
      <div class="paragraph">We collect information from you when you register on our site, place an order or enter information on our site.</div>
      <div class="paragraph">How do we use your information? </div>
      <div class="paragraph">We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</div>
      <div class="paragraph">• To personalize your experience and to allow us to deliver the type of content and product offerings in which you are most interested.<br>
      • To improve our website in order to better serve you.<br>
      • To allow us to better service you in responding to your customer service requests.<br>
      • To administer a contest, promotion, survey or other site feature.<br>
      • To quickly process your transactions.<br>
      • To send periodic emails regarding your order or other products and services.<br>
      • To follow up with them after correspondence (live chat, email or phone inquiries)<br>
      </div>
      <div class="subtitle">2. Other information we collect</div>
      <div class="paragraph">Community Content</div>
      <div class="paragraph">You may voluntarily contribute Community Content to the Services, such as: descriptions of places, experiences, and cities, reviews of tours and places, images, questions and answers regarding destinations, and other similar content.</div>
      <div class="paragraph">We are not responsible for any personal information that you may volunteer about yourself in these public areas of the Services. To request removal of your personal information from publicly posted areas, please refer to the section “Your Rights” of this Privacy Policy.</div>
      <div class="paragraph">Communications</div>
      <div class="paragraph">If you communicate with us or use the Services to communicate with other users of the Services, we collect information regarding your communication and any information you choose to volunteer in those communications.</div>
      <div class="paragraph">We are not responsible for any personal information you may volunteer about yourself in these communications. To request removal of your personal information from communications, please refer to the section “Your Rights” of this Privacy Policy.</div>
      <div class="paragraph">Activity</div>
      <div class="paragraph">We collect information regarding your usage of the Services, including, but not limited to, the features you use, the pages you visit, and the searches you make within the Services.</div>
      <div class="subtitle">3. How we process personal information</div>
      <div class="paragraph">We may process personal information for the following purposes: providing the Services to you, communicating with you, marketing our Services, managing our IT systems, conducting investigations where necessary, compliance with applicable law, and improving our Services.</div>
      <div class="paragraph">Providing the Services</div>
      <div class="paragraph">We process the information collected in order to operate, improve, develop, and provide the Services, including: processing payment information for purchases made via the Services, conveying information you publicly volunteer via the Services to other users, communicating with you, providing customer support, customising your user experience, monitoring and correcting errors in the Services, and enforcing our Terms and Conditions and this Privacy Policy.</div>
      <div class="paragraph">Communications regarding your activity & content</div>
      <div class="paragraph">The Services provide several ways in which users may choose to interact with each other and with Community Content. We will, in certain cases and when we believe you have a genuine interest in receiving these communications, send you non-marketing communications about interactions from other Services users or our staff regarding content you have volunteered and regarding your own activity.</div>
      <div class="paragraph">You may, at any time, update your notification preferences to disable some or all of these communications.</div>
      <div class="paragraph">Communications regarding your purchases</div>
      <div class="paragraph">If you choose to purchase a product or indicate your intention to purchase a product via the Services, then we may send you communications regarding that purchase and/or product. These communications may include, but are not limited to: transaction status updates, alerts regarding transaction errors, reminders to complete transactions, reminders of scheduled tour/experience dates of the purchased product if applicable, and requests to review the product.</div>
      <div class="paragraph">Communications regarding your listed products</div>
      <div class="paragraph">If you choose to list a product (e.g. a tour or experience), then we may send you communications regarding your product, including, but not limited to: notifications of purchases or intents to purchase, communications from users regarding your product, including reviews and questions, reminders of upcoming scheduled tour/experience dates, reminders to update availability dates, suggestions for optimising product listings, and notices of campaigns, programmes, or channels for which your product may be eligible.</div>
      <div class="paragraph">Direct-marketing communications</div>
      <div class="paragraph">With your prior consent, we may process your personal information to communicate to you information regarding the Services that may be of interest to you. We may send information regarding promotions, product offers, new features</div> and Services, and other marketing information that may be of interest to you.
      <div class="paragraph">Even if you have provided prior consent, you may opt out of some or all of these direct-marketing communications at any time via your profile page, the Services, or by following the directions included in our emails to you.</div>
      <div class="paragraph">Improving our Services</div>
      <div class="paragraph">We use the information we collect to improve the Services. This includes: operating and maintaining our computing platforms and software, ensuring the integrity and security of data and computing platforms, analysing audience and user engagement, testing and monitoring new features, and analysing purchasing activity.</div>
      <div class="paragraph">Financial & business management</div>
      <div class="paragraph">We may use personal information collected from you in the course of our general business and financial management, including: planning and reporting, personnel development, sales, accounting, finance, and compliance with legal requirements.</div>
      <div class="subtitle">4. Lawful bases for processing data</div>
      <div class="paragraph">We process your data in accordance with one or more of the following legal bases:</div>
      <div class="paragraph">Consent: We may process your information when we have asked for and you have given clear voluntary consent to process your personal data for the specific purpose for which we have asked.</div>
      <div class="paragraph">Contract: We may process your information when it is necessary for a contract between you and us.</div>
      <div class="paragraph">Legal obligation: We may process your information when it is necessary for us to comply with the law.</div>
      <div class="paragraph">Legitimate interests: We may process your information when it is necessary for our legitimate interests in operating or promoting our business, unless this interest is overridden by your interests or fundamental rights and freedoms.</div>
      <div class="subtitle">5. Personal information we share</div>
      <div class="paragraph">We do not share your personal information with marketers.</div>
      <div class="paragraph">We do not allow advertising companies to collect data through the Services.</div>
      <div class="subtitle">Third-party data processors</div>
      <div class="paragraph">We may share your information with third-party companies to: provide customer support, perform computing-related services such as, without limitation, maintenance services, computing platform services, monitoring of the integrity, performance, and security of the Services, and improvement of the Services, to process communications, including email, SMS, and mobile notification services, to process and monitor payment transactions, and to anal</div>yse how the Services are used.
      <div class="paragraph">These third parties may have access to your personal information to the extent required to perform these tasks. We maintain a data-processing agreement with all third-party data processors with which we share your personal information. These data processors are obligated to protect the confidentiality and security of this personal information and to process the data in accordance with applicable law, consistent with this Privacy Policy.</div>
      <div class="paragraph">Other situations</div>
      <div class="paragraph">We may make personal information available to third parties in these limited circumstances: (1) with your express consent, (2) when we, in good faith, believe it is required by law, (3) when we, in good faith, believe it is necessary to protect our rights or property, or (4) to any successor or purchaser in a merger, acquisition, liquidation, dissolution, or sale of assets. Your consent will not be required for disclosure in these cases, but we will attempt to notify you, to the extent required by law.</div>
      <div class="subtitle">6. Cookies, beacons, & similar technologies</div>
      <div class="paragraph">We use technologies, such as cookies (small files stored on your browser), web beacons, and unique device identifiers to identify your computer or device so that we can personalise your user experience and monitor your usage of our Services.</div>
      <div class="paragraph">We may use web beacons or similar technologies when sending you emails to determine whether the email has been opened and which links you click. We collect this information to ensure delivery and to monitor and measure the effectiveness of our communications.</div>
      <div class="paragraph">You may block cookies or other tracking technologies via your browser, email client, or other technologies, but certain personalised features of the Services may be degraded or become unavailable.</div>
      <div class="subtitle">7. Children</div>
      <div class="paragraph">We do not knowingly contact or collect personal information from children under 16. If you believe we have inadvertently collected such information, please contact us so that we can promptly obtain parental consent or remove the information. Persons under the age of 18 are not permitted to make purchases from us.</div>
      <div class="subtitle">8. Security</div>
      <div class="paragraph">We take our commitment to safeguard your information seriously. We employ strong safeguards, both technical and organisational, to protect against unauthorised access, unlawful destruction or alteration, and unauthorised disclosure of your information.</div>
      <div class="paragraph">In certain cases, such as with payment information, we encrypt data transmission using Secure Sockets Layer (SSL) technology. However, no security or encryption method can be guaranteed to protect information from hackers or human error. Such transmissions are sent at your own risk. You are responsible for ensuring that any personal information that you send to us is sent securely.</div>
      <div class="subtitle">9. Data retention</div>
      <div class="paragraph">We take every reasonable step to ensure that your personal information is only retained for as long as it is needed.</div>
      <div class="subtitle">10. Your rights</div>
      <div class="paragraph">If you are a resident of the EU, the GDPR provides you with certain rights regarding your personal information. If you wish to exercise these rights, send your request via the contact options described in the section “Contacting Us” in this Privacy Policy. Note that we may ask to verify your identity before we can begin processing your request.</div>
      <div class="subtitle">Access & portability</div>
      <div class="paragraph">You may access and update some of your information via the Services through your Profile settings. You may also have the right to receive personal information you have provided in a structured, commonly used, and machine readable format or to have this personal information transmitted directly to another third party.</div>
      <div class="subtitle">Rectification</div>
      <div class="paragraph">Where you are unable to update inaccurate or incomplete personal information concerning you via the Services, you have the right to ask us to correct this information on your behalf.</div>
      <div class="subtitle">Erasure</div>
      <div class="paragraph">We take all reasonable steps to ensure that your personal information is only kept for as long as it is needed. You have the right, under certain circumstances, to request that we erase your personal information that we have collected.</div>
      <div class="paragraph">We may retain, in certain circumstances, some of your personal information if we are relying on our legitimate interests as our basis for processing this information, and this personal information is necessary to fulfil our legitimate interest. Examples include, but are not limited to: payment information required for legal and tax purposes, transaction details regarding products purchased required for bookkeeping, and records used in monitoring and preventing fraud and abuse.</div>
      <div class="paragraph">Community Content you have volunteered may also be retained and remain public on the Services. However, at your request, we will disassociate this content from your personal information (i.e. “anonymise” the content).</div>
      <div class="subtitle">Restriction of processing</div>
      <div class="paragraph">In certain circumstances, you have the right to request that we restrict the processing of your personal information. You may request that we limit the processing of your personal information if: (a) you contest the accuracy of the information and we are verifying the accuracy of the information, (b) the information has been unlawfully processed and you oppose erasure, (c) we no longer need the personal data but you need us to keep it in order to establish, exercise, or defend a legal claim, or (d) you have objected to us processing your data and we are considering whether our legitimate grounds override your own.</div>
      <div class="subtitle">Objection to processing</div>
      <div class="paragraph">You have the right to ask us to stop the processing of your personal information for the purpose of direct marketing at any time.</div>
      <div class="paragraph">Where we are processing your data based on our legitimate interests, you may, in some circumstances, request that we stop processing your personal information, except in cases where we have compelling legitimate grounds for the processing which override your interests, rights, and freedoms, or where the processing is for the establishment, exercise, or defence of legal claims.</div>
      <div class="subtitle">11. Contacting us</div>
      <div class="paragraph">If you have any questions or concerns about our Privacy Policy, please contact us either via email: info@globuzzer.com or though our contact us channels on the Globuzzer Local guide.</div>
    </div>
  </div>
</div>
<footer>
  <div class="privacy-copyright">
    <ul class="socialmedia">
      <li><a href="https://www.globuzzer.com/"><img class="gb-icon" src="<?php echo $pathPrefix; ?>img/GB%20icon.png" alt="gb-icon"></a></li>
      <li><a href="https://www.facebook.com/Globuzzer/"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://twitter.com/globuzzer"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.pinterest.at/globuzzer/"><i class="fab fa-pinterest"></i></a></li>
      <li><a href="https://www.linkedin.com/company/globuzzer"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
    <ul class="nav-bar">
      <li><a href="#" id="footer-terms">Terms & Conditions</a></li>
      <li><a href="#" id="footer-privacy">Privacy Policy</a></li>
      <li><a href="#">&copy; Copyright Statement</a></li>
    </ul>
  </div>
</footer>
